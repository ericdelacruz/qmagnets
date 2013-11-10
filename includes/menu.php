<?php $pg=basename($_SERVER['PHP_SELF'],".php");    ?>

<link href="chrometheme/chromestyle.css" rel="stylesheet" type="text/css" />







<nav>

            <div class="nav_area">

              <div class="chromestyle" id="chromemenu">

                <ul>

                  <li><a href="index.php"  class="hma<?php if($pg=='index'){ ?>main<?php } ?>">Home</a></li>

                  <li><a href="about.php" class="bksa<?php if($pg=='about' ){ ?>main<?php } ?>" rel="dropmenu1">About Us</a></li>

                  <li><a href="how-to-use.php" class="weba" rel="dropmenu2">How To Use</a></li>

                  <li><a href="products.php" class="blog<?php if($pg=='buy' ){ ?>main<?php } ?>" rel="dropmenu3">Buy Now</a></li>

                  <li><a href="http://qmagnets.com/blog/" class="car" rel="dropmenu4">Blog</a></li>

                  <li><a href="press-room.php" class="en<?php if($pg=='press-room' ){ ?>main<?php } ?>" rel="dropmenu5">Press Room</a></li>

                  <li><a href="contact.php" class="pd<?php if($pg=='contact' ){ ?>main<?php } ?>">Contact</a></li>

                   

                </ul>

              </div>

              

              <!--1st drop down menu -->

              <div id="dropmenu1" class="dropmenudiv"> <a href="about.php#who-we-are">Who We Are</a> <a href="about.php#our-values">Our Values</a> <a href="about.php#our-mission">Our Mission</a> </div>

              

              <!--2nd drop down menu -->

              <div id="dropmenu2" class="dropmenudiv"> <a href="how-to-use.php#application">Application</a> <a href="how-to-use.php#chronic-pain">Chronic Pain</a> <a href="how-to-use.php#acute-pain">Acute Pain</a> </div>

              

              <!--3rd drop down menu -->

              <div id="dropmenu3" class="dropmenudiv"> <a href="#">Try Before Buy</a> <a href="#">Consumer</a> <a href="http://qmagnets.com/blog/clinic-locator">Practitioner</a> <a href="#">Reseller</a> </div>

              

              <!--4th drop down menu -->

              <div id="dropmenu4" class="dropmenudiv"> <a href="http://qmagnets.com/blog/category/pain-testimonies">Testimonies</a> <a href="http://qmagnets.com/blog/category/new-research">New Research</a> <a href="http://qmagnets.com/blog/category/magnetic-therapy-2">Magnetic Therapy</a> </div>

              

              <!--5th drop down menu -->

              <div id="dropmenu5" class="dropmenudiv"> <a href="press-room.php#media">Media</a> <a href="press-room.php#press_release">Press Releases</a><a href="conference.php">Conference</a> </div>

               

              <script type="text/javascript">



cssdropdown.startchrome("chromemenu")



              </script> 

              <!-- navtop end--> 

            </div>

          </nav>