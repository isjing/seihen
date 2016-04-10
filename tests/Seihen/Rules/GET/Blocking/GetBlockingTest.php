<?php

use Seihen\Rules\GET\Blocking\GetBlocking;

class GetBlockingTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $getBlocking = new GetBlocking();
        $pattern = '/.*/';
        $getBlocking->setPattern($pattern);

        $_GET[] = '';

        $this->assertTrue($getBlocking->run());
    }
}
