<?php

class OtherControllerTests extends ControllerTestCase
{
	
	protected $locales = array ('de', 'en', 'fr', 'pt_BR', 'ru');
	
   /**
    * @access protected
    */
	protected function tearDown()
	{
		$this->resetRequest();
      $this->resetResponse();
      parent::tearDown();
	}
	
   /*
	 * test language files
	 */
   public function testTranslate() {
   	print "\n".__CLASS__."\t".__FUNCTION__.' ';
   	$translate = Zend_Registry::get('translate');
   	foreach($this->locales as $locale) {
   		$this->assertTrue( $translate->isTranslated('Desktop', false, $locale) , "invalid '$locale' language file!");
   	}
	}
	
}