$(document).ready(function() {
	$('.pen-color').click(function(event) {
		$('.pen-color').each(function(index, el) {
			$(el).removeClass('active');
		});
		$(this).addClass('active');
	});

});
function clearMsgParent() {
	$('#divmsgparent').removeAttr('class');
	$('#divmsgparent').text('');
}
function addMsgErrorParent(msg) {
	clearMsgParent();
	$('#divmsgparent').addClass('alert alert-danger');
	$('#divmsgparent').text(msg);

}
function addMsgError(msg,prefix) {
	$('#msgerror'+prefix).removeClass('unactive');
	$('#msgerror'+prefix).text(msg);
}
function addMsgSuceess(msg,prefix) {
	$('#msgsuccess'+prefix).removeClass('unactive');
	$('#msgsuccess'+prefix).text(msg);
}
function clearMsg(prefix) {
	$('#msgerror'+prefix).addClass('unactive');
	$('#msgsuccess'+prefix).addClass('unactive');
}
function setNameFile(fileName) {
	this.editorUI.editor.setFilename(fileName);
	this.editorUI.updateDocumentTitle();
}
function createValue() {
	var encoder = new mxCodec();
	var graph=this.editorUI.editor.graph;
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
		this.editorUI.editor.setGraphXml(doc.documentElement);
		this.editorUI.editor.setModified(false);
		this.editorUI.editor.undoManager.clear();
		var svg=document.querySelector('#geDiagramContainer svg');
		var newElement = document.createElementNS("http://www.w3.org/2000/svg", 'g');
		newElement.innerHTML=rs[1];
		svg.appendChild(newElement);
		var img=processBackGround(rs[2]);
		if (img!=null) {
			this.editorUI.setBackgroundImage(img);
		}
		return;
	}
	catch (e)
	{
		alert("Error");
	}
}
function triggerSpinner() {
	$('.loading').css('display','block');
}
function removeSpinner() {
	$('.loading').css('display','none');
}