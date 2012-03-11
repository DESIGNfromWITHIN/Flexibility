<?php
/**
 * Associate Template Variables to Templates
 *
 * @package Flexibility
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
                'footer_box_02' => array('settings_template'),
                'footer_box_03' => array('settings_template'),
                'footer_box_04' => array('settings_template'),
                'page_box_01' => array('Flexibility', 'Search results'),
                'page_box_02' => array('Flexibility', 'Search results'),
                'page_box_03' => array('Flexibility', 'Search results'),
                'page_box_04' => array('Flexibility', 'Search results'),
                'page_lightbox' => array('Flexibility', 'Search results'),
                'sidebar' => array('Flexibility', 'Search results'),
                'optional_contactform' => array('Flexibility', 'Search results'),
                'optional_gallery' => array('Flexibility'),
                'optional_slider' => array('Flexibility'),
                'page_boxes' => array('Flexibility', 'Search results'),
                'email_adress' => array('settings_template'),
                'FooterBoxNumber' => array('settings_template'),
                'siteLogo' => array('settings_template'),
                'multiItemsGrid' => array('settings_template'),
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