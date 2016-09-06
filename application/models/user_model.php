<?php
class User_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
	
	 function verifyEmailID($email)
    {
      return $this->db->query("update user set confirmation='1' where email='".$email."'");
    }
    
    
    function userDetails(){
   
	$query=$this->db->query("select * from user where id ='".$_SESSION['user_id']."' ");
	return  $query->result_array();
    }
    
    function updateUserDetails($userDetails){
    
    	
    	
		$result=$this->db->query("update user set first_name='".$userDetails['first_name']."',last_name='".$userDetails['last_name']."',email='".$userDetails['email']."',password='".$userDetails['password']."',ph_number='".$userDetails['ph_number']."',location='".$userDetails['location']."',country='".$userDetails['country']."',state='".$userDetails['state']."',city='".$userDetails['city']."',pincode='".$userDetails['pincode']."',images='".$userDetails['images']."' where id='".$_SESSION['user_id']."'");
		
		if($result)	{
		
		redirect('User');
		
		
		}
		
		}
		
	function updatePhoto($profilePhoto){
	
	$result=$this->db->query("update user set images='".$profilePhoto['images']."' where id='".$_SESSION['user_id']."'");
	
	
	if($result)	{
		
		redirect('User');
		
		
		}
	
	}
	
	function updatePostalAddress($userDetails){
	
	
		$result=$this->db->query("update user set location='".$userDetails['location']."',country='".$userDetails['country']."',state='".$userDetails['state']."',city='".$userDetails['city']."',pincode='".$userDetails['pincode']."' where id='".$_SESSION['user_id']."'");
		
		if($result)	{
		
		redirect('User');
		
		
		}
	
	
	
	}
	
	 function addCar($data)
    {
        return $result=$this->db->insert('car', $data);
        if($result)	{
		
		redirect('User/carPage');
		
		
		}
    }	
    
    function carDetails(){
   
	$query=$this->db->query("select * from car where userID ='".$_SESSION['user_id']."' ");
	return  $query->result_array();
    }
	
	function addRide($data)
    {
        return $result=$this->db->insert('ride', $data);
		
    }	
	
	function rideOfferedDetails(){
	
		$query=$this->db->query("select * from ride where user_id ='".$_SESSION['user_id']."' ");
	return  $query->result_array();
	}
    	
}
?>
