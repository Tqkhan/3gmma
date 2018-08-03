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

/*talha work*/

	/*public function edit_request($data)
	{
		return $this->db->query("select * from student_fee  where student_fee.feeID='".$data['feeID']."'")->row_array();
	}
*/	public function edit_request($data)
	{
		return $this->db->query("select student.is_installment,student.installment,student.is_previous,student.previous_installment,student_fee.* from student_fee inner join student on(student.studentID=student_fee.studentID)   
			where student_fee.feeID='".$data['feeID']."'")->row_array();
	}
	

}
