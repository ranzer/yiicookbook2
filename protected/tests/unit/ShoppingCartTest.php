<?php
	class ShoppingCartTest extends CTestCase
	{
		public function testCheckout()
		{
			$shoppingCart = new ShoppingCart();
			$isEventHandlerCalled = false;
			
			$shoppingCart->attachEventHandler('onCheckout', function($event) {			
				$this->assertTrue($event->sender->checkout);
				$this->assertTrue($isEventHandlerCalled);
			});
			
			$shoppingCart->checkout();
		}
	}
?>