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

$tvs2 = array();

$tvs2[11]= $modx->newObject('modTemplateVar');
$tvs2[11]->fromArray(array(
    'id' => 11,
    'name' => 'optional_contactform',
    'caption' => 'Contactform',
    'description' => 'Do you want a contactform on this page?',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => 'yes==yes||no==no',
    'display' => 'default',
    'locked' => 0,
    'rank' => 4,
    'default_text' => 'no',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs2[12]= $modx->newObject('modTemplateVar');
$tvs2[12]->fromArray(array(
    'id' => 12,
    'name' => 'optional_gallery',
    'caption' => 'Gallery',
    'description' => 'Do you want a picture gallery on this page?',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => 'yes==yes||no==no',
    'display' => 'default',
    'locked' => 0,
    'rank' => 3,
    'default_text' => 'no',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs2[13]= $modx->newObject('modTemplateVar');
$tvs2[13]->fromArray(array(
    'id' => 13,
    'name' => 'optional_slider',
    'caption' => 'Slider',
    'description' => 'Do you want a slider on this page?',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => 'yes==yes||no==no',
    'display' => 'default',
    'locked' => 0,
    'rank' => 2,
    'default_text' => 'no',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs2[19]= $modx->newObject('modTemplateVar');
$tvs2[19]->fromArray(array(
    'id' => 19,
    'name' => 'page_boxes',
    'caption' => 'Sub-content boxes',
    'description' => 'How many sub-content boxes do you want on this page?',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => '0==0||2==2||3==3||4==4',
    'display' => 'default',
    'locked' => 0,
    'rank' => 1,
    'default_text' => '0',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

return $tvs2;