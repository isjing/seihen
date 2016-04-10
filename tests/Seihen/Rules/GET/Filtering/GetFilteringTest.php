<?php

use Seihen\Rules\GET\Filtering\GetFiltering;

class GetFilteringTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $getFiltering = new GetFiltering();
        $pattern = '/123/';
        $getFiltering->setPattern($pattern);

        $_GET[] = 'test';

        $this->assertTrue($getFiltering->run());
    }
}
