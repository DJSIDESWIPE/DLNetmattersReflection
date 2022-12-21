<!DOCTYPE html>
<html>
	<head>
        <title>Contact Us</title>
		<link rel="shortcut icon" href="./img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="./css/NetMattersStyleSheet.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
            integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
            crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
             crossorigin="">
        </script>
        <?php
            
            include "./php/enquiryform.php";
        ?>
    </head>
    <body>
        <?php
            include "./php/sidebar.php";  
        ?>
        
        <div class="container-body">
        <main>
            <?php
                include "./php/header.php";
                include "./php/navbar.php"; 
            ?>
            <div class="page-link">
                <div class="container">
                <p class='page'><a href='./index.php' class='home-link'>Home</a> / Our Offices</p>
                </div>
            </div>
            <div class="our-offices-container">
                
                <div class="offices-header">
                    <div class="container">
                        <h2>Our Offices</h2>    
                    </div>
                </div>
                <div class="offices-content container">
                    <div class="office-content-container">
                        <div class="office-container move-up">
                            <a href=""><img src="https://www.netmatters.co.uk/assets/images/offices/cambridge.jpg" alt="#"></a>
                            <div class="office-info ">
                            
                                <h4>Cambridge Office</h4>
                                <ul class="address-list">
                                    <li>Unit 1.31,</li>
                                    <li>St John's Innovation Centre,</li>
                                    <li>Cowley Road, Milton,</li>
                                    <li>Cambridge,</li>
                                    <li>CB4 0WS</li>
                                </ul>
                                <a href="tel:" class="office-number">01223 37 57 72</a><br>
                                <a href="" class="office-btn">VIEW MORE</a>
                            </div>
                        </div>
                        <div class="office-map">
                            <div id="map-1" style="height:250px; width:auto;">

                            </div>
                        </div>
                    </div>
                    <div class="office-content-container">
                        <div class="office-container move-up">
                            <a href=""><img src="https://www.netmatters.co.uk/assets/images/offices/wymondham.jpg" alt="#"></a>
                            <div class="office-info">
                                
                                <h4>Wymondham Office</h4>
                                <ul class="address-list">
                                    <li>Unit 15,</li>
                                    <li>Penfold Drive,</li>
                                    <li>Gateway 11 Business Park,</li>
                                    <li>Wymondham, Norfolk,</li>
                                    <li>NR18 0WZ</li>
                                </ul>
                                <a href="tel:" class="office-number">01603 70 40 20</a><br>
                                <a href="" class="office-btn">VIEW MORE</a>
                            </div>
                            
                        </div>
                        <div class="office-map">
                            <div id="map-2" style="height:250px">

                            </div>
                        </div>
                    </div>
                    <div class="office-content-container">
                        <div class="office-container move-up">
                            <a href=""><img src="https://www.netmatters.co.uk/assets/images/offices/yarmouth-2.jpg" alt="#"></a>
                            <div class="office-info">
                                
                                <h4>Great Yarmouth Office</h4>
                                <ul class="address-list">
                                    <li>Suite F23,</li>
                                    <li>Beacon Innovation Centre,</li>
                                    <li>Beacon Park, Gorleston,</li>
                                    <li>Great Yarmouth, Norfolk,</li>
                                    <li>NR31 7RA</li>
                                </ul>
                                <a href="tel:" class="office-number">01493 60 32 04</a><br>
                                <a href="" class="office-btn">VIEW MORE</a>
                            </div>
                            
                        </div>
                        <div class="office-map">
                            <div id="map-3" style="height:250px">

                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>
            

            <div class="contact-form-container container">
                <div class="contact-info">
                    <p>Email us on:</p>
                    <h3>sales@netmatters.com</h3>
                    <p>Business hours:</p>
                    <p>Monday - Friday 07:00 - 18:00 </p>
                    <p class="out-of-hours">Out Of Hours IT Support <i class="fa-solid fa-chevron-down"></i></p>
                    <div class="out-of-hours-info" style="display:none;">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p style="font-weight: 600;color:black;">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 <br>
                            Sunday 10:00 - 18:00</p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 
                            to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 
                            minutes of your call.</p> 
                    </div>
                </div>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="contact-form">
                    <div class="inputfield-small">                    
                        <label>Your Name <span class="required">*</span></label>
                        <input id="Name" name="Name" type="text">
                    </div>
                    <div class="inputfield-small">
                        <label>Company Name</label>
                        <input id="CompanyName" name="CompanyName" type="text">
                    </div>
                    <div class="inputfield-small">
                        <label>Your Email <span class="required">*</span></label>
                        <input id="Email" name="Email" type="text">
                    </div>
                    <div class="inputfield-small">
                        <label>Your Telephone Number <span class="required">*</span></label>
                        <input id="Telephone" name="Telephone" type="text">
                    </div>
                    <div>
                        <label>Subject<span class="required">*</span></label>
                        <input id="Subject" name="Subject" type="text">
                    </div>
                    <div>
                        <label>Message<span class="required">*</span></label>
                        <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <label class="start"><input id="MarketingInfo" name="MarketingInfo" type="checkbox"><span class="label">
                            Please tick this box if you wish to receive marketing information from us.
                            Please see our <a href="#" class="privacy-policy">Privacy Policy</a>
                            for more information on how we keep your data safe.</span></label>
                    </div>
                    <div class="contact-form-button">
                        <button>SEND ENQUIRY</button>
                        <p><span class="required">*</span>Fields Required</p>
                    </div>
                </form>
                
            </div>
            <?php
                include "./php/sign-up.php";
            ?>
            </main>
            
                <?php
                    include "./php/footer.php";
                ?>
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(".out-of-hours").on("click", function(){
                let $div = $(".out-of-hours-info");
                if ($div.is(":hidden")){
                    $div.slideDown();
                } else {
                    $div.slideUp();
                }
            });

            

	const map1 = L.map('map-1').setView([52.23541300922571, 0.1542174437756883], 17);
    var marker1 = L.marker([52.23541300922571, 0.1542174437756883]).addTo(map1);
    marker1.bindPopup("<p class='popup'>Unit 1.31<br> St John's Innovation Centre <br>Cowley road <br>Milton <br>Cambridge <br>CB4 0WS</p>");
const tiles1 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map1);

const map2 = L.map('map-2').setView([52.575952, 1.136284], 17);
var marker2 = L.marker([52.575952, 1.136284]).addTo(map2);
    marker2.bindPopup("<p class='popup'>Unit 15 <br>Penfold Drive <br>Gateway 11 Business Park <br>Wymondham <br>Norfolk <br>NR18 0WZ</p>");
const tiles2 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map2);

const map3 = L.map('map-3').setView([52.555813, 1.712979], 17);
var marker3 = L.marker([52.555813, 1.712979]).addTo(map3);
    marker3.bindPopup("<p class='popup'>Suite F23 <br>Beacon Innovation Centre <br>Beacon Park <br>Gorleston <br>Great Yarmouth <br>Norfolk NR31 7RA</p>");
const tiles3 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map3);


        </script>
        <!--<script src="./js/Sticky.js"></script>-->
        
        <script src="./js/Navbar.js"></script>
    </body>
</html>