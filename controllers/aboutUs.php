<?php

class AboutUs extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('aboutUs/index');
    }

}