<?php

use Seihen\Rules\IP\Filtering\IPFiltering;
use Seihen\Rules\IP\IPAddress;

class IPFilteringTest extends \PHPUnit_Framework_TestCase {
    function testRun(){
        $ip = '0.0.0.0';
        $ipFiltering = new IPFiltering();
        $ipAddress = new IPAddress($ip);

        $ipFiltering->setIP($ipAddress);

        $_SERVER['REMOTE_ADDR'] = $ip;

        $this->assertTrue($ipFiltering->run());
    }
}
