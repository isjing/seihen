<?php

use Seihen\Rules\IP\IPAddress;
use Seihen\Rules\IP\IPRule;

class IPRuleTest extends \PHPUnit_Framework_TestCase {
    function testSetIP(){
        $ipAddress = new IPAddress('1.0.0.0');
        $ipRule = new IPRule();

        $this->assertTrue($ipRule->setIP($ipAddress));
    }

    function testGetIP(){
        $ipAddress = new IPAddress('1.0.0.0');
        $ipRule = new IPRule();
        $ipRule->setIP($ipAddress);

        $this->assertEquals(get_class($ipAddress), get_class($ipRule->getIP()));
    }

    function testRun(){
        $ipRule = new IPRule();

        $this->assertTrue($ipRule->run());
    }
}
