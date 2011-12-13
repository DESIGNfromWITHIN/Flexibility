<?php
/**
 * Array of plugin events for Flexibility package
 *
 * @package flexibility
 * @subpackage build
 */
$events = array();

/* Note: These must not be existing System Events!

 * This example is not used by default in the build.
 * It shows how to add custom System Events
 * for your plugin. See the commented out plugin section
 * of built.transport.php */


$events['OnBeforeSomething']= $modx->newObject('modPluginEvent');
$events['OnBeforeSomething']->fromArray(array(
    'event' => 'OnBeforeSomething',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

$events['OnSomething']= $modx->newObject('modPluginEvent');
$events['OnSomething']->fromArray(array(
    'event' => 'OnSomething',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

return $events;