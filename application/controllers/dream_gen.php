<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dream_Gen extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('pages/dream_form');
	}
}
