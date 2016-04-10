<?php

use Seihen\Rules\IP\IPAddress;

class IPAddressTest extends \PHPUnit_Framework_TestCase {
    function testSetIP(){
        $ipAddress = new IPAddress();

        $this->assertTrue($ipAddress->setIp('0.0.0.0'));
    }

    function testGetIP(){
        $ipAddress = new IPAddress();
        $ip = '0.0.0.0';
        $ipAddress->setIp($ip);

        $this->assertTrue(is_string($ipAddress->getIp($ip)));
        $this->assertEquals($ip, $ipAddress->getIp($ip));
    }

    function testContructor(){
        $ip = '0.0.0.0';
        $ipAddress = new IPAddress($ip);

        $this->assertTrue(is_string($ipAddress->getIp($ip)));
        $this->assertEquals($ip, $ipAddress->getIp($ip));
    }
}
