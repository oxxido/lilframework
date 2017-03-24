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


           /* $data['addJs']  = array("bc/datatables.net/js/jquery.dataTables.min.js",
                                    "bc/datatables.net-bs/js/dataTables.bootstrap.min.js",
                                    "js/datatables.js",
                                    "js/users.js");
            $data['addCss']  = array("bc/datatables.net-bs/css/dataTables.bootstrap.min.css");*/
            //echo $twig->render('index.html', $data);
            echo $twig->render($this->viewFile, $data);

        } catch(Exception $e) {
            echo $e->getMessage();
            //echo "<pre>".print_r($e, true)."</pre>";
        }
    }
}