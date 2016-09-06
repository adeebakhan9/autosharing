<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/index.php');
		
	}
	
	
	public function loginAdmin(){
	
	$data=array(
	
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password'),
	
	);
	
	$this->load->model('admin_model');
	$this->admin_model->adminLogin($data);
	
	}
	
	
	public function Dashboard(){
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/footer.php');
	
	}
	
	public function userList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['users']=$this->admin_model->userList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/userList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
	
	public function deleteUser(){
	
	
	$userID=$this->uri->segment(3);
	$this->load->model('Admin_model');    
	$this->Admin_model->blockUser($userID);
	
	
	
	}
	
	
}