<?php
	class Article extends CComponent
	{
		private $name;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($value)
		{
			$this->name = $value;
		}
	}
?>