<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Experience extends CI_Controller {

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
			if($this->uri->segment(2) == NULL || $this->Art->getExperience($this->uri->segment(2)) == NULL)
			{
				redirect(base_url().'experiences');
			}
			else
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('content/displayExperience', $this->Art->getExperience($this->uri->segment(2)));
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

	public function waiting()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata['userData']['id'])
			{
				if($this->uri->segment(3) != NULL)
				{
					$data = $this->ArtVerificationWaitingList->getExperienceWithUserCheck($this->session->userdata['userData']['id'], $this->uri->segment(3));
					if($data != NULL)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						$this->load->view('content/displayWaitingExperience', $data);
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
						redirect(base_url().'experiences/mine/waiting');
					}
				}
				else
				{
					redirect(base_url().'experiences');
				}
			}
			else
			{
				redirect(base_url().'user_authentication');
			}
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
