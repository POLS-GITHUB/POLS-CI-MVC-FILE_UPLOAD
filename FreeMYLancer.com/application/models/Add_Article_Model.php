<?php
	class Add_Article_Model extends Role_Model
	{
		public function Add()
		{
			//$ = $this->input->post();
			$InvoiceNo 		= 		$this->input->post('inv_no');
			$Name 			= 		$this->input->post('name');
			$Address 		= 		$this->input->post('address');
			$Amount 		= 		$this->input->post('amt');
			$DeliveryName 	= 		$this->input->post('deliverd');
			

			$sql = "INSERT INTO details(inv_no, name, address, amt, deliverd)VALUES(".$this->db->escape($InvoiceNo).",".$this->db->escape($Name).",".$this->db->escape($Address).",".$this->db->escape($Amount).",".$this->db->escape($DeliveryName).")";

			$result = $this->db->query($sql);
			if($this->db->affected_rows() === 1)
			{
				return $InvoiceNo;
			}
			else
			{
				return false;
			}
		}				
	}
?>