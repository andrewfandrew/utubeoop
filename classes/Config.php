<?php

/*
 * 
 */

/**
 * Description of Config
 *
 * @author andrew
 */
class Config {
    public static function get($path = null) {
        if($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);
            
            print_r($path);
            
        }
    }
}
