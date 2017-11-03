<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Team extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('Leadership');
		$this->load->model('Roles');
		$this->load->model('User');
		$this->load->model('UsersRolesClubsAssociation');

		// extra added for temp index()
		$this->load->model('Art');
	}

	// public function index()
	// {
	// 	if($this->PartyData->checkPartyExists() == 1)
	// 	{
	// 		$this->load->view('templates/header');
	// 		$this->load->view('templates/henosis');
	// 		$this->load->view('templates/contentStart');
	// 		$currentRoles = $this->Roles->getCurrentRoles($this->PartyData->getCurrentPartyID());
	// 		if(!empty($currentRoles))
	// 		{
	// 			$this->load->view('content/displayTeam');
	// 		}
	// 		else
	// 		{
	// 			redirect(base_url());
	// 		}
	// 		$this->load->view('templates/contentEnd');
	// 		if($this->session->userdata('userData'))
	// 		{
	// 			$this->load->view('templates/loggedInMenu');
	// 		}
	// 		else
	// 		{
	// 			$this->load->view('templates/menu');
	// 		}
	// 		$this->load->view('templates/footer');
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('errors/not_configured');
	// 	}
	// }

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/henosis');
			$this->load->view('templates/contentStart');
			// $this->load->view('templates/headerRow');
			$this->load->view('temp/team_november_2017');
			$this->load->view('templates/contentEnd');
			require_once 'required/menu.php';
			$this->load->view('templates/footer');
		}
	}
}
