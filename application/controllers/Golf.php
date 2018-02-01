<?php

class Golf extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Shows the sixth person
	 */
	public function index()
	{
        $this->show(6);
    }
}