<?php
/**
 * Flexibility transport templates
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
 * Flexibility is a fully functional MODX Revolution website. Quickstart projects by creating a fully working MODX Revolution website with just one package.: Array of template objects for Flexibility package
 * @package flexibility
 * @subpackage build
 */

$templates = array();

$templates[1]= $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => 1,
    'templatename' => 'Flexibility',
    'description' => 'Basic template for any page',
	'category' => 'Template',
    'content' => file_get_contents($sources['data'].'/templates/flexibility.tpl'),
    'properties' => '',
),'',true,true);

$templates[2]= $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => 2,
    'templatename' => 'Search results',
    'description' => 'Search results Template',
	'category' => 'Template',
    'content' => file_get_contents($sources['data'].'/templates/search_results.tpl'),
    'properties' => '',
),'',true,true);

$templates[3]= $modx->newObject('modTemplate');
$templates[3]->fromArray(array(
    'id' => 3,
    'templatename' => 'settings_template',
    'description' => 'Template for site settings',
	'category' => 'Template',
    'content' => file_get_contents($sources['data'].'/templates/settings_template.tpl'),
    'properties' => '',
),'',true,true);

return $templates;