<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Install extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//Load PartyData model
		$this->load->model('MainConfig');
	}

	public function index()
	{
		if($this->MainConfig->checkConfigExists() == 1)
		{
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
