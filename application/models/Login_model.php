<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
	class Login_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

public function user_form_data($user_id)
{
	$this->db->select('*');
	$this->db->where('user_id', $user_id);
	$query = $this->db->get('job_user');
	// echo $this->db->last_query();
	if($query->num_rows() >0)
	{
		return $query->result();
	}
}

// User objective update
public function user_objective_update($user_id,$user_objective,$count_objective)
	{

		$this->db->set("user_objective",$user_objective);
		$this->db->set("user_objective_count",$count_objective);
		$this->db->where('user_id', $user_id);
		$q = $this->db->update('job_user');

		// echo $this->db->last_query();
		// exit;
		if($q == TRUE)
		{
			return true;
		}
	}

// Login existing user
public function login_existing_user($username, $password)
{
			$this->db->from('job_user');
			$this->db->where('user_email', $username);
			$this->db->where('user_pass', $password);
			$query = $this->db->get();
            
          //  echo $this->db->last_query();
            //    exit;
            
	        if($query->num_rows() >0)
			{
				return $query->result();
			}
		}

	//  Insert customer data
	public function add_customers($data)
	{
		$insert_query = $this->db->insert('job_user',$data);
		$user_id = $this->db->insert_id();
		if($insert_query = TRUE)
		{
			return $user_id;
		}
	}
	// Update customers password
	public function user_roll_update($user_id,$roll)
	{
		if($roll[0]=='User')
		{
			$roll ='User';
			$this->db->set("user_role",$roll);
		} else {
			$roll ='Company';
			$this->db->set("user_role",$roll);
		}
		
		$this->db->where('user_id', $user_id);
		$q = $this->db->update('job_user');
	//echo 	$this->db->last_query();
///exit;
		if($q == TRUE)
		{
			return true;
		}
	}

	// Update customers roll
	public function update_pass($user_id,$new_password)
	{
		$this->db->set("user_pass",$new_password);
		$this->db->where('user_id', $user_id);
		$q = $this->db->update('job_user');
	//echo 	$this->db->last_query();
///exit;
		if($q == TRUE)
		{
			return true;
		}
	}



	}
