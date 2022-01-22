<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function logout(){
	
unset($_SESSION);
session_destroy();
redirect("auth/login","refresh");	
	}



	public function login(){
$this->form_validation->set_rules('username','Username','required');		
$this->form_validation->set_rules('password','Password','required');		
		if($this->form_validation->run() == TRUE){
			
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'=>$username,'password'=>$password));
		$query=$this->db->get();
		
		$user=$query->row();
		
		if($user->email){
		$this->session->set_flashdata("success","You are logged in");
		$_SESSION['user_logged']=TRUE;
		$_SESSION['username']=$user->username;
		
		redirect("user/profile",'refresh');
		
		}else{
			$this->session->set_flashdata("error","No such account exists");
		redirect("auth/login",'refresh');
		}
		
		}
		
		
	$this->load->view('login');	

	}
public function register(){

if(isset($_POST['register'])){
$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('password','Password','required');
$this->form_validation->set_rules('contact','Contact','required');

	if($this->form_validation->run() == TRUE){
		
		$data=array(
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'name'=>$_POST['name'],
		'password'=>md5($_POST['password']),
		'contact'=>$_POST['contact']
		);
		$this->db->insert('users',$data);
		$this->session->set_flashdata("success","Your account has been registed");
		redirect("auth/register",'refresh');
	}

}
	$this->load->view('register');	

}
		
		
		
}
