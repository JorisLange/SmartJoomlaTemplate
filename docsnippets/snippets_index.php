// Apple icons, in header
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">

// IE8 conversion, in header
	<!-- Le HTML5 shim and media query for IE8 support -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
	<![endif]-->

// Extra uncompiled css, loading after other css
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/extra.css" type="text/css">


// Testing Bootstrap and Joomla code, in body
<?php require_once 'html/bootstrap.test.php'; // Test page with Bootstrap demo code ?>
<?php require_once 'html/bootstrap.example.php';  // Test page with empty Bootstrap framework  ?>

// Basics: global Joomla header, in header
<jdoc:include type="head" /> 

// Basics: Joomla modules (matching with templateDetails.xml), in body
<jdoc:include type="modules" name="header" style="none" />
<jdoc:include type="modules" name="navbar" />
<jdoc:include type="modules" name="top" style="xhtml" />
<jdoc:include type="modules" name="left" style="xhtml" />
<jdoc:include type="modules" name="above-content" style="xhtml" />
<jdoc:include type="modules" name="below-content" style="xhtml" />
<jdoc:include type="modules" name="right" style="xhtml" />
<jdoc:include type="modules" name="bottom" style="xhtml" />
<jdoc:include type="modules" name="footer" style="none" />
<jdoc:include type="modules" name="debug" />

// Basics: Joomla component, in body
<jdoc:include type="component" />

// Basics: Joomla system message, in body
<?php if (!empty($app->getMessageQueue)) : ?>
	<jdoc:include type="message" />
<?php endif ?>

// Output of the base url
<?php echo $this->baseurl; ?>

// Output of the sitename
<?php echo $app->getCfg('sitename'); ?>

// If module is published on position menu, then ...
<?php if ($this->countModules('menu')): ?>
	...
<?php endif; ?>	

// If http user agent is mobile device, then ... else ...
<?php if(preg_match('/iphone|ipod|opera mini|blackberry|mobile|iemobile/i', $_SERVER['HTTP_USER_AGENT'])) : ?>
	...
<?php else: ?>	
	...
<?php endif; ?>	

// Short write if, then, else for echo a class
<?phpecho ($this->countModules('menu')) ? ('class') : ('no-class'); ?>

// Activate modal window
<a class="modal"></a>

// insert translatable text (matching with en-GB.tpl_templatename.ini)
<?php echo JText::_('EXAMPLE_TEXT'); ?>

// Zie 


// Navbar menu
// nav.navbar optional: navbar-fixed-top (in that case: padding-top in body) 
// div.container optional: container-fluid (full width or not)

<!-- Navbar -->
	<nav id="nav" class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-modules">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-modules">
				<jdoc:include type="modules" name="navbar" />
			</div>
		</div>
	</nav>
<!-- End Navbar -->

<!-- Navbar, with fixed top -->
	<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-modules">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-modules">
				<jdoc:include type="modules" name="navbar" />
			</div>
		</div>
	</nav>
<!-- End Navbar -->

<!-- Navbar, with fixed top, with logo -->
	<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-modules">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $this->baseurl; ?>/"><img class="img-responsive" src="/content/images/interface/logo.png" alt="<?php echo $app->getCfg('sitename'); ?>" /></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-modules">
				<jdoc:include type="modules" name="navbar" />
			</div>
		</div>
	</nav>
<!-- End Navbar -->

