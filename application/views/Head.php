<?php $version = '1.4.3' ?>
<title>Math Manipulation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- other framework -->
<script type="text/javascript" src="<?= base_url() ?>/lib/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>/lib/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/lib/1.css?v=<?=$version?>">
<link rel="stylesheet" href="<?= base_url() ?>/lib/test.css?v=<?=$version?>">
<link href="<?= base_url() ?>/lib/fontawesome-free-5.8.1/css/all.css" rel="stylesheet"> <!--load all styles -->
<link rel="icon"  href="<?= base_url() ?>/lib/images/favicon.png">

<!-- framework mxGraph -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/lib/javascript/editor/styles/grapheditor.css?v=<?=$version?>">
<script type="text/javascript">
	mxBasePath = '<?= base_url() ?>/lib/javascript/src';
	var pathRelative='<?= base_url() ?>';
	var drawFree=false;
	var editorUI=null;
	var line=null;
	var isAuthen=false;
	var isAdmin=false;
	var menus = '<?= $menusString ?>';
	var textAble = false;
</script>

<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Init.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/deflate/pako.min.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/deflate/base64.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/jscolor/jscolor.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/sanitizer/sanitizer.min.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/mxClient.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/EditorUi.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Editor.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Sidebar.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Graph.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Format.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Shapes.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Actions.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Menus.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/mxFreehand.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Toolbar.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/javascript/editor/js/Dialogs.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/svg/svg.min.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/svg/d3.min.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/svg/dist/svg.draw.js?v=<?=$version?>"></script>
<script type="text/javascript" src="<?= base_url() ?>/lib/1.js?v=<?=$version?>"></script>
    <script type="text/javascript" src="https://www.chartjs.org/dist/2.6.0/Chart.bundle.js?v=<?=$version?>"></script>
    <script type="text/javascript" src="https://unpkg.com/konva@3.3.3/konva.min.js?v=<?=$version?>"></script>

<!-- <script type="text/javascript" src="./lib/svg/dist/svg.draw.min.js"></script> -->