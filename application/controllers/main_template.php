<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_template extends CI_Controller {

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
	public function index(){
	
	$this->load->view('template/header');
		$this->load->view('template/index'); 
			$this->load->view('template/footer');
			
	}
	
	public function registerPage(){
	
	 
	
	$this->load->view('template/header');
	$this->load->view('template/registration');
	$this->load->view('template/footer');
	
	}
			public function registration(){
			
			$data=array();
			$data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['ph_number']=$this->input->post('ph_number');
			
			
			$this->load->model('User_model');
			$this->User_model->insertUser($data);
			
			$_SESSION['new_user']=$this->input->post('email');
			
			$config = Array( 
			'protocol' => 'smtp', 
			'smtp_host' => 'ssl://smtp.googlemail.com', 
			'smtp_port' => 465, 
			'smtp_user' => 'adeeba.firemoon@gmail.com', 
			'smtp_pass' => 'ossmossm@999', ); 
			
			$this->load->library('email', $config); 
			$this->email->set_newline("\r\n");
			$this->email->from('adeeba.firemoon@gmail.com', 'adeeba');
			$this->email->to($_POST['email']);
			$this->email->subject(' My mail through codeigniter from localhost '); 
			$this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://http://mytravelo.com/autosharing/index.php/main_template/verify_email/".$_SESSION['new_user']."\n"."\n\nThanks\nAdmin Team");
			
			if (!$this->email->send())
						{
						show_error($this->email->print_debugger());
						}
						else {
						 $this->session->set_flashdata('msg','<div class="notification-error"><div class="box-container">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div></div>');
									redirect('main_template/registerPage');
						}
						}


       public function verify_email(){
	   
	   
	                                        
					        $email= $this->uri->segment(3); 
						
						
						$this->load->model('User_model');    
						$this->User_model->verifyEmailID($email);
						
						
						if ($this->User_model->verifyEmailID($email))
						{
						$this->session->set_flashdata('verify_msg','<div class="notification-error"><div class="box-container">Your Email Address is successfully verified! Please login to access your account!</div></div>');
						redirect('main_template/loginPage');
						}
						else
						{
						$this->session->set_flashdata('verify_msg','<div class="notification-error"><div class="box-container">Sorry! There is error verifying your Email Address!</div></div>');
						redirect('main_template/registerPage');
						}
	
	
}


              public function loginPage(){
	
						$this->load->view('template/header');
						$this->load->view('template/login');
						$this->load->view('template/footer');
	
	}
	
	
		public function login(){
	
				$data=array();
				$email=$data['username']=$this->input->post('username');
				$password=$data['password']=$this->input->post('password');
				
				$query=$this->db->query("select * from user where email='".$email."' and password='".$password."'");
			//echo $this->db->last_query(); exit();
			
				$row=$query->num_rows();
				$row1=$query->result();
				
	
		foreach($row1 as $val)
		{
		$id=$val->id; 
		}
		
	                     

	
				if($row > 0){
				$_SESSION['user_id']=$id; 
				redirect('User');
				
				}
				else {
				
				
				$this->session->set_flashdata('incorrect_login_msg','<div class="notification-error"><div class="box-container">Sorry! User ID Password Incorrect!</div></div>');
				redirect('main_template/loginPage');
				
				}
				
				}
				
				

}