<?php
class Golf extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index() {
        $this->show(6);
    }

}
