<?php

use Seihen\Rules\POST\PostRule;

class PostRuleTest extends \PHPUnit_Framework_TestCase {
    function testSetPattern(){
        $postRule = new PostRule();
        $pattern = '/.*/';

        $this->assertTrue($postRule->setPattern($pattern));
    }

    function testGetPattern(){
        $postRule = new PostRule();
        $pattern = '/.*/';
        $postRule->setPattern($pattern);

        $this->assertEquals($pattern, $postRule->getPattern());
    }

    function testRun(){
        $postRule = new PostRule();

        $this->assertTrue($postRule->run());
    }

    function testConstructor(){
        $pattern = '/.*/';
        $postRule = new PostRule($pattern);

        $this->assertEquals($pattern, $postRule->getPattern());
    }
}
