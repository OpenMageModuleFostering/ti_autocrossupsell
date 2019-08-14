<?php
 /**
* Ti Automatic Cross & Up-sell Module
*
* @category    Ti
* @package     Ti_Autocrossupsell
* @copyright   Copyright (c) 2012 Ti Technologies (http://www.titechnologies.in)
* @link        http://www.titechnologies.in
*/
class Ti_Autocrossupsell_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED          = 'autocrossupsell/autocrossupsellsettings/enable_action';
    const XML_PATH_ENABLE_UPSELL    = 'autocrossupsell/autocrossupsellsettings/enable_upsell';
    const XML_PATH_CATEGORY_FILTER  = 'autocrossupsell/autocrossupsellsettings/category_filter';
    const XML_PATH_ENABLE_CROSSELL  = 'autocrossupsell/autocrossupsellsettings/enable_crossell';


    public function isEnabled() {
        return Mage::getStoreConfig(self::XML_PATH_ENABLED);
    }
     public function isCrossellEnabled() {
        return Mage::getStoreConfig(self::XML_PATH_ENABLE_CROSSELL);
    }
    public function isUpsellEnabled() {
        return Mage::getStoreConfig(self::XML_PATH_ENABLE_UPSELL);
    }
     public function isCategoryFilterEnabled() {
        return Mage::getStoreConfig(self::XML_PATH_CATEGORY_FILTER);
    }

}
