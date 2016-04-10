<?php

namespace Seihen\Rules\IP;

class IPCIDR extends IP {
    /**
     * @var string
     */
    private $ipcidr;
    /**
     * @var string
     */
    private $ip;
    /**
     * @var string
     */
    private $cidr;
    /**
     * @var integer
     */
    private $ipMin;
    /**
     * @var integer
     */
    private $ipMax;

    /**
     * IPCIDR constructor
     *
     * @param $cidr
     */
    public function __construct($cidr=null) {
        if($cidr){
            $this->setIpcidr($cidr);
        }
    }

    /**
     * @return string Returns CIDR address
     */
    public function getIpcidr() {
        return $this->ipcidr;
    }

    /**
     * @param string $ipcidr IP/CIDR
     * @return boolean Returns true
     */
    public function setIpcidr($ipcidr) {
        list($ip, $cidr) = explode('/', $ipcidr);
        $subnet = 0xFFFFFFFF << (32 - intval($cidr));

        $this->ipcidr = $ipcidr;
        $this->ip = $ip;
        $this->cidr = $cidr;

        $ipLong = ip2long($ip);
        $this->ipMin = $ipLong & $subnet;
        $this->ipMax = $ipLong | (~$subnet & 0xFFFFFFFF);

        return true;
    }

    /**
     * @param $ip string
     * @return boolean
     */
    public function isValidIP($ip) {
        $ipLong = ip2long($ip);

        return ($ipLong >= $this->ipMin && $ipLong <= $this->ipMax);
    }
}
?>