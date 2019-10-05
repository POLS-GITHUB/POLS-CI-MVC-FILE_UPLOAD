<?php

class ArticlesModel extends Role_Model
{
	

	public function articles_List( $limit , $offset )
	{

			$A_id	=	$this->session->userdata('A_id');
			$query 	= 	$this->db->select (['U_id','inv_no','name','address','amt','deliverd','A_id','P_con'])
				 		->from('details')
				 		->where('A_id', $A_id)
				 		->limit( $limit, $offset )				 		
				 		->get();

				 return $query->result();  
	 
	}
	public function num_rows()
	{
		$A_id	=	$this->session->userdata('A_id');
		$query 	= 	$this->db->select (['U_id','inv_no','name','address','amt','deliverd','A_id','P_con'])
				 		->from('details')
				 		->where('A_id', $A_id)
				 		->get();

				 return $query->num_rows();   
	}












	

	// Retrive All Data from database for All_Users( Who has Rgister in form)  
	


	public function articles_List2( $limit , $offset )
	{

		
			$query 	= 	$this->db->select (['U_id','date','inv_no','name','address','amt','deliverd','A_id','P_con'])
				 		->from('details')				 
				 		->limit( $limit, $offset )				 		
				 		->get();

				 return $query->result();  
	 
	}
	public function num_rows2()
	{
		
		$query 	= 	$this->db->select (['U_id','date','inv_no','name','address','amt','deliverd','A_id','P_con'])
				 		->from('details')
				 		->get();

				 return $query->num_rows();   
	}

	// Retrive All Data from database for All_Users( Who has Rgister in form)











	



	public function Add_article($array)
	{
		return $this->db->insert('details', $array );		
	}


	public function find_article($articles_id)
	{
		$qury	=	$this->db->select(['U_id','inv_no','name','address','amt','deliverd','A_id','P_con'])
		->where('U_id',$articles_id)
		->get('details');
		return $qury->row();
	}

	public function Mupdate_Article($articles_id, array $detail)
	{
		return $this->db->where('U_id', $articles_id)->update('details', $detail);
	}

	public function Delete_Article($articles_id)
	{
		return $this->db->delete('details', ['U_id'=>$articles_id]);
	}

}

?>