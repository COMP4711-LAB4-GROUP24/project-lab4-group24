<?php

/*
 * Issue#6 Solution
 *
 * This will be a controller found by convention
 * Make the target link /echo/must/wehave
 * We want this handled by a conventional controller, i.e. controllers/echo/Must::wehave()
 * The body of that method should invoke the inherited show method, with the key "5"
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A controller in subfolder which will be found by convention and offer a subcontroller.
 */
class Must extends Application
{
    /**
     * Constructor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
     * Sub-controller method that shows the 5th quote.
	 */
	public function wehave()
	{
		$this->show(5);
    }
}


