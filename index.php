        <?php 
            include 'includes/session.php'; 
            include('ph_header.php'); 
            include('ph_mainmenu.php'); 
            include('ph_banner.php'); 
          ?>
         <!-- Slideshow 4 -->
       <!-- //banner -->

      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
           <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Best Products</h3>
            <div class="row banner-below-w3l">
            <?php 
                     $conn = $pdo->open();
                     try{
                        
                              $stmt = $conn->prepare("SELECT * FROM products order by id desc limit 8");
                              $stmt->execute();
                           
                           foreach ($stmt as $row) {
                              $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
                           
                     ?> 
             
                  <div class="col-lg-3 col-md-12 col-sm-12 text-center banner-agile-flowers">
                  <img src="<?php echo $image;?>" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h5 class="pt-3"><?php echo ucwords($row['name']);?></h5>
                  </div>
               </div>

               <?php } 
               }catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
                  $conn = $pdo->close();
             ?>
            </div>
         </div>
      </section>
      <!-- //about -->
      <!--new Arrivals -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">New Arrivals</h3>
            <div class="slid-img">     
               <ul id="flexiselDemo1">
               <?php 
                     $conn = $pdo->open();
                     try{
                        
                              $stmt = $conn->prepare("SELECT * FROM products order by id desc limit 20");
                              $stmt->execute();
                           
                           foreach ($stmt as $row) {
                              $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
                           
                     ?> 
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="<?php echo $image;?>" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3"><?php echo $row['name'];?></h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <?php } 
               }catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
                  $conn = $pdo->close();
             ?>
                  <!-- <li>
                     <div class="agileinfo_port_grid">
                         <img src="images/pkhproducts/P2.png" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Leaves</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/pkhproducts/P3.png" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Churan</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/pkhproducts/P4.png" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Syrup</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li> -->
                  <!-- <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/pkhproducts/P5.png" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Batti</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/pkhproducts/P6.png" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Plants</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.php">Shop Now</a>
                        </div>
                     </div>
                  </li> -->
               </ul>
            </div>
         </div>
      </section>


      <!--//about -->
      <!--Customers Review -->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Customers Review</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s3.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s3.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s3.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s1.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s1.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/pkhimages/s4.png" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//Customers Review -->
      <!-- Product-view -->

      
     <section class="product py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Latest Products</h3>
           <!--  <div class=" img-toy-w3l-top">
            </div> -->
            <!-- <div class="mt-lg-4 mt-3 product-info-img">
               <p>aaavelit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
               <div class="clients_more-buttn">
                  <a href="shop.html">Shop Now</a>
               </div>
            </div> -->
            <div class="row">
       
               <!-- <div class="col-lg-6 img-toy-w3l-left">
                  <div class="toys-img-one">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>bbbvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                        velit sagittis vehicula. Duis posuere 
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div>
               </div> -->

          

               <div class="col-lg-3 img-toy-agile">
                  <img class="card-img-top" src="images/pkhproducts/p1.png" height="50%" width="50%" alt="Card image cap">
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>cccvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.php">Shop Now</a>
                     </div>
                  </div></div>

              <div class="col-lg-3 img-toy-agile">
                  <img class="card-img-top" src="images/pkhproducts/p2.png" height="50%" width="50%" alt="Card image cap">
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>cccvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.php">Shop Now</a>
                     </div>
                  </div></div>


                  <div class="col-lg-3 img-toy-agile">
                  <img class="card-img-top" src="images/pkhproducts/p3.png" height="50%" width="50%" alt="Card image cap">
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>cccvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.php">Shop Now</a>
                     </div>
                  </div></div>

<div class="col-lg-3 img-toy-agile">
                  <img class="card-img-top" src="images/pkhproducts/p4.png" height="50%" width="50%" alt="Card image cap">
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>cccvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.php">Shop Now</a>
                     </div>
                  </div></div>



                 <!--  <div class="toys-img-one-three">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p>dddvelit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                        velit sagittis vehicula. Duis posuere 
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div> -->
               </div>
           </div>
         <!--  </div> -->
      </section> 
      <!--//Product-view-->
      <!--//Product-view-->
    <!--   <section class="premium py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Premium Products</h3>
            <div class="row">
               <div class="col-lg-6 agileits-toys-left"></div>
               <div class="col-lg-6 agileits-toys-right">
                  <div class="sub-agile-info-toys">
                     <p>velit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                        velit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-lg-4 mt-md-4 mt-3">
               <div class="col-lg-6 agileits-toys-right">
                  <div class="sub-agile-info-toys">
                     <p>velit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                        velit sagittis vehicula. Duis posuere 
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere 
                     </p>
                     <div class="clients_more-buttn ">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 agileits-toys-left"></div>
            </div>
         </div>
      </section>  -->
      <!--Product-about-->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3>
            <div class="about-products-w3layouts">
               <p>Our Company is a prominent manufacturer and exporter of effectual array of Ayurvedic Herbal Products are Herbal Skin & Hair Care Products. Our range of herbal products extensively used for treating various skin and body related ailments.
               </p>
               <p class="my-lg-4 my-md-3 my-3">We blend modern production technology and advanced quality
measures into the area of manufacturing herbal personal care products, herbal health care medicines. Being a quality driven
organization, we carry out meticulous quality inspection to ascertain that our products are completely floless. 
               </p>
               <p>To ensure safe and natural ayurvedic medicines, herbal skin & hair care products we have appointed quality analyst who have enormous experience in checking the composition, purity and effectiveness of our product range. From the initial stages of sourcing natural herbs till the shipment of nal product, our quality controllers remain involved in the processes and assure stringent quality checking. The formulation process of our product range is carried out under the supervision of experts to ensure that it does not contain any articial avors, aroma or color.
               </p>
            </div>
         </div>
      </section>
      <!--//Product-about-->
      <!--subscribe-address-->
     <?php
include('ph_footeraddress.php');
     ?>
      <!--//subscribe-address-->
       <!-- <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section> --> 
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               @ 2024 | Ayurveda Products  <a href="#" target="_blank"></a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>