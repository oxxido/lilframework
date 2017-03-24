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

    public function render($data=[], $action='') {
        //establish the view object
        $view = $data['view'] ? $data['view'] : get_class($this);
        $this->view = new View($view, $action? $action: $this->action);
        $this->view->render($data);
    }

}
