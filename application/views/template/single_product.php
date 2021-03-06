
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">Home pages</a></li>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">mens</a></li>
										<li><a href="shop-list.html">womens</a></li>
										<li><a href="shop.html">shop</a></li>
										<li><a href="blog.html">blog</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">Blog pages</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-blog</a></li>
											</ul>
										</li>
										<li><a href="#">Pages</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">All pages</a></li>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-list.html">Shop-List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-Blog</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->			
		</header>
		<!-- HEADER-AREA END -->

		<!-- PAGE-CONTENT START -->
		<section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">Single Product</h2>
								<ul>
									<li><a href="index.html">home</a></li>
									<li>Single Product</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- SINGLE-PRODUCT-AREA START -->
			<div class="single-product-aea margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<div class="single-product-tab-content">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="img-one">
										<img src="<?php echo base_url();?>assets/img/single-product/mediam/3.jpg" alt="" />
										<a href="img/single-product/large/3.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<span class="view-full-screen" ><i class="sp-full-view"></i> view full screen</span>
										</a>
									</div>
									<div role="tabpanel" class="tab-pane" id="img-two">
										<img src="<?php echo base_url();?>assets/img/single-product/mediam/2.jpg" alt="" />
										<a href="img/single-product/large/2.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<span class="view-full-screen" ><i class="sp-full-view"></i> view full screen</span>
										</a>
									</div>
									<div role="tabpanel" class="tab-pane" id="img-three">
										<img src="<?php echo base_url();?>assets/img/single-product/mediam/3.jpg" alt="" />
										<a href="img/single-product/large/3.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<span class="view-full-screen" ><i class="sp-full-view"></i> view full screen</span>
										</a>
									</div>
									<div role="tabpanel" class="tab-pane" id="img-four">
										<img src="<?php echo base_url();?>assets/img/single-product/mediam/4.jpg" alt="" />
										<a href="img/single-product/large/4.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<span class="view-full-screen" ><i class="sp-full-view"></i> view full screen</span>
										</a>
									</div>
								</div>
								<!-- Nav tabs -->
								<ul class="" >
									<li class="active"><a href="#img-one"  data-toggle="tab"><img src="<?php echo base_url();?>assets/img/single-product/mediam/3.jpg" alt="" /></a></li>
									<li><a href="#img-two"  data-toggle="tab"><img src="<?php echo base_url();?>assets/img/single-product/mediam/2.jpg" alt="" /></a></li>
									<li><a href="#img-three"  data-toggle="tab"><img src="<?php echo base_url();?>assets/img/single-product/mediam/3.jpg" alt="" /></a></li>
									<li><a href="#img-four"  data-toggle="tab"><img src="<?php echo base_url();?>assets/img/single-product/mediam/4.jpg" alt="" /></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<div class="single-product-description">
								<h3 class="title-3">Easy-iron Shirt</h3>
								<h4>$140.00</h4>
								<div class="pro-color">
									<span>Color</span>
									<a class="color-1" href="#"></a>
									<a class="color-2" href="#"></a>
									<a class="color-3" href="#"></a>
									<a class="color-4" href="#"></a>
									<a class="color-5" href="#"></a>
								</div>
								<div class="pro-size">
									<span>Size</span>
									<a href="#">xs</a>
									<a href="#">s</a>
									<a href="#">ml</a>
									<a href="#">xl</a>
									<a href="#">x</a>
								</div>
								<div class="product-counts fix margin-top-80">
									<form action="<?php echo base_url();?>index.php/main_template/add_to_cart/1" method="post">
										<div class="cart-plus-minus"><input type="text" value="1" name="quantity"/></div>
										<div class="single-pro-add-cart">
											<input type="submit" class="custom-form shop-now" value="Add to cart" />
										
									</div>
									</form>
									
								</div>
								<div class="single-pro-share">
									<ul>
										<li><a href="#"><i class="sp-share"></i><span>Share</span></a></li>
										<li><a href="<?php echo base_url();?>index.php/main_template/add_to_wishlist/1"><i class="sp-heart"></i><span>Add to Wishlist</span></a></li>
										<li><a href="#"><i class=" sp-compare-alt"></i><span>Compare</span></a></li>
									</ul>
								</div>
								<div class="categories-tags">
									<div class="categories">
										<span>CATEGORIES:</span>
										<a href="#">Lighting,</a>
										<a href="#">Mugs & Cups,</a>
										<a href="#">Outdoor,</a>
										<a href="#">Lights</a>
									</div>
									<div class="categories tags">
										<span>Tags:</span>
										<a href="#">Lighting,</a>
										<a href="#">Outdoor,</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SINGLE-PRODUCT-AREA END -->
			<!-- SINGLE-PRODUCT-REVIEWS-AREA START -->
			<div class="single-product-reviews-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="discription-reviews-tab">
								<!-- Nav tabs -->
								<ul class="reviews-tab-menu" role="tablist">
									<li role="presentation" class="active"><a href="#description" data-toggle="tab">Description</a></li>
									<li role="presentation"><a href="#reviews"  data-toggle="tab">Reviews</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="description">
										<div class="single-pro-product-description">
											<h2 class="title-4">Product Description</h2>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.  </p>
											<p> Aenean ultricies mi vitae est. Mauris placerat eleifend leo.  long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="reviews">
										<div class="product-page-comments">
											<h2>1 review for Integer consequat ante lectus</h2>
											<ul>
												<li>
													<div class="product-comments">
														<img src="<?php echo base_url();?>assets/img/author.jpg" alt="" />
														<div class="product-comments-content">
															<p><strong>admin</strong> -
																<span>March 7, 2015:</span>
																<span class="pro-comments-rating">
																	<i class="sp-star"></i>								
																	<i class="sp-star"></i>							
																	<i class="sp-star"></i>							
																	<i class="sp-star"></i>							
																</span>
															</p>
															<div class="desc">
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
															</div>
														</div>
													</div>
												</li>
											</ul>
											<div class="review-form-wrapper">
												<h3>Add a review</h3>
												<form action="#">
													<input type="text" placeholder="your name" name="firstname"/>
													<input type="email" placeholder="your email" name="email"/>
													<div class="your-rating">
														<h5>Your Rating</h5>
														<span>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
														</span>
														<span>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
														</span>
														<span>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
														</span>
														<span>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
															<a href="#"><i class="sp-star"></i></a>
														</span>
													</div>
													<textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
													<input type="submit" value="submit" />
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SINGLE-PRODUCT-REVIEWS-AREA END -->
			<!-- SINGLE-PRODUCT-RELATED-AREA START -->
			<div class="single-product-related-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="related-product-title"> 
								<h3>Related Product</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="active-related-product shop-grid">
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/1.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/5.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/2.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/4.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/3.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/1.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/4.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/2.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/5.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/3.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="#">
								<img class="primary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/5.jpg" alt="" />
								<img class="secondary-photo" src="<?php echo base_url();?>assets/img/new-collection/new-2/3.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<h2><a href="#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>
					<!-- Single-product end -->
				</div>
			</div>
			<!-- SINGLE-PRODUCT-RELATED-AREA END -->
			<!-- SERVICE-AREA START -->
			<div class="service-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-transport"></i>
								</div>
								<div class="service-brief">
									<h3>free shipping</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-head-phone"></i>
								</div>
								<div class="service-brief">
									<h3>help line</h3>
									<p>(+112) 1925184203 - call any time for any support Lorem Ipsum available, alteration </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-business"></i>
								</div>
								<div class="service-brief">
									<h3>money back guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SERVICE-AREA END -->
		</section>
		<!-- PAGE-CONTENT END -->
		
	