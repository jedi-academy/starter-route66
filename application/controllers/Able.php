<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 2018-01-30
 * Time: 3:06 PM
 */

class Able extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index() {
        $this->show(1);
    }

}