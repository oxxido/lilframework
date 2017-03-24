<?php

    /**
    * The home page controller
    */
    class IndexController extends baseController
    {
        private $action;

        public function __construct($action='')
        {
            $this->action = $action;
        }

        public function index()
        {
            $data = array();
            $data['title'] = "Bookie";
            $this->render($data);
        }

        public function error($message) {
            $data['message'] = $message;
            $this->render($data);
        }

    }