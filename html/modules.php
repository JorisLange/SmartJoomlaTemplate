<?php defined('_JEXEC') or die;

function modChrome_well($module, &$params, &$attribs) {
	if ($module->content) {
		echo "<div class=\"well well-sm" . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle) {
			echo "<h3>" . $module->title . "</h3>";
		}
		echo $module->content;
		echo "</div>";
	}
}

function modChrome_panelinfo($module, &$params, &$attribs) {
	if ($module->content) {
		echo "<div class=\"moduletable" . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		echo "<div class=\"panel panel-default\">";
		if ($module->showtitle) {
		echo "<div class=\"panel-heading\">";
		echo "<h3 class=\"panel-title\">" . $module->title . "</h3>";
		echo "</div>";
		}
		echo "<div class=\"panel-body\">";
		echo $module->content;
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}
}

?>