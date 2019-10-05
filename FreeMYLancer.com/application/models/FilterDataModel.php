<?php

class FilterDataModel extends Role_Model
{
	public function get_all_Users()
	{
		$query=$this->db->query("select * from user_reg");
		return $query->result();		
	}
	public function find_article($article_id)
    {
        $q = $this->dbforge->select('U_id','Uname','subject','address','Contact','email')
        ->where('U_id', $article_id)
        ->get('user_reg');

        return $q->row();
    }
}