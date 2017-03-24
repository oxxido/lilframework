<?php

    /**
    * The api controller
    */
    class ApiController extends baseController
    {
        private $action;

        function __construct($action='')
        {
            $this->action = $action;
        }

        public function getBooks()
        {
            $data = array();
            $data['title'] = "Bookie";
            $data['books'] = Book::all();
            $data['shelves'] = Shelf::all();
            $this->render($data, $this->action);
        }

        public function error($message) {
            $data['message'] = $message;
            $this->render($data);
        }

    }