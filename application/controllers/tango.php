<?php

/*
A remapped controller class. Redirects from foxtrot in config/config.php
to controllers/tango.php
*/
class tango extends Application {

    public function index() {
        $this->show(5);
    }
}