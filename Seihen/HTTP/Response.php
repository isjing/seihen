<?php

namespace Seihen\HTTP;

class Response {
    public static function badRequest(){
        header('HTTP/1.0 400 Bad request', true, 400);
        die();
    }
}