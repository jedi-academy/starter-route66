<?php

class Charlie extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Shows the sixth person
	 */
	public function brown()
	{
        $this->show(3);
    }
}