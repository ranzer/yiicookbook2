<?php
	class ShoppingCart extends CComponent
	{
		private $_checkout = false;
		
		public function getCheckout()
		{
			return $this->_checkout;
		}
		
		public function checkout()
		{
			$this->_checkout = true;
			
			$this->onCheckout(new CEvent($this));
		}
		
		public function onCheckout($event)
		{
			$this->raiseEvent('onCheckout', $event);
		}
	}
?>