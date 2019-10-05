<?php
Class Users extends All_Users
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
	}
		
	public function index()
	{	

	//	$this->load->model('Users_Model');
		$this->load->view('public/index');		
	}

	public function register()
	{
			

		//*****************  CREATE form_validatioon  ***************** //



		$this->load->helper('form');
		
		$this->form_validation->set_rules('Uname','Your Name','trim|required|is_unique[user_reg.Uname]');

		$this->form_validation->set_rules('subject','Subject','required|trim');

		$this->form_validation->set_rules('address','Address','required|trim');

		$this->form_validation->set_rules('Contact','Contact','required|trim');

		$this->form_validation->set_rules('email','Email','required|trim|is_unique[user_reg.email]');

		$this->form_validation->set_rules('pass','Password','required|trim');

		$this->form_validation->set_rules('Cpass', 'Password Confirmation', 'required|trim|matches[pass]');		


		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			

		// *************** END form_validatioon  ************************ //



		/* 

		Under this code Only for Data_Insert without File_Upload 
		----------------------------------------------------------


		if($this->form_validation->run())
		{
			$this->load->model('Users_Model');

			$Username   		=		$this->input->post('Uname');
			$Subject			=		$this->input->post('subject');
			$Address			=		$this->input->post('address');
			$Contact			=		$this->input->post('Contact');
			$Email				=		$this->input->post('email');
			$Password			=	sha1($this->input->post('pass'));
			



			$result = $this->Users_Model->Register_Model($Username,$Subject,$Address,$Contact,
			$Email,$Password);

			//print_r($result); exit;

			if($result)
			{
				$this->session->set_flashdata('item','Successfully added new data');
				return redirect('CONTACT');
			}
			else
			{
				$this->session->set_flashdata('item2','please Try Again...');
				
			}
		}
		else
		{
			$upload_error = $this->upload->display_errors();
			
			$this->load->view('public/contact', compact('upload_error'));
		}  

		*/




		/*	Under this code for Data_Insert && File_Upload 
		----------------------------------------------------*/


			

		$config['upload_path']      = 	'./uploads/';    	  /* Folder_path for File_Upload */
		$config['allowed_types']    = 	'gif|jpg|png|jpeg';   /* File_Type for File_Upload */
		$config['max_size']         = 	409800;               /* File_Size for File_Upload */
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		
		$new_name = time().$_FILES["file"]['name'];
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);


		if($this->form_validation->run() && $this->upload->do_upload('file'))
		{
			/* This code for file_upload */

			$post = $this->input->post('file');
			$data = $this->upload->data();
			//echo "<pre>";
			//print_r($data); exit;
			
			//$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
			//echo $image_path; exit;
			//$post['Images'] = $image_path;
			/* End This code for file_upload */

			$this->load->model('Users_Model');

			$Username   		=		$this->input->post('Uname');
			$Subject			=		$this->input->post('subject');
			$Address			=		$this->input->post('address');
			$Contact			=		$this->input->post('Contact');
			$Email				=		$this->input->post('email');
			$Password			=	sha1($this->input->post('pass'));
			$Images				=		$new_name; 



			$result = $this->Users_Model->Register_Model($Username,$Subject,$Address,$Contact,$Email,$Password,$Images);

			//print_r($result); exit;

			if($result)
			{
				$this->session->set_flashdata('item','Successfully added new data');
				return redirect('CONTACT');
			}
			else
			{
				$this->session->set_flashdata('item2','please Try Again...');
				
			}
		}
		else
		{
			$upload_error = $this->upload->display_errors();
			
			$this->load->view('public/contact', compact('upload_error'));
		}
	}
	
	public function about()
	{
		$this->load->view('public/about');
	}
	public function service()
	{
		$this->load->view('public/service');
	}
	public function pages()
	{
		
	}
	public function error()
	{
		$this->load->view('public/error');
	}
	public function gallery()
	{

	}
	public function edit()
	{
		$this->load->view('public/editdata');
	}
	public function contact()
	{
		$this->load->view('public/contact');
	}






	public function RetriveData()
	{
		//$this->load->view('public/AllData');





		/*  1st Pagination Incialised   */
			
			$this->load->model('ArticlesModel');
			

			$config = [
				'base_url'=>base_url('Users/RetriveData'),
				'per_page'=>7,			
				'total_rows'=> $this->ArticlesModel->num_rows2(),

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


			
			$articles ['art2'] = $this->ArticlesModel->articles_List2($config['per_page'],$this->uri->segment(3));

			

			// parameter pass in View which Keyname is 'articles and Key Value is $articles .

			$this->load->view('public/AllData',$articles);

			/* End Fetch Data from DataBase */

	}
	
}