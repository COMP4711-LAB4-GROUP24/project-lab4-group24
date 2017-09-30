<?php

/*
 * Issue#2 Solution
 *
 * This will be a controller found by convention
 * Make the target link /able
 * This would then be handled by the index method of controllers/Able.
 * The body of that method should invoke the inherited show method, with the key "1"
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A regular controller found by convention 
 */
class Able extends Application
{

    /**
     * Constructor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * default method that shows the 1st quote.
	 */
	public function index()
	{
		// this is the view we want shown
		$this->show(1);
    }
}


