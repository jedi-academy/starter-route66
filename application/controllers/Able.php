<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Able extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * show for our app
	 */
	public function index()
	{
        $this->show(1);
	}

}
