<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>WOOD-WORKERS</title>
  <link rel="stylesheet" href="ww.css">
  <link rel="stylesheet" href="/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">



</head>

<body>


  <!-- --------------section 1 header and nav-------- -->
  <section class="mu">
    <!-- menu  -->
    <div class="conheadr logo">

      <!-- ------navbar--- -->
      <nav id="navbar">

        <a href="home.php" id="logo-d " class="glow">
          <h4 class="glow">WoodWorkers</h4>
        </a>

        <ul id="menu" class="top">
          <a href="home.php">
            <li>HOME</li>
          </a>
          <a href="service.php">
            <li>SERVICE</li>
          </a>
          <a href="projects.php">
            <li>PROJECTS</li>
          </a>
          <a href="resale.php">
            <li>RE-SALE</li>
          </a>
          <a href="contact.php">
            <li>CONTACT</li>
          </a>
          <a href="about.php">
            <li>ABOUT</li>
          </a>


        </ul>

      </nav> <!-- ------nav end---- -->

      <!-- write here on pic  -->

    </div>
    <!-- menu end  -->
  </section>
  <!-- ----------------------------header and header pic and navbar ends------------------ -->
<!-- WELCOME part -->
<section class="wlcm">
  <h1>
    Contact Us
  </h1>
</section>



  <!-- ------------contact us <content---------- -->
  <section class="location">

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703140.62783946!2d64.4374536328065!3d20.052873187142218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1642425641711!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>


  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa fa-home"></i>
          <span>
            <h5>XYZ road , ABC building</h5>
            <p>xyz vihar, jpc street, new delhi</p>
          </span>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <span>
            <h5>+1 0122345678</h5>
            <p>Monday to Saturday, 8AM to 10PM</p>
          </span>
        </div>

        <div>
          <i class="far fa-envelope"></i>
          <span>
            <h5>arunkumar47883@gmail.com</h5>
            <p>Email Us Your Query</p>
          </span>
        </div>

      </div>





      <div class="contact-col">


        <form action="contactdb.php" method="post" >
          <input type="text" name="name" placeholder="enter your name" required>
          <input type="email" name="email" placeholder="enter your email" required>
          <input type="text" name="subject" placeholder="enter your subject" required>
          <textarea rows="8" name="message" placeholder="message" required></textarea>
          <button type="submit" name="submit" class="hero-btn red-btn">Send Message</button>

        </form>

      </div>
    </div>
  </section>



    <!-- where to sell section  -->

    <section class="psale ssale csale">

      <h1>Where To Resell Products</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Sit, iusto.
          Lorem ipsum dolor sit amet.
      </p>
      <a href="resale.php" class="presale-hero-btn"> Re-sell Form </a>
        </section>
        
      
        <!-- end  -->

   <!-- -------------------------------------------- second-footer------------------------------------------------- -->

<section class="second-footer cfooter">
  <div class="frow">
    <div class="fcolumn">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29542.592358257967!2d68.95188396654663!3d22.246753883677574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569c266399e37b%3A0xb5866e461a106e0a!2sDwarka%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1643454826312!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  

    </div>

    <div class="fcolumn">
      <h1>WoodWorkers.com</h1>
      
      <section class="link">
        <a href="home.php">
          HOME
        </a> 
        <a href="service.php">
          SERVICE
        </a> 
        <a href="projects.php">
          PROJECTS
        </a>
        <a href="resale.php">
          RE-SALE
        </a>
        <a href="contact.php">
          CONTACT
        </a>
        <a href="about.php">
          ABOUT
        </a>
      </section>
        <br>

        <section class="link-icons">
        <!-- <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i> -->
        <img class="image10" src="img/facebook.svg" width=2%>
        <img class="image10" src="img/twit.svg">
        <img  class="image10" src="img/insta.svg">
        <img  class="image10" src="img/linkedin.svg">
      </section>

      <h2>About Us</h2>
     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam sapiente est non aut totam ea illo recusandae voluptate aliquam consectetur, quisquam officia mollitia, quam eaque nemo porro nulla commodi consequatur!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae minima.
    </div>

    <div class="fcolumn">
      <img src="img/man.jpg">
    </div>
  </div>
</section>
 
<section class="downcss">
  
  <p>Copyright <i class="far fa-copyright"></i>2022 All rights reserved | This template is made with 
    <i class="fas fa-heart"></i> by Arun
  </p>
</section>

  <script src="ww.js"></script>


</body>

</html>