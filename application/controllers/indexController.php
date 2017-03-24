<?php

    /**
    * The home page controller
    */
    class IndexController extends baseController
    {
        private $model;

        function __construct($model='')
        {
            $this->model = $model;
        }

        public function index()
        {
            echo "hola";
            $this->render();
        }

        public function error($message) {
            $data['message'] = $message;
            $this->render($data);
        }

    }