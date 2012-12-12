<?php
/**
* Associate Template Variables to Resources
*
* @package Flexibility
* @subpackage build
*/
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of tvs and resourceIDs/values for each */
            $templateVariables = array(	
				'footer_box_01' => array(
					'11' => '<h3>Footer box 1</h3><p>Some content for this box.</p>',
                ),
				
				'footer_box_02' => array(
					'11' => '<h3>Footer box 2</h3><p>Some content for this box.</p>',
                ),
				
				'footer_box_03' => array(
					'11' => '<h3>Footer box 3</h3><p>Some content for this box.</p>',
                ),
				'footer_box_04' => array(
					'11' => '<h3>Footer box 4</h3><p>Some content for this box.</p>',
                ),
				
				'page_box_01' => array(
                    '14' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                    '2' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'3' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'4' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'5' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'6' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'7' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'8' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'9' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'10' => '<h3>Added in the Sub-content box 1 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                ),
				
				'page_box_02' => array(
                    '14' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                    '2' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'3' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'4' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'5' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'6' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'7' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'8' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'9' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'10' => '<h3>Added in the Sub-content box 2 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                ),
				
				'page_box_03' => array(
                    '14' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                    '2' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'3' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'4' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'5' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'6' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'7' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'8' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'9' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'10' => '<h3>Added in the Sub-content box 3 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                ),
				
				'page_box_04' => array(
                    '14' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                    '2' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'3' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'4' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'5' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'6' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'7' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'8' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'9' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
					'10' => '<h3>Added in the Sub-content box 4 TV</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                ),
				
				'page_lightbox' => array(
                    '14' => '<h3>Title lightbox 1</h3>
<p>This is just some content.</p>',
                ),
				
				'sidebar' => array(
                    '14' => '<h3>Sidebar title</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget sem ac neque egestas laoreet. Mauris pulvinar pharetra dolor ut elementum. Mauris et ipsum enim, sit amet molestie justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pellentesque mattis elit id eleifend.</p>',
                    '2' => '',
					'3' => '',
					'4' => '',
					'5' => '',
					'6' => '',
					'7' => '',
					'8' => '',
					'9' => '',
					'10' => '',
					'11' => '',
					'12' => '',
					'13' => '',
                ),
				
				'optional_contactform' => array(
                    '14' => 'no',
                    '2' => 'no',
					'3' => 'no',
					'4' => 'no',
					'5' => 'yes',
					'6' => 'no',
					'7' => 'no',
					'8' => 'no',
					'9' => 'no',
					'10' => 'no',
					'12' => 'no',
					'13' => 'no',
                ),
				
				'optional_gallery' => array(
                    '14' => 'no',
                    '2' => 'no',
					'3' => 'yes',
					'4' => 'no',
					'5' => 'no',
					'6' => 'no',
					'7' => 'no',
					'8' => 'no',
					'9' => 'no',
					'10' => 'no',
					'13' => 'no',
                ),
				
				'optional_slider' => array(
                    '14' => 'no',
                    '2' => 'no',
					'3' => 'no',
					'4' => 'no',
					'5' => 'no',
					'6' => 'no',
					'7' => 'no',
					'8' => 'no',
					'9' => 'no',
					'10' => 'no',
					'13' => 'no',
                ),
				
				'page_boxes' => array(
                    '14' => '3',
                    '2' => '0',
					'3' => '0',
					'4' => '0',
					'5' => '0',
					'6' => '0',
					'7' => '0',
					'8' => '0',
					'9' => '0',
					'10' => '0',
					'12' => '0',
					'13' => '0',
                ),
				
				'email_adress' => array(
					'11' => 'your@email.com',
                ),
				
				'FooterBoxNumber' => array(
					'11' => '4',
                ),
				
				'siteLogo' => array(
					'11' => 'assets/templates/flexibility/images/logo.png',
                ),
				
            );

            foreach ($templateVariables as $tvName => $resources) {
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