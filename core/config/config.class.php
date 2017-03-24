<?php
class config {

    private $config;
    private $iniFile = "./config.ini";

    function _constructor() {

        if(is_file($this->iniFile)) {
            $ini = parse_ini_file("./config.ini", true);
            foreach($ini as $key => $param) {
                $this->config[$key] = $param;
            }

        } else {
            die("Couldn't load config file");
        }
    }

    function get($key) {
        return $this->config[$key]? $this->config[$key]: null;
    }

    function set($key, $value) {
        $this->config[$key] = $value;
    }
}