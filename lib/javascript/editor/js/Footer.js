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
	div.className='container d-flex mt-1'
	this.addPen(div);
	this.addColor(div);
	this.addCancel(div);
	this.addRemoveAll(div);
	this.addTest(div);
	this.container.appendChild(div);
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
Footer.prototype.addRemoveAll=function (container){
	var div=document.createElement('button');
	div.className='ml-2 btn btn-primary';
	div.innerHTML='Clear';
	div.addEventListener('click', (e)=>{
		drawFree=false;
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
	divColor.className="col-3";
	var divWrapColor=document.createElement('div');
	divWrapColor.className='row';
	divWrapColor.innerHTML =
	"<div class='pen-color black active'></div>"
	+"<div class='pen-color red '></div>"
	+"<div class='pen-color yellow '></div>"
	+"<div class='pen-color blue '></div>";
	divColor.appendChild(divWrapColor);
	container.appendChild(divColor);
}
Footer.prototype.addPen=function(container){
	var div=document.createElement('div');
	div.id="ToolBoxPencil";
	div.style.display = 'inline-block';
	div.style.background = '#b3a2a2';
	div.className='rounded-circle mr-2';
	div.style.padding = '10px';
	div.style.cursor = 'pointer';
	div.addEventListener('click', ()=>{
		drawFree=true;
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
    debugger;
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
      debugger;
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
	var img=document.createElement('img');
	img.src='./lib/images/pencil.png';
	img.style.width='25px';
	img.style.height='25px';
	div.appendChild(img);
	container.appendChild(div);
}