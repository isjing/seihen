<?php

use Seihen\Rules\Rules;
use Seihen\Rules\IP\Filtering\IPFiltering;
use Seihen\Rules\IP\Blocking\IPBlocking;
use Seihen\Rules\GET\Filtering\GetFiltering;
use Seihen\Rules\GET\Blocking\GetBlocking;
use Seihen\Rules\POST\Filtering\PostFiltering;
use Seihen\Rules\POST\Blocking\PostBlocking;

class RulesTest extends \PHPUnit_Framework_TestCase {
    public function testLoad() {
        $rawRules = [
            IPFiltering::class => '10.0.0.1',
            IPBlocking::class => '10.0.0.2',
            GetFiltering::class => '/.*/',
            GetBlocking::class => '/.*/',
            PostFiltering::class => '/.*/',
            PostBlocking::class => '/.*/',
        ];
        $rules = new Rules();
        $result = $rules->load($rawRules);

        $this->assertTrue(is_array($result));
    }
}
