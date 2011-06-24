<?php
/**
* MODx Sample Site
*
* Copyright 2010 by Shaun McCormick <shaun@collabpad.com>, excepting
* subpackages installed by the component.
*
* This file is part of MODx Sample Site, a packaged sample site for MODx
* Revolution.
*
* MODx Sample Site is free software; you can redistribute it and/or modify it
* under the terms of the GNU General Public License as published by the Free
* Software Foundation; either version 2 of the License, or (at your option) any
* later version.
*
* MODx Sample Site is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
* FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
* details.
*
* You should have received a copy of the GNU General Public License along with
* MODx Sample Site; if not, write to the Free Software Foundation, Inc., 59
* Temple Place, Suite 330, Boston, MA 02111-1307 USA
*
* @package modxss
*/
/**
* Verify FormIt is latest or equal in version
*
* @package modxss
*/
$newer= true;
if ($transport && $transport->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $transport->xpdo;

            /* define formit version */
            $newVersion = '1.3.0-pl';
            $newVersionMajor = '1';
            $name = 'getresources';

            /* now loop through packages and check for newer versions
* Do not install if newer or equal versions are found */
            $newer = true;
            $modx->addPackage('modx.transport',$modx->getOption('core_path').'model/');
            $c = $modx->newQuery('transport.modTransportPackage');
            $c->where(array(
                'package_name' => $name,
                'version_major:>=' => $newVersionMajor,
            ));
            $packages = $modx->getCollection('transport.modTransportPackage',$c);

            foreach ($packages as $package) {
                if ($package->compareVersion($newVersion)) {
                    $newer = false;
                    break;
                }
            }
            break;
    }
}

return $newer;