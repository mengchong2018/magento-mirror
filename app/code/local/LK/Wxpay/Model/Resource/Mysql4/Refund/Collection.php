<?php 
class LK_Wxpay_Model_Resource_Mysql4_Refund_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	protected function _construct()
	{
		parent::_construct();
		$this->_init('wxpay/refund');
	}
}

?>