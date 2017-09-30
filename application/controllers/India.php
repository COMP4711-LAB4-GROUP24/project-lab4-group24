<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * India's controller
 *
 * This will be a controller found by convention, but with an unexpected result
 * Make the target link /india
 * We want to return an image, instead of an HTML page
 * The controller should extend CI_Controller, and not Application
 * The handling should explicitly set the returned content type, and then copy the contents of an image file
 */
class India extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$source = '../public/assets/images/logo.png';
		// set the mime type for that image (jpeg, png, etc)
		header("Content-type: image/png"); 
		header('Content-Disposition: inline');
		readfile($source); // dish it
	}

}