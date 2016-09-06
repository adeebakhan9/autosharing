<script type="text/javascript">

   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.enquiry_form.first_name.value == "" )
         {
            alert( "Please provide your name!" );
            document.enquiry_form.first_name.focus() ;
            return false;
         }
          if( document.enquiry_form.last_name.value == "" )
         {
            alert( "Please provide your last name!" );
            document.enquiry_form.last_name.focus() ;
            return false;
         }
         
         
         if( document.enquiry_form.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.enquiry_form.email.focus() ;
            return false;
         }
          
           if( document.enquiry_form.ph_number.value == "" )
         {
            alert( "Please provide your Phone Number!" );
            document.enquiry_form.ph_number.focus() ;
            return false;
         }
         
        
         
        
         return( true );
      }
      
      
     
      
   //-->
</script>

<div id="subscribe" class="box-container">
  <div id="register">
    <div class="title">
        <h2>Login!</h2>
    </div>

            			
                <p><?php echo $this->session->flashdata('verify_msg'); ?></p>
	        <p><?php echo $this->session->flashdata('incorrect_login_msg'); ?></p>	
			
    <div class="subscription-table">
        <form class="subscription-table" action="<?php echo base_url(); ?>index.php/main_template/login" method="post" onsubmit="return(validate());" id="enquiry_form" name="enquiry_form">

            <div class="subscription-column">
                <div class="subscription-header"> Login</div>
                <div class="subscription-body">
                    <label>Login details:</label>
						
						<input type="text" class="text-input-grey" name="username" id="email" placeholder="E-Mail" />
						
						<input type="password" class="text-input-grey" name="password"  placeholder="Password" />
						
						
                </div>
                
    

            </div>



            <div class="clear"></div>

            <div class="subscription-footer">

                <input type="hidden" name="redirect_to" value="http://demo.sokolby.com/metrodir" />
                <div class="submit"><i class="fa fa-arrow-circle-right"></i><input type="submit" class="button-green" value="Login" name="user-submit" /></div>

            </div>
            
            			


        </form>
    </div>

</div>    
</div>


 