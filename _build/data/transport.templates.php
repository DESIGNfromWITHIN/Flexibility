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
$templates = array();

$templates[1]= $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => 1,
    'templatename' => 'Basic page template',
    'description' => 'Template of a normal page',
	'category' => 'Flexibility',
    'content' => file_get_contents($sources['data'].'templates/basic_page_template.tpl'),
),'',true,true);

$templates[2]= $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => 2,
    'templatename' => 'Contact page template',
    'description' => 'Template of a contact page',
	'category' => 'Flexibility',
    'content' => file_get_contents($sources['data'].'templates/contact_template.tpl'),
),'',true,true);

$templates[3]= $modx->newObject('modTemplate');
$templates[3]->fromArray(array(
    'id' => 3,
    'templatename' => 'Gallery page template',
    'description' => 'Template of a gallery page',
	'category' => 'Flexibility',
    'content' => file_get_contents($sources['data'].'templates/gallery_page_template.tpl'),
),'',true,true);

$templates[4]= $modx->newObject('modTemplate');
$templates[4]->fromArray(array(
    'id' => 4,
    'templatename' => 'Homepage template',
    'description' => 'Template of the homepage',
	'category' => 'Flexibility',
    'content' => file_get_contents($sources['data'].'templates/homepage_template.tpl'),
),'',true,true);

$templates[5]= $modx->newObject('modTemplate');
$templates[5]->fromArray(array(
    'id' => 5,
    'templatename' => 'Page settings template',
    'description' => 'Template with CSS styles and site settings',
	'category' => 'Flexibility',
    'content' => file_get_contents($sources['data'].'templates/settings_template.tpl'),
),'',true,true);

return $templates;