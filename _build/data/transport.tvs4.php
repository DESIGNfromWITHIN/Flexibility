<?php
/**
* Template variable objects for the Flexibilitys package
* @author Menno Pietersen <info@designfromwithin.com>
* 13/12/2011
*
* @package flexibilitys
* @subpackage build
*/

/* Common 'type' options:
 * textfield (text line)
 * textbox
 * richtext
 * textarea
 * textareamini
 * email
 * html
 * image
 * date
 * option (radio buttons)
 * listbox
 * listbox-multiple
 * number
 * checkbox
 * tag
 * hidden
 */

/* Example template variables */

$tvs4 = array();

$tvs4[1]= $modx->newObject('modTemplateVar');
$tvs4[1]->fromArray(array(
    'id' => 1,
    'type' => 'richtext',
    'name' => 'footer_box_01',
    'caption' => 'Footer-content box 1',
    'description' => 'The content of the first footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 2,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs4[2]= $modx->newObject('modTemplateVar');
$tvs4[2]->fromArray(array(
    'id' => 2,
    'type' => 'richtext',
    'name' => 'footer_box_02',
    'caption' => 'Footer-content box 2',
    'description' => 'The content of the second footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 3,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs4[3]= $modx->newObject('modTemplateVar');
$tvs4[3]->fromArray(array(
    'id' => 3,
    'type' => 'richtext',
    'name' => 'footer_box_03',
    'caption' => 'Footer-content box 3',
    'description' => 'The content of the third footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 4,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs4[4]= $modx->newObject('modTemplateVar');
$tvs4[4]->fromArray(array(
    'id' => 4,
    'type' => 'richtext',
    'name' => 'footer_box_04',
    'caption' => 'Footer-content box 4',
    'description' => 'The content of the fourth footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 5,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

return $tvs4;