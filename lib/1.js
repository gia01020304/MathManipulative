$(document).ready(function() {
	$('.pen-color').click(function(event) {
		$('.pen-color').each(function(index, el) {
			$(el).removeClass('active');
		});
		$(this).addClass('active');
	});

});	
function addMsgError(msg) {
	$('#msgerror').removeClass('unactive');
	$('#msgerror').text(msg);
}
function addMsgSuceess(msg) {
	$('#msgsuccess').removeClass('unactive');
	$('#msgsuccess').text(msg);
}
function clearMsg() {
	$('#msgerror').addClass('unactive');
	$('#msgsuccess').addClass('unactive');
}
function createValue() {
	var encoder = new mxCodec();
	var graph=this.editor.editor.graph;
	var node = encoder.encode(graph.getModel());
	var polyline="";
	$('#geDiagramContainer svg polyline').each(function(index, el) {
		polyline+=el.outerHTML;
	});
	var draw="<draw>"+polyline+"</draw>";
	var img=graph.backgroundImage;
	var background="";
	if (img!=null) {
		background= "<background>"+
		"<url>"+img.src+"</url>"+
		"<width>"+img.width+"</width>"+
		"<height>"+img.height+"</height>"+
		"</background>";
	}
	return node.outerHTML+draw+background;
}
function processBackGround(tag){

	if (typeof tag !=="undefined") {
		var start=5;
		var end=tag.indexOf("</url>");
		var url=tag.slice(start, end);
		start=tag.indexOf("<width>")+7;
		end=tag.indexOf("</width>");
		var width=tag.slice(start, end);
		start=tag.indexOf("<height>")+8;
		end=tag.indexOf("</height>");
		var height=tag.slice(start, end);
		var img=new mxImage(url,width,height);
		return img;
	}
	return null;
	
}
function processXml(xml){
	var array=[];
	var startGraphModel=0;
	var endGraphModel=xml.indexOf("</mxGraphModel>")+15;
	array.push(xml.slice(startGraphModel,endGraphModel));

	var startDraw=xml.indexOf("<draw>");
	if (startDraw>=0) {
		startDraw+=6
		var endDraw=xml.indexOf("</draw>");
		array.push(xml.slice(startDraw,endDraw));
	}
	

	var startBackGround=xml.indexOf("<background>");
	if (startBackGround>0) {
		startBackGround+=12;
		var endBackGround=xml.indexOf("</background>");
		array.push(xml.slice(startBackGround, endBackGround));
	}
	

	return array;
}
function restore(xml) {
	try
	{
		debugger;
		var rs=processXml(xml);
		var doc = mxUtils.parseXml(rs[0]); 
		this.editor.editor.setGraphXml(doc.documentElement);
		this.editor.editor.setModified(false);
		this.editor.editor.undoManager.clear();
		var svg=document.querySelector('#geDiagramContainer svg');
		var newElement = document.createElementNS("http://www.w3.org/2000/svg", 'g');
		newElement.innerHTML=rs[1];
		svg.appendChild(newElement);
		var img=processBackGround(rs[2]);
		if (img!=null) {
			this.editor.setBackgroundImage(img);
		}
		return;
	}
	catch (e)
	{
		alert("Error");
	}
}