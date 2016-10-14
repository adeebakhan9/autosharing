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
		$this->load->view('admin/login.php');
		
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
		public function carList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['cars']=$this->admin_model->carList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/carList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
	
		public function rideList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['ride']=$this->admin_model->rideList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/rideList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
		public function bookingList(){
	
	
	$this->load->model('admin_model');
	
	$data['rider']=$this->admin_model->riderList();
	
	//$data['ownerList']=$this->admin_model->ownerList();
	
//print_r($data); exit;
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/bookingList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
	
		 public function update_user_status_page($param=NULL){
	   
	   
	        	$query=$this->db->query("select * from user where id='".$param."'");
				
	         	$data['satya1']=$query->result_array();
				
				if(isset($_POST['update_status'])){
				
				$query1=$this->db->query("update user set status='".$_POST['status']."' where id='".$param."' ");
				
				if($query1){
					
					redirect(base_url().'index.php/admin/userList/');
					
					}
				
				}
				
			$data['t_id']=$param;
		   
		    $this->load->view('admin/header');
		    $this->load->view('admin/update_user_status',$data);
			$this->load->view('admin/footer');
				
		   } 
				
				
			//	echo $this->db->last_query(); exit;
		public function deleteCar($param){
		
		$this->db->query("delete from car where id='".$param."'");
		
		redirect(base_url().'index.php/admin/carList/');
		}
				
		 

	public function deleteUser(){
	
	
	$userID=$this->uri->segment(3);
	$this->load->model('Admin_model');    
	$this->Admin_model->blockUser($userID);
	
	
	
	}
	
	 public function viewRide($param=NULL){
 
 
// $this->load->model('User_model');
	$data['val']=$this->User_model->viewRideDetails($param);
	//print_r($data); exit;

	$this->load->view('user/header.php');
	$this->load->view('user/viewRide.php',$data);
	$this->load->view('user/footer.php');
 
 }
}