<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invite extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'email'));

		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('User');
		$this->load->model('ArtUserAssociation');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
		$this->load->model('ArtistInvitesModel');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function artist()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if (!empty($this->session->userdata['userData']['id']))
			{
				if(!empty($this->input->post("id")) && !empty($this->input->post("email")))
				{
					if($this->ArtUserAssociation->checkIfOwnArt($this->input->post("id"), $this->session->userdata['userData']['id']) == 1)
					{
						if($this->ArtUserAssociation->checkIfAlreadyAssociated($this->User->returnUserIDIfExists($this->input->post("email")) , $this->input->post("id")) == 0)
						{
							$artID = $this->input->post("id");
							$inviteEmail = $this->input->post("email");
							if(valid_email($inviteEmail))
							{
								$hostID = $this->session->userdata['userData']['id'];
								$inviteReturn = $this->ArtistInvitesModel->newArtistInvite($artID, $hostID, $inviteEmail);
								if($inviteReturn == "inviteAccepted")
								{
									$this->load->view('templates/header');
									$this->load->view('templates/henosis');
									$this->load->view('templates/contentStart');
									$this->load->view('templates/headerRow');
									$this->load->view('content/addArtistComplete');
									$this->load->view('templates/contentEnd');
									require_once 'required/menu.php';
									$this->load->view('templates/footer');
								}
								else if($inviteReturn == "inviteAlreadyExists")
								{
									$this->load->view('templates/header');
									$this->load->view('templates/henosis');
									$this->load->view('templates/contentStart');
									$this->load->view('templates/headerRow');
									$this->load->view('content/inviteAlreadyExists');
									$this->load->view('templates/contentEnd');
									require_once 'required/menu.php';
									$this->load->view('templates/footer');
								}
							}
							else
							{
								echo "INVALID EMAIL";
							}
						}
						else
						{
							$this->load->view('templates/header');
							$this->load->view('templates/henosis');
							$this->load->view('templates/contentStart');
							$this->load->view('templates/headerRow');
							$this->load->view('content/inviteUserAlreadyAssociated');
							$this->load->view('templates/contentEnd');
							require_once 'required/menu.php';
							$this->load->view('templates/footer');
						}
					}
					else
					{
						redirect(base_url());
					}
				}
				else
				{
					redirect(base_url());
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
