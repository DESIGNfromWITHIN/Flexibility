<?php
/**
 * Flexibility Build Script
 *
 * Copyright 2012 Menno Pietersen <info@designfromwithin.com>
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
 * @subpackage build
 */
/**
 * Build Flexibility Package
 *
 * Flexibility is a fully functional MODX Revolution website. Quickstart projects by creating a fully working MODX Revolution website with just one package.: Build script for Flexibility package
 * @package flexibility
 * @subpackage build
 */

/* Set package info be sure to set all of these */
define('PKG_NAME','Flexibility');
define('PKG_NAME_LOWER','flexibility');
define('PKG_VERSION','2.0.9');
define('PKG_RELEASE','alpha');
define('PKG_CATEGORY','Flexibility');

/* Set package options - you can turn these on one-by-one
 * as you create the transport package
 * */
$hasAssets = true; /* Transfer the files in the assets dir. */
$hasCore = true;   /* Transfer the files in the core dir. */
$hasSnippets = true;
$hasChunks = true;
$hasTemplates = true;
$hasResources = true;
$hasValidator = false; /* Run a validator before installing anything */
$hasResolver = true; /* Run a resolver after installing everything */
$hasSetupOptions = false; /* HTML/PHP script to interact with user */
$hasMenu = false; /* Add items to the MODx Top Menu */
$hasSettings = false; /* Add new MODx System Settings */

/* Note: TVs are connected to their templates in the script resolver
 * (see _build/data/resolvers/install.script.php)
 */
$hasTemplateVariables = true;
$hasTemplates = true;
/* Note: plugin events are connected to their plugins in the script
 * resolver (see _build/data/resolvers/install.script.php)
 */
$hasPlugins = false;
$hasPluginEvents = false;

$hasPropertySets = false;
/* Note: property sets are connected to elements in the script
 * resolver (see _build/data/resolvers/install.script.php)
 */
$hasSubPackages = true; /* add in other component packages (transport.zip files)*/
/* Note: The package files will be copied to core/packages but will
 * have to be installed manually with "Add New Package" and "Search
 * Locally for Packages" in Package Manager. Be aware that the
 * copied packages may be older versions than ones already
 * installed. This is necessary because Package Manager's
 * autoinstall of the packages is unreliable at this point. 
 */

/******************************************
 * Work begins here
 * ****************************************/

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* define sources */
$root = dirname(dirname(__FILE__)) . '/';
$sources= array (
    'root' => $root,
    'build' => $root . '_build/',
    /* note that the next two must not have a trailing slash */
    'source_core' => $root.'core/components/'.PKG_NAME_LOWER,
	'source_templates' => $root.'assets/templates/'.PKG_NAME_LOWER,
    'resolvers' => $root . '_build/resolvers/',
	'subpackages' => $root . '_build/subpackages/',
    'validators'=> $root . '_build/validators/',
    'data' => $root . '_build/data/',
    'docs' => $root,
    'install_options' => $root . '_build/install.options/',
    'packages'=> $root . 'core/packages',
);
unset($root);

/* Instantiate MODx -- if this require fails, check your
 * _build/build.config.php file
 */
require_once $sources['build'].'build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

/* load builder */
$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER, PKG_VERSION, PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER,false,true,'{core_path}components/'.PKG_NAME_LOWER.'/');


/* create category  The category is required and will automatically
 * have the name of your package
 */

$category = $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category', 'Flexibility');

/* add subpackages */
$success = include $sources['data'].'transport.subpackages.php';
if (!$success) { $modx->log(modX::LOG_LEVEL_FATAL,'Adding subpackages failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in subpackages.'); flush();
unset($success);

/* add snippets */
if ($hasSnippets) {
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in snippets.');
    $snippets = include $sources['data'].'transport.snippets.php';
    if (is_array($snippets)) {
        $category->addMany($snippets, 'Snippets');
    } else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding snippets failed.'); }
}

if ($hasPropertySets) { /* add property sets */
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in property sets.');
    $propertysets = include $sources['data'].'transport.propertysets.php';
    /* note: property set' properties are set in transport.propertysets.php */
    if (is_array($snippets)) {
        $category->addMany($propertysets, 'PropertySets');
    } else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding property sets failed.'); }
}

if ($hasChunks) { /* add chunks  */
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in chunks.');
    /* note: Chunks' default properties are set in transport.chunks.php */    
    $chunks = include $sources['data'].'transport.chunks.php';
    if (is_array($chunks)) {
        $category->addMany($chunks, 'Chunks');
    } else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding chunks failed.'); }
}

if ($hasTemplates) { /* add templates  */
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in templates.');
    /* note: Templates' default properties are set in transport.templates.php */
    $templates = include $sources['data'].'transport.templates.php';
    if (is_array($templates)) {
        if (! $category->addMany($templates,'Templates')) {
            $modx->log(modX::LOG_LEVEL_INFO,'addMany failed with templates.');
        };
    } else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding templates failed.'); }
}

/* add tvs */

if ($hasTemplateVariables) {
	/* add tvs */
	$tvs = include $sources['data'].'transport.tvs.php';
	if (is_array($tvs)) {
		$category->addMany($tvs,'TemplateVars');
	}
}


if ($hasPlugins) {
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in Plugins.');
    $plugins = include $sources['data'] . 'transport.plugins.php';
     if (is_array($plugins)) {
        $category->addMany($plugins);
     }
}

/* Create Category attributes array dynamically
 * based on which elements are present
 */

$attr = array(xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
);

if ($hasValidator) {
      $attr[xPDOTransport::ABORT_INSTALL_ON_VEHICLE_FAIL] = true;
}

if ($hasSnippets) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['Snippets'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        );
}

