<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Install extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('MainConfig');
		$this->load->model('Leadership');
		$this->load->model('PartyData');
	}

	public function index()
	{
		if($this->MainConfig->checkConfigExists() == 1)
		{
			redirect(base_url().'install/submit');
		}
		else
		{
			$this->load->view('install/getConfigData');
		}
	}

	public function admin()
	{
		if($this->MainConfig->checkConfigExists() == 0)
		{
			redirect(base_url().'install');
		}
		else if($this->Leadership->checkAdminExists() == 1)
		{
			redirect(base_url().'install/firstParty');
		}
		else
		{
			$this->load->view('install/getAdmin');
		}
	}

	public function firstParty()
	{
		if($this->MainConfig->checkConfigExists() == 0)
		{
			redirect(base_url().'install');
		}
		else if($this->Leadership->checkAdminExists() == 0)
		{
			redirect(base_url().'install/admin');
		}
		else if($this->PartyData->checkPartyExists() == 1)
		{
			redirect(base_url());
		}
		else
		{
			$this->load->view('install/getFirstParty');
		}
	}
}
