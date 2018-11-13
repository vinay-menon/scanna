<?php
ob_start();

if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['user-name'];
    $email = $_REQUEST['user-email'];
    $phone = $_REQUEST['user-phone'];
    $addr = $_REQUEST['user-place'];
    $message = $_REQUEST['user-message'];
     
    $faddr = $email;
    $baddr = "vinaymenon313@gmail.com";
    $eol = "\r\n";
    $dblln = "<br style='margin-bottom: 10px'>";

    $faddr = $email;

    $headers1 .= "From: <".$baddr.">".$eol;
    $headers1 .= "Reply-To: <".$faddr.">".$eol;
    $headers1 .= "Return-Path: <".$faddr.">".$eol;    // these two to set reply address
    $headers1 .= "Message-ID: <".time()."-".$faddr.">".$eol;
    $headers1 .= "X-Mailer: PHP v".phpversion().$eol;
    $headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";

    //$too=$subj;
    $too="vinaymenon313@gmail.com";


    $descr = "<b>Name:</b> ".$name.$dblln."<b>Email ID:</b> ".$email.$dblln."<b>Phone:</b> ".$phone.$dblln."<b>Place:</b> ".$addr.$dblln."<b>Message:</b> ".$message;

    $sub = "scannaproducts.com General enquiry from"." ".$name;
    $msg = $descr;

    $mail_sent = @mail($too,$sub,$msg,$headers1);


    header("location:contact.php");
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Old - Scanna Food Products</title>
    <link rel="stylesheet" href="css/scanna.css">
</head>
<body>
   <div class="main-container">
      <header class="main-header home-header">
          <div class="header-wrapper">
            <div class="logo">
                <img src="images/scanna-logo.png" alt="">
            </div>
            <div class="enquiry">For enq please make a call:<br> <span>+91 9895682557</span></div>
            <nav class="main-nav">
                <a href="index.html" class="nav-link">Home</a>
                <a href="about-us.html" class="nav-link">About us</a>
                <div class="dropdown nav-link">
                    <a href="product.html">Products
                         <img src="images/arrow.png" alt="">
                    </a>
                    <div class="dropdown-content">
                            <a href="dates.html">Dates</a>
                            <a href="nuts.html">Nuts</a>
                            <a href="dried-fruits.html">Dried Fruits</a>
                            <a href="chocolates.html">Chocolates</a>
                            <a href="gifts.html">Gifts</a>
                            <a href="quickbiriyani.html">Quick Biriyani</a>
                        </div>
                </div>
                <a href="shop.html" class="nav-link">Shop</a>
                <a href="contact.php" class="nav-link is-active">Contact</a>
            </nav>
            </div>

            <div class="menu-trigger">
                <div class="menu-trigger-bars">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div> 
                </div>
                <div class="menu-trigger-label">
                    Menu
                </div>
            </div>
      </header>   
      <h1 class="main-heading--secondary">contact</h1>
      <section class="contact-details">
          <section class="form-details">
          <h2 class="sub-head">send us a message</h2>
        <form name="form1" method="post" action="">
            <label>
                <div class="label-text">
                Name
                </div>
                <input type="text" id="user-name" name="user-name">
            </label>
            <label>
                <div class="label-text">
                Location
                </div>
                <input type="text" id="user-place" name="user-place">
            </label>
            <label>
                <div class="label-text">
                Tel.
                </div>
                <input type="text" id="user-phone" name="user-phone">
            </label>
            <label>
                <div class="label-text">
                Email
                </div>
                <input type="text" id="user-email" name="user-email">
            </label>
            <label>
                <div class="label-text">
                Message
                </div>
                <textarea id="user-message" name="user-message" rows="5" rows="10"></textarea>
            </label>
            <button type="submit" name="submit">Send</button>
        </form>

        </section>
    <section class="address-details">
        <div class="address">
        <h2>address</h2>
        <p>
            <span class="address-name"> ali's scanna</span> 
            <span class="address-name_sec">dried fruits and nuts</span><br>
            Mangalam palam <br>
            Vadakkanchery, <br>
            Palakkad-678706 <br>
            Kerala,india <br>
            Contact : 9809726708, 9846849097 <br>
            scannaproducts@gmail.com
        </p>
        </div>
        <div class="address-map">
            <h2>Route map</h2>
            <div class="aspect-ratio-10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3921.745962728272!2d76.4882686!3d10.5990242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba80a265450fca9%3A0xa4dece1effd8ca63!2sAli&#39;s+Scanna+Dried+Fruits+and+Nuts!5e0!3m2!1sen!2sin!4v1534153165784" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"
            </div>
        </div>
    </section>
</section>
     
      
      <hr class="section-seperator section-seperator--eop">
      
      
      
      
   </div>
   <footer class="main-footer">
          <div class="social-media">
              <a href="#">
                  <img src="images/ico_fb.png" alt="facebook">
              </a>
              <a href="#">
                  <img src="images/ico_yt.png" alt="youtube">
              </a>
          </div>
      </footer>
    
    <script src="js/main.js"></script>
</body>
</html>