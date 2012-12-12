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

$templateVariables = array();

$templateVariables[1]= $modx->newObject('modTemplateVar');
$templateVariables[1]->fromArray(array(
    'id' => 1,
    'type' => 'richtext',
    'name' => 'footer_box_01',
    'caption' => 'Footer-content box 1',
    'description' => 'The content of the first footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 15,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[2]= $modx->newObject('modTemplateVar');
$templateVariables[2]->fromArray(array(
    'id' => 2,
    'type' => 'richtext',
    'name' => 'footer_box_02',
    'caption' => 'Footer-content box 2',
    'description' => 'The content of the second footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 16,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[3]= $modx->newObject('modTemplateVar');
$templateVariables[3]->fromArray(array(
    'id' => 3,
    'type' => 'richtext',
    'name' => 'footer_box_03',
    'caption' => 'Footer-content box 3',
    'description' => 'The content of the third footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 17,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[4]= $modx->newObject('modTemplateVar');
$templateVariables[4]->fromArray(array(
    'id' => 4,
    'type' => 'richtext',
    'name' => 'footer_box_04',
    'caption' => 'Footer-content box 4',
    'description' => 'The content of the fourth footer-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 17,
	'category' => 'Footer content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[5]= $modx->newObject('modTemplateVar');
$templateVariables[5]->fromArray(array(
    'id' => 5,
    'type' => 'richtext',
    'name' => 'page_box_01',
    'caption' => 'Sub-content box 1',
    'description' => 'The content of the first sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 10,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[6]= $modx->newObject('modTemplateVar');
$templateVariables[6]->fromArray(array(
    'id' => 6,
    'type' => 'richtext',
    'name' => 'page_box_02',
    'caption' => 'Sub-content box 2',
    'description' => 'The content of the second sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 11,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[7]= $modx->newObject('modTemplateVar');
$templateVariables[7]->fromArray(array(
    'id' => 7,
    'type' => 'richtext',
    'name' => 'page_box_03',
    'caption' => 'Sub-content box 3',
    'description' => 'The content of the third sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 12,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[8]= $modx->newObject('modTemplateVar');
$templateVariables[8]->fromArray(array(
    'id' => 8,
    'type' => 'richtext',
    'name' => 'page_box_04',
    'caption' => 'Sub-content box 4',
    'description' => 'The content of the fourth sub-content box',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 13,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[9]= $modx->newObject('modTemplateVar');
$templateVariables[9]->fromArray(array(
    'id' => 9,
    'type' => 'richtext',
    'name' => 'page_lightbox',
    'caption' => 'Lightbox',
    'description' => 'The content of the optional lightbox for this page (leave empty to have no lightbox)',
    'display' => 'default',
    'elements' => '',  /* input option values */
    'locked' => 0,
    'rank' => 18,
	'category' => 'Page content',
    'display_params' => '',
    'default_text' => '',
    'properties' => array(),
),'',true,true);

$templateVariables[10]= $modx->newObject('modTemplateVar');
$templateVariables[10]->fromArray(array(
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

$templateVariables[11]= $modx->newObject('modTemplateVar');
$templateVariables[11]->fromArray(array(
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

$templateVariables[12]= $modx->newObject('modTemplateVar');
$templateVariables[12]->fromArray(array(
    'id' => 12,
    'name' => 'optional_gallery',
    'caption' => 'Gallery',
    'description' => 'Do you want a picture gallery on this page? (add pictures under: Components > Gallery)',
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

$templateVariables[13]= $modx->newObject('modTemplateVar');
$templateVariables[13]->fromArray(array(
    'id' => 13,
    'name' => 'optional_slider',
    'caption' => 'Slider',
    'description' => 'Do you want a slider on this page? (too add slides go to: Site Settings > Template Variables)',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => 'yes==yes||no==no',
    'display' => 'default',
    'locked' => 0,
    'rank' => 1,
    'default_text' => 'no',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$templateVariables[14]= $modx->newObject('modTemplateVar');
$templateVariables[14]->fromArray(array(
    'id' => 14,
    'name' => 'email_adress',
    'caption' => 'Email adress for the contactform',
    'description' => 'Select the email adress where the contactform should mail to',
	'category' => 'Site options',
    'type' => 'email',
	'elements' => '',
    'display' => 'default',
    'locked' => 0,
    'rank' => 3,
    'default_text' => '',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$templateVariables[15]= $modx->newObject('modTemplateVar');
$templateVariables[15]->fromArray(array(
    'id' => 15,
    'name' => 'FooterBoxNumber',
    'caption' => 'Footer boxes',
    'description' => 'Select the number of footer boxes',
	'category' => 'Site options',
    'type' => 'option',
	'elements' => '2==2||3==3||4==4',
    'display' => 'default',
    'locked' => 0,
    'rank' => 14,
    'default_text' => '2',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$templateVariables[16]= $modx->newObject('modTemplateVar');
$templateVariables[16]->fromArray(array(
    'id' => 16,
    'name' => 'siteLogo',
    'caption' => 'Logo',
    'description' => 'Select the website logo',
	'category' => 'Site options',
    'type' => 'image',
	'elements' => '',
    'display' => 'default',
    'locked' => 0,
    'rank' => 5,
    'default_text' => '',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$templateVariables[17]= $modx->newObject('modTemplateVar');
$templateVariables[17]->fromArray(array(
    'id' => 17,
    'name' => 'slidetext',
    'caption' => 'Richtext',
    'description' => 'Slide text',
    'category' => 'Enter the content of the slide',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$templateVariables[18]= $modx->newObject('modTemplateVar');
$templateVariables[18]->fromArray(array(
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

$templateVariables[19]= $modx->newObject('modTemplateVar');
$templateVariables[19]->fromArray(array(
    'id' => 19,
    'name' => 'page_boxes',
    'caption' => 'Sub-content boxes',
    'description' => 'How many sub-content boxes do you want on this page?',
	'category' => 'Page options',
    'type' => 'option',
	'elements' => '0==0||2==2||3==3||4==4',
    'display' => 'default',
    'locked' => 0,
    'rank' => 8,
    'default_text' => '0',
    'display_params' => '',
	'properties' => array(),
),'',true,true);

$templateVariables[20]= $modx->newObject('modTemplateVar');
$templateVariables[20]->fromArray(array(
    'id' => 20,
    'name' => 'slide_content',
    'caption' => 'Content for this slide',
    'description' => 'Optional (leave blank to have no content for this slide)',
    'category' => 'Site options',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 4,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$templateVariables[21]= $modx->newObject('modTemplateVar');
$templateVariables[21]->fromArray(array(
    'id' => 21,
    'name' => 'multiItemsGrid',
    'caption' => 'Slider items',
    'description' => 'The items in the slider',
	'category' => 'Site options',
    'type' => 'migx',
    'display' => 'default',
    'locked' => 0,
    'rank' => 7,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$input_properties=array(
'formtabs' => '[
{"caption":"Info", "fields": [
    {"field":"title","caption":"Title","description":"Title for the image."},
    {"field":"content","caption":"Content","description":"Content of the slide (optional).","inputTV":"slide_content"},
    {"field":"description","caption":"Description","inputTV":"slidetext"},
    {"field":"image","caption":"Image","inputTV":"image"}
]}
]
',
'columns' => '[
{"header": "Title", "width": "160", "sortable": "true", "dataIndex": "title"},
{"header": "Image", "width": "50", "sortable": "false", "dataIndex": "image","renderer": "this.renderImage"}
]
');
$templateVariables[21]->set('input_properties',$input_properties);

return $templateVariables;