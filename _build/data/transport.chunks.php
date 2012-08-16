<?php
/**
 * Flexibility transport chunks
 * Copyright 2011 Menno Pietersen <info@designfromwithin.com>
 * @author Menno Pietersen <info@designfromwithin.com>
 * 13/12/2011
 *
 * Flexibility is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Flexibility is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Flexibility; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package flexibility
 */
/**
 * Flexibility is a fully functional MODX Revolution website. Quickstart projects by creating a fully working MODX Revolution website with just one package.: Array of chunk objects for Flexibility package
 * @package flexibility
 * @subpackage build
 */

$chunks = array();

$chunks[3]= $modx->newObject('modChunk');
$chunks[3]->fromArray(array(
    'id' => 3,
    'name' => 'page_gallery',
    'description' => 'Gallery chunk',
    'snippet' => file_get_contents($sources['data'].'/chunks/page_gallery.tpl'),
    'properties' => '',
),'',true,true);

$chunks[4]= $modx->newObject('modChunk');
$chunks[4]->fromArray(array(
    'id' => 4,
    'name' => 'page_lightbox_trigger',
    'description' => 'Trigger for optional page lightbox',
    'snippet' => file_get_contents($sources['data'].'/chunks/page_lightbox_trigger.tpl'),
    'properties' => '',
),'',true,true);

$chunks[5]= $modx->newObject('modChunk');
$chunks[5]->fromArray(array(
    'id' => 5,
    'name' => 'logoTpl',
    'description' => 'Site logo template',
    'snippet' => file_get_contents($sources['data'].'/chunks/logoTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[6]= $modx->newObject('modChunk');
$chunks[6]->fromArray(array(
    'id' => 6,
    'name' => 'MyEmailChunk',
    'description' => 'Email chunk',
    'snippet' => file_get_contents($sources['data'].'/chunks/MyEmailChunk.tpl'),
    'properties' => '',
),'',true,true);

$chunks[7]= $modx->newObject('modChunk');
$chunks[7]->fromArray(array(
    'id' => 7,
    'name' => 'contactform',
    'description' => 'Contactform code',
    'snippet' => file_get_contents($sources['data'].'/chunks/contactform.tpl'),
    'properties' => '',
),'',true,true);

$chunks[8]= $modx->newObject('modChunk');
$chunks[8]->fromArray(array(
    'id' => 8,
    'name' => 'email_adress_tpl',
    'description' => 'Email adress for the contactform',
    'snippet' => file_get_contents($sources['data'].'/chunks/email_adress_tpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[9]= $modx->newObject('modChunk');
$chunks[9]->fromArray(array(
    'id' => 9,
    'name' => 'FlexibilityGalAlbumRowTpl',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'/chunks/FlexibilityGalAlbumRowTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[10]= $modx->newObject('modChunk');
$chunks[10]->fromArray(array(
    'id' => 10,
    'name' => 'FlexibilityGalItemThumb',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'/chunks/FlexibilityGalItemThumb.tpl'),
    'properties' => '',
),'',true,true);

$chunks[11]= $modx->newObject('modChunk');
$chunks[11]->fromArray(array(
    'id' => 11,
    'name' => 'FlexibilityGalleryAlbumTpl',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'/chunks/FlexibilityGalleryAlbumTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[12]= $modx->newObject('modChunk');
$chunks[12]->fromArray(array(
    'id' => 12,
    'name' => 'FooterBox01Tpl',
    'description' => 'Content for footer box 1',
    'snippet' => file_get_contents($sources['data'].'/chunks/FooterBox01Tpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[13]= $modx->newObject('modChunk');
$chunks[13]->fromArray(array(
    'id' => 13,
    'name' => 'FooterBox02Tpl',
    'description' => 'Content for footer box 2',
    'snippet' => file_get_contents($sources['data'].'/chunks/FooterBox02Tpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[14]= $modx->newObject('modChunk');
$chunks[14]->fromArray(array(
    'id' => 14,
    'name' => 'FooterBox03Tpl',
    'description' => 'Content for footer box 3',
    'snippet' => file_get_contents($sources['data'].'/chunks/FooterBox03Tpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[15]= $modx->newObject('modChunk');
$chunks[15]->fromArray(array(
    'id' => 15,
    'name' => 'FooterBox04Tpl',
    'description' => 'Content for footer box 4',
    'snippet' => file_get_contents($sources['data'].'/chunks/FooterBox04Tpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[16]= $modx->newObject('modChunk');
$chunks[16]->fromArray(array(
    'id' => 16,
    'name' => 'FooterBoxNumberTpl',
    'description' => 'TV needed for the footerboxes option',
    'snippet' => file_get_contents($sources['data'].'/chunks/FooterBoxNumberTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[17]= $modx->newObject('modChunk');
$chunks[17]->fromArray(array(
    'id' => 17,
    'name' => 'innerTpl',
    'description' => 'Navigation sub ul code',
    'snippet' => file_get_contents($sources['data'].'/chunks/innerTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[18]= $modx->newObject('modChunk');
$chunks[18]->fromArray(array(
    'id' => 18,
    'name' => 'rowTpl',
    'description' => 'Navigation row code',
    'snippet' => file_get_contents($sources['data'].'/chunks/rowTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[19]= $modx->newObject('modChunk');
$chunks[19]->fromArray(array(
    'id' => 19,
    'name' => 'SearchFormTpl',
    'description' => 'Search form template',
    'snippet' => file_get_contents($sources['data'].'/chunks/SearchFormTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[20]= $modx->newObject('modChunk');
$chunks[20]->fromArray(array(
    'id' => 20,
    'name' => 'slideTpl',
    'description' => 'Code for slider slide.',
    'snippet' => file_get_contents($sources['data'].'/chunks/slideTpl.tpl'),
    'properties' => '',
),'',true,true);

$chunks[21]= $modx->newObject('modChunk');
$chunks[21]->fromArray(array(
    'id' => 21,
    'name' => 'flexibility_header',
    'description' => 'Header for the Flexibility template',
    'static' => 1,
    'source' => 1,
    'static_file' => 'assets/templates/flexibility/flexibility_header.html',
),'',true,true);

$chunks[22]= $modx->newObject('modChunk');
$chunks[22]->fromArray(array(
    'id' => 22,
    'name' => 'flexibility_footer',
    'description' => 'Footer for the Flexibility template',
    'static' => 1,
    'source' => 1,
    'static_file' => 'assets/templates/flexibility/flexibility_footer.html',
),'',true,true);

return $chunks;