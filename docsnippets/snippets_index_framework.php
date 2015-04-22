// Containers in divs

<!-- Framework -->

<?php if ($this->countModules('header')): ?>	
	<header id="header" class="clearfix">	
		<div class="container">
			<jdoc:include type="modules" name="header" style="none" />
		</div>
	</header>
<?php endif; ?>	

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

<?php if ($this->countModules('top')): ?>	
	<div id="top" class="clearfix">	
		<div class="container">
			<jdoc:include type="modules" name="top" style="xhtml" />
		</div>
	</div>
<?php endif; ?>		

<!-- Mainbody -->
	<div id="mainbody" class="clearfix">
		<div class="container">
			<div class="row">					
			<?php if ($this->countModules('left')): ?>
				<div id="left" class="sidebar-left col-md-3">
					<jdoc:include type="modules" name="left" style="xhtml" />
				</div>
			<?php endif; ?>						

			<!-- Content Block -->
				<div id="content" class="<?php echo $contentcol;?>">				
					<?php if (!empty($app->getMessageQueue)) : ?>
						<div id="message-component">
							<jdoc:include type="message" />
						</div>
					<?php endif ?>					
				<?php if ($this->countModules('above-content')): ?>
					<div id="above-content">
						<jdoc:include type="modules" name="above-content" style="xhtml" />
					</div>
				<?php endif; ?>					

					<div id="content-area">
						<jdoc:include type="component" />
					</div>
					
				<?php if ($this->countModules('below-content')): ?>
					<div id="below-content">
						<jdoc:include type="modules" name="below-content" style="xhtml" />
					</div>
				<?php endif; ?>							
				</div>
			<!-- End Content Block -->
				
				<?php if ($this->countModules('right')) : ?>
				<aside id="right" class="sidebar-right col-md-3">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</aside>
				<?php endif; ?>	
				
			</div>
		</div>
	</div>
<!-- End Mainbody -->

<?php if ($this->countModules('bottom')): ?>
	<div id="bottom" class="clearfix">
		<div class="container">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
	</div>
<?php endif; ?>

<?php if ($this->countModules('footer')): ?>	
	<footer id="footer" class="clearfix">	
		<div class="container">
			<jdoc:include type="modules" name="footer" style="none" />
		</div>
	</footer>
<?php endif; ?>	

<!-- End Framework -->



// Container om divs

<!-- Framework -->
<div class="container">

<?php if ($this->countModules('header')): ?>	
	<header id="header" class="clearfix">	
		<jdoc:include type="modules" name="header" style="none" />
	</header>
<?php endif; ?>	

<!-- Navbar -->
	<nav id="nav" class="navbar navbar-default" role="navigation">
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
	</nav>
<!-- End Navbar -->

<?php if ($this->countModules('top')): ?>	
	<div id="top" class="clearfix">	
		<jdoc:include type="modules" name="top" style="xhtml" />
	</div>
<?php endif; ?>		

<!-- Mainbody -->
	<div id="mainbody" class="clearfix">
		<div class="row">					
		<?php if ($this->countModules('left')): ?>
			<div id="left" class="sidebar-left col-md-3">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
		<?php endif; ?>						

		<!-- Content Block -->
			<div id="content" class="<?php echo $contentcol;?>">				
			<?php if (!empty($app->getMessageQueue)) : ?>
				<div id="message-component">
					<jdoc:include type="message" />
				</div>
			<?php endif ?>					
			<?php if ($this->countModules('above-content')): ?>
				<div id="above-content">
					<jdoc:include type="modules" name="above-content" style="xhtml" />
				</div>
			<?php endif; ?>					
				<div id="content-area" class="clearfix">
					<jdoc:include type="component" />
				</div>
			<?php if ($this->countModules('below-content')): ?>
				<div id="below-content">
					<jdoc:include type="modules" name="below-content" style="xhtml" />
				</div>
			<?php endif; ?>							
			</div>
		<!-- End Content Block -->
			
		<?php if ($this->countModules('right')) : ?>
			<aside id="right" class="sidebar-right col-md-3">
				<div class="row">					
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
			</aside>
		<?php endif; ?>	
			
		</div>
	</div>
<!-- End Mainbody -->

<?php if ($this->countModules('bottom')): ?>
	<div id="bottom" class="clearfix">
		<jdoc:include type="modules" name="bottom" style="xhtml" />
	</div>
<?php endif; ?>

</div> <!-- End main container -->

<?php if ($this->countModules('footer')): ?>	
<footer id="footer" class="clearfix">	
	<div class="container">
		<div class="row">
			<jdoc:include type="modules" name="footer" style="none" />
		</div>
	</div>
</footer>
<?php endif; ?>	

<!-- End Framework -->


// Got to top
<div class="to-top"
	<a href="#" class="go-top">Back to Top <i class="fa fa-arrow-circle-up"></i></a>
</div>
