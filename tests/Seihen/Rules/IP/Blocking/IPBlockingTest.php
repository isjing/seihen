<?php

use Seihen\Rules\IP\Blocking\IPBlocking;
use Seihen\Rules\IP\IPAddress;

class IPBlockingTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $ip = '0.0.0.0';
        $ipBlocking = new IPBlocking();
        $ipAddress = new IPAddress($ip);

        $ipBlocking->setIP($ipAddress);

        $_SERVER['REMOTE_ADDR'] = $ip;

        $this->assertTrue($ipBlocking->run());
    }
}
