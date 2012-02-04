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

$tvs1 = array();

$tvs1[14]= $modx->newObject('modTemplateVar');
$tvs1[14]->fromArray(array(
    'id' => 14,
    'name' => 'email_adress',
    'caption' => 'Email adress for the contactform',
    'description' => 'Select the email adress where the contactform should mail to',
	'category' => 'Site options',
    'type' => 'email',
	'elements' => '',
    'display' => 'default',
    'locked' => 0,
    'rank' => 1,
    'default_text' => '',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs1[15]= $modx->newObject('modTemplateVar');
$tvs1[15]->fromArray(array(
    'id' => 15,
    'name' => 'FooterBoxNumber',
    'caption' => 'Footer boxes',
    'description' => 'Select the number of footer boxes',
	'category' => 'Site options',
    'type' => 'option',
	'elements' => '2==2||3==3||4==4',
    'display' => 'default',
    'locked' => 0,
    'rank' => 2,
    'default_text' => '2',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs1[16]= $modx->newObject('modTemplateVar');
$tvs1[16]->fromArray(array(
    'id' => 16,
    'name' => 'siteLogo',
    'caption' => 'Logo',
    'description' => 'Select the website logo',
	'category' => 'Site options',
    'type' => 'image',
	'elements' => '',
    'display' => 'default',
    'locked' => 0,
    'rank' => 1,
    'default_text' => '',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$tvs1[17]= $modx->newObject('modTemplateVar');
$tvs1[17]->fromArray(array(
    'id' => 17,
    'type' => 'richtext',
    'name' => 'richtext',
    'caption' => 'Slide text',
    'description' => 'Enter the content of the slide',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 0,
	'category' => 'Site options',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$tvs1[18]= $modx->newObject('modTemplateVar');
$tvs1[18]->fromArray(array(
    'id' => 18,
    'name' => 'image',
    'caption' => 'image',
    'description' => 'Slider image',
	'category' => 'Site options',
    'type' => 'image',
    'display' => 'text',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs1[20]= $modx->newObject('modTemplateVar');
$tvs1[20]->fromArray(array(
    'id' => 20,
    'name' => 'multiItemsGrid',
    'caption' => 'Slider items',
    'description' => 'The items in the slider',
	'category' => 'Site options',
    'type' => 'migx',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$input_properties=array(
    'formtabs' => '
[
{"caption":"Info", "fields": [
    {"field":"title","caption":"Title","description":"Title for the image."},
    {"field":"description","caption":"Description","inputTV":"richtext"}
]},
{"caption":"Image", "fields":[
    {"field":"image","caption":"Image","inputTV":"image"}
]}
]
	',
    'columns' => '
[
{"header": "Title", "width": "160", "sortable": "true", "dataIndex": "title"},
{"header": "Image", "width": "50", "sortable": "false", "dataIndex": "image","renderer": "this.renderImage"}
]
');
$tvs1[20]->set('input_properties',$input_properties);

return $tvs1;