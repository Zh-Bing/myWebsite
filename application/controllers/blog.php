<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function add(){
			$this->load->view('add.php');
		}
		
		public function do_add(){
			$title=$this->input->post('title');
			$con=$this->input->post('con');
			$this->load->model('blog_model');
			$query=$this->blog_model->get_add($title,$con);
			if($query){
				redirect('blog/index');
			}
		}
		
		public function do_edit(){
			$title=$this->input->post('title');
			$con=$this->input->post('con');
			$id=$this->input->post('hid');
			$this->load->model('blog_model');
			$query=$this->blog_model->edit_all_id($id,$title,$con);
			if($query){
				//redirect("")
				$this->index();
			}
		}
		
		public function edit(){
			$id=$this->uri->segment(3);
			//echo $id;
			//die();
			$this->load->model('blog_model');
			$query=$this->blog_model->get_all_id($id);
			//var_dump($query);
			//die();
			$arr['blog']=$query;
			$this->load->view('edit.php',$arr);
		}
		
		public function index(){
			//echo "0000";
			//echo $this->session->id;
			//echo $this->session->name;
			//1:准备数据 2：把数据打包成array 3：array和index.php一起加载
			$this->load->model('blog_model');
			$query=$this->blog_model->get_all();
			$arr[blog]=$query;
			
			
			$this->load->view('index.php',$arr);
		}
		
		public function del(){
			$id=$this->input->get('id');
			
			$this->load->model('blog_model');
			$result=$this->blog_model->del_name($id);
			if($result){
				redirect('blog/index');
			}
		}
		
		
	}


?>