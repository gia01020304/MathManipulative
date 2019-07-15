$(document).ready(function() {
	var timer = setInterval(setIntegerCounterEvent, 500);
	function setIntegerCounterEvent() {
		if ($('.scene').parent().length > 0) {
			$('.scene').parent().on('click drag',function() {
				$(".btn-perform").off('click.perform');
				$(".btn-perform").on('click.perform', function () {
					var integerCounter = $(this).siblings('.scene').children('.card');
					$(integerCounter).toggleClass('is-flipped')});
				});
				clearInterval(timer);
				return;
			}
		}
	$('.pen-color').click(function(event) {
		$('.pen-color').each(function(index, el) {
			$(el).removeClass('active');
		});
		$(this).addClass('active');
	});
	$(document).on('click','body *',function(){
		clearShare();
	});

});
function TryParseInt(str,defaultValue) {
	str=str.toString();
     var retValue = defaultValue;
     if(str !== null) {
         if(str.length > 0) {
             if (!isNaN(str)) {
                 retValue = parseInt(str);
             }
         }
     }
     return retValue;
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};
function clearShare() {
	$('#divUrlShare').css('display', 'none');
	$('#inputUrlShare').val('');
}
function login() {
	$('#popupLogin').modal('show');
	addMsgError("You need to login to use the function!");	
}
function saveFile() {
	var isNewFile=true;
	if ($('#divFileName').html()!=="Untitled") {
		isNewFile=false;
	}
	if (isNewFile==true) {
		$('#nameFile').modal('show');
		addMsgError("You need input to use the function!",'FileName');
		return;
	}
	else{
		
		saveShare(createValue(),isNewFile,$('#divFileName').html());
	}
}
function copyText2(text) {
	var temp=document.getElementById('inputUrlShare');
	temp.select();
	document.execCommand("copy");
}
function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
	  var targetId = "_hiddenCopyText_";
	  var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
	  var origSelectionStart, origSelectionEnd;
	  if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
        	var target = document.createElement("textarea");
        	target.style.position = "absolute";
        	target.style.left = "-9999px";
        	target.style.top = "0";
        	target.id = targetId;
        	document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	succeed = document.execCommand("copy");
    } catch(e) {
    	succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
    	currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
function share(value,filename) {
	var url=pathRelative+"ShareCL/UpdateShare";
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: {
			FileName: filename,
			value: value,
		},
		success:function (resp) {
			if (resp.success) {
				debugger;
				var el=$('#btnShare');
				var bottom = el.offset().top + el.outerHeight(true);
				var left = el.offset().left;
				$('#divUrlShare').css('display', 'inline');
				$('#divUrlShare').css({top:bottom,left:left});
				$('#inputUrlShare').val(resp.data);
				debugger;
				copyText2(resp.data);
				addMsgSuccessParent("Shared success! Link copied to clipboard!");
				processFeature();
			}else {
				addMsgErrorParent(resp.msg);
			}

		},
		error:function (resp) {
			addMsgErrorParent("Share Error");
		}
	})
	
}
function processFeature() {
	var type=Number($('#divType').val());
	switch (type) {
		case 1:
		saveFile();
		$('#divType').val(0);
		break;
		case 2:
		share(createValue(),$('#divFileName').html());
		$('#divType').val(0);
		break
		case 3:
		saveFile();
		$('#divType').val(2);
		break
	}
}
function saveShare(value,isNew,fileName) {
	var url=pathRelative+"ShareCL/SaveShare";
	triggerSpinner();
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: {
			FileName: fileName,
			value: value,
			IsNewFile:isNew
		},
		success:function (resp) {
			debugger;
			if (isNew) {
				if (resp.success) {
					addMsgSuccessParent(resp.msg)
					$('#divFileName').html(resp.data);
					document.title = `${resp.data} - Math Manipulation`;
					$('#nameFile').modal('hide');
					processFeature();
				}else {
					addMsgError(resp.msg,'FileName');
				}
			}else{
				if (resp.success) {
					addMsgSuccessParent(resp.msg)
					processFeature();
				}else {
					addMsgErrorParent(resp.msg);
				}
			}

		},
		error:function (resp) {
			if (isNew) {
				addMsgError("Save Error",'FileName');
			}else{
				addMsgErrorParent("Save Error");
			}
		}
	})
	.always(function() {
		removeSpinner();
	});
}
function clearMsgParent() {
	$('#divmsgparent').removeAttr('class');
	$('#divmsgparent').html('');
}
function addMsgSuccessParent(msg) {
	clearMsgParent();
	$('#divmsgparent').addClass('alert alert-success');
	$('#divmsgparent').html(msg);
}
function addMsgErrorParent(msg) {
	clearMsgParent();
	$('#divmsgparent').addClass('alert alert-danger');
	$('#divmsgparent').html(msg);
}
function addFeature(i) {
	$('#divType').val(i);
}
function addMsgError(msg,prefix="") {
	$('#msgerror'+prefix).removeClass('unactive');
	$('#msgerror'+prefix).html(msg);
}
function addMsgSuceess(msg,prefix="") {
	$('#msgsuccess'+prefix).removeClass('unactive');
	$('#msgsuccess'+prefix).html(msg);
}
function clearMsg(prefix="") {
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
	debugger;
	$('#geDiagramContainer .pen-tool').each(function(index, el) {
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
function restore(xml,name) {
	$('#divFileName').html(name);
	document.title = `${$("#divFileName").text()} - Math Manipulation`;
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
function findX(deg) {
	return Math.cos(deg*Math.PI/180);
}
function findY(deg) {
	return Math.sin(deg*Math.PI/180);
}
function calcAngleDegrees(x, y) {
	return Math.atan2(y, x) * 180 / Math.PI;
}