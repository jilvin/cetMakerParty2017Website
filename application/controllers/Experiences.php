<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Experiences extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('ArtUserAssociation');
	}

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			$data['artList'] = $this->Art->show_current_experiences($this->PartyData->getCurrentPartyID());
			if($data['artList'] != NULL)
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('templates/headerRow');
				$this->load->view('content/experiences', $data);
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
				redirect(base_url());
			}
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
			if($this->session->userdata['userData']['id'])
			{
				$artIDs = $this->ArtUserAssociation->getArtIDs($this->session->userdata['userData']['id']);
				if($artIDs != NULL)
				{
					$data['artArray'] = $this->Art->show_current_experiences_from_given_artID_list($this->PartyData->getCurrentPartyID(), $artIDs);
					if($data['artArray'] != NULL)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						$this->load->view('templates/headerRow');
						$this->load->view('content/experiencesWaiting');
						$this->load->view('content/worksMine', $data);
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
						redirect(base_url());
					}
				}
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
