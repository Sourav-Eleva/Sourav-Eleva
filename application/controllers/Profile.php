<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function editProfile()
	{
		$this->load->view('edit_profile');
	}
}
