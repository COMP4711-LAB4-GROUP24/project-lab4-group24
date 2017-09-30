<?php

/*
 * Issue#3 Solution
 * 
 * Default controller in a subfolder
 *
 * This will be a controller found by convention
 * Make the target link /bravo
 * We want this handled by a controller inside controllers/bravo. In this case, we want that to be the default controller, and its index method, i.e. controllers/bravo/Welcome::index()
 * The body of that method should invoke the inherited show method, with the key "2"
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Default controller in this subfolder
 */
class Welcome extends Application
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

	/**
	 * default method that shows the 2nd quote.
	 */
    public function index()
    {
        $this->show(2);
    }
}
