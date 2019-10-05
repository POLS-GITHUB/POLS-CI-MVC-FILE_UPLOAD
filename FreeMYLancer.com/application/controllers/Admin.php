<?php

	class Admin extends All_Users
	{
		public function __construct()
		{
			parent::__construct();
			if( ! $this->session->userdata('A_id'))
				return redirect('Login');
			

		}


		
		
		public function dashboard()
		{ 


			/*  1st Pagination Incialised   */
			
			$this->load->model('ArticlesModel');
			

			$config = [
				'base_url'=>base_url('Admin/dashboard'),
				'per_page'=>5,			
				'total_rows'=> $this->ArticlesModel->num_rows(),

				'full_tag_open'  	=> "<ul class='pagination'>",
				'full_tag_close'  	=>  "</ul>",
				'first_tag_open'   	=>  '<li>',
				'first_tag_close'  	=>  '</li>',
				'first_link_open'	=>	'<li>',
				'first_link_close'	=>	'</li>',
				'last_link_open'	=>	'<li>',
				'last_link_close'	=>	'</li>',
				'last_tag_open'   	=>  '<li>',
				'last_tag_close'  	=>  '</li>',
				'next_tag_open'   	=>  '<li>',
				'next_tag_close'  	=>  '</li>',
				'prev_tag_open'   	=>  '<li>',
				'prev_tag_close'  	=>  '</li>',
				'num_tag_open'   	=>  '<li>',
				'num_tag_close'  	=>  '</li>',
				'cur_tag_open'   	=>  "<li class='active'><a>",
				'cur_tag_close'   	=>  '</a></li>',
				
			];

			//

			
			$this->load->library('pagination');			


			$this->pagination->initialize($config);

			/* This code is fetch data */

			// $articles ['art'] = $this->ArticlesModel->articles_List(); 

			/* End This code is fetch data */


			
			$articles ['art'] = $this->ArticlesModel->articles_List($config['per_page'],$this->uri->segment(3));

			

			// parameter pass in View which Keyname is 'articles and Key Value is $articles .

			$this->load->view('admin/Dashboard',$articles);

			/* End Fetch Data from DataBase */
			


		}

		public function Add_dashboard()
		{
			$this->load->view('admin/Add_Article');	
		}

		

		public function Store_article()
		{
			$this->load->library('');
			if( $this->form_validation->run('add_article_rules') == FALSE )
			{
				$post = $this->input->post();
				Unset ($post['submit']);
				//print_r($post); exit;
				$this->load->model('ArticlesModel','details');
				if( $this->details->Add_article($post) )
				{

					$this->session->set_flashdata('feedback',"Add Successfull..");
					//$this->session->set_flashdata('feedback_class','alert-success');
					
				} else {
					

					$this->session->set_flashdata('feedback2',"Sorry Added To Faild Please Try Again..");
					//$this->session->set_flashdata('feedback_class','alert-danger');
					
				}
				return redirect('Dashboard');
			}
			else
			{
				$this->load->view('admin/Add_Article');	
			}
		}



		public function Edit_dashboard($articles_id)
		{
			$this->load->model('ArticlesModel', 'articless');
			$article	=	$this->articless->find_article($articles_id);
			$this->load->view('admin/Edit_Article', ['article'=>$article]);
			/*echo "<pre>";
			print_r($article);*/
		}


		public function Update_dashboard($article_id)
		{

		/*	echo "<pre>";
			print_r($this->input->post());
			$this->load->model('ArticlesModel', 'A_M');
		*/

			if( $this->form_validation->run('add_article_rules') == FALSE )
			{

				$post = $this->input->post();
				
				Unset ($post['submit']);
				
				$this->load->model('ArticlesModel','details');

				if( $this->details->Mupdate_Article($article_id,$post) )

				{
					// Flash Message Insert Successfull ;


					//echo "Insert Successfull";

					return redirect('Dashboard');
				}
				else
				{
					// Flash Message Insert Faild ;

					echo "Insert Faild";
				}
			}
			else
			{
				$this->load->view('admin/Add_Article');	
			}
		}

		public function Delete_dashboard()
		{
			$article_id	=	$this->input->post('article_id');
			$this->load->model('ArticlesModel','artmodl');
			$res;
			if( $this->artmodl->Delete_Article($article_id) )
				{

					//$this->session->set_flashdata('feedback',"Delete Successfull..");
					//$this->session->set_flashdata('feedback_class','alert-success');
					$res=1;			
				} else {
					

					//$this->session->set_flashdata('feedback2',"Sorry Delete To Faild Please Try Again..");
					//$this->session->set_flashdata('feedback_class','alert-danger');
					$res=0;	
				}
				echo $res;
				//return redirect('Dashboard');
			
		}

		/* __construct() method create for Redirect On Login Page whene "URL copy & Pest" */
		
		



	}


?>