<?php 
   include 'includes/session.php';
   include('ph_header.php'); 
   include('ph_mainmenu.php'); 
   $conn = $pdo->open();
   if(isset($_GET['product'])){
      $pid = $_GET['product'];
      try{
		 		
         $stmt = $conn->prepare("SELECT * from products WHERE id = :id");
         $stmt->execute(['id' => $pid]);
         $product = $stmt->fetch();
        
     }
     catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
     }

   }
	
   ?>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/</span>
               </li>
               <li>Product Detail</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                          <ul class="slides">
                          <li data-thumb="images/f2.jpg">
                                 <div class="thumb-image"> <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                             
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3><?php echo ucwords($product['name']);?></h3>
                     <p><span class="item_price">&#8377; <?php echo number_format($product['price'], 2);?></span>
                        <!-- <del>INR000</del> -->
                     </p>
                     <!-- <div class="rating1">
                        <ul class="stars">
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div> -->
                     <!-- <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                           <input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
                           <input type="submit" value="Check">
                        </form>
                     </div> -->
                     <!-- <div class="color-quality">
                        <div class="color-quality-right">
                           <h5>Qty. :</h5>
                           <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                              <option value="null">1 </option>
                              <option value="null">2 </option>
                              <option value="null">3 </option>
                              <option value="null">4 </option>
                           </select>
                        </div>
                     </div> -->
                     <!-- div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                           <label class="radio"><input type="radio" name="radio" checked=""><i></i> Soft Teddy Bear (Black)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Soft Teddy Bear (Brown)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Pink Teddy Bear (Pink)</label>
                        </div>
                        <div class="clearfix"> </div>
                     </div> -->
                     <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                           <form action="#" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="add" value="1">
                              <input type="hidden" name="toys_item" value="<?php echo $product['name'];?>">
                              <input type="hidden" name="amount" value="<?php echo number_format($product['price'], 2);?>">
                              <button type="submit" class="toys-cart ptoys-cart add">
                              Add to Cart
                              </button>
                           </form>
                        </div>
                     </div>
                   
                  </div>
                  <div class="clearfix"> </div>
                  <!--/tabs-->
                  <div class="responsive_tabs">
                     <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                           <li>Description</li>
                          <!--  <li>Reviews</li>
                           <li>Information</li> -->
                        </ul>
                        <div class="resp-tabs-container">
                           <!--/tab_one-->
                           <div class="tab1">
                              <div class="single_page">
                                 <!-- <h6>Lorem ipsum dolor sit amet</h6> -->
                                 <p><?php echo $product['description'];?>
                                 </p>
                              </div>
                           </div>
                           <!--//tab_one-->
                          <!--  <div class="tab2">
                              <div class="single_page">
                                 <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                       <div class="bootstrap-tab-text-grid-left">
                                          <img src="images/team1.jpg" alt=" " class="img-fluid">
                                       </div>
                                       <div class="bootstrap-tab-text-grid-right">
                                          <ul>
                                             <li><a href="#">Admin</a></li>
                                             <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                          </ul>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                             quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                             autem vel eum iure reprehenderit.
                                          </p>
                                       </div> -->
                                       <div class="clearfix"> </div>
                                    </div>
                                   <!--  <div class="add-review">
                                       <h4>add a review</h4>
                                       <form action="#" method="post">
                                          <div class="row">
                                             <div class="col-md-6">
                                                <input type="text" name="Name" required="">
                                             </div>
                                             <div class="col-md-6">
                                                <input type="email" name="Email" required="">
                                             </div>
                                          </div>
                                          <textarea name="Message" required=""></textarea>
                                          <input type="submit" value="SEND">
                                       </form>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                          <!--  <div class="tab3">
                              <div class="single_page">
                                 <h6>Teddy Bear(Blue)</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                                 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <!--subscribe-address-->
       <?php
// include('ph_footeraddress.php');
     ?>
     
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
      <!--jQuery-->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
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
      <!-- price range (top products) -->
      <script src="js/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="js/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="js/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
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
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>