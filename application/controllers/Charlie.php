<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 2018-01-31
 * Time: 10:39 AM
 */

class Charlie extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function brown()
    {
        $this->show(3);
    }

}