<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Work extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('Clubs');
		$this->load->model('Leadership');
		$this->load->model('Roles');
		$this->load->model('User');
		$this->load->model('ArtClubsAssociation');
		$this->load->model('ArtUserAssociation');
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
				if(!empty($this->session->userdata['userData']['id']))
				{
					$ownArt = $this->ArtUserAssociation->checkIfOwnArt($this->uri->segment(2), $this->session->userdata['userData']['id']);
				}
				else
				{
					$ownArt = 0;
				}
				$patronClubID = $this->ArtClubsAssociation->getPatronClubID($this->uri->segment(2));
				$patronClubName = $this->Clubs->getClubName($patronClubID);
				$associatedUserIDs = $this->ArtUserAssociation->getAssociatedUserIDs($this->uri->segment(2));
				// echo serialize($associatedUserIDs);
				$i = 0;
				$alteredAssociatedUserIDs = NULL;
				foreach($associatedUserIDs as $associatedUserID)
				{
					$alteredAssociatedUserIDs[$i] = $associatedUserID['userID'];
					$i++;
				}
				// echo serialize($alteredAssociatedUserIDs);
				$artists = $this->User->returnUsersInfo($alteredAssociatedUserIDs);
				// echo serialize($artists);
				$this->load->view('content/displayWork', array('work'=>$this->Art->getWork($this->uri->segment(2)), 'ownArt' => $ownArt, 'patronClubName' => $patronClubName , 'artists' => $artists));
				$this->load->view('templates/contentEnd');
				require_once 'required/menu.php';
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
					$data = $this->ArtVerificationWaitingList->getWorkWithUserCheck($this->session->userdata['userData']['id'], $this->uri->segment(3));
					if($data != NULL)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						// if($this->session->userdata['userData']['id'] == $data['user'])
						// {
						// 	$ownArt = 1;
						// }
						// else
						// {
						// 	$ownArt = 0;
						// }
						$patronClubID = $this->ArtVerificationWaitingListClubsAssociation->getPatronClubID($this->uri->segment(3));
						$patronClubName = $this->Clubs->getClubName($patronClubID);
						$this->load->view('content/displayWaitingWork', array('work'=>$data, 'patronClubName' => $patronClubName ));
						if($this->Leadership->checkIfAdmin($this->session->userdata['userData']['id'], $this->Roles->getAdminRoles($this->PartyData->getCurrentPartyID())) == 1)
						{
							$this->load->view('administration/adminButtonsSection', array('artID' => $this->uri->segment(3)));
						}
						$this->load->view('templates/contentEnd');
						require_once 'required/menu.php';
						$this->load->view('templates/footer');
					}
					else if($this->Leadership->checkIfAdmin($this->session->userdata['userData']['id'], $this->Roles->getAdminRoles($this->PartyData->getCurrentPartyID())) == 1)
					{
						$data = $this->ArtVerificationWaitingList->getWorkWithoutUserCheck($this->uri->segment(3));
						if($data != NULL)
						{
							$this->load->view('templates/header');
							$this->load->view('templates/henosis');
							$this->load->view('templates/contentStart');
							// if($this->session->userdata['userData']['id'] == $data['user'])
							// {
							// 	$ownArt = 1;
							// }
							// else
							// {
							// 	$ownArt = 0;
							// }
							$patronClubID = $this->ArtVerificationWaitingListClubsAssociation->getPatronClubID($this->uri->segment(3));
							$patronClubName = $this->Clubs->getClubName($patronClubID);
							$this->load->view('content/displayWaitingWork', array('work'=>$data, 'patronClubName' => $patronClubName ));
							$this->load->view('administration/adminButtonsSection', array('artID' => $this->uri->segment(3)));
							$this->load->view('templates/contentEnd');
							require_once 'required/menu.php';
							$this->load->view('templates/footer');
						}
						else
						{
							redirect(base_url().'works');
						}
					}
					else
					{
						redirect(base_url().'works/mine/waiting');
					}
				}
				else
				{
					redirect(base_url().'works');
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
