<?php 
// Logic for Smart Joomla Template //
defined( '_JEXEC' ) or die; // disallow direct access of file

// Variables
$app            = JFactory::getApplication(); // Connect with Joomla // define variable with application
$doc            = JFactory::getDocument(); // Connect with Joomla // define variable with document
$menu           = $app->getMenu();
$active         = $app->getMenu()->getActive();
$params         = $app->getParams(); // Get params
$pageclass      = $params->get('pageclass_sfx'); // Get the page class from the current menu entry
$tpath          = $this->baseurl.'/templates/'.$this->template; // define variable with template path
$templateparams = $app->getTemplate(true)->params;

$option         = $app->input->getCmd('option', '');
$view           = $app->input->getCmd('view', '');
$layout         = $app->input->getCmd('layout', '');
$task           = $app->input->getCmd('task', '');
$itemid         = $app->input->getCmd('Itemid', '');
$id             = $app->input->getCmd('id', '');
$sitename       = $app->getCfg('sitename');
$frontpage      = ($menu_active == $menu->getDefault() ? true : false); 

// Browser info
jimport('joomla.environment.browser');
$browser        = JBrowser::getInstance();
$browserType    = $browser->getBrowser();
$browserVersion = $browser->getMajor();

// Set MetaData 
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0' ); 
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1'); // force latest IE & chrome frame
$doc->setGenerator('Smart Joomla Websites'); // no Joomla in generator info

$doc->setGenerator(null); // nothing in generator info

// Force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');

// Call JavaScript, also necessary to to unset it!
JHtml::_('behavior.framework');
JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');
JHtml::_('bootstrap.tooltip');

JHTML::_('behavior.modal'); // load the modal behavior

// Unset unwanted JavaScript
unset($this->_scripts[$this->baseurl .'/media/system/js/mootools-core.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/mootools-more.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/caption.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/core.js']);
unset($this->_scripts[$this->baseurl .'/media/jui/js/jquery.min.js']);
unset($this->_scripts[$this->baseurl .'/media/jui/js/jquery-noconflict.js']);
unset($this->_scripts[$this->baseurl .'/media/jui/js/jquery-migrate.min.js']);
unset($this->_scripts[$this->baseurl .'/media/jui/js/bootstrap.min.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/tabs-state.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/validate.js']);
unset($this->_scripts[$this->baseurl .'/media/com_finder/js/autocompleter.js']); 

if (isset($this->_script['text/javascript']))
{
	$this->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $this->_script['text/javascript']);

	$this->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $this->_script['text/javascript']);

	// Unset completly if empty
	if (empty($this->_script['text/javascript']))
	{
		unset($this->_script['text/javascript']);
	}
}

// Add Javascripts 

$doc->addScript($tpath.'/js/jquery-1.11.2.min.js', 'text/javascript', true); // More recent jQuery 1.11.2
$doc->addScript($tpath.'/js/jquery-noconflict.js', 'text/javascript', true);

$doc->addScript($tpath.'/js/bootstrap.min.js', 'text/javascript', true); // More recent Bootstrap 3

$doc->addScript($tpath.'/js/holder.js', 'text/javascript', true); // Image Placeholder (use <img data-src="holder.js/265x180" /> in content)

$doc->addScript($tpath.'/js/bsUpdate.js', 'text/javascript', true); // Update Bootstrap 2 to Bootstrap 3 classes

$doc->addScript($tpath.'/js/logic.js', 'text/javascript', true); // Custom script

$doc->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'text/javascript', true); // More recent jQuery 1.11.2 on cdn

$doc->addScriptDeclaration('alert(\'Hello Joomla!\')'); // Add custom Javascript

// Unset unwanted (extension) CSS
$unset_css = array('com_rsform','com_finder');

foreach($this->_styleSheets as $name=>$style)
{
	foreach($unset_css as $css)
	{
		if (strpos($name,$css) !== false)
		{
			unset($this->_styleSheets[$name]);
		}
	}
}

// Add CSS
// Option less with integrated live compiler (template.less during development)
// or otherwise compiled template stylesheet (template.css in production environment)
if ($templateparams->get('runless', 1) == 1)
{
	require 'runless.php';
}

$doc->addStyleSheet($tpath.'/css/template.css'); // The compiled template stylesheet

$doc->addStyleSheet($tpath.'/css/extra.css'); // An uncompiled template stylesheet; for testing purpose (new css code)

$doc->addStyleSheet($tpath.'/css/extra/ownername.css'); // An uncompiled template stylesheet; for third party imput (new css code)

$doc->addStyleDeclaration('body{background-color:red;}'); // Add custom css




// Content framework
// Adjusting content column width; r4/l3 (in index.php) -> m5/m8/m9
if ($this->countModules('right') && $this->countModules('left'))
{
	$contentcol = "col-md-5";
}
elseif ($this->countModules('right') && !$this->countModules('left'))
{
	$contentcol = "col-md-8";
}
elseif (!$this->countModules('right') && $this->countModules('left'))
{
	$contentcol = "col-md-9";
}
else
{
	$contentcol = "col-md-12";
}

// Adjusting content column width; r3/l3 (in index.php) -> m6/m9/m9
if ($this->countModules('right') && $this->countModules('left'))
{
	$contentcol = "col-md-6";
}
elseif ($this->countModules('right') && !$this->countModules('left'))
{
	$contentcol = "col-md-9";
}
elseif (!$this->countModules('right') && $this->countModules('left'))
{
	$contentcol = "col-md-9";
}
else
{
	$contentcol = "col-md-12";
}