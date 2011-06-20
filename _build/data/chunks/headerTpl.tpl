<!doctype html>
<!--[if !IEMobile]> <html class="no-js iemobile" lang="[[++cultureKey]]"> <![endif]-->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="[[++cultureKey]]"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="[[++cultureKey]]"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="[[++cultureKey]]"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="[[++cultureKey]]"> <!--<![endif]--> 
<head>
	<base href="[[++site_url]]" />
	<meta charset="[[++modx_charset:lcase]]" />
	<title>[[++site_name]] - [[*pagetitle]]</title>
	<meta name="description" content="[[*introtext:empty=`[[*content:strip_tags:strip]]`:limit=`200`]]">
	<meta name="author" content="[[If? &subject=`[[*publishedby]]` &operator=`>` &operand=`0` &then=`[[*publishedby:userinfo=`fullname`]]` &else=`[[*createdby:userinfo=`fullname`]]`]]" />
	<meta name="keywords" content="" />
	
	<!-- Specify URL to favicon and Apple touch icon if not located in root directory ELSE delete this tags -->
	<link rel="shortcut icon" href="[[++site_url]]assets/templates/templates/main/images/site/favicon.ico">
	<link rel="apple-touch-icon" href="[[++site_url]]assets/templates/templates/main/images/site/apple-touch-icon.png">

	<!-- sets viewport to device-with for mobile devices | Android DPI fix for @media-queries  -->
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0">
	<!-- load default CSS file. Implied media="all" -->
	<link rel="stylesheet" href="[[++site_url]]assets/templates/templates/main/css/style.css">
	
	[[If? &subject=`[[*template_color]]` &operator=`equals` &operand=`black` &then=`
		<link rel="stylesheet" href="[[++site_url]]assets/templates/templates/main/css/style_black.css">
	`]]
	[[If? &subject=`[[*template_color]]` &operator=`equals` &operand=`green` &then=`
		<link rel="stylesheet" href="[[++site_url]]assets/templates/templates/main/css/style_green.css">
	`]]
	[[If? &subject=`[[*template_color]]` &operator=`equals` &operand=`custom` &then=`
		<link rel="stylesheet" href="[[++site_url]][[$settings_page_id]]">
	`]]
	
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	
	<script src="[[++site_url]]assets/templates/templates/main/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="bg_header">
	<header class="container row">
		<div class="col4 logo">
			<a href="[[++site_url]]" title="[[++site_name]]">[[!getResources? &resources=`[[$settings_page_id]]` &includeTVs=`1` &tvPrefix=`` &processTVs=`1` &tpl=`logo_tpl`]]</a>
		</div>
		<nav class="col8 last">
			[[!Wayfinder? &startId=`0` ]]
		</nav>
	</header>
	[[!If? &subject=`[[*tv_slider]]` &operand=`yes` &then=`
	<div class="container row">
		<div class="col12 last slider">
			<div id="slides">
				<div class="slides_container">
					[[!getImageList? &tvname=`multiItemsGrid` &docid=`[[$settings_page_id]]` &tpl=`slideTpl`]]
				</div>
			</div>
		</div>
	</div>` &else=``]]
</div>
<div class="bg_tagline">
	<div class="container row" id="content">
		[[!If? &subject=`[[*tv_tagline_option]]` &operator=`EQ` &operand=`tagline_link` &then=`
			<div class="col8">
				<h1>[[*tv_tagline]]</h1>
			</div>
			<div class="col4 last tagline_link">
				<a href="[[*tv_tagline_link]]">[[*tv_tagline_link_text]]</a>
			</div>
		` &else=``]]
		[[!If? &subject=`[[*tv_tagline_option]]` &operator=`EQ` &operand=`tagline` &then=`
			<div class="col12 last">
				<h1>[[*tv_tagline]]</h1>
			</div>
		` &else=``]]
	</div>
</div>