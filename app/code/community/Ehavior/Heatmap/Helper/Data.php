<?php

class Ehavior_Heatmap_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE  = 'heatmap/general/active';
    const XML_PATH_ACCOUNT = 'heatmap/general/account';

    /**
     * Whether Ehavior is ready to use
     *
     * @param mixed $store
     * @return bool
     */
    public function isEhaviorAvailable($store = null)
    {
        $accountId = Mage::getStoreConfig(self::XML_PATH_ACCOUNT, $store);
        return $accountId && Mage::getStoreConfigFlag(self::XML_PATH_ACTIVE, $store);
    }
}