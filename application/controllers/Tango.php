<?php

/*
 * Issue#7 Solution
 *
 * This will be a routing managed with a rule
 * Make the target link /foxtrot
 * Add a routing rule to config/routes.php, which remaps this request to the Tango controller
 *
 * $route['foxtrot'] = 'tango';
 * This will be handled by controllers/Tango::index()
 * The body of that method should invoke the inherited show method, with the key "5"
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A controller being mapped to.
 */
class Tango extends Application
{

    /**
     * Constructor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
     * Default method for this controller which shows the 5th quote.
	 */
	public function index()
	{
		// this is the view we want shown
		$this->show(5);
    }
}


