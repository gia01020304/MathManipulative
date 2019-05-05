<title> Example </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- other framework -->
<script type="text/javascript" src="<?= base_url() ?>/lib/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>/lib/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/lib/1.css">
<link href="<?= base_url() ?>/lib/fontawesome-free-5.8.1/css/all.css" rel="stylesheet"> <!--load all styles -->
<link rel="icon"  href="<?= base_url() ?>/lib/images/favicon.png">

<!-- framework mxGraph -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/lib/javascript/editor/styles/grapheditor.css">
<script type="text/javascript">
	mxBasePath = '<?= base_url() ?>/lib/javascript/src';
	var pathRelative='<?= base_url() ?>';
	var drawFree=false;
	var editor=null;
</script>

<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Init.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/deflate/pako.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/deflate/base64.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/jscolor/jscolor.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/sanitizer/sanitizer.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/mxClient.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/EditorUi.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Editor.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Sidebar.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Graph.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Format.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Shapes.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Actions.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Menus.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Toolbar.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Dialogs.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Footer.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/svg/svg.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/svg/dist/svg.draw.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/1.js"></script>
<!-- <script type="text/javascript" src="./lib/svg/dist/svg.draw.min.js"></script> -->