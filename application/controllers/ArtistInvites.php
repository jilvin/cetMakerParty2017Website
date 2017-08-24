<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ArtistInvites extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PartyData');
		$this->load->model('User');
		$this->load->model('Art');
		$this->load->model('ArtistInvitesModel');
		$this->load->model('ArtUserAssociation');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
	}

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if (!empty($this->session->userdata['userData']['id']) && $this->ArtistInvitesModel->checkIfArtInviteWaiting($this->User->returnEmail($this->session->userdata['userData']['id'])) == 1)
			{
				$this->load->view('templates/header');
				$this->load->view('templates/henosis');
				$this->load->view('templates/contentStart');
				$this->load->view('templates/headerRow');
				$invitedArtIDs = $this->ArtistInvitesModel->getInvitedArtIDs($this->User->returnEmail($this->session->userdata['userData']['id']));
				$this->load->view('content/artistInvites', array('invites' => $this->Art->getArts($invitedArtIDs)));
				$this->load->view('templates/contentEnd');
				$this->load->view('templates/loggedInMenu');
				$this->load->view('templates/footer');
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

	public function approve()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if (!empty($this->session->userdata['userData']['id'])  && $this->ArtistInvitesModel->checkIfArtInviteWaiting($this->User->returnEmail($this->session->userdata['userData']['id'])) == 1)
			{
				if(!empty($this->input->post("artID")))
				{
					if($this->ArtistInvitesModel->checkIfValid($this->input->post("artID"), $this->User->returnEmail($this->session->userdata['userData']['id'])) == 1)
					{
						// valid
						if($this->ArtUserAssociation->insertAssociation($this->session->userdata['userData']['id'], $this->input->post("artID")) == 1)
						{
							// insertion successful
							if($this->ArtistInvitesModel->deleteInvite($this->input->post("artID"), $this->User->returnEmail($this->session->userdata['userData']['id'])) == 1)
							{
								// deletion successful
								$this->load->view('templates/header');
								$this->load->view('templates/henosis');
								$this->load->view('templates/contentStart');
								$this->load->view('templates/headerRow');
								$this->load->view('content/inviteSuccessfulAddition');
								$this->load->view('templates/contentEnd');
								$this->load->view('templates/loggedInMenu');
								$this->load->view('templates/footer');
							}
							else
							{
								// failed
								redirect(base_url());
							}
						}
						else
						{
							// failed
							redirect(base_url());
						}
					}
					else
					{
						// invalid
						redirect(base_url());
					}
				}
				else
				{
					redirect(base_url()."artistInvites");
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
