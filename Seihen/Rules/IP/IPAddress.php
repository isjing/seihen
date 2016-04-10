<?php

namespace Seihen\Rules\IP;

class IPAddress extends IP {
    /**
     * @var string
     */
    private $ip;

    /**
     * IPAddress constructor
     *
     * @param $ip
     */
    public function __construct($ip=null) {
        if($ip){
            $this->setIp($ip);
        }
    }

    /**
     * @return string Returns IP address
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * @param string $ip IP address
     * @return boolean Returns true
     */
    public function setIp($ip) {
        $this->ip = $ip;

        return true;
    }
}
?>