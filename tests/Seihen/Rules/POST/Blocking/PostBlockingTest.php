<?php

use Seihen\Rules\POST\Blocking\PostBlocking;

class PostBlockingTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $postBlocking = new PostBlocking();
        $pattern = '/.*/';
        $postBlocking->setPattern($pattern);

        $_GET[] = '';

        $this->assertTrue($postBlocking->run());
    }
}
