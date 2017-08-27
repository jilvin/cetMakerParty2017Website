<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
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
		$this->load->view('templates/header');
		$this->load->view('templates/henosis');
		$this->load->view('templates/contentStart');
		// $this->load->view('templates/headerRow');
		$this->load->view('content/about');
		$this->load->view('templates/contentEnd');
		require_once 'required/menu.php';
		$this->load->view('templates/footer');
	}
}
