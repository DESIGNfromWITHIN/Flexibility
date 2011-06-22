<?php
/**
* Associate Template Variables to Templates
*
* @package MODULAR
* @subpackage build
*/
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of tvs and templates for each */
            $tvs = array(
				'tv_sidebar' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				'tv_slider' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				'tv_tagline' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				'tv_tagline_link' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				'tv_tagline_link_text' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				'tv_tagline_option' => array('Homepage template','Basic page template','Contact page template','Gallery page template'),
				
				'multiItemsGrid' => array('Page settings template'),
				'tv.contact_adress' => array('Page settings template'),
				'tv.email_adress' => array('Page settings template'),
				'tv.footer_content_left' => array('Page settings template'),
				'tv.footer_content_right' => array('Page settings template'),
				'tv.logo' => array('Page settings template'),
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