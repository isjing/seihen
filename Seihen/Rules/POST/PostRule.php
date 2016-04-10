<?php

namespace Seihen\Rules\POST;

use Seihen\Rules\Rule;

class PostRule extends Rule implements InterfacePOSTRule{
    /**
     * @var string
     */
    private $pattern;

    /**
     * PostRule constructor
     *
     * @param string $pattern
     */
    public function __construct($pattern=null) {
        if($pattern){
            $this->setPattern($pattern);
        }
    }

    /**
     * @param string $pattern
     * @return boolean
     */
    public function setPattern($pattern) {
        $this->pattern = $pattern;

        return true;
    }

    /**
     * @return string
     */
    public function getPattern() {
        return $this->pattern;
    }

    /**
     * @return boolean
     */
    public function run() {
        return true;
    }
}