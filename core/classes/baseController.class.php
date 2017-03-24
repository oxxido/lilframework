<?php

abstract class BaseController {

    private $urlValues;
    private $action;
    private $view;

    public function __construct($action='', $urlValues='') {
        $this->action = $action;
        $this->urlValues = $urlValues;
    }

    public function executeAction() {
        return $this->{$this->action}();
    }

    public function render($data=[]) {
        //establish the view object
        $this->view = new View(get_class($this), $this->action);
        $this->view->render($data);
    }

}
