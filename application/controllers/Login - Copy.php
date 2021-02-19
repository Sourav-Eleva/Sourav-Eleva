<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library(array('form_validation','session'));
		$this->load->database();
		$this->load->helper('url');
		//$this->load->library('session');
  }
  public function index()
  {
	  $session = $this->session->userdata('isLogin');
	 // if($session == FALSE)
	 // {
		  $this->load->view('login');
	 // }
	//   } else {
	// 	  redirect('Dashboard/home');
	//   }
  }
	// public function index()
	// {
	// 	$this->load->view('login');
		
	// }

// Create account
public function account()
{
	$this->load->view('create_account');
	
}
// User create form
public function user_details_form()
{
	$this->load->model('Login_model');
	$first_name = $this->input->post('first_name');
	$last_name = $this->input->post('last_name');
	$email_address = $this->input->post('email_address');
	$mobile_number = $this->input->post('mobile_number');
	$location = $this->input->post('location');
	$user_otp = '1234';

	$data = array(
		'user_first_name'=>$first_name,
		'user_last_name'=>$last_name,
		'user_email'=>$email_address,
		'user_mobile'=>$mobile_number,
		'user_location'=>$location,
		'user_otp'=>$user_otp
	);

	$data['user_id'] = $this->Login_model->add_customers($data);


	$validate_superadmin_1= count($data['user_id']);
	$username = $data['user_id'];
	if($validate_superadmin_1> 0)
	{
		$this->load->library('session');
		$this->session->set_userdata('isLogin', TRUE);
		$this->session->set_userdata('username',$username);
		
		redirect(base_url().'Login/pass');
	} else {
		  $this->session->set_flashdata("loginFailed","Wrong username and password.");
		  redirect(base_url()."Login/account");
	}
//	$user_id = $data['user_id'];
//	echo "user iddd".$user_id;
//	exit;

	// $this->load->library('session');
	// $this->session->set_userdata('isLogin', TRUE);
	// $username = $this->session->set_userdata('username',$user_id);
	//echo "username". $username;
	//exit;
//	$this->load->view('create_password',$data);

}


public function login_form()
{
	$email_add = $this->input->post('email_add');
	$pass_word = $this->input->post('pass_word');

	$validate_superadmin = $this->Login_model->login_existing_user($email_add, $pass_word);
	$validate_superadmin_1= count($validate_superadmin);
	//$username = $data['user_id'];
	if($validate_superadmin_1> 0)
	{
		$this->load->library('session');
		$this->session->set_userdata('isLogin', TRUE);
		$this->session->set_userdata('username',$username);
		
		redirect(base_url().'Login/pass');
	} else {
		  $this->session->set_flashdata("loginFailed","Wrong username and password.");
		  redirect(base_url()."Login/account");
	}
	//$this->load->view('create_password');
}
// Check password
public function pass()
{
	$this->load->view('create_password');
}
public function hear()
{
	$this->load->view('hear_to');
}
public function company()
{
	$this->load->view('company');
}
public function jobs()
{
	$this->load->view('jobs');
}
public function hire()
{
	$this->load->view('hire');
}
public function collabrate()
{
	$this->load->view('collabrate');
}
public function startups()
{
	$this->load->view('startups');
}
public function investments()
{
	$this->load->view('investments');
}
public function experts()
{
	$this->load->view('experts');
}
public function welcome()
{
	$this->load->model('Login_model');
	$this->load->view('welcome');
}

// User objective
public function user_objective()
{
	$user_id = $this->input->post('user_id');
	$freelance_jobs = $this->input->post('freelance_jobs');
	$user_objective = implode(",", $freelance_jobs);
	$count_objective = count($freelance_jobs);
	//$user_objective = 
	$this->Login_model->user_objective_update($user_id,$user_objective,$count_objective);
	$data['user_data'] = $this->Login_model->user_form_data($user_id);
	//print '<pre>';
	//print_r($data['user_data']);
	$user_objective_count = $data['user_data']['0']->user_objective_count;
	$user_objective_page = explode(",",$data['user_data']['0']->user_objective);
	//echo "Page".$user_objective_page;
	//echo "<br>Count".$user_objective_count;
	//print '<pre>';
	//print_r($freelance_jobs);
	//echo $freelance_jobs[0];
	//for($i=0; $i<$user_objective_count; $i++)
	$data['no_of_pages'] = $user_objective_count;
	$data['page_no'] = 1;

	for($i=0; $i<1; $i++)
	{
		echo "hello";
		//echo $user_objective_page[$i].'<br><br>';
		if($user_objective_page[$i]=='Mentor') {
			$this->load->view('mentor',$data);
		} else if($user_objective_page[$i]=='Hire') {
			$this->load->view('hire',$data);
		} else if($user_objective_page[$i]=='Collabrate') {
			$this->load->view('collabrate',$data);
		} else if($user_objective_page[$i]=='Startups') {
			$this->load->view('startups',$data);
		} else if($user_objective_page[$i]=='Investments') {
			$this->load->view('investments',$data);
		} else if($user_objective_page[$i]=='Experts') {
			$this->load->view('experts',$data);
		} else {
			$this->load->view('jobs',$data);
		}
	
	}

	//exit;
	//$this->load->view('jobs');
}
public function jobs_data()
{
	$this->load->view('hire');
}


// Update password
public function user_roll()
{
	$this->load->model('Login_model');
	$user_id = $this->input->post('user_id');
	$roll = $this->input->post('user');
	// print '<pre>';
	// print_r($roll);
	// echo $roll[0];
	// exit;
	$this->Login_model->user_roll_update($user_id,$roll);
	if($roll[0]=='User')
	{
		$this->load->view('hear_to');
	} else {
		$this->load->view('company');
	}
}
// Update 

public function check_password()
	{
		$this->load->model('Login_model');
		$new_password = $this->input->post('new_password');
		$user_id = $this->input->post('user_id');
	$rules = array(
				[
					'field' => 'new_password',
					'label' => 'New Password',
					'rules' => 'callback_valid_password',
				],
				[
					'field' => 'confirm_password',
					'label' => 'Confirm Password',
					'rules' => 'matches[new_password]',
				],
			);
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('create_password');	
		}
		else
		{
			$this->Login_model->update_pass($user_id,$new_password);
			$data['user_id'] = $user_id;
			$this->load->view('welcome',$data);		
		}
	}

	public function valid_password($password = '')
	{
		$password = trim($password);
		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

		if (empty($password))
		{
			$this->form_validation->set_message('valid_password', 'The {field} field is required.');
			return FALSE;
		}
		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
			return FALSE;
		}
		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>ยง~'));
			return FALSE;
		}
		if (strlen($password) < 8)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least 8 characters in length.');
			return FALSE;
		}
		if (strlen($password) > 8)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 8 characters in length.');
			return FALSE;
		}
		return TRUE;
	}
	//strong password end








	
}
