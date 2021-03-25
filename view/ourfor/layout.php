<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<link rel="Shortcut Icon" type="image/x-icon" href="https://file.ourfor.top/source/ourfor/favicon.ico">
	<title><?php echo(config('site_name'));?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/css/mdui.min.css" integrity="sha256-lCFxSSYsY5OMx6y8gp8/j6NVngvBh3ulMtrf4SX5Z5A=" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/js/mdui.min.js" integrity="sha256-dZxrLDxoyEQADIAGrWhPtWqjDFvZZBigzArprSzkKgI=" crossorigin="anonymous"></script>
	<style>
pre{white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;color:green;background:#0a0a0a;padding:10px 8px;}
pre{
	font-size: 12px;
	background: #f0f0f0;
	line-height: 20px; /* 行距 */
}
.dplayer-danloading{visibility:hidden;}
		.mdui-appbar .mdui-toolbar{
			height:56px;
			font-size: 16px;
		}
		.mdui-toolbar>*{
			padding: 0 6px;
			margin: 0 2px;
			opacity:0.5;
		}
		.mdui-toolbar>.mdui-typo-headline{
			padding: 0 0;
			font-size: 1em;
		}
		.mdui-toolbar>i{
			padding: 0;
		}
		.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{
			opacity:1;
		}
		.mdui-container{
			max-width:980px;
		}
		.mdui-list-item{
			-webkit-transition:none;
			transition:none;
		}
		.mdui-list>.th{
			background-color:initial;
		}
		.mdui-list-item>a{
			width:100%;
			line-height: 48px
		}
		.mdui-list-item{
			margin: 2px 0px;
			padding:0;
		}
		.mdui-toolbar>a:last-child{
			opacity:1;
		}
		@media screen and (max-width:980px){
			.mdui-list-item .mdui-text-right{
				display: none;
			}
			.mdui-container{
				width:100% !important;
				margin:0px;
			}
			.mdui-toolbar>*{
				display: none;
			}
			.mdui-toolbar>a:last-child,.mdui-toolbar>.mdui-typo-headline,.mdui-toolbar>i:first-child{
				display: block;
			}
			.mdui-appbar .mdui-toolbar {
				height: 46px;
			}
		}
	</style>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="mdui-appbar mdui-color-theme">
		<div class="mdui-toolbar mdui-container">
			<a href="/" class="mdui-typo-headline"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
	</header>
	
	<div class="mdui-container">
    	<?php view::section('content');?>
  	</div>
</body>
</html>