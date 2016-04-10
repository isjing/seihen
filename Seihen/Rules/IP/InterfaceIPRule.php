<?php

namespace Seihen\Rules\IP;

interface InterfaceIPRule {

    /**
     * @param IP $ip
     * @return boolean
     */
    public function setIP(IP $ip);

    /**
     * @return IP
     */
    public function getIP();

    /**
     * @return boolean
     */
    public function run();
}
?>