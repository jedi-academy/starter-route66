<?php
class Tango extends Application
{

    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Homepage for our app
     */
    public function index() {
        $this->show(5);
    }

}
