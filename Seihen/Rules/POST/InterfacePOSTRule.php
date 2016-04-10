<?php

namespace Seihen\Rules\POST;

interface InterfacePOSTRule {

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