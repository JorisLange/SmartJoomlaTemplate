<?php
defined('_JEXEC') or die;

$app 		= JFactory::getApplication();
$return 	= $this->params->get('logout_redirect_url', $this->form->getValue('return'));
$url 		= JRoute::_('index.php?option=com_users&task=user.logout&' . JSession::getFormToken() . '=1&return=' . $return);

$app->redirect($url);
