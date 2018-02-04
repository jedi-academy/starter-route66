<?php

class Juliet extends CI_CONTROLLER
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Shows the first person info json
	 */
	public function index()
	{
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}