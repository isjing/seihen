<?php

namespace Seihen\Rules;

use Seihen\Rules\IP\IPAddress;
use Seihen\Rules\IP\IPCIDR;
use Seihen\Rules\IP\Filtering\IPFiltering;
use Seihen\Rules\IP\Blocking\IPBlocking;

class Rules {
    /**
     * @var array
     */
    private $rules = array();

    /**
     * @param array $rawRules
     * @return array
     */
    public function load(array $rawRules) {
        foreach($rawRules as $key => $value){
            if( class_exists($key) ){
                if($key == IPFiltering::class || $key == IPBlocking::class){
                    if(preg_match('/[\d\.]{7,15}\/\d{1,2}/', $value) == 1){
                        $ip = new IPCIDR($value);
                    } else {
                        $ip = new IPAddress($value);
                    }

                    $this->pushRule(new $key($ip));
                } else {
                    $this->pushRule(new $key($value));
                }
            } else {
                throw new \RuntimeException('Unknown rule');
            }
        }

        return $this->rules;
    }

    private function pushRule(Rule $rule){
        $this->rules[] = $rule;
    }
}
?>