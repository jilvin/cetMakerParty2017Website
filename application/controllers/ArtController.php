<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ArtController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PartyData');
		$this->load->model('Art');
		$this->load->model('ArtUserAssociation');
		$this->load->model('ArtVerificationWaitingList');
		$this->load->model('ArtVerificationWaitingListClubsAssociation');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function addArtist()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			if($this->session->userdata['userData']['id'])
			{
				if($this->uri->segment(2) != NULL)
				{
					if($this->ArtUserAssociation->checkIfOwnArt($this->uri->segment(2), $this->session->userdata['userData']['id']) == 1)
					{
						$this->load->view('templates/header');
						$this->load->view('templates/henosis');
						$this->load->view('templates/contentStart');
						$this->load->view('templates/headerRow');
						$this->load->view('content/addArtist', $this->Art->getArt($this->uri->segment(2)));
						$this->load->view('templates/contentEnd');
						$this->load->view('templates/loggedInMenu');
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
				redirect(base_url().'user_authentication');
			}
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
