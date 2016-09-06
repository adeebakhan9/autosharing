
<?php foreach($val as $val2) { ?>

						  <li class="comment">
							
                        <div class="comment" id="comment-1">
                            <div class="comment-user-picture">
                                <img alt='' src='http://1.gravatar.com/avatar/?s=80&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/?s=160&amp;d=mm&amp;r=g 2x' class='avatar avatar-80 photo avatar-default' height='80' width='80' />                            </div>
                            <div class="comment-body">
                                <div class="comment-links">
                                                                                                    </div>
                                <div class="comment-author">
                                    <span><cite class="fn"><a href='http://demo.sokolby.com/' rel='external nofollow' class='url'><?php echo $val2['departureDate']; ?></a></cite></span>
                                    <span>-</span>
                                    <span><?php echo $val2['departureTime']; ?></a></span>
                                </div>
                                <div class="comment-text">
                                    <p>Departure : <?php echo $val2['departure']; ?><br />Arrival: <?php echo $val2['arrival']; ?></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
						  
						
                    </li>
                           
 <?php } ?>
