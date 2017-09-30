<?php 

/*
 * Issue#4 Solution
 * This will be a controller found by convention
 * Make the target link /charlie/brown
 * We want this handled by a subcontroller, i.e. controllers/Charlie::brown()
 * The body of that method should invoke the inherited show method, with the key "3"
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A controll offering a non-default subcontroller.
 */
class Charlie extends Application
{
    /**
     * Constructor
     */
	function __construct()
	{
		parent::__construct();
	}

    /**
     * Subcontroller function that shows the 3rd quote.
     */
    public function brown()
    {
        $this->show(3);
    }
}
