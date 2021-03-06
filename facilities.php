
<!DOCTYPE html>
<html lang="en">

    <?php require('header.html'); ?>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php">Green Park | Kost Executive</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li>
                                        <a href="price.php"><i class="icon-shopping-cart"></i><br />Price</a>
                                    </li>
                                    <li class="current-page">
                                        <a href="#"><i class="icon-star"></i><br />Facilities</a>
                                    </li>
                                    <li>
                                        <a href="location.php"><i class="icon-map-marker"></i><br />Location</a>
                                    </li>
                                    <li>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li style="background: rgb(255, 255, 126)">
							<a href="contact.php"><i class="icon-envelope-alt"></i><b><br />Book Now !</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-star page-title-icon"></i>
                        <h2>Facilities |</h2>
                        <p>You deserves the best quality of facilities . .</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <a class="all" id="active-imgs" href="#">All</a> /
                        <a class="indoor-facilities" id="" href="#">Indoor</a> /
                        <a class="outdoor-facilities" id="" href="#">Outdoor</a> 
                        <!--                        <a class="print-design" id="" href="#">Private</a>-->
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="portfolio-img">
                    <li data-id="p-1" data-type="outdoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/carpark.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/carpark.jpg" alt="">
                            </a>
                            <h4>Private Car Park</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-2" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/intercom.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/intercom.jpg" alt="">
                            </a>
                            <h4>Intercom</h4>
                            <p>Communicating is never easier with intercom integrated on your room.</p>
                        </div>
                    </li>
                    <li data-id="p-3" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/meetingroom.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/meetingroom.jpg" alt="">
                            </a>
                            <h4>Meeting Room</h4>
                            <p>Invite your colleagues or clients to a meeting here and now.</p>
                        </div>
                    </li>
                    <li data-id="p-4" data-type="outdoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/sports.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/sports.jpg" alt="">
                            </a>
                            <h4>Sports Area</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-5" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/ac.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/ac.jpg" alt="">
                            </a>
                            <h4>Air Conditioner</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-6" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/wifi.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/wifi.jpg" alt="">
                            </a>
                            <h4>Wi-Fi</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-7" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/lcdtv.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/lcdtv.jpg" alt="">
                            </a>
                            <h4>LCD TV</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-8" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/bed.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/bed.jpg" alt="">
                            </a>
                            <h4>Queen Size Spring Bed</h4>
                            <p>Our private sanctuaries where we retreat to every night and escape the stresses of the outside world.</p>
                        </div>
                    </li>
                    <li data-id="p-9" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/bathroom.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/bathroom.jpg" alt="">
                            </a>
                            <h4>Bathroom (with water heater)</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-10" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/kitchen.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/kitchen.jpg" alt="">
                            </a>
                            <h4>Kitchen</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </li>
                    <li data-id="p-11" data-type="outdoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/stone.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/stone.jpg" alt="">
                            </a>
                            <h4>Stone Therapy Track</h4>
                            <p>Get healthy now! .</p>
                        </div>
                    </li>
                    <li data-id="p-12" data-type="indoor-facilities" class="span3">
                        <div class="work">
                            <a href="assets/img/facilities/laundry.jpg" rel="prettyPhoto">
                                <img src="assets/img/facilities/laundry.jpg" alt="">
                            </a>
                            <h4>Laundry Service</h4>
                            <p>[Additional Cost Needed]  We are working with a laundry service. We will help to take your clothes to the laundry, and you just need to pay according to the bill from the laundry service.  </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?php require('footer.html'); ?>
    </body>

</html>

