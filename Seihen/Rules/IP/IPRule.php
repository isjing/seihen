<?php

namespace Seihen\Rules\IP;

use Seihen\Rules\Rule;

class IPRule extends Rule implements InterfaceIPRule {
    /**
     * @var IP
     */
    private $ip;

    /**
     * IPRule constructor
     *
     * @param $ip
     */
    public function __construct($ip=null) {
        if($ip){
            $this->setIP($ip);
        };
    }

    /**
     * @param IP $ip
     * @return boolean Returns true
     */
    public function setIP(IP $ip) {
        $this->ip = $ip;

        return true;
    }

    /**
     * @return IP Returns rule IP
     */
    public function getIP() {
        return $this->ip;
    }

    /**
     * @return boolean Returns true
     */
    public function run() {
        return true;
    }
}
?>