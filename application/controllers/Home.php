<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
	$this->load->view('home/header');
		$this->load->view('home/index'); 
			$this->load->view('home/footer');
			
	}
	
	
	public function rideList(){
	$query=$this->db->query("select * from ride");
	
	$data['val']=$query->result_array();
	
	$this->load->view('home/header');
		$this->load->view('home/list',$data); 
			$this->load->view('home/footer');
			
	}
	
	public function search_ride(){

		 $to=$this->input->post('to');
		 	 $from=$this->input->post('from');
			 
	$query=$this->db->query("select * from ride where departure like '%".$from."%' and arrival like '%".$to."%' ");
	$data['val']=$query->result_array();
	
     // echo $this->db->last_query(); exit;

		$this->load->view('home/searchRide',$data); 
		
	}
	
	
}