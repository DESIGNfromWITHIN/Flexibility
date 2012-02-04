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

$tvs5 = array();

$tvs5[5]= $modx->newObject('modTemplateVar');
$tvs5[5]->fromArray(array(
    'id' => 5,
    'type' => 'richtext',
    'name' => 'page_box_01',
    'caption' => 'Sub-content box 1',
    'description' => 'The content of the first sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 2,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs5[6]= $modx->newObject('modTemplateVar');
$tvs5[6]->fromArray(array(
    'id' => 6,
    'type' => 'richtext',
    'name' => 'page_box_02',
    'caption' => 'Sub-content box 2',
    'description' => 'The content of the second sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 3,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs5[7]= $modx->newObject('modTemplateVar');
$tvs5[7]->fromArray(array(
    'id' => 7,
    'type' => 'richtext',
    'name' => 'page_box_03',
    'caption' => 'Sub-content box 3',
    'description' => 'The content of the third sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 4,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs5[8]= $modx->newObject('modTemplateVar');
$tvs5[8]->fromArray(array(
    'id' => 8,
    'type' => 'richtext',
    'name' => 'page_box_04',
    'caption' => 'Sub-content box 4',
    'description' => 'The content of the fourth sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 5,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs5[9]= $modx->newObject('modTemplateVar');
$tvs5[9]->fromArray(array(
    'id' => 9,
    'type' => 'richtext',
    'name' => 'page_lightbox',
    'caption' => 'Lightbox',
    'description' => 'The content of the optional lightbox for this page (leave empty to have no lightbox)',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 6,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs5[10]= $modx->newObject('modTemplateVar');
$tvs5[10]->fromArray(array(
    'id' => 10,
    'type' => 'richtext',
    'name' => 'sidebar',
    'caption' => 'Sidebar option',
    'description' => 'Content of the sidebar (leave empty if you want no sidebar)',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 1,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

return $tvs5;