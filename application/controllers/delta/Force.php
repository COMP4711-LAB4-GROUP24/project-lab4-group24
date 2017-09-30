<?php

/*
 * Issue#5 Solution
 *
 * This will be a controller found by convention
 * Make the target link /delta/force
 * We want this handled by a conventional controller, i.e. controllers/delta/Force::index()
 * The body of that method should invoke the inherited show method, with the key "4"
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A controller in subfolder which will be found by convention.
 */
class Force extends Application
{
    /**
     * Constructor.
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
     * Defaut method for this controller that shows the 4th quote.
	 */
	public function index()
	{
		$this->show(4);
    }
}


