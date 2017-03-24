<?php

class View {

    protected $viewFile;

    //establish view location on object creation
    public function __construct($controllerClass, $action) {
        $controllerName = strtolower(str_replace("Controller", "", $controllerClass));
        $action = $action? $action: $controllerName;
        $this->viewFile = $controllerName . "/" . $action . ".html";
    }

    public function render($data) {
        //echo "VF:".$this->viewFile;
        try {
            $loader = new Twig_Loader_Filesystem(ROOT_PATH . '/application/views/');
            $twig = new Twig_Environment($loader, array(
                'cache' => false,
            ));

            echo $twig->render($this->viewFile, $data);

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}