<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Works extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
	}

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			$data['artList'] = $this->Art->show_current_works($this->PartyData->getCurrentPartyID());
			$this->load->view('templates/header');
			$this->load->view('templates/henosis');
			$this->load->view('templates/contentStart');
			$this->load->view('templates/headerRow');
			$this->load->view('content/works', $data);
			$this->load->view('templates/contentEnd');
			if($this->session->userdata('userData'))
			{
				$this->load->view('templates/loggedInMenu');
			}
			else
			{
				$this->load->view('templates/menu');
			}
			$this->load->view('templates/footer');
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}

	public function mine()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata('userData'))
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('templates/headerRow');
				$this->load->view('content/applyWork');
				$this->load->view('templates/contentEnd');
				if($this->session->userdata('userData'))
				{
					$this->load->view('templates/loggedInMenu');
				}
				else
				{
					$this->load->view('templates/menu');
				}
				$this->load->view('templates/footer');
			}
			else
			{
				redirect(base_url().'/user_authentication');
			}
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
