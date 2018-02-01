<?php

class Force extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Shows the fourth person
	 */
	public function index()
	{
        $this->show(4);
    }
}