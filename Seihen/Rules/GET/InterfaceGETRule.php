<?php

namespace Seihen\Rules\GET;

interface InterfaceGETRule {

    /**
     * @param string $pattern
     * @return boolean
     */
    public function setPattern($pattern);

    /**
     * @return string
     */
    public function getPattern();

    /**
     * @return boolean
     */
    public function run();
}
?>