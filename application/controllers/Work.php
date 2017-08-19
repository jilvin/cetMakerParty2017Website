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
				$this->load->view('content/displayWork', $this->Art->getWork($this->uri->segment(2)));
			}
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
