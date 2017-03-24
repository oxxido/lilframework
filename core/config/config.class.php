<?php
class config {

    private $config;
    private $iniFile = CONFIG_PATH . "/config.ini";

    function __construct() {
        if(is_file($this->iniFile)) {
            $ini = parse_ini_file($this->iniFile, true);
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