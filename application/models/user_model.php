<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function get_reg($name,$pass){
			$sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
			$result=$this->db->query($sql);
			return $result;
			
		}
		public function get_name_by_pass($name,$pass){
			$arr=array(
				'name'=>$name,
				'pass'=>$pass,
			);
			
			$query=$this->db->get_where('user',$arr);
			return $query->row();
			
			//select * from user where name='$name' and pass='$pass';
			
		}
	}

?>