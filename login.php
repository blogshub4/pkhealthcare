<?php 
include 'includes/session.php';
if(isset($_SESSION['user'])){
   header('location: cart_view.php');
 }
 
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
               <li>Login</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Login</h3>
            <?php
                  if(isset($_SESSION['error'])){
                  echo "
                     <div class='callout callout-danger text-center'>
                        <p>".$_SESSION['error']."</p> 
                     </div>
                  ";
                  unset($_SESSION['error']);
                  }
                  if(isset($_SESSION['success'])){
                  echo "
                     <div class='callout callout-success text-center'>
                        <p>".$_SESSION['success']."</p> 
                     </div>
                  ";
                  unset($_SESSION['success']);
                  }
               ?>
            <div class="contact-list-grid">
               <form action="verify.php" method="POST">
                  <div class=" agile-wls-contact-mid">
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                     </div>
                     <div class="form-group contact-forms">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                     </div>
                    
                    
                     <button type="submit" class="btn btn-block sent-butnn" name="login">Sign In</button>
                  </div>
               </form>
            </div>
         </div>
         <!--//contact-map -->
      </section>
    
     
     <?php include("footer.php");?>