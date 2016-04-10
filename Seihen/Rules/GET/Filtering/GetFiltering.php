<?php

namespace Seihen\Rules\GET\Filtering;

use Seihen\Rules\GET\GetRule;
use Seihen\HTTP\Response;

class GetFiltering extends GetRule{
    /**
     * @return boolean
     */
    public function run() {
        if( isset($_GET) ){
            foreach($_GET as $get){
                $result = preg_match($this->getPattern(), $get);

                if( $result == 0 ){
                    Response::badRequest();
                } elseif( $result == false ){
                    throw new \RuntimeException('Syntax error in pattern definition');
                }
            }
        } else {
            Response::badRequest();
        }

        return true;
    }
}