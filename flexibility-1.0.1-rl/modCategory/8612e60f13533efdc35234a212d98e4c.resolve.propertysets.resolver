<?php
/**
* Associate Property Sets to Elements
*
* @package MODULAR
* @subpackage build
*/
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of property sets, and elements associated with each */
            $sets = array(
                /*'BlogList' => array(
                    array('class' => 'modSnippet','name' => 'getResourcesTag'),
                ),*/
            );

            foreach ($sets as $setName => $elements) {
                if (!is_array($elements) || empty($elements)) continue;

                foreach ($elements as $el) {
                    if (!is_array($el) || empty($el['class']) || empty($el['name'])) continue;

                    $propertySet = $modx->getObject('modPropertySet',array('name' => $setName));
                    $element = $modx->getObject($el['class'],array('name' => $el['name']));

                    if ($propertySet && $element) {
                        $propertySetElement = $modx->getObject('modElementPropertySet',array(
                            'element' => $element->get('id'),
                            'element_class' => $el['class'],
                            'property_set' => $propertySet->get('id'),
                        ));
                        if (!$propertySetElement) {
                            $propertySetElement = $modx->newObject('modElementPropertySet');
                            $propertySetElement->fromArray(array(
                                'element' => $element->get('id'),
                                'element_class' => $el['class'],
                                'property_set' => $propertySet->get('id'),
                            ),'',true,true);
                            if ($propertySetElement->save() == false) {
                                $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the Element to the Property Set.');
                            }
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find property set and element.');
                    }
                }
            }
            break;
    }
}
return true;