<?php
/**
 * Flexibility transport plugins
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
 * Flexibility is a fully functional MODX Revolution website. Quickstart projects by creating a fully working MODX Revolution website with just one package.:  Array of plugin objects for Flexibility package
 * @package flexibility
 * @subpackage build
 */

if (! function_exists('getPluginContent')) {
    function getpluginContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}
$plugins = array();

$plugins[1]= $modx->newObject('modplugin');
$plugins[1]->fromArray(array(
    'id' => 1,
    'name' => 'MyPlugin1',
    'description' => 'MyPlugin1 for Flexibility.',
    'plugincode' => getPluginContent($sources['source_core'].'/elements/plugins/myplugin1.plugin.php'),
),'',true,true);
$properties = include $sources['data'].'properties/properties.myplugin1.php';
$plugins[1]->setProperties($properties);
unset($properties);


$plugins[2]= $modx->newObject('modplugin');
$plugins[2]->fromArray(array(
    'id' => 2,
    'name' => 'MyPlugin2',
    'description' => 'MyPlugin2 for Flexibility.',
    'plugincode' => getPluginContent($sources['source_core'].'/elements/plugins/myplugin2.plugin.php'),
),'',true,true);
$properties = include $sources['data'].'properties/properties.myplugin2.php';
$plugins[2]->setProperties($properties);
unset($properties);

return $plugins;