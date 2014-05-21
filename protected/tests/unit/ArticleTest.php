<?php
	class ArticleTest extends CTestCase
	{
		public function testGetterAndSetter()
		{
			$article = new Article;
			
			$article->name = 'Shelf';
			
			$this->assertEquals($article->name, 'Shelf');
		}
	}
?>