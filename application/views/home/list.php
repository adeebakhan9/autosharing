<div id="search" class="with-advanced"><div id="search-shadow"></div><div class="box-container">

        <!-- Advanced Search Button -->
		
		<div class="advanced-search-control">
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button show" title="Show Advanced Search"><i class="fa fa-align-justify"></i></a>
        <a href="http://demo.sokolby.com/metrodir/#" class="advanced-search-button hide" title="Hide Advanced Search"><i class="fa fa-align-justify"></i></a>
    </div>
	
	<!-- /Advanced Search Button -->
    
    <!-- Default Search -->
	
	<form id="default-search" class="default-search clearfix" role="search" method="post">
        <input type="text" id="from" class="text-input-black input-text" name="s" placeholder="Insert company name" value="From">
		
		
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
		
		<input type="text" id="to" class="text-input-black input-text ui-autocomplete-input" name="where" placeholder="To" autocomplete="off" value="">
	
     <input type="text" id="datepicker" class="text-input-black input-text" name="departureDate" placeholder="Date" autocomplete="off" value="">
	
        <div class="submit"><i class="fa fa-search"></i>
		
		<input type="submit" class="submit" value="Search Now" title="Search Now" name="search_simple" id="search"></div>
        <div class="clear"></div>
    </form>
	
	<!-- /Default Search -->

        
    
  
</div></div><div class="clear"></div><!-- /Search -->
<div class="box-container">
<?php foreach($val as $val1) { ?>
<ul class="commentlist">
                      <div class="div_one">
	                        <li class="comment">
							
                        <div class="comment" id="comment-1">
                            <div class="comment-user-picture">
                                <img alt='' src='http://1.gravatar.com/avatar/?s=80&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/?s=160&amp;d=mm&amp;r=g 2x' class='avatar avatar-80 photo avatar-default' height='80' width='80' />                            </div>
                            <div class="comment-body">
                                <div class="comment-links">
                                                                                                    </div>
                                <div class="comment-author">
                                    <span><cite class="fn"><a href='http://demo.sokolby.com/' rel='external nofollow' class='url'><?php echo $val1['departureDate']; ?></a></cite></span>
                                    <span>-</span>
                                    <span><?php echo $val1['departureTime']; ?></a></span>
                                </div>
                                <div class="comment-text">
                                    <p>Departure : <?php echo $val1['departure']; ?><br />Arrival: <?php echo $val1['arrival']; ?></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
						  
						
                    </li>
					  </div>
					<div class="result"></div>
                  <!-- #comment-## -->
	</ul>
 <?php } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
	<script>
	
	
	$(document).ready(function(){
	
	
    $("#search").submit(function(a){
   a.preventDefault();
 //alert("satya");
     var to=$("#to").val();
      
      var from=$("#from").val();
 alert(to);
 alert(from);
           
   $.ajax({
           
           
           type:"POST",
           url:"search_ride" ,
            data: {
            'to':to,
              'from':from
        },
           success:function(satya){
			   alert("success");
			//   alert(specialization);
           $(".div_one").hide();
           $(".result").html(satya);
           
          
           }
           
           
           
           
           
           
           
           
           });
  
    });
});
	
	
	  </script>
	  