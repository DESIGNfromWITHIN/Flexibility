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
$resources = array();
$pages = $sources['data'].'resources/';

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => 1,
    'parent' => 0,
    'template' => 4,
    'pagetitle' => 'Home',
    'longtitle' => 'Welcome to the Flexibility homepage',
    'description' => 'This will be your homepage',
    'introtext' => '',
    'alias' => 'home',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'home.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => 'Home',
),'',true,true);

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array(
    'id' => 2,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'About',
    'longtitle' => 'About page',
    'description' => 'This is a general page',
    'introtext' => '',
    'alias' => 'about',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'about.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 2,
    'menutitle' => 'About',
),'',true,true);

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array(
    'id' => 3,
    'parent' => 0,
    'template' => 3,
    'pagetitle' => 'Gallery',
    'longtitle' => 'Gallery page',
    'description' => 'This is a gallery page',
    'introtext' => '',
    'alias' => 'gallery',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'gallery.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 3,
    'menutitle' => 'gallery',
),'',true,true);

$resources[4] = $modx->newObject('modResource');
$resources[4]->fromArray(array(
    'id' => 4,
    'parent' => 0,
    'template' => 2,
    'pagetitle' => 'Contact',
    'longtitle' => 'Contact page',
    'description' => 'This is a contact page',
    'introtext' => '',
    'alias' => 'contact',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'contact.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 4,
    'menutitle' => 'contact',
),'',true,true);

$resources[5] = $modx->newObject('modResource');
$resources[5]->fromArray(array(
    'id' => 5,
    'parent' => 0,
    'template' => 5,
    'pagetitle' => 'Site settings',
    'longtitle' => 'Site settings page',
    'description' => 'This is the site settings page, change your site options here',
    'introtext' => '',
    'alias' => 'settings',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'settings.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
	'content_type' => 'css',
    'menuindex' => 0,
    'menutitle' => 'settings',
),'',true,true);

$resources[6] = $modx->newObject('modResource');
$resources[6]->fromArray(array(
    'id' => 6,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Thank you',
    'longtitle' => 'Thank you page',
    'description' => 'This is the thank you page',
    'introtext' => '',
    'alias' => 'thank-you',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'thank_you.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => 'Thank You',
),'',true,true);

return $resources;