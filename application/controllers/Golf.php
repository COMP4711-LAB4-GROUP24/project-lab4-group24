<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Golf's and Hotel's controller
 *
 * For Golf:
 * This will be a routing managed with a rule
 * Make the target link /i/need/a/hobby
 * Add a routing rule to config/routes.php, which remaps any request with the first segment "i" to the Golf controller
 * The body of that method should invoke the inherited show method, with the key "6"
 *
 * For Hotel:
 * This will be a routing managed with a rule
 * Make the target link /bananas/rule
 * Add a routing rule to config/routes.php, which remaps any request with the word "banana" in it
 */
class Golf extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->show(6);
	}

}
