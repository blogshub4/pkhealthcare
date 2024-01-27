<?php 
include 'includes/session.php'; 


	$conn = $pdo->open();

	try{
      if(isset($_GET['category'])){
         $cid = $_GET['category'];
         $stmt = $conn->prepare("SELECT * FROM category WHERE id = :id");
         $stmt->execute(['id' => $cid]);
         $cat = $stmt->fetch();
         $catid = $cat['id'];
      }
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();
include('ph_header.php');
include('ph_mainmenu.php'); ?>
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
               <li>Shop Now</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <section class="contact py-lg-3 py-md-3 py-sm-3 py-3">
         <h3 class="title text-center mb-lg-5 mb-md-3 mb-sm-3 mb-3">Shop</h3> 
        
         <div class="row ">
         <div class="left-ads-display col-lg-1"></div>

         <div class="outs_more-buttn">
               <a href="shop.php">All</a> &nbsp;&nbsp;
            </div>

         <?php 
         $conn = $pdo->open();
         try{
            $stmt = $conn->prepare("SELECT * FROM category");
            $stmt->execute();
            foreach ($stmt as $row) { ?>
            <div class="outs_more-buttn">
               <a href="shop.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a> &nbsp;&nbsp;
            </div>
            <?php }
            }
            catch(PDOException $e){
               echo "There is some problem in connection: " . $e->getMessage();
            } 
            $conn = $pdo->close();
            ?>
         </div>

         <div class="container-fluid py-lg-5 py-md-3 py-sm-3 py-3">
            
            <div class="row">
               <div class="left-ads-display col-lg-12">
                  
                  <div class="row">
                     
                     <?php 
                     $conn = $pdo->open();
                     try{
                           if(isset($_GET['category'])){
                              $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
                              $stmt->execute(['catid' => $catid]);
                           }else{
                              $stmt = $conn->prepare("SELECT * FROM products");
                              $stmt->execute();
                           }
                           foreach ($stmt as $row) {
                              $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
                           
                     ?> 
                     <div class="col-lg-3 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="<?php echo $image;?>" class="img-thumbnail img-fluid" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="single.php?product=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="single.php?product=<?php echo $row['id']; ?>"><?php echo $row['name'];?></a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                             <span class="money ">&#8377; <?php echo number_format($row['price'], 2);?></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="toys single-item hvr-outline-out">
                                       <form action="#" method="post">
                                       <input type="hidden" name="item_number" value="<?php echo $row['id'];?>">
                                          <input type="hidden" name="cmd" value="_cart">
                                          <input type="hidden" name="add" value="1">
                                          <input type="hidden" name="toys_item" value="<?php echo $row['name'];?>">
                                          <input type="hidden" name="amount" value="<?php echo number_format($row['price'], 2);?>">
                                          <button type="submit" class="toys-cart ptoys-cart">
                                          <i class="fas fa-cart-plus"></i>
                                          </button>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                    <?php 
                    } 
                  } catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //show Now-->
      <!--subscribe-address-->
   
      <!-- footer -->
    <?php include("footer.php");?>
