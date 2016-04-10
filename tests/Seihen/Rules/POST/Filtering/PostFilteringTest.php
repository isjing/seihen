<?php

use Seihen\Rules\POST\Filtering\PostFiltering;

class PostFilteringTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $postFiltering = new PostFiltering();
        $pattern = '/123/';
        $postFiltering->setPattern($pattern);

        $_GET[] = 'test';

        $this->assertTrue($postFiltering->run());
    }
}
