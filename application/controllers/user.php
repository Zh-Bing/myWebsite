<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->helper('url');
			$this->load->model('user_model');
		}
		
		public function index(){
			
		}
		
		public function check(){
			$name=$this->input->post('username');
			if($name=='admin'){
				echo 'error';
			}else{
				echo 'success';
			}
		}
		
		public function unlogin(){
			
			$array_items = array('id', 'name');
			$this->session->unset_userdata($array_items);
			redirect('blog/index');
		}
		
		public function do_login(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			//调用model处理数据逻辑
			//$this->load->model('user_model');
			$query=$this->user_model->get_name_by_pass($name,$pass);
			if($query){
				//设置session;
				$arr=array(
					'id'=>$query->userid,
					'name'=>$query->name,
				);
				$this->session->set_userdata($arr);
				redirect('blog/index');
			}
			//var_dump($query);
			//$sql="select * from "
		}
		
		public function login(){
			//$arr['id']=1;
			/*
			$arr['person']=array(
				'id'=>1,
				'name'=>'sword',
			);*/
			$this->load->view('login.php');
			//echo "890";
		}
		
		public function do_reg(){
			//echo 345;
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			
			//调用CI model模块
			//$this->load->model('user_model');
			//调用mode模块下的方法
			$result=$this->user_model->get_reg($name,$pass);
			if($result){
				echo "<script>alert('注册成功')</script>";
				redirect('user/login');
			}else{
				echo "注册失败";
			}
		}
		
		public function reg(){
			//echo 123;
			$this->load->view('reg.php');
		}
	}


?>