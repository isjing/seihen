<?php

use Seihen\Rules\GET\GetRule;

class GetRuleTest extends \PHPUnit_Framework_TestCase {
    function testSetPattern(){
        $getRule = new GetRule();
        $pattern = '/.*/';

        $this->assertTrue($getRule->setPattern($pattern));
    }

    function testGetPattern(){
        $getRule = new GetRule();
        $pattern = '/.*/';
        $getRule->setPattern($pattern);

        $this->assertEquals($pattern, $getRule->getPattern());
    }

    function testRun(){
        $getRule = new GetRule();

        $this->assertTrue($getRule->run());
    }

    function testConstructor(){
        $pattern = '/.*/';
        $getRule = new GetRule($pattern);

        $this->assertEquals($pattern, $getRule->getPattern());
    }
}
