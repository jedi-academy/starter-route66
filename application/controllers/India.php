<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of India
 *
 * @author daohu
 */
class India extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
        
    public function index() 
    {
        // The following should be a relative link to your image file above
        $source = '../data/jackie.jpg'; 
        // note that we could have referenced an image anywhere on our system

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/JPG"); 
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }
}
