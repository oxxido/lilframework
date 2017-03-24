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
            $data['books'] = Book::all();
            $data['shelves'] = Shelf::all();
            /*foreach($books as $book) {
                echo $book->title;
                echo "<br>\n";
                echo $book->description;
                echo "<br>\n";
                echo $book->cover;
                echo "<br>\n";
                foreach($book->shelves as $shelf) {
                    echo $shelf->name. "|";
                }
                echo "<br>\n";
            }*/
            $this->render($data);
        }

        public function error($message) {
            $data['message'] = $message;
            $this->render($data);
        }

    }