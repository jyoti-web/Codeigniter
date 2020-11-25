<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_page extends CI_Controller{

	public function index()
	{
		$this->load->view('Gallery');
	}
}
?>