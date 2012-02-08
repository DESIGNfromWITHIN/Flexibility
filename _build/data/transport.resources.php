<?php
/**
 * Resource objects for the Flexibility package
 * @author Menno Pietersen <info@designfromwithin.com>
 * 13/12/2011
 *
 * @package flexibility
 * @subpackage build
 */

$resources = array();

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Home<br />');
$resources[1]= $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => 1,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Homepage',
    'description' => 'Home',
    'alias' => 'home',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '1',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Home',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[1]->setContent(file_get_contents($sources['build'] . 'data/resources/home.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: About<br />');
$resources[2]= $modx->newObject('modResource');
$resources[2]->fromArray(array(
    'id' => 2,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'About',
    'longtitle' => 'About us',
    'description' => 'About',
    'alias' => 'about',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '2',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'About',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[2]->setContent(file_get_contents($sources['build'] . 'data/resources/about.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Gallery<br />');
$resources[3]= $modx->newObject('modResource');
$resources[3]->fromArray(array(
    'id' => 3,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Gallery',
    'longtitle' => 'Gallery',
    'description' => 'Gallery',
    'alias' => 'gallery',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '3',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Gallery',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[3]->setContent(file_get_contents($sources['build'] . 'data/resources/gallery.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Basic page<br />');
$resources[4]= $modx->newObject('modResource');
$resources[4]->fromArray(array(
    'id' => 4,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Basic page',
    'longtitle' => 'Basic page',
    'description' => 'Basic page',
    'alias' => 'basic-page',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '1',
    'richtext' => '1',
    'menuindex' => '4',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Basic page',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[4]->setContent(file_get_contents($sources['build'] . 'data/resources/basic_page.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Contact<br />');
$resources[5]= $modx->newObject('modResource');
$resources[5]->fromArray(array(
    'id' => 5,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Contact',
    'longtitle' => 'Contact',
    'description' => 'Contact',
    'alias' => 'contact',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '5',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Contact',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[5]->setContent(file_get_contents($sources['build'] . 'data/resources/contact.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Sub page 1<br />');
$resources[6]= $modx->newObject('modResource');
$resources[6]->fromArray(array(
    'id' => 6,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Sub page 1',
    'longtitle' => 'Sub page 1',
    'description' => 'Sub page 1',
    'alias' => 'sub-page-1',
    'published' => '1',
	'template' => 2,
    'parent' => '4',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '1',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Sub page 1',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[6]->setContent(file_get_contents($sources['build'] . 'data/resources/sub_page_1.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Sub page 2<br />');
$resources[7]= $modx->newObject('modResource');
$resources[7]->fromArray(array(
    'id' => 7,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Sub page 2',
    'longtitle' => 'Sub page 2',
    'description' => 'Sub page 2',
    'alias' => 'sub-page-2',
    'published' => '1',
	'template' => 2,
    'parent' => '4',
    'isfolder' => '1',
    'richtext' => '1',
    'menuindex' => '2',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Sub page 2',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[7]->setContent(file_get_contents($sources['build'] . 'data/resources/sub_page_2.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Sub page 3<br />');
$resources[8]= $modx->newObject('modResource');
$resources[8]->fromArray(array(
    'id' => 8,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Sub page 3',
    'longtitle' => 'Sub page 3',
    'description' => 'Sub page 3',
    'alias' => 'sub-page-3',
    'published' => '1',
	'template' => 2,
    'parent' => '4',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '3',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Sub page 3',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[8]->setContent(file_get_contents($sources['build'] . 'data/resources/sub_page_3.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Sub sub page 1<br />');
$resources[9]= $modx->newObject('modResource');
$resources[9]->fromArray(array(
    'id' => 9,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Sub sub page 1',
    'longtitle' => 'Sub sub page 1',
    'description' => 'Sub sub page 1',
    'alias' => 'sub-sub-page-1',
    'published' => '1',
	'template' => 2,
    'parent' => '7',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '1',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Sub sub page 1',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[9]->setContent(file_get_contents($sources['build'] . 'data/resources/sub_sub_page_1.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Sub sub page 2<br />');
$resources[10]= $modx->newObject('modResource');
$resources[10]->fromArray(array(
    'id' => 10,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Sub sub page 2',
    'longtitle' => 'Sub sub page 2',
    'description' => 'Sub sub page 2',
    'alias' => 'sub-sub-page-2',
    'published' => '1',
	'template' => 2,
    'parent' => '7',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '2',
    'searchable' => '1',
    'cacheable' => '1',
    'menutitle' => 'Sub-sub page 2 with a very long title',
    'donthit' => '0',
    'hidemenu' => '0',
),'',true,true);
$resources[10]->setContent(file_get_contents($sources['build'] . 'data/resources/sub_sub_page_2.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Site settings<br />');
$resources[11]= $modx->newObject('modResource');
$resources[11]->fromArray(array(
    'id' => 11,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Site settings',
    'longtitle' => 'Site settings',
    'description' => 'Site settings',
    'alias' => 'site-settings',
    'published' => '1',
	'template' => 4,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '',
    'searchable' => '0',
    'cacheable' => '1',
    'menutitle' => '',
    'donthit' => '0',
    'hidemenu' => '1',
),'',true,true);
$resources[11]->setContent(file_get_contents($sources['build'] . 'data/resources/site_settings.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Search results<br />');
$resources[12]= $modx->newObject('modResource');
$resources[12]->fromArray(array(
    'id' => 12,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Search results',
    'longtitle' => 'Search results',
    'description' => 'Search results',
    'alias' => 'search-results',
    'published' => '1',
	'template' => 3,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '',
    'searchable' => '0',
    'cacheable' => '1',
    'menutitle' => 'Search results',
    'donthit' => '0',
    'hidemenu' => '1',
),'',true,true);
$resources[12]->setContent(file_get_contents($sources['build'] . 'data/resources/search_results.content.html'));

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Thank you<br />');
$resources[13]= $modx->newObject('modResource');
$resources[13]->fromArray(array(
    'id' => 13,
    'class_key' => 'modResource',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Thank you',
    'longtitle' => 'Thank you',
    'description' => 'Thank you',
    'alias' => 'thank-you',
    'published' => '1',
	'template' => 2,
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '1',
    'menuindex' => '',
    'searchable' => '0',
    'cacheable' => '1',
    'menutitle' => 'Thank you',
    'donthit' => '0',
    'hidemenu' => '1',
),'',true,true);
$resources[13]->setContent(file_get_contents($sources['build'] . 'data/resources/thank_you.content.html'));

return $resources;