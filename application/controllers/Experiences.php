<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Experiences extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('ArtUserAssociation');
		$this->load->model('ArtVerificationWaitingList');
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
				require_once 'required/menu.php';
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
						if($this->ArtVerificationWaitingList->checkForExperienceUser($this->PartyData->getCurrentPartyID(), $this->session->userdata['userData']['id']) > 0)
						{
							$this->load->view('content/experiencesWaitingAlert');
						}
						$this->load->view('content/experiencesMine', $data);
						$this->load->view('templates/contentEnd');
						require_once 'required/menu.php';
						$this->load->view('templates/footer');
					}
					else if($this->ArtVerificationWaitingList->checkForExperienceUser($this->PartyData->getCurrentPartyID(), $this->session->userdata['userData']['id']) > 0)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						$this->load->view('templates/headerRow');
						$this->load->view('content/experiencesWaitingAlert');
						$this->load->view('templates/contentEnd');
						require_once 'required/menu.php';
						$this->load->view('templates/footer');
					}
					else
					{
						redirect(base_url());
					}
				}
				else if($this->ArtVerificationWaitingList->checkForExperienceUser($this->PartyData->getCurrentPartyID(), $this->session->userdata['userData']['id']) > 0)
				{
					$this->load->view('templates/header');
					$this->load->view('templates/henosis');
					$this->load->view('templates/contentStart');
					$this->load->view('templates/headerRow');
					$this->load->view('content/experiencesWaitingAlert');
					$this->load->view('templates/contentEnd');
					require_once 'required/menu.php';
					$this->load->view('templates/footer');
				}
				else
				{
					redirect(base_url());
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

	public function mine_waiting()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata['userData']['id'])
			{
				$waitingExperiences['artList'] = $this->ArtVerificationWaitingList->getExperiencesOfUser($this->PartyData->getCurrentPartyID(), $this->session->userdata['userData']['id']);
				if($waitingExperiences != NULL)
				{
					$this->load->view('templates/header');
					$this->load->view('templates/henosis');
					$this->load->view('templates/contentStart');
					$this->load->view('templates/headerRow');
					$this->load->view('content/experiencesWaiting', $waitingExperiences);
					$this->load->view('templates/contentEnd');
					require_once 'required/menu.php';
					$this->load->view('templates/footer');
				}
				else
				{
					redirect(base_url());
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
