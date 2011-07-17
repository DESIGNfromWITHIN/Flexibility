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

            /* list of tvs and resourceIDs/values for each */
            $tvs = array(	
				'tv_sidebar' => array(
                    '1' => '<h1>Sidebar title</h1><p>Some content for the sidebar</p>',
                    '2' => '<h1>Sidebar title</h1><p>Some content for the sidebar</p>',
					'3' => '',
					'4' => '',
                ),
				
				'tv_slider' => array(
                    '1' => 'no',
                    '2' => 'no',
					'3' => 'no',
					'4' => 'no',
                ),
				
				'tv_tagline' => array(
                    '1' => 'This is a tagline',
                    '2' => 'This is a tagline without a link',
					'3' => '',
					'4' => '',
                ),
				
				'tv_tagline_link' => array(
                    '1' => '',
                    '2' => '',
					'3' => '',
					'4' => '',
                ),
				
				'tv_tagline_link_text' => array(
                    '1' => 'Link text',
                    '2' => '',
					'3' => '',
					'4' => '',
                ),
				
				'tv_tagline_option' => array(
                    '1' => 'tagline_link',
                    '2' => 'tagline',
					'3' => 'no_tagline',
					'4' => 'no_tagline',
                ),
				
				'multiItemsGrid' => array(
                    '5' => 'Page settings template',
                ),
				
				'tv.contact_adress' => array(
                    '5' => 'Fill in you adress',
                ),
				
				'tv.email_adress' => array(
                    '5' => 'your@email.com',
                ),
				
				'tv.footer_content_left' => array(
                    '5' => 'Left footer content',
                ),
				
				'tv.footer_content_right' => array(
                    '5' => 'Right footer content',
                ),
				
				'tv.logo' => array(
                    '5' => 'assets/templates/templates/main/images/site/logo.png',
                ),
            );

            foreach ($tvs as $tvName => $resources) {
                if (!is_array($resources) || empty($resources)) continue;

                $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                if (empty($tv)) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                    continue;
                }

                foreach ($resources as $resourceId => $value) {
                    $templateVarResource = $modx->getObject('modTemplateVarResource',array(
                        'tmplvarid' => $tv->get('id'),
                        'contentid' => $resourceId,
                    ));
                    if (!$templateVarResource) {
                        $templateVarResource = $modx->newObject('modTemplateVarResource');
                        $templateVarResource->fromArray(array(
                            'tmplvarid' => $tv->get('id'),
                            'contentid' => $resourceId,
                            'value' => $value,
                        ),'',true,true);

                        if ($templateVarResource->save() == false) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Resource '.$resourceId);
                        }
                    }
                }
            }
            break;
    }
}
return true;