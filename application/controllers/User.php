<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	
	$this->load->model('user_model');
	$data['val']=$this->user_model->userDetails();
	
	
	
		$this->load->view('user/header.php');
		$this->load->view('user/edit_user.php',$data);
		$this->load->view('user/footer.php');
	}
	
	
	
	public function update_user_table(){
					$this->load->library('upload');
						
					$directory="upload/profilePic/"; 
					$filename=$_FILES["images"]["name"]; 
					$tempath=$_FILES["images"]["tmp_name"]; 
					$upload_path=$directory.$filename;
			
		$data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'ph_number' => $this->input->post('ph_number'),
                'images' => $filename,
                'location' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'pincode' => $this->input->post('pincode'),
            );
	
       move_uploaded_file($tempath,$upload_path);

	$this->load->model('user_model');
	$this->user_model->updateUserDetails($data);
	
	
}

public function uploadePhotoPage(){

$this->load->model('user_model');
$data['val']=$this->user_model->userDetails();

	        $this->load->view('user/header.php');
		$this->load->view('user/photo.php',$data);
		$this->load->view('user/footer.php');


}

public function updatePhoto(){

  $this->load->library('upload');
    			
$directory="upload/profilePic/"; 
$filename=$_FILES["images"]["name"]; 
$tempath=$_FILES["images"]["tmp_name"]; 
$upload_path=$directory.$filename;

$data = array(
               
               'images' => $filename,
                
            );
	
	  
 move_uploaded_file($tempath,$upload_path);

	$this->load->model('user_model');
	$this->user_model->updatePhoto($data);

}


public function postalAddressPage(){

		$this->load->model('user_model');
		$data['val']=$this->user_model->userDetails();
	
                $this->load->view('user/header.php');
		$this->load->view('user/postalAddress.php',$data);
		$this->load->view('user/footer.php');

}


public function updatePostalAaddress(){

$data = array(
              
              
                'location' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'pincode' => $this->input->post('pincode'),
            );
	
	  


	$this->load->model('user_model');
	$this->user_model->updatePostalAddress($data);
	



}


public function carPage(){

		$this->load->view('user/header.php');
		$this->load->view('user/car.php');
		$this->load->view('user/footer.php');



}

public function verificationPage(){

	$this->load->model('user_model');
	$data['val']=$this->user_model->userDetails();
	
		$this->load->view('user/header.php');
		$this->load->view('user/verification.php',$data);
		$this->load->view('user/footer.php');



}

public function addCar(){

 $this->load->library('upload');
    			
 $directory2="upload/car/"; 
$filename=$_FILES["images"]["name"]; 
$tempath=$_FILES["images"]["tmp_name"]; 
$upload_path=$directory2.$filename;

			$data=array();
			$data['carName']=$this->input->post('carName');
			$data['model']=$this->input->post('model');
			$data['comfort']=$this->input->post('comfort');
			$data['seats']=$this->input->post('seats');
			$data['color']=$this->input->post('color');
			$data['type']=$this->input->post('type');
			$data['userID']=$_SESSION['user_id'];
			$data['images']=$filename;
			
 move_uploaded_file($tempath,$upload_path);

			$this->load->model('User_model');
			$this->User_model->addCar($data);
			

}
public function carDetailsPage(){


$this->load->model('user_model');
	$data['val']=$this->user_model->carDetails();


			$this->load->view('user/header.php');
			$this->load->view('user/carDetails.php',$data);
			$this->load->view('user/footer.php');


}

public function deleteCar($param=NULL){


$result=$this->db->query("delete from car where id='".$param."' ");
if($result){

redirect('User/carDetailsPage');

}

}

public function offerRidePage(){


			$this->load->view('user/header.php');
			$this->load->view('user/offerRide.php');
			$this->load->view('user/footer.php');


}



public function addRide(){

$data=array();
 $array=$this->input->post('city');
  $city=implode(",",$array);
 
	
			$data['departure']=$this->input->post('departure');
			$data['arrival']=$this->input->post('arrival');
			$data['stops']=$city;
			$data['departureDate']=$this->input->post('departureDate');
	       $data['departureTime']=$this->input->post('departureTime');
	       $data['arrivalDate']=$this->input->post('arrivalDate');
		   $data['arrivalTime']=$this->input->post('arrivalTime');
		   $data['tripType']=$this->input->post('tripType');
			$data['user_id']=$_SESSION['user_id'];

			$this->load->model('User_model');
			$result=$this->User_model->addRide($data);
			
		//echo $this->db->last_query(); exit;
			
        if($result)	{
		
		redirect('User/offerRidePage');
		
		
		}
}

public function rideOffered(){

	$this->load->model('User_model');
				$data['val']=$this->User_model->rideOfferedDetails();

	$this->load->view('user/header.php');
			$this->load->view('user/rideOffered.php',$data);
			$this->load->view('user/footer.php');



}

}
