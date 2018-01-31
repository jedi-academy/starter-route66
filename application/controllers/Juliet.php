<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 2018-01-31
 * Time: 12:41 PM
 */

class Juliet extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }


}