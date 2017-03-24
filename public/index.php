<?php
//set project path
define("ROOT_PATH", dirname(__DIR__) );
define("CONFIG_PATH", ROOT_PATH . '/core/config' );

// booting the framework
require(ROOT_PATH."/core/boot.php");

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';



if ($url === '/') {

    $requestedController = "index";

} else {
    // This is not home page
    // Initiate the appropriate controller
    // and render the required view

    //The first element should be a controller
    $requestedController = $url[0];

    // If a second part is added in the URI,
    // it should be a method
    $requestedAction = isset($url[1])? $url[1] :'';

    // The remain parts are considered as
    // arguments of the method
    $requestedParams = array_slice($url, 2);
}


// Check if controller exists. NB:
// You have to do that for the model and the view too
$ctrlPath = ROOT_PATH.'/application/controllers/'.$requestedController.'Controller.php';



if (file_exists($ctrlPath))
{

    require_once ROOT_PATH.'/application/controllers/'.$requestedController.'Controller.php';

    $modelName      = strtolower($requestedController).'Model';
    $controllerName = strtolower($requestedController).'Controller';
    //$viewName       = ucfirst($requestedController).'View';

    //$controllerObj  = new $controllerName( new $modelName );
    $controllerObj  = new $controllerName( $requestedAction );
    //$viewObj        = new $viewName( $controllerObj, new $modelName );


    // If there is a method - Second parameter
    if ($requestedAction != '')
    {
        // then we call the method via the view
        // dynamic call of the view
        echo $controllerObj->$requestedAction($requestedParams);

    } else {
        echo $controllerObj->index();
    }

}else{

    header('HTTP/1.1 404 Not Found');
    die('404 - The file - '.$ctrlPath.' - not found');
    //require the 404 controller and initiate it
    //Display its view
}
