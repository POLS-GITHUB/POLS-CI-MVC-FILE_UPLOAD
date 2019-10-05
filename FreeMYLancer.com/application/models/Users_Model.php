<?php
class Users_Model extends Role_Model
{
	public function Register_Model($Username,$Subject,$Address,$Contact,$Email,$Password,$Images)
	{
	
		$Username   	=		$Username;
		$Subject		=		$Subject;
		$Address		=		$Address;
		$Contact		=		$Contact;
		$Email			=		$Email;
		$Password		=		$Password;
		$Images			=		$Images; 

		$sql = "INSERT INTO user_reg(Uname,subject,address,Contact,email,pass,Images) VALUES(".$this->db->escape($Username).",".$this->db->escape($Subject).",".$this->db->escape($Address).",".$this->db->escape($Contact).",".$this->db->escape($Email).",".$this->db->escape($Password).",".$this->db->escape($Images).")";
		

		$result = $this->db->query($sql);
		
		if($this->db->affected_rows($result) === 1)
		{
			return $Username;
		}
		else
		{
			return false;
		}
	}	
}