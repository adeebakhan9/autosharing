
<style>
.ridedetailsSpanLeft{
float:left;
 padding:7px;
 font-size:15px;

}
.ridedetailsSpanRight{
float:right;
 padding:7px;

}
.carOwnerspanLeft{
float:left;
 padding:7px;
 font-size:15px;

}
.carOwnerspanRight{
float:right;
 padding:7px; 
 color:#8AE188;

}
.carOwnerdiv{
background:#F5F5F5;
color:#333333;

}
.carOwnerName{
float:left;
padding:7px;
font-size:large;
margin-top:25px;
}
.carOwnerImage{
border:solid 1px #f5f5f5;
height:100px;
width:100px;
float:left;

}
.bookingspanLeft{
float:left;
padding:2px;
font-size:15px;

}
.bookingselectoption{
border:none;
width:90px;
padding:5px;
float:right;
}

</style>
<!-- Section Wrapper --><section class="no-rtl">
<!-- Content --><div id="content" class="price">


<!-- Breadcrumbs --><div id="breadcrumbs"><div class="box-container">
<?php echo $this->session->flashdata('booking_successfull'); ?>
    <div class="breadcrumbs-page-title"><h1>  Submit listing</h1></div>
    <div class="breadcrumbs"><span><a href="http://demo.sokolby.com/metrodir">Home</a> <i class="fa fa-chevron-right"></i> </span>Submit listing</div>

</div></div><!-- Breadcrumbs -->

<!-- Subscribe Block --><div id="subscribe" class="box-container">

                
<div id="pricing-plans">
    <div class="title">
        <h2>Pricing Plans</h2>
    </div>
<?php foreach($val as $val1) { 
 $count=$val1['seatOffered'];
?>
    <div class="pricing-table" >

                    <div class="pricing-column opacity" style="width:45%">
               <div class="pricing-header second">Ride Details</div>
      
                                                <div class="pricing-cell">  <span class="ridedetailsSpanLeft" >Departure point </span>
												   <span style="float:right; padding:7px"><?php echo $val1['departure']; ?></span> </div>
												   
									             <div class="pricing-cell"><span class="ridedetailsSpanLeft">Drop-off poin </span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['arrival']; ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Departure date</span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['departureDate']; ?></span> </div>
												   
												        <div class="pricing-cell"><span class="ridedetailsSpanLeft">Stops </span>
												   <span class="ridedetailsSpanRight"><?php echo $val1['stops']; ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Travel Bag </span>
												   <span class="ridedetailsSpanRight"><?php 
												   
												    if ($val1['luggageSize']==0){ ?>
												   
												   Small
												   
												 <?php   }
												 
												  elseif($val1['luggageSize']==1){ ?>
												  
												  
												   Medium
												   
												<?php    }
												
												   else{ ?>
												   
												   Large
												   
												  <?php  }
												   
												   ?></span> </div>
												   
                                                    <div class="pricing-cell"><span class="ridedetailsSpanLeft">Departure In </span>
												   <span class="ridedetailsSpanRight">
												  <?php 
												   
												    if ($val1['leavingAt']==0){ ?>
												   
												  Right on Time
												   
												 <?php   }
												 
												  elseif($val1['leavingAt']==1){ ?>
												  
												  
												   In a 15 minute window
												   
												
												   
												 <?php   }
												 
												  elseif($val1['leavingAt']==2){ ?>
												  
												  
												   In a 30 minute window
												   
												<?php    }
												
												elseif($val1['leavingAt']==3){ ?>
												  
												  
												   In a 1 hour window
												   
												<?php    }
												
												   else{ ?>
												   
												  In a 2 minute window
												   
												  <?php  }
												   
												   ?> 
												   </span></div>
												   
                                                     <div class="pricing-cell"><span class="ridedetailsSpanLeft">Detour </span>
												   <span class="ridedetailsSpanRight"><?php 
												   
												    if ($val1['detour']==1){ ?>
												   
												  not willing to make a detour
												   
												 <?php   }
												 
												  elseif($val1['detour']==2){ ?>
												  
												  
												   15 min detour max
												   
												
												   
												 <?php   }
												 
												  elseif($val1['detour']==3){ ?>
												  
												  
												   30 min detour max
												   
												<?php    }
												
												else { ?>
												  
												  
												  Anything is fine
												   
												<?php    } ?> </span> </div>
                            </div>
        
				<div class="pricing-column opacity" style="width:25%">
									<div class="pricing-header second">Car Owner</div>
									<div class="pricing-cost" >
									<span ><img  src="<?php echo base_url(); ?>upload/profilePic/<?php echo $val1['images']; ?>"  class="carOwnerImage"/></span> 
									<span class="carOwnerName"><?php echo $val1['first_name']; ?> <?php echo $val1['last_name']; ?></span>
									
									</div>
									
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Govt. ID </span>
									<span class="carOwnerspanRight">verified</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Phone number  </span>
									<span class="carOwnerspanRight">verified</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Email address  </span>
									<span class="carOwnerspanRight">verified</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Car  </span>
									<span class="ridedetailsSpanRight">Maruti</span>
									</div>
									<div class="pricing-cell"> 
									<span class="carOwnerspanLeft">Contact Owner  </span>
									<div class="detail-icon"><span class="carOwnerspanRight" ><a href="#"><li class="fa fa-phone"></li></a></span></div>
									</div>                                                                                                                
																			  
																				   
				</div>
        
                    
        
                    <div class="pricing-column opacity" style="width:23%">
          
				
				<form method="POST" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Home/book/<?php echo $val1['id'];?>" enctype="multipart/form-data" >
							
							<div class="pricing-header first"><?php echo $leftseats; ?> Seats left</div>
							<div class="pricing-cost"><div class="price-currency">Rs</div><div class="price-big"><?php echo $val1['pricePerCoTraveller']; ?></div><br><br>per co-traveller</div>
							<div class="pricing-cell"> 
							<span class="bookingspanLeft">Select Seats </span>
							<span>
							<select class="bookingselectoption" name="seats">
							<?php
							for($i=1; $i<=$count; $i++) { ?>
							<option value="<?php echo $i ; ?>" ><?php echo $i ; ?>seats</option>
							<?php } ?>
							</select>
							</span> 
							</div>
							
							<div class="pricing-cell"> 
							<span style="bookingspanLeft"><input type="checkbox" style="display:block !important" />I have read and accept the <a href="#">T&Cs </a>and certify I am over 18 years old. </span>
							
							</div>
							<div class="pricing-cell"> 
				
							
							</div>
							<div class="pricing-cell"> 
							<span style="bookingspanLeft"><button type="submit">BOOK NOW</button></span>
							
							</div>                                                         
                            </div>
                                               </form>    
                           
       
        <div class="clear"></div>

    </div>
<?php } ?>
</div>    
                
<div id="register">
   
	
</div>    
</div><!-- /Subscribe Block -->


</div><!-- /Content -->



