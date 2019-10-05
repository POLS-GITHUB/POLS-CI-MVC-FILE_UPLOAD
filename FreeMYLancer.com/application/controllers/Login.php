<?php

//session_start();
	class Login extends All_Users
	{
		public function index()
		{	
			//if( $this->session->userdata('A_id'))
			//	return redirect('Dashboard');		

			$this->load->helper('form');
			$this->load->view('public/Login');
		}

		// Check for user login process
		public function User_Login()
		{


			$this->load->library('form_validation');

			$this->form_validation->set_rules('Uname','User Name','required|alpha');
			
			$this->form_validation->set_rules('pass','Password','required|is_unique[user_reg.pass]');

			$this->form_validation->set_error_delimiters('<p class="text_danger">','</p>');

			if($this->form_validation->run())
			{		
				
				$this->load->model('Login_model');

				$Username=$this->input->post('Uname');
				$Password=$this->input->post('pass');

				$Result = $this->Login_model->UserLog( $Username, $Password);

				if($Result)
				{

					$this->session->set_userdata('A_id', $Result);
					//$this->load->view('admin/Dashboard');
					return redirect('Dashboard');
					
				}
				else
				{
					
					$this->load->view('public/Login');
				}				
			}
			else
			{
				$this->load->view('public/error');
			}							 		
		}
		public function Logout()
		{
			$this->session->unset_userdata('A_id');
			return redirect('Login');
		}
	}
?>