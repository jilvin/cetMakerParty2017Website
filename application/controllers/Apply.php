<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Apply extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
	}

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata('userData'))
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('templates/headerRow');
				$this->load->view('content/apply');
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

	public function work()
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

	public function experience()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata('userData'))
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('templates/headerRow');
				$this->load->view('content/applyExperience');
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

	public function complete()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if (!empty($this->session->userdata['userData']['id']))
			{
				if(!empty($this->input->post("workName")))
				{
					// work
					$artName = $this->input->post("workName");
					$artShortDescription = $this->input->post("workShortDescription");
					$artLongDescription = $this->input->post("workLongDescription");
					$partyID = $this->PartyData->getCurrentPartyID();
					$patronClub = $this->input->post("clubID");
					$category = "work";
					$artID = $this->ArtVerificationWaitingList->newArt($partyID, $this->session->userdata['userData']['id'], $artName, $artShortDescription, $artLongDescription, $category);
					if($patronClub != NULL)
					{
						$this->ArtVerificationWaitingListClubsAssociation->newAssociation($artID, $patronClub);
					}
					$this->load->view('templates/header');
					$this->load->view('templates/henosis');
					$this->load->view('templates/contentStart');
					$this->load->view('templates/headerRow');
					$this->load->view('content/applicationRecieved');
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
				else if(!empty($this->input->post("experienceName")))
				{
					// experience
					$artName = $this->input->post("experienceName");
					$artShortDescription = $this->input->post("experienceShortDescription");
					$artLongDescription = $this->input->post("experienceLongDescription");
					$partyID = $this->PartyData->getCurrentPartyID();
					$patronClub = $this->input->post("clubID");
					$category = "experience";
					$artID = $this->ArtVerificationWaitingList->newArt($partyID, $this->session->userdata['userData']['id'], $artName, $artShortDescription, $artLongDescription, $category);
					if($patronClub != NULL)
					{
						$this->ArtVerificationWaitingListClubsAssociation->newAssociation($artID, $patronClub);
					}
					$this->load->view('templates/header');
					$this->load->view('templates/henosis');
					$this->load->view('templates/contentStart');
					$this->load->view('templates/headerRow');
					$this->load->view('content/applicationRecieved');
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
				redirect('user_authentication');
			}
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
