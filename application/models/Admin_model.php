<?php

/**
*
*/
class Admin_model extends CI_Model
{

	public function insert($data=array(),$table)
	{
		 $this->db->insert($table,$data);
		 return $this->db->insert_id();

	}
	public function update($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	    return $this->db->affected_rows();
     }

	public function delete($table,$where)
	{
		$this->db->delete($table,$where);
	    return $this->db->affected_rows();
     }

	public function get($table)
	{
		return $this->db->get_where($table)->result_array();
	}


	public function get_row($table,$where)
	{
		return $this->db->get_where($table,$where)->row_array();
	}



	public function get_where_single($table,$where='')
	{
		return $this->db->get_where($table,$where)->result_array();
	}



	public function raw_query($query,$fetch)
	{
		if ($fetch==1) {

			return $this->db->query($query)->result_array();
		}else{
            return $this->db->query($query);
		}
	}



	public function edit_request($data)
	{
		return $this->db->query("select * from student_fee  where student_fee.feeID='".$data['feeID']."'")->row_array();
	}
	/*public function sell_product($data)
	{
		return $this->db->query("select student.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID) where lead.leadID='".$data['leadID']."'")->row_array();
	}*/


}
