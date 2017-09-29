<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class golf extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index()
    {
        $this->show(6);
    }



}
