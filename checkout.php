<?php 
//  echo "<pre>";print_r($_REQUEST);echo "</pre>";
   $toal_item = count($_REQUEST)-3;
   $toal_item = $toal_item / 6;
   include 'includes/session.php';
   include('ph_header.php'); 
   include('ph_mainmenu.php'); 
   ?>
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.php">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
                        <h4>Your shopping cart contains: <span><?php echo $toal_item; ?> Products</span></h4>
                        <table class="timetable_sub">
                           <thead>
                              <tr>
                                 <th>S No.</th>
                                 <th>Product</th>
                                 <th>Quality</th>
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <!-- <th>Remove</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              
                           <?php 
                           $total_amount = 0;
                           $conn = $pdo->open();
                           for($i=1;$i<=$toal_item;$i=$i+1) { 
                                 $prod_id = $_REQUEST['item_number_'.$i];
                                 try{
                                    $stmt = $conn->prepare("SELECT * from products WHERE id = :id");
                                    $stmt->execute(['id' => $prod_id]);
                                    $product = $stmt->fetch();
                                 ?>

                              <tr class="rem1">
                                 <td class="invert"><?php echo $i; ?></td>
                                 <td class="invert-image"><a href="single.php?product=<?php echo $product['id']; ?>"><img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" alt=" " class="img-responsive"></a></td>
                                 <td class="invert">
                                    <div class="quantity">
                                    <?php echo  $_REQUEST['quantity_'.$i];?>
                                       <!-- <div class="quantity-select">
                                          <div class="entry value-minus">&nbsp;</div>
                                          <div class="entry value"><span>1</span></div>
                                          <div class="entry value-plus active">&nbsp;</div>
                                       </div> -->
                                    </div>
                                 </td>
                                 <td class="invert"><?php echo $product['name'];?></td>
                                 <td class="invert"><?php echo $product['price'] * $_REQUEST['quantity_'.$i];
                                 $total_amount = $total_amount + $product['price'] * $_REQUEST['quantity_'.$i];
                                 ?></td>
                                 <!-- <td class="invert">
                                    <div class="rem">
                                       <div class="close1"> </div>
                                    </div>
                                 </td> -->
                              </tr>

                              <?php } catch(PDOException $e){
                                       echo "There is some problem in connection: " . $e->getMessage();
                                 }
                           } 
                           ?>
                              
                              <tr class="rem1">
                                 <td class="invert" colspan=2><strong>Total Amount :<strong> </td> 
                                 <td class="invert" colspan=3> <strong>&#8377; <?php echo $total_amount;?></strong></td>
                                
                              </tr>

                           </tbody>
                        </table>
                     </div>
                     <div class="checkout-left">
                       
                        <div class="col-md-8 address_form">
                           <h4>Add a new Details</h4>
                           <form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
                              <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                    <div class="first-row form-group">
                                       <div class="controls">
                                          <label class="control-label">Full name: </label>
                                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                       </div>
                                       <div class="card_number_grids">
                                          <div class="card_number_grid_left">
                                             <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                             </div>
                                          </div>
                                          <div class="card_number_grid_right">
                                             <div class="controls">
                                                <label class="control-label">Landmark: </label>
                                                <input class="form-control" type="text" placeholder="Landmark">
                                             </div>
                                          </div>
                                          <div class="clear"> </div>
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">Town/City: </label>
                                          <input class="form-control" type="text" placeholder="Town/City">
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">Address type: </label>
                                          <select class="form-control option-w3ls">
                                             <option>Office</option>
                                             <option>Home</option>
                                             <option>Commercial</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="submit check_out">Delivery to this Address</button>
                                 </div>
                              </section>
                           </form>
                           <!-- <div class="checkout-right-basket">
                              <a href="payment.php">Make a Payment </a>
                           </div> -->
                        </div>
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- //top products -->
            </div>
      </section>

      <!-- footer -->
     <?php 
     include("footer.php");
     ?>