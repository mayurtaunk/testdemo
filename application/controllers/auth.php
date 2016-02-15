<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index()
	{
		$this->load->view('login');
	}
	/*Sign Up*/
	public function signup($pno,$extra)
	{
		if($pno==1)
		{
			
			$this->load->view('signup/signup1');
		}
		else if($pno==2)
		{
			$this->session->set_userdata('utype',$extra);
			$this->load->view('signup/signup2');
		}
		else if($pno==3)
		{
			$this->form_validation->set_rules('email', 'Username', 'required|is_unique[tquser.email]');
			$this->form_validation->set_rules('password', 'Password', 'required|is_unique[users.auth_key]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('signup/signup2');
			}
			else
			{
				$this->session->set_userdata('email',$this->input->post('email'));
				$this->session->set_userdata('pass',$this->input->post('password'));
				$this->load->view('signup/signup3');
			}
		}
		else if($pno==4)
		{
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Postal Address', 'required');
			$this->form_validation->set_rules('contact', 'Contact Number','required|exact_length[10]|is_natural');
			$this->form_validation->set_rules('city', 'City', 'required|alpha');
			$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('signup/signup3');
			}
			else
			{
				$this->session->set_userdata('name',$this->input->post('name'));
				$this->session->set_userdata('address',$this->input->post('address'));
				$this->session->set_userdata('contact',$this->input->post('contact'));
				$this->session->set_userdata('city',$this->input->post('city'));
				$this->session->set_userdata('dob',$this->input->post('dob'));
				$this->session->set_userdata('gender',$this->input->post('gender'));
				$this->load->view('signup/signup4');
			}
		}
		else if($pno==5)
		{
			$this->form_validation->set_rules('question', 'Your Question', 'required');
			$this->form_validation->set_rules('answer', 'Your Answer', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('signup/signup4');
			}
			else
			{
				$this->session->set_userdata('question',$this->input->post('question'));
				$this->session->set_userdata('answer',$this->input->post('answer'));
				$this->load->model('auth_model');
				if($this->auth_model->insert() == 1)
				{
					$this->load->view('login');
				}
				else
				{
					echo "<div class='alert alert-danger' role='alert'>Registration Failed</div>";
				}
			}
		}
	}
	/*Sign Up*/
	/*Validation Of Login*/
	public function validateuser()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$this->load->model('auth_model');
			$val=$this->auth_model->validate();
			if($val == 0)
			{
				redirect('admin');
				/*$data=array('panel_title'=> 'DashBoard',
					'page' => 'carrier/dashboard');
				$this->load->view('admin',$data);*/
			}
			else if($val == 1)
			{
				redirect('carrier');
				/*$data=array('panel_title'=> 'DashBoard',
					'page' => 'carrier/dashboard');
				$this->load->view('carrier',$data);*/
			}
			else if($val == 2)
			{
				redirect('customer');
				/*$data=array('panel_title'=> 'DashBoard',
					'page' => 'customer/dashboard');
				$this->load->view('customer',$data);*/
			}
			else if($val ==5)
			{
				$data=array('errormsg' => "Invalid ID/Password");
				$this->load->view('login',$data);
			}
		}
	}
	/*Validation Of Login*/
}