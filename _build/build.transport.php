<?php
/**
 * Flexibility build script
 *
 * @package Flexibility
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

$root = dirname(dirname(__FILE__)).'/';
$sources= array (
    'root' => $root,
    'build' => $root .'_build/',
    'resolvers' => $root . '_build/resolvers/',
    'data' => $root . '_build/data/',
    'docs' => $root.'_build/docs/',
	'template' => $root.'_build/main/',
	'subpackages' => $root . '_build/subpackages/',
	'validators' => $root . '_build/validators/',
);
unset($root);

/* override with your own defines here (see build.config.sample.php) */
require_once dirname(__FILE__) . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['build'] . '/includes/functions.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(MODX_LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage('flexibility','1.0.6','pl');
$builder->registerNamespace('flexibility',false,true,'{core_path}components/flexibility/');

/* create category */
$category= $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category','flexibility');

/* add subpackages */
$success = include $sources['data'].'transport.subpackages.php';
if (!$success) { $modx->log(modX::LOG_LEVEL_FATAL,'Adding subpackages failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in subpackages.'); flush();
unset($success);

/* add templates */
$templates = include $sources['data'].'transport.templates.php';
if (is_array($templates)) {
    $category->addMany($templates,'Templates');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding templates failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($templates).' templates.'); flush();
unset($templates);

/* add chunks */
$chunks = include $sources['data'].'transport.chunks.php';
if (is_array($chunks)) {
    $category->addMany($chunks,'Chunks');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding chunks failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($chunks).' chunks.'); flush();
unset($chunks);

/* add snippets */
$snippets = include $sources['data'].'transport.snippets.php';
if (is_array($snippets)) {
    $category->addMany($snippets,'Snippets');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding snippets failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($snippets).' snippets.'); flush();
unset($snippets);

/* add tvs */
$tvs = include $sources['data'].'transport.tvs.php';
if (is_array($tvs)) {
    $category->addMany($tvs,'TemplateVars');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding tvs failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($tvs).' tvs.'); flush();
unset($tvs);

/* load resources */
$resources = include_once $sources['data'].'transport.resources.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No resources returned.');
$attributes= array(
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'id',
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
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($resources).' Resources.'); flush();
unset($resources,$resource,$attributes);

/* create base category vehicle */
$attr = array(
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Snippets' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        ),
        'Chunks' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        ),
        'Templates' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        ),
        'TemplateVars' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        ),
    )
);
$vehicle = $builder->createVehicle($category,$attr);
$vehicle->resolve('file',array(
    'source' => $sources['template'],
    'target' => "return MODX_ASSETS_PATH . 'templates/';",
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.propertysets.php',
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.tv.template.php',
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.tv.resource.php',
));
$builder->putVehicle($vehicle);

/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'setup-options' => array(
        'source' => $sources['build'].'setup.options.php',
    ),
));

$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();