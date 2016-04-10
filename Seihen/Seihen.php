<?php

namespace Seihen;

use Seihen\Rules\Rules;

class Seihen {
    /**
     * Seihen constructor.
     */
    public function __construct($rawRules=null) {
        if($rawRules){
            $this->run($rawRules);
        }
    }

    /**
     * @param array $rawRules
     * @return bool
     */
    public function run(array $rawRules) {
        $rules = new Rules();
        $rulesArray = $rules->load($rawRules);

        foreach($rulesArray as $rule){
            $rule->run();
        }

        return true;
    }
}
?>