<?php

class Ehavior_Heatmap_Block_Tracking extends Mage_Core_Block_Template
{
	protected function _getPageTrackingCode($accountId)
	{
		return '(function(e,t){var n=t.location.protocol=="https:"?"https://ssl-":"http://",r=t.createElement("script");r.async=!0,r.src=n+"boot'.intval($accountId).'.tracking.ehavior.net/boot/'.intval($accountId).'.js",t.getElementsByTagName("head")[0].appendChild(r),t.readyState||(e._onload=e.onload,e.onload=function(){t.readyState="complete",e._onload&&e._onload()})})(window,document);';
	}
	
	protected function _toHtml()
	{
		if (!Ehavior_Heatmap_Helper_Data::isEhaviorAvailable()) return '';
		return parent::_toHtml();
	}
}