if ($hasPropertySets) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['PropertySets'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        );
}

if ($hasChunks) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['Chunks'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        );
}

if ($hasPlugins) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['Plugins'] = array(
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'name',
    );
}

if ($hasTemplates) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['Templates'] = array(
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'templatename',
    );
}

if ($hasTemplateVariables) {
    $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES]['TemplateVars'] = array(
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'name',
    );
}

/* create a vehicle for the category and all the things
 * we've added to it.
 */
$vehicle = $builder->createVehicle($category,$attr);

if ($hasValidator) {
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in Script Validator.');
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.formit.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.gallery.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.getresources.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.if.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.migx.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.simplesearch.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.switch.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.tinymce.php',
    ));
    $vehicle->validate('php',array(
        'source' => $sources['validators'] . 'validate.wayfinder.php',
    ));
}
/* package in script resolver if any */
if ($hasResolver) {
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in Script Resolver.');
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'install.script.php',
    ));
} 

/* package in script resolver if any */
if ($hasResolver) {
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in TV Resource Resolver.');
    $vehicle->resolve('php',array(
		'source' => $sources['resolvers'] . 'resolve.tv.resource.php',
    ));
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.tv.template.php',
    ));
}


/* This section transfers every file in the local
 flexibilitys/flexibility/assets directory to the
 target site's assets/flexibility directory on install.
 If the assets dir. has been renamed or moved, they will still
 go to the right place.
 */

if ($hasTemplates) {
    $vehicle->resolve('file',array(
            'source' => $sources['source_templates'],
            'target' => "return MODX_ASSETS_PATH . 'templates/';",
        ));
}

/* Add subpackages */
/* The transport.zip files will be copied to core/packages
 * but will have to be installed manually with "Add New Package and
 *  "Search Locally for Packages" in Package Manager
 */

if ($hasSubPackages) {
    $modx->log(modX::LOG_LEVEL_INFO, 'Adding in subpackages.');
     $vehicle->resolve('file',array(
        'source' => $sources['packages'],
        'target' => "return MODX_CORE_PATH;",
        ));
}

/* Put the category vehicle (with all the stuff we added to the
 * category) into the package 
 */
$builder->putVehicle($vehicle);



/* Transport Resources */

if ($hasResources) {
    $resources = include $sources['data'].'transport.resources.php';
    if (!is_array($resources)) {
        $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in resources.');
    } else {
        $attributes= array(
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'pagetitle',
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'ContentType' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    ),
);
foreach ($resources as $resource) {
    $vehicle = $builder->createVehicle($resource,$attributes);
    $builder->putVehicle($vehicle);
}
        $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($resources).' resources.');
    }
    unset($resources,$resource,$attributes);
}

/* Transport Menus */
if ($hasMenu) {
    /* load menu */
    $modx->log(modX::LOG_LEVEL_INFO,'Packaging in menu...');
    $menu = include $sources['data'].'transport.menu.php';
    if (empty($menu)) {
        $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in menu.');
    } else {
        $vehicle= $builder->createVehicle($menu,array (
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'text',
        xPDOTransport::RELATED_OBJECTS => true,
        xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
            'Action' => array (
                xPDOTransport::PRESERVE_KEYS => false,
                xPDOTransport::UPDATE_OBJECT => true,
                xPDOTransport::UNIQUE_KEY => array ('namespace','controller'),
            ),
        ),
));
        $builder->putVehicle($vehicle);

        $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($menu).' menu items.');
        unset($vehicle,$menu);
    }
}

/* load system settings */
if ($hasSettings) {
    $settings = include $sources['data'].'transport.settings.php';
    if (!is_array($settings)) {
        $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in settings.');
    } else {
        $attributes= array(
            xPDOTransport::UNIQUE_KEY => 'key',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
        );
        foreach ($settings as $setting) {
            $vehicle = $builder->createVehicle($setting,$attributes);
            $builder->putVehicle($vehicle);
        }
        $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($settings).' System Settings.');
        unset($settings,$setting,$attributes);
    }
}

/* Next-to-last step - pack in the license file, readme.txt, changelog,
 * and setup options 
 */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'),
    'setup-options' => array(
        'source' => $sources['install_options'].'user.input.php',
    ),
));

/* Last step - zip up the package */
$builder->pack();

/* report how long it took */
$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(xPDO::LOG_LEVEL_INFO, "Package Built.");
$modx->log(xPDO::LOG_LEVEL_INFO, "Execution time: {$totalTime}");
exit();
