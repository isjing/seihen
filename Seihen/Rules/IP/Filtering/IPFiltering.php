<?php

namespace Seihen\Rules\IP\Filtering;

use Seihen\Rules\IP\IPRule;
use Seihen\HTTP\Response;
use Seihen\Rules\IP\IPAddress;
use Seihen\Rules\IP\IPCIDR;

class IPFiltering extends IPRule {
    /**
     * @return boolean Returns true
     */
    public function run() {
        if( isset($_SERVER['REMOTE_ADDR']) ){
            if(strcmp(get_class($this->getIP()),IPAddress::class) == 0){
                if( strcmp($_SERVER['REMOTE_ADDR'], $this->getIP()->getIP()) != 0 ){
                    Response::badRequest();
                }
            } elseif(strcmp(get_class($this->getIP()), IPCIDR::class) == 0){
                if( !$this->getIP()->isValidIP($_SERVER['REMOTE_ADDR']) ){
                    Response::badRequest();
                }
            }
        } else {
            Response::badRequest();
        }

        return true;
    }
}
?>