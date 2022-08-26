<!DOCTYPE html>
<html dir="ltr" lang="{block name=language}{/block}">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/style.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}assets/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="{$base_url}assets/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	{block name=styles}{/block}

	<title>{block name=pageTitle}{/block}</title>

</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">
		{if !isset($login)}
			{include file="partial/top_bar.tpl"}
			{include file="partial/header.tpl"}
		{/if}

		<section id="content">
			<div class="content-wrap {if isset($login)}py-0{/if}">
				{block name=page}{/block}
			</div>
		</section>
		{if !isset($login)}
			{include file="partial/footer.tpl"}
		</div>
		{/if}
	<div id="gotoTop" class="icon-angle-up"></div>


	<script src="{$base_url}assets/js/jquery.js"></script>
	<script src="{$base_url}assets/js/plugins.min.js"></script>
	<script src="{$base_url}assets/js/functions.js"></script>
	{block name=scripts}{/block}
</body>

</html>
