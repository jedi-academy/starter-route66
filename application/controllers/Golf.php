<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Golf
 *
 * @author Sam Collins
 */
class Golf extends Application{
    //put your code here
    
    function __construct()
	{
		parent::__construct();
	}
        
    public function index() {
        $this->show(6);
    }
}
