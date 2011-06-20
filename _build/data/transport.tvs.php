<?php
/**
* Flexibility
*
* Copyright 2011 by Menno Pietersen <info@designfromwithin.com>, excepting
* subpackages installed by the component.
*
* This file is part of Flexibility, a packaged template site for MODX Revolution.
*
* Flexibility is free software; you can redistribute it and/or modify it
* under the terms of the GNU General Public License as published by the Free
* Software Foundation; either version 2 of the License, or (at your option) any
* later version.
*
* Flexibility is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
* FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
* details.
*
* You should have received a copy of the GNU General Public License along with
* Flexibility; if not, write to the Free Software Foundation, Inc., 59
* Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/
$tvs = array();

$tvs[1]= $modx->newObject('modTemplateVar');
$tvs[1]->fromArray(array(
    'id' => 1,
    'name' => 'image',
    'caption' => 'image',
    'description' => 'For a wide slide max 920px wide and 280px high',
	'category' => 'Flexibility',
    'type' => 'image',
    'display' => 'text',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[2]= $modx->newObject('modTemplateVar');
$tvs[2]->fromArray(array(
    'id' => 2,
    'name' => 'multiItemsGrid',
    'caption' => 'Slider items',
    'description' => 'The items in the slider',
	'category' => 'Flexibility',
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
    {"field":"description","caption":"Description","inputTV":"richtext"},
    {"field":"slide_option","caption":"Slide type","inputTV":"slide_option"}
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
$tvs[2]->set('input_properties',$input_properties);

$tvs[3]= $modx->newObject('modTemplateVar');
$tvs[3]->fromArray(array(
    'id' => 3,
    'name' => 'richtext',
    'caption' => 'Slide text',
    'description' => 'Enter the content of the slide',
	'category' => 'Flexibility',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[4]= $modx->newObject('modTemplateVar');
$tvs[4]->fromArray(array(
    'id' => 4,
    'name' => 'slide_option',
    'caption' => 'Slide style',
    'description' => 'Select the style of this slide',
	'category' => 'Flexibility',
    'type' => 'option',
	'elements' => 'Small image==small||Wide image==wide',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => 'small',
    'display_params' => '',
),'',true,true);

$tvs[6]= $modx->newObject('modTemplateVar');
$tvs[6]->fromArray(array(
    'id' => 6,
    'name' => 'tv.contact_adress',
    'caption' => 'Adress',
    'description' => 'Contact information in the footer and on the contact page',
	'category' => 'Flexibility',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 10,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[7]= $modx->newObject('modTemplateVar');
$tvs[7]->fromArray(array(
    'id' => 7,
    'name' => 'tv.email_adress',
    'caption' => 'E-mail adress',
    'description' => 'Fill in your e-mail adress for the contact form',
	'category' => 'Flexibility',
    'type' => 'email',
    'display' => 'default',
    'locked' => 0,
    'rank' => 2,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[8]= $modx->newObject('modTemplateVar');
$tvs[8]->fromArray(array(
    'id' => 8,
    'name' => 'tv.footer_content_left',
    'caption' => 'Footer content left',
    'description' => 'The content of the left side of the footer',
	'category' => 'Flexibility',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 7,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[9]= $modx->newObject('modTemplateVar');
$tvs[9]->fromArray(array(
    'id' => 9,
    'name' => 'tv.footer_content_right',
    'caption' => 'Footer content right',
    'description' => 'The content of the right side of the footer',
	'category' => 'Flexibility',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 8,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[10]= $modx->newObject('modTemplateVar');
$tvs[10]->fromArray(array(
    'id' => 10,
    'name' => 'tv.logo',
    'caption' => 'Logo',
    'description' => 'Choose your site logo for the header',
	'category' => 'Flexibility',
    'type' => 'image',
    'display' => 'image',
    'locked' => 0,
    'rank' => 1,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[11]= $modx->newObject('modTemplateVar');
$tvs[11]->fromArray(array(
    'id' => 11,
    'name' => 'tv_sidebar',
    'caption' => 'Sidebar content',
    'description' => 'Enter content for the sidebar (leave empty to have no sidebar)',
	'category' => 'Flexibility',
    'type' => 'richtext',
    'display' => 'default',
    'locked' => 0,
    'rank' => 7,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[12]= $modx->newObject('modTemplateVar');
$tvs[12]->fromArray(array(
    'id' => 12,
    'name' => 'tv_slider',
    'caption' => 'Page slider',
    'description' => 'Want the slider on this page? (creat at least 2 slides under "Site settings" . "Template Variables")',
	'category' => 'Flexibility',
    'type' => 'option',
	'elements' => 'Yes==yes||No==no',
    'display' => 'default',
    'locked' => 0,
    'rank' => 2,
    'default_text' => 'no',
    'display_params' => '',
),'',true,true);

$tvs[13]= $modx->newObject('modTemplateVar');
$tvs[13]->fromArray(array(
    'id' => 13,
    'name' => 'tv_tagline',
    'caption' => 'Tagline text',
    'description' => 'Text in the tagline',
	'category' => 'Flexibility',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 4,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[14]= $modx->newObject('modTemplateVar');
$tvs[14]->fromArray(array(
    'id' => 14,
    'name' => 'tv_tagline_link',
    'caption' => 'Link of the tagline link',
    'description' => 'Enter URL of the link',
	'category' => 'Flexibility',
    'type' => 'url',
    'display' => 'string',
    'locked' => 0,
    'rank' => 5,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[15]= $modx->newObject('modTemplateVar');
$tvs[15]->fromArray(array(
    'id' => 15,
    'name' => 'tv_tagline_link_text',
    'caption' => 'Tagline link text',
    'description' => 'Text in the tagline link',
	'category' => 'Flexibility',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 6,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

$tvs[16]= $modx->newObject('modTemplateVar');
$tvs[16]->fromArray(array(
    'id' => 16,
    'name' => 'tv_tagline_option',
    'caption' => 'Page tagline',
    'description' => 'Do you want tagline on this page?',
	'category' => 'Flexibility',
    'type' => 'option',
	'elements' => 'No tagline==no_tagline||Tagline with link==tagline_link||Tagline without link==tagline',
    'display' => 'default',
    'locked' => 0,
    'rank' => 3,
    'default_text' => 'no_tagline',
    'display_params' => '',
),'',true,true);

return $tvs;