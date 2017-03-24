<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();

//start composer autoloader
require ROOT_PATH . "/vendor/autoload.php";
require_once ROOT_PATH . "/core/config/config.class.php";
require_once ROOT_PATH . "/core/config/database.php";
require_once ROOT_PATH . "/core/classes/baseController.class.php";
require_once ROOT_PATH . "/core/classes/view.class.php";


define("LOADED", true);

function base_url()
{
    if(isset($_SERVER['HTTPS']))
    {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else
    {
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/';
}

//starting template vars:

$data = array();
$data['title'] = "Morsum Test";
$data['pageTitle'] = "Morsum Test";
$data['user'] = false;
$data['base_url'] = base_url();

//crypto key
$cryptoKey = base64_decode("brimqiLHrYfj//MNlFKDxg==");


/*//check default message
if(get('msg')) {
    switch(get('msg')) {
        case "notLogged":
            $data['message'] = "You must be logged to access the page.";
        break;
        default:
            $data['message'] = get('msg');
        break;
    }
}

$data['messenger'] = messenger();*/
