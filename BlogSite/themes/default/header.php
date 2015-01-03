<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div id="site">
	<div id="wrapper">
		<div id="header-wrapper">

			<div id="logo-small">
				<a itemprop="url"
					href="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Quotes   Motivation   Inspiration - Addicted 2 Success.htm"><img
					itemprop="logo"
					src="../../images/Addicted2Success-Logo-2013.jpg"
					alt="Addicted 2 Success"></a>
			</div>
		</div>
		<div id="nav-wrapper" ">

			<ul class="main-nav">
				<div class="menu-main-container">
					<ul id="menu-main" class="menu wp_menufication">
					
							<?php foreach (has_categories() as $value) {
								
							 ?>
							<li id="menu-item-.<?php $value['id']; ?>"
							class="menu-item menu-item-type-custom menu-item-object-custom"><a
							href="<?php if($value['slug']== 'home'){
								echo base_url($value['slug'] . '/');
							}else
								echo base_url('category/' . $value['slug'] . '/');?>"><?php echo $value['title']; ?></a></li>
							
								<?php }?>
						</ul>
				</div>
			</ul>
			<div id="main-search">
				<form method="get" id="searchform"
					action="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Quotes   Motivation   Inspiration - Addicted 2 Success.htm">
					<input type="text" name="s" id="s" value="Search"
						onfocus="if (this.value == &quot;Search&quot;) { this.value = &quot;&quot;; }"
						onblur="if (this.value == &quot;&quot;) { this.value = &quot;Search&quot;; }">
					<input type="hidden" id="search-button">
				</form>
			</div>
		</div>