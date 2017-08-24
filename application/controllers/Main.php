<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//Load PartyData model
		$this->load->model('PartyData');
		$this->load->model('Art');
	}

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function index()
	{
		if($this->PartyData->checkPartyExists() == 1)
		{
			/*
			Created to change theme for the website randomly.
			Update of workCount is very important.
			*/
			require 'required/works.php';

			if($this->session->userdata('userData'))
			{
				$data['applyUrl'] = 'apply';
			}
			else
			{
				$data['applyUrl'] = 'user_authentication';
			}

			if(is_null($this->session->userdata('selectedTheme')))
			{
				$selected = rand(0,$workCount-1);
				//echo $selected;
				/*setup session*/
				$this->session->set_userdata('selectedTheme',$selected);
			}
			else
			{
				$selected = $this->session->userdata('selectedTheme');
				//echo "session selected ".$selected;
			}

			$this->load->view('templates/header');
			$this->load->view('templates/henosis');
			$this->load->view('templates/contentStart');
			$this->load->view('templates/headerRow');
			$this->load->view('showcase/'.$workCategory[$selected].'/'.$work[$selected].'/showcase',$data);
			$this->load->view('templates/contentEnd');
			require_once 'required/menu.php';
			$this->load->view('templates/footer');
		}
		else
		{
			$this->load->view('errors/not_configured');
		}
	}
}
