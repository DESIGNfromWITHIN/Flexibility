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
$chunks = array();

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'chunk_contact_form',
    'description' => 'Contact form chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.header.tpl'),
),'',true,true);

$chunks[2]= $modx->newObject('modChunk');
$chunks[2]->fromArray(array(
    'id' => 2,
    'name' => 'chunk_email_adress',
    'description' => 'Chunk email adress',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk_email_adress.tpl'),
),'',true,true);

$chunks[3]= $modx->newObject('modChunk');
$chunks[3]->fromArray(array(
    'id' => 3,
    'name' => 'chunk_email_form',
    'description' => 'E-mail reply template',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk_email_form.tpl'),
),'',true,true);

$chunks[4]= $modx->newObject('modChunk');
$chunks[4]->fromArray(array(
    'id' => 4,
    'name' => 'chunk_footer_contact',
    'description' => 'Footer contact chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk_footer_contact.tpl'),
),'',true,true);

$chunks[5]= $modx->newObject('modChunk');
$chunks[5]->fromArray(array(
    'id' => 5,
    'name' => 'chunk_footer_left',
    'description' => 'Footer left chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk_footer_left.tpl'),
),'',true,true);

$chunks[6]= $modx->newObject('modChunk');
$chunks[6]->fromArray(array(
    'id' => 6,
    'name' => 'chunk_footer_right',
    'description' => 'Footer right chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk_footer_right.tpl'),
),'',true,true);

$chunks[7]= $modx->newObject('modChunk');
$chunks[7]->fromArray(array(
    'id' => 7,
    'name' => 'email_adress_tpl',
    'description' => 'E-mail adress template chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/email_adress_tpl.tpl'),
),'',true,true);

$chunks[11]= $modx->newObject('modChunk');
$chunks[11]->fromArray(array(
    'id' => 11,
    'name' => 'logo_tpl',
    'description' => 'Logo chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/logo_tpl.tpl'),
),'',true,true);

$chunks[12]= $modx->newObject('modChunk');
$chunks[12]->fromArray(array(
    'id' => 12,
    'name' => 'settings_page_id',
    'description' => 'Enter the ID of your settings page',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/settings_page_id.tpl'),
),'',true,true);

$chunks[13]= $modx->newObject('modChunk');
$chunks[13]->fromArray(array(
    'id' => 13,
    'name' => 'slideTpl',
    'description' => 'Slider template chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/slideTpl.tpl'),
),'',true,true);

$chunks[14]= $modx->newObject('modChunk');
$chunks[14]->fromArray(array(
    'id' => 14,
    'name' => 'thank_you_page_id',
    'description' => 'Enter the ID of your Thank You page',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/thank_you_page_id.tpl'),
),'',true,true);

$chunks[15]= $modx->newObject('modChunk');
$chunks[15]->fromArray(array(
    'id' => 15,
    'name' => 'DemoGalAlbumRowTpl',
    'description' => 'GalAlbumRowTpl chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/DemoGalAlbumRowTpl.tpl'),
),'',true,true);

$chunks[16]= $modx->newObject('modChunk');
$chunks[16]->fromArray(array(
    'id' => 16,
    'name' => 'DemoGalItemThumb',
    'description' => 'GalItemThumb chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/DemoGalItemThumb.tpl'),
),'',true,true);

$chunks[17]= $modx->newObject('modChunk');
$chunks[17]->fromArray(array(
    'id' => 17,
    'name' => 'DemoGalleryAlbumTpl',
    'description' => 'GalleryAlbumTpl chunk',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/DemoGalleryAlbumTpl.tpl'),
),'',true,true);

$chunks[18]= $modx->newObject('modChunk');
$chunks[18]->fromArray(array(
    'id' => 18,
    'name' => 'headerTpl',
    'description' => 'Header chunk for all templates',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/headerTpl.tpl'),
),'',true,true);

$chunks[19]= $modx->newObject('modChunk');
$chunks[19]->fromArray(array(
    'id' => 19,
    'name' => 'footerTpl',
    'description' => 'Footer chunk for all templates',
	'category' => 'Flexibility',
    'snippet' => file_get_contents($sources['data'].'chunks/footerTpl.tpl'),
),'',true,true);

return $chunks;