<?php
	class Login_Model extends Role_Model
	{
		public function UserLog($Username, $Password)
		{	
			$Username   =		$this->input->post('Uname');
			$Password	=	sha1($this->input->post('pass'));			

			$sql = $this->db->where(['Uname'=>$Username, 'pass'=>$Password])
			->get('user_reg');
			
			if( $sql->num_rows() )
			{
				echo "<pre>";
				//print_r($sql->result());
				///print_r($sql->row());
				//exit;
				return $sql->row()->U_id;  /* this line for Return "Id" from database */
				//return TRUE;
			}
			else
			{
				return FALSE;
			}			
		} 
		
	}	
?>