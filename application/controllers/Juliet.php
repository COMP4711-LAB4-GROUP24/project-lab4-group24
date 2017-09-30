<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Juliet's controller
 *
 * This will be a controller found by convention, but with an unexpected result
 * Make the target link /juliet
 * We want to return JSON data, instead of an HTML page
 * The controller should extend CI_Controller, and not Application
 * The handling should retrieve data from a model, and then encode it appropriately
 */
class Juliet extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$record = $this->quotes->get(1);
		header("Content-type: application/json");
		echo json_encode($record);
	}

}