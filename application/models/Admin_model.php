<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function adminLogin($loginDetails){
    
  $query=$this->db->query("select * from admin where username='".$loginDetails['username']."' and password='".$loginDetails['password']."'"); 
   
  
   $row=$query->num_rows();
   
   
   
   if($row>0){
   
   redirect('Admin/Dashboard');
   
   }
   else{
   
   echo('Username Password Incorrect');
   }
  
    }
    
    
    //insert into user table
    function userList()
    {
      $query=$this->db->query("select * from user") ;
      return $query->result_array();
    }
	
	function blockUser($userID){
	
	
	$query=$this->db->query("update user set status='1' where id='".$userID."'"); 
	
	if($query){
	
	redirect('Admin/userList');
	
	}
	
	}
    
}
?>
