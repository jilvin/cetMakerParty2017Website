<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Launch extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//Load PartyData model
		$this->load->model('PartyData');
		$this->load->model('Art');

		$this->load->helper('cookie');
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
			$data['artList'] = $this->Art->show_current_arts($this->PartyData->getCurrentPartyID());
			if($data['artList'] != NULL)
			{
				$this->load->view('additional/launch/launch', $data);
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
}
