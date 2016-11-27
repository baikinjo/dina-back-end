<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends Application {
    function __construct()
    {
        parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'Menu (Server)';
    }
    /**
     * Sets up the form and renders it.
     */
    function index()
    {

        $this->data['title'] = 'Menu (Server)';
        $this->data['pagebody'] = 'welcome_message';
        $this->render();
    }
}