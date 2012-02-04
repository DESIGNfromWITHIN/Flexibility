<?php
/**
* Articles
*
* Copyright 2011-12 by Shaun McCormick <shaun+articles@modx.com>
*
* Articles is free software; you can redistribute it and/or modify it under the
* terms of the GNU General Public License as published by the Free Software
* Foundation; either version 2 of the License, or (at your option) any later
* version.
*
* Articles is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* Articles; if not, write to the Free Software Foundation, Inc., 59 Temple
* Place, Suite 330, Boston, MA 02111-1307 USA
*
* @package articles
*/
/**
* Package in subpackages
*
* @var modX $modx
* @var modPackageBuilder $builder
* @var array $sources
* @package articles
*/
$subpackages = array(
    'formit' => 'formit-2.0.2-pl',
    'gallery' => 'gallery-1.4.0-rc1',
    'getresources' => 'getresources-1.4.0-pl',
    'if' => 'if-1.1-pl',
    'migx' => 'migx-2.0.0-beta1',
	'simplesearch' => 'simplesearch-1.5.1-pl',
	'switch' => 'switch-1.0-beta1',
	'tinymce' => 'tinymce-4.3.1-pl',
	'wayfinder' => 'wayfinder-2.3.3-pl',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle = $builder->createVehicle(array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ),$spAttr);
    $vehicle->validate('php',array(
        'source' => $sources['validators'].'validate.'.$name.'.php'
    ));
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'].'packages/resolve.'.$name.'.php'
    ));
    $builder->putVehicle($vehicle);
}
return true;