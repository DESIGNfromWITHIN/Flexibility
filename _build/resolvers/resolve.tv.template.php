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
 * Associate Template Variables to Templates
 *
 * @package modxss
 * @subpackage build
 */
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of tvs and templates for each */
            $tvs = array(
                'footer_box_01' => array('settings_template'),
            );

            foreach ($tvs as $tvName => $templateNames) {
                if (!is_array($templateNames) || empty($templateNames)) continue;

                $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                if (empty($tv)) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                    continue;
                }

                $rank = 0;
                foreach ($templateNames as $templateName) {
                    $template = $modx->getObject('modTemplate',array('templatename' => $templateName));

                    if (!empty($template)) {
                        $templateVarTemplate = $modx->getObject('modTemplateVarTemplate',array(
                            'tmplvarid' => $tv->get('id'),
                            'templateid' => $template->get('id'),
                        ));
                        if (!$templateVarTemplate) {

                            $templateVarTemplate = $modx->newObject('modTemplateVarTemplate');
                            $templateVarTemplate->fromArray(array(
                                'tmplvarid' => $tv->get('id'),
                                'templateid' => $template->get('id'),
                                'rank' => $rank,
                            ),'',true,true);

                            if ($templateVarTemplate->save() == false) {
                                $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Template '.$templateName);
                            }
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find Template '.$templateName);
                    }
                    $rank++;
                }
            }
            break;
    }
}
return true;