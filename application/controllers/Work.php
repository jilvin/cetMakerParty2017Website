<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Work extends CI_Controller {

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
			if($this->uri->segment(2) == NULL || $this->Art->getWork($this->uri->segment(2)) == NULL)
			{
				redirect(base_url().'works');
			}
			else
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('content/displayWork', $this->Art->getWork($this->uri->segment(2)));
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
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
