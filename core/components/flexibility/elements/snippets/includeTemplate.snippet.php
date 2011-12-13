<?php
# Snippet to include template files from file system
# USAGE: [[includeTemplate? &tpl=`mytemplate/template.html`]]

if ( !isset($tpl) || $tpl== "" ) return "Missing Template file!";

$tpl = $base_path .'assets/templates/'.$tpl;
ob_start();
include($tpl);
return ob_get_clean();