<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('Clubs');
		$this->load->model('Leadership');
		$this->load->model('Roles');
		$this->load->model('ArtUserAssociation');
		$this->load->model('ArtClubsAssociation');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
	}

	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if(!empty($this->session->userdata['userData']['id']))
			{
				if($this->Leadership->checkIfAdmin($this->session->userdata['userData']['id'], $this->Roles->getAdminRole($this->PartyData->getCurrentPartyID())) == 1)
				{
					$userData['id'] = $this->session->userdata['userData']['id'];
					$userData['first_name'] = $this->session->userdata['userData']['first_name'];
					$userData['last_name'] = $this->session->userdata['userData']['last_name'];
					$userData['email'] = $this->session->userdata['userData']['email'];

					$data['userData'] = $userData;

					$this->load->view('templates/header');
					$this->load->view('templates/henosis');
					$this->load->view('templates/contentStart');
					$this->load->view('templates/headerRow');
					$this->load->view('administration/admin', $data);
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
				redirect(base_url());
			}
		}
	}

	public function check()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if(!empty($this->session->userdata['userData']['id']))
			{
				if($this->Leadership->checkIfAdmin($this->session->userdata['userData']['id'], $this->Roles->getAdminRole($this->PartyData->getCurrentPartyID())) == 1)
				{
					$waitingArts['artList'] = $this->ArtVerificationWaitingList->getAllWaitingArts($this->PartyData->getCurrentPartyID());
					if($waitingArts != NULL)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						$this->load->view('templates/headerRow');
						$this->load->view('content/artsWaiting', $waitingArts);
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
					redirect(base_url());
				}
			}
			else
			{
				redirect(base_url());
			}
		}
	}

	public function approve()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if(!empty($this->session->userdata['userData']['id']))
			{
				if($this->Leadership->checkIfAdmin($this->session->userdata['userData']['id'], $this->Roles->getAdminRole($this->PartyData->getCurrentPartyID())) == 1)
				{
					if(!empty($this->input->post("artID")))
					{
						if($this->ArtVerificationWaitingList->checkArt($this->PartyData->getCurrentPartyID(), $this->input->post("artID")) != 0)
						{
							$art = $this->ArtVerificationWaitingList->getArt($this->input->post("artID"));
							$patronClub = $this->ArtVerificationWaitingListClubsAssociation->getPatronClubID($this->input->post("artID"));

							// echo serialize($art);
							// echo serialize($patronClub);

							$ext1 = pathinfo($art['type1imagefilename'], PATHINFO_EXTENSION);
							$type1ImageFileNameNew = $this->Art->nextArtID().'_type1.'.$ext1;
							$ext2 = pathinfo($art['type2imagefilename'], PATHINFO_EXTENSION);
							$type2ImageFileNameNew = $this->Art->nextArtID().'_type2.'.$ext2;

							$rename1Status = rename(FCPATH.'uploads/images/art/waiting/'.$art['type1imagefilename'], FCPATH.'uploads/images/art/approved/'.$type1ImageFileNameNew);
							$rename2Status = rename(FCPATH.'uploads/images/art/waiting/'.$art['type2imagefilename'], FCPATH.'uploads/images/art/approved/'.$type2ImageFileNameNew);

							if($rename1Status == TRUE && $rename2Status == TRUE)
							{

								$insertedArtID = $this->Art->newArt($art['partyID'], $art['artname'], $art['artshortdescription'], $art['artlongdescription'], $art['category'], $type1ImageFileNameNew, $type2ImageFileNameNew);
								$this->ArtUserAssociation->insertAssociation($art['user'], $insertedArtID);
								$this->ArtClubsAssociation->insertAssociation($insertedArtID, $patronClub);

								$this->load->view('templates/header');
								$this->load->view('templates/henosis');
								$this->load->view('templates/contentStart');
								$this->load->view('templates/headerRow');
								$this->load->view('content/artApproved');
								$this->load->view('templates/contentEnd');
								require_once 'required/menu.php';
								$this->load->view('templates/footer');

							}
							else
							{
								echo 'Failed';
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
					redirect(base_url());
				}
			}
			else
			{
				redirect(base_url());
			}
		}
	}
}
