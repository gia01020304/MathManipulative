 function registryShape(path,id) {
 	var req = mxUtils.load(path);
 	var root = req.getDocumentElement();
 	var shape = root.firstChild;
 	while (shape != null) {
 		if (shape.id===id&&shape.nodeType == mxConstants.NODETYPE_ELEMENT) {
 			debugger;
 			mxStencilRegistry.addStencil(shape.getAttribute('name'), new mxStencil(shape));
 			break;
 		}
 		shape = shape.nextSibling;
 	}
 }
  function processTransferRuler(graph,value,typeRuler,width,height,x,y) {
 	var parent = graph.getDefaultParent();
 	graph.getModel().beginUpdate();
 	try {
 		var v1 = graph.insertVertex(parent, null, null, x, y, width, height, 'shape='+typeRuler);
 		var symbol = new mxCell('', new mxGeometry(1,1,50,20));
 		symbol.value=value;
 		symbol.vertex = true;
 		symbol.geometry.relative = true;
 		symbol.geometry.offset = new mxPoint(-55, -27);
 		v1.insert(symbol);
 	} catch(e) {
 	} finally {
 		graph.getModel().endUpdate();
 	}
 }
 function Footer(editorUi, container){
 	this.editorUi = editorUi;
 	this.container = container;
 	this.palettes = new Object();
 	this.taglist = new Object();
 	this.showTooltips = true;
 	this.graph = editorUi.createTemporaryGraph(this.editorUi.editor.graph.getStylesheet());
 	this.graph.cellRenderer.antiAlias = false;
 	this.graph.foldingEnabled = false;
 	this.graph.container.style.visibility = 'hidden';
 	document.body.appendChild(this.graph.container);
 	this.init();
 }
 Footer.prototype.init = function(){
 	this.addToolBox();
 }
 Footer.prototype.addToolBox=function(){
 	var div =document.createElement('div');
 	div.id="toolbox";
 	div.className='container d-flex mt-1 justify-content-around';
 	div.style.maxWidth = "64%";
 	this.addGroupTool(div);
 	this.addGroupColor(div);
 	this.addGroupAction(div);
 	this.container.appendChild(div);
 }
 function createDivToolBox(id,tooltip) {
 	var div=document.createElement('div');
 	div.id=id;
 	div.setAttribute("data-toggle","tooltip");
 	div.setAttribute("data-placement", "top");
 	div.setAttribute("title", tooltip);
 	div.style.display = 'inline-block';
 	div.style.background = '#b3a2a2';
 	div.className='rounded-circle mr-2';
 	div.style.padding = '10px';
 	div.style.cursor = 'pointer';
 	return div;
 }
 Footer.prototype.addGroupAction=function(container){
 	var div =document.createElement('div');
 	div.id="GroupAction";
 	this.addRemoveAll(div);
 	this.addTest(div);
 	container.appendChild(div);
 }
 Footer.prototype.addGroupColor=function(container){
 	var div =document.createElement('div');
 	div.id="GroupColor";
 	div.className="col-3"
 	this.addColor(div);
 	container.appendChild(div);
 }
 Footer.prototype.addGroupTool=function(container){
 	var div =document.createElement('div');
 	div.id="GroupTool";
 	this.addPen(div);
 	this.addHand(div);
 	this.addRuler(div);
 	container.appendChild(div);
 }
 Footer.prototype.addTest=function(container) {
 	var div=document.createElement('button');
 	div.className='ml-2 btn btn-primary';
 	div.innerHTML='Test';
 	div.addEventListener('click', (e)=>{
 		debugger;
 		var graph=this.editorUi.editor.graph;

 	});
 	container.appendChild(div);
 }
 Footer.prototype.addRuler=function(container) {
 	var graph=this.editorUi.editor.graph;
 	var div=createDivToolBox("RulerTool","Ruler");
 	div.addEventListener('click', (e)=>{
 		registryShape("./lib/stencils/ruler.xml","ruler-metric");
 		processTransferRuler(graph,"Metric","Ruler Metric",420,100,20,20);
 	});
 	var img=document.createElement('img');
 	img.src='./lib/images/ruler.png';
 	img.style.width='25px';
 	img.style.height='25px';
 	div.appendChild(img);
 	container.appendChild(div);
 }
 Footer.prototype.addRemoveAll=function (container){
 	var div=document.createElement('img');
 	div.src="./lib/images/clear.png";
 	div.style.cursor = "pointer";
 	div.addEventListener('click', (e)=>{

 		var graph = this.editorUi.editor.graph;
 		graph.removeCells(graph.getChildVertices(graph.getDefaultParent()));
 		$('polyline').remove();
 	});
 	container.appendChild(div);
 }
 Footer.prototype.addCancel=function (container) {

 	var div=document.createElement('button');
 	div.className='btn btn-primary';
 	div.innerHTML='Cancel';
 	div.addEventListener('click', (e)=>{
 		drawFree=false;
 	});

 	container.appendChild(div);
 }
 Footer.prototype.addColor=function (container) {
	//div mau
	var divColor=document.createElement('div');
	divColor.id="ToolBoxColor";
	var divWrapColor=document.createElement('div');
	divWrapColor.className='row';
	divWrapColor.innerHTML =
	"<div class='pen-color black active'></div>"
	+"<div class='pen-color red '></div>"
	+"<div class='pen-color yellow '></div>"
	+"<div class='pen-color blue '></div>"
	+"<div class='pen-color green '></div>"
	+"<div class='pen-color pink '></div>"
	+"<div class='pen-color orange '></div>"
	+"<div class='pen-color brown '></div>"
	;
	divColor.appendChild(divWrapColor);
	container.appendChild(divColor);
}
Footer.prototype.addHand=function (container) {
	var div=createDivToolBox("ToolBoxHand","Hand Tool");
	div.addEventListener('click', (e)=>{
		drawFree=false;
		$('#geDiagramContainer svg').css('cursor', "");
	});
	var img=document.createElement('img');
	img.src='./lib/images/hand.png';
	img.style.width='25px';
	img.style.height='25px';
	div.appendChild(img);
	container.appendChild(div);
}
Footer.prototype.addPen=function(container){
	var div=createDivToolBox("ToolBoxPencil","Pen Tool");

	var img=document.createElement('img');
	img.src='./lib/images/pencil.png';
	img.style.width='25px';
	img.style.height='25px';
	div.appendChild(img);

	div.addEventListener('click', ()=>{
		drawFree=true;
		debugger;
		$('#geDiagramContainer svg').css('cursor', "url("+img.src+")1 50,crosshair");
		const draw = SVG.select('.geDiagramContainer svg').members[0];
		const shapes = [];
		let index = 0;
		let shape;

		const getDrawObject = () => {
			const color= $('.pen-color.active').attr('class').split(' ')[1];
			const option = {
				stroke: color,
				'stroke-width': 2,
				'fill-opacity': 0,
			};

			return draw.polyline().attr(option);
		}


		draw.on('mousedown', event => {
			if (drawFree&&checkPositionValid(event.clientX,event.clientY)) {
				const shape = getDrawObject();
				shapes[index] = shape;
				shape.draw(event);
			}
		});
		draw.on('mousemove', event => {
			if (drawFree&&shapes[index]&&checkPositionValid(event.clientX,event.clientY)) {
				shapes[index].draw('point', event);
			}
		})
		draw.on('mouseup', event => {
			if (drawFree&&checkPositionValid(event.clientX,event.clientY)) {
				shapes[index].draw('stop', event);
				index++;
			}
		})
		function checkPositionValid(x,y) {
			var divBackGround = $('#geBackgroundPage');
			var backgroundOffset=divBackGround.offset();
			backgroundOffset.right = backgroundOffset.left +divBackGround.width();
			backgroundOffset.bottom = backgroundOffset.top+divBackGround.height();
			if (x<backgroundOffset.left||x>backgroundOffset.right) {
				return false;
			}
			if (y<backgroundOffset.top||y>backgroundOffset.bottom) {
				return false;
			}
			return true;
		}
// This is custom extension of line, polyline, polygon which doesn't draw the circle on the line. 
SVG.Element.prototype.draw.extend('line polyline polygon', {

	init:function(e){
    // When we draw a polygon, we immediately need 2 points.
    // One start-point and one point at the mouse-position

    this.set = new SVG.Set();
    var p = this.startPoint,
    arr = [
    [p.x, p.y],
    [p.x, p.y]
    ];
    this.el.plot(arr);
},

  // The calc-function sets the position of the last point to the mouse-position (with offset ofc)
  calc:function (e) {
  	var arr = this.el.array().valueOf();
  	arr.pop();

  	if (e) {
  		var p = this.transformPoint(e.clientX, e.clientY);
  		arr.push(this.snapToGrid([p.x, p.y]));
  	}
  	this.el.plot(arr);
  },

  point:function(e){
  	if (this.el.type.indexOf('poly') > -1) {

      // Add the new Point to the point-array

      var p = this.transformPoint(e.clientX, e.clientY),
      arr = this.el.array().valueOf();

      arr.push(this.snapToGrid([p.x, p.y]));

      this.el.plot(arr);

      // Fire the `drawpoint`-event, which holds the coords of the new Point
      this.el.fire('drawpoint', {event:e, p:{x:p.x, y:p.y}, m:this.m});

      return;
  }

    // We are done, if the element is no polyline or polygon
    this.stop(e);

},
clean:function(){

    // Remove all circles
    this.set.each(function () {
    	this.remove();
    });

    this.set.clear();

    delete this.set;
}
});
})
	
	container.appendChild(div);
}