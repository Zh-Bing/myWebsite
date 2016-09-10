<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog_model extends CI_Model{
		public function get_all(){
			$query=$this->db->get('blog');
			return $query->result();
		}
		
		public function del_name($id){
			$result=$this->db->delete('blog', array('blogid' => $id));
			return $result; 
		}
		
		public function get_add($title,$con){
			//$time=date("YYYY-mm--dd:hh-ii-ss");
			$time=date('Y')."-".date(m)."-".date('d');
			//echo $time;
			//die();
			$data = array(
			    'title' => $title,
			    'content' => $con,
			    'time' => $time,
			);
			
			$result=$this->db->insert('blog', $data);
			return $result;
		}
		
		public function get_all_id($id){
			$query=$this->db->get_where('blog',array('blogid'=>$id));
			return $query->row();
		}
		
		public function edit_all_id($id,$title,$con){
			$time=date('Y')."-".date(m)."-".date('d');
			$data = array(
			    'title' => $title,
			    'content' => $con,
			    'time' => $time
			);
			
			$this->db->where('blogid', $id);
			$result=$this->db->update('blog', $data);
			return $result;
		}
	}
?>