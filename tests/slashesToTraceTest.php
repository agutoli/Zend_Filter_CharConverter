<?php

/** path Zag on git hub**/
require_once '../library/Zend/Loader/Autoloader.php';
require_once '../library/Zend/Filter/CharConverter.php';

class SlasheToTraceTest extends PHPUnit_Framework_TestCase
{
    /**
     * Convert á to a
     */
    public function testSlashToTrace()
    {
        $filter = new Zend_Filter_CharConverter(array(
            'onlyAlnum' => true,
            'replaceWhiteSpace' => '-'
        ));
        $this->assertEquals('Sao-Paulo-2011-2012',$filter->filter('São Paulo 2011/2012'));
    }

     /**
     * Convert á to a
     */
    public function testTwoTrace_to_OneTrace()
    {
        $filter = new Zend_Filter_CharConverter(array(
            'onlyAlnum' => true,
            'replaceWhiteSpace' => '-'
        ));
        $this->assertEquals('Sao-Paulo-2011-2012',$filter->filter('São--Paulo 2011/2012'));
    }
}
