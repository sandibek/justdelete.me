<!DOCTYPE HTML>
<html lang="<?php echo $lang ?>">
<head>
	<title><?php echo $title ?></title>
	<meta charset="UTF-8">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="<?php echo $description ?>">

	<!-- Icons -->
	<link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-120x120-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="inc/icons/apple-touch-icon-144x144-precomposed.png">

	<link rel="stylesheet" type="text/css" href="/style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/inc/jquery.js"><\/script>')</script>
	<script src="/inc/scripts.js"></script>
	<link type="text/css" rel="stylesheet" href="/inc/jquery.dropdown.css" />
	<script type="text/javascript" src="/inc/jquery.dropdown.js"></script>

	<script type="text/javascript">
	  var GoSquared = {};
	  GoSquared.acct = "GSN-106715-K";
	  (function(w){
	    function gs(){
	      w._gstc_lt = +new Date;
	      var d = document, g = d.createElement("script");
	      g.type = "text/javascript";
	      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
	      var s = d.getElementsByTagName("script")[0];
	      s.parentNode.insertBefore(g, s);
	    }
	    w.addEventListener ?
	      w.addEventListener("load", gs, false) :
	      w.attachEvent("onload", gs);
	  })(window);
	</script>
</head>	
<body>

		<!-- Facebook Like Button SDK -->
	<div id="fb-root"></div>
	<nav>
		<?php if (isset($homepage)) : ?>
			<!-- begin language switcher -->
			<span class="language-switch" href="#" data-dropdown="#dropdown-1" id="<?php echo $lang; ?>"><?php echo $full_name; ?></span>
			<!-- end language switcher -->
			<a href="#" class="info">About</a>
			<a href="/fake-identity-generator" class="id-gen">Fake Identity Generator</a>
			<a href="#" class="banner">Chrome Extension</a>
		<?php else : ?>
			<a href="/" class="home">Home</a>
			<a href="/fake-identity-generator" class="id-gen current">Fake Identity Generator</a>
			<a target="_blank" href="https://chrome.google.com/webstore/detail/justdeleteme/hfpofkfbabpbbmchmiekfnlcgaedbgcf">Chrome Extension</a>
		<?php endif; ?>
		<a target="_blank" href="https://docs.google.com/a/therobb.com/forms/d/1mhr3vaTni5U8PvOdp_NvQ6vKBxNTmJTeKP3VWRuioCE/viewform">Submit a site</a>
		<a target="_blank" href="http://github.com/rmlewisuk/justdelete.me">Fork on GitHub</a>
	</nav>

	<header>
		<h1>just<span>delete</span>.me</h1>
		<p class="tagline"><?php echo $tagline ?></p>
	</header>