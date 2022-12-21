<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Netmatters</title>
		<link rel="shortcut icon" href="./img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" href="./css/slick.css">
		<link rel="stylesheet" href="./css/slick-theme.css">
		<link rel="stylesheet" href="./css/NetMattersStyleSheet.css">
	</head>
	<body>
		
		<?php
		include "./php/sidebar.php";
		?>
		<div class="cookie-container" id="Cookie-Container" style="display: none;">
			<div class="cookie-container-content">
				<h2>Cookies Policy</h2>
				<p>Our website uses cookies. This helps us provide you with a good experience on our website.
					To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings".
					For a detailed explanation, click on "<a href="">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.
				</p>
				<div class="cookie-buttons">
					<button class="cookie-settings-btn">CHANGE SETTINGS</button>
					<button id="Accept-Cookie">ACCEPT COOKIES</button>
				</div>
			</div>
			
		</div>
		<div class="cookie-settings">
			<div>
				<h3>Cookies Preferences</h3>
				<p>Netmatters uses cookies on their website. Cookies are small text files that are stored on your computer or other
					 device by websites that you visit. This page explains the cookies we use and what we use them for, and lets you
					  turn them on or off. (Some cookies are necessary in order for our website to work properly.) We also explain
					   below which other companies use cookies on our website and what they use them for, and lets you turn those
						other companies' cookies on or off.
				</p>
				<p>Our website uses cookies in order to make the website easier to use, to support the provision of information and
					 functionality to you, as well as to provide us with information about how the website is used so that we can make
					  sure it is as up to date, relevant and error free as we can. We also use cookies to try to ensure that our
					   online adverts reflect the interests of web users. Further information about the types of cookies that are used
						on our website is set out box below.
				</p>
				<p>As well as the options provided below, you can choose to restrict or block cookies through your browser settings
					 at any time. For more information about how to do this, and about cookies in general, you can visit
					  www.cookiepedia.co.uk and www.youronlinechoices.eu. However, please be aware that restricting or blocking
					   cookies set on our website may impact the functionality or performance of the website, or prevent you from
						using certain services provided through the website
				</p>
				<p>Please note that third parties (including, for example, advertising networks and providers of external services like
					 website analysis services) may also use cookies, over which we have no control, although we may receive services from
					  these third parties (including, for example, for targeted advertising purposes and website analytics). These cookies
					   are likely to be performance cookies or targeting cookies (as described below).
				</p>
			</div>
			<div class="functional-cookies">
				<div>
					<h2>Functional Cookies</h2>
					<p>Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences,
						and any customisations you make to pages on our website during your visit.
					</p>
					<p><b>Examples of how we use these cookies include:</b></p>
					<ul>
						<li>Live chat</li>
					</ul>
				</div>
				<div class="buttons">
					<button class="cookie-disable-btn isactive">disable</button>
					<button class="cookie-enable-btn">enable</button>
				</div>
			</div>
			<div class="panda-cookies">
				<div>
					<h2>Performance &amp; Analytics</h2>
					<p>These cookies help us understand how people use our website. They collect information such as which pages on our website visitors
						go to most often, which features they use, and which websites people have visited before they visit ours. We use this information
						to improve our website and provide a better user experience.
					</p>
					<p><b>Examples of how we use these cookies include:</b></p>
					<ul>
						<li>Monitoring and providing statistics on how our website is used.</li>
						<li>Helping us improve our website by measuring any errors that occur.</li>
						<li>Testing the website's design and operability</li>
					</ul>
				</div>
				<div class="buttons">
					<button class="cookie-disable-btn isactive">disable</button>
					<button class="cookie-enable-btn">enable</button>
				</div>
			</div>
			<div class="detailed-cookies">
				<p>Different web browsers may use different methods for managing cookies. Please follow the instructions below, from the web browser
					 manufacturers directly, to configure your browser settings*.
				</p>
				<ul>
					<li><a>Microsoft Internet Explorer (IE)</a></li>
					<li><a>Google Chrome</a></li>
					<li><a>Safari</a></li>
					<li><a>Firefox</a></li>
				</ul>
				<button class="preference-btn">show detailed preferences</button>
				<div class="detailed-preferences">
					<div class="cookie-table-row cookie-table-row-header">
						<div class="cookie-table-column cookie-table-column-left">
							<p>Company</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p>Domain</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">Hotjar Ltd</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">hotjar.com</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">LinkedIn Corporation</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">licdn.com</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">Facebook Inc.</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">facebook.com, facebook.net</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">Google Inc.</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">google.com, googletagmanager.com, google-analytics.com</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">Lead Forensics</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">https://www.leadforensics.com/</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
					<div class="cookie-table-row">
						<div class="cookie-table-column cookie-table-column-left">
							<p class="cookie-company">3CX</p>
						</div>
						<div class="cookie-table-column cookie-table-column-middle">
							<p class="cookie-domain">https://netmatters.co.uk/</p>
						</div>
						<div class="cookie-table-column cookie-table-column-right">
							<button class="cookie-disable-btn isactive">disable</button>
							<button class="cookie-enable-btn">enable</button>
						</div>
					</div>
				</div>
			</div>
			<div class="cookie-buttons">
				<button class="cookie-cancel-btn">cancel</button>
				<button class="cookie-accept-btn">continue to website</button>
			</div>
		</div>
		<div class="container-body">
			
			<main>
				<button id="ChatBox"><i class="fa fa-message fa-2x" aria-hidden="true"></i> </button>
				<div class="sticky-elements">
                    <?php
                        include "./php/header.php";
						include "./php/navbar.php";
                    ?>
                    
				</div>
				<section class="container-banner ">
					<div class="banner-div banner-div-1">
						<div class="container">
                            <h2 class="banner-h2">The East Of England's Leading Technology Company</h2>
                            <p class="banner-p">Performance-driven digital and technology services
                                with complete transparency.</p>
                            <a href="./contact-us.php" class="btn-banner">Contact us <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-2">
						<div class="container">
                            <h2 class="banner-h2">Bespoke Software</h2>
                            <p class="banner-p">Bring your business together with solutions that grow with you.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-3">
						<div class="container">
                            <h2 class="banner-h2">IT Support</h2>
                            <p class="banner-p">Fast and cost-effective IT services for your business.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-4">
						<div class="container">
                            <h2 class="banner-h2">Digital Marketing</h2>
                            <p class="banner-p">Generating new business through results-driven marketing decisions.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-5">
						<div class="container">
                            <h2 class="banner-h2">Telecoms Services</h2>
                            <p class="banner-p">A new approcah to conectivity, see how we can help your business.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-6">
						<div class="container">
                            <h2 class="banner-h2">Web Design</h2>
                            <p class="banner-p">For businesses looking to make a strong and effective first impression.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="center banner-div banner-div-7">
						<div class="container">
                            <h2 class="banner-h2">Cyber Security</h2>
                            <p class="banner-p">Keeping businesses and customers sensitive information protected.</p>
                            <a href="" class="btn-banner">Find Out More <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</section>	
				
				<div class="container-our-services container" >
					<div class="our-services-header">
						<h2 id="h2-left" class="item">Our Services</h2>
						<a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a>
					</div>
					<div class="our-services-content">
						<a href="" class="BS">
							<div class="item-services">
								<i class="fa fa-grip icon-BS icon-BS-img" aria-hidden="true"></i>
								<h3>Bespoke software</h3>
								<p class="text">Bespoke software solutions for all your business needs including integrations.</p>
								<p class="BS-button">READ MORE</p>
							</div>
						</a>
						<a href ="" class="IT">
							<div class="item-services">
								<i class="fa fa-television icon-IT icon-IT-img" aria-hidden="true"></i>
								<h3>IT Support</h3>
								<p class="text">Fully managed IT support and consultancy packages tailored to 
									meet your exact business needs.</p>
								<p class="IT-button">READ MORE</p>
							</div> 
						</a>
						<a href="" class="DM">
							<div class="item-services">
								<i class="fa fa-signal icon-DM icon-DM-img" aria-hidden="true"></i>
								<h3>Digital Marketing</h3>
								<p class="text">Driven brand awareness &amp; ROI through creative digital marketing campaigns.</p>
								<p class="DM-button">READ MORE</p>
							</div>
						</a>
						<a href="" class="TS">
							<div class="item-services">
								<i class="fa fa-phone icon-TS icon-TS-img" aria-hidden="true"></i>
								<h3>Telecoms Services</h3>
								<p class="text">Business telephony solutions including mobile &amp; connectivity solutions</p>
								<p class="TS-button">READ MORE</p>
							</div>
						</a>
						<a href="" class="WD">
							<div class="item-services">
								<i class="fa fa-code icon-WD icon-WD-img" aria-hidden="true"></i>
								<h3>Web Design</h3>
								<p class="text">User-centric design for businesses looking to make a lasting impression</p>
								<p class="WD-button">READ MORE</p>
							</div>
						</a>
						<a href="" class="CS">
							<div class="item-services">
								<i class="fa fa-shield-alt icon-CS icon-CS-img"></i>
								<h3>Cyber Security</h3>
								<p class="text">Prevention, testing, consultancy &amp; breach management services</p>
								<p class="CS-button">READ MORE</p>
							</div>
						</a>
						<a href="" class="DC">
							<div class="item-services">
								<i class="fa fa-graduation-cap icon-DC icon-DC-img" aria-hidden="true"></i>
								<h3>Developer Training</h3>
								<p class="text">Web design &amp; software traning courses designed to secure a job in tech</p>
								<p class="DC-button">READ MORE</p>
							</div>
						</a>
					</div>
					<div class="our-services-footer">
						<a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="container-brands gap center">
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/investing-in-future-growth-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/investing-in-future-growth.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/norfolk-carbon-charter-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/norfolk-carbon-charter.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/PPC_logo-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/PPC_logo.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/princess-royal-training-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/princess-royal-training.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/future-50-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/future-50.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/qms-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/qms.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/iso_27001-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/iso_27001.jpg">
					</div>
					<div class="brand-images"><img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/assets/images/accreditations/google-partner-bw.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/assets/images/accreditations/google-partner.jpg">
					</div>
				</div>
				<div class="container-inverse reverse-color">
					<div class="container">
					<div class="container-inverse-welcome center">
						<h2>Welcome To Netmatters</h2>
						<p><b>Netmatters is a leading Bespoke Software, IT Support, and Digital
							Marketing company based in the East of England with offices in Cambridge,
							Wymondham, and Great Yarmouth.</b></p>
						<p>We aren't tied into contracts with third-party providers,
							so you know that our recommendations for your business are based purely with one benefit in mind:
							to help improve your business with the most appropriate solutions.</p>
						<p>We pride ourselves on being an ethical business and have a unique business offering
							and cost model that ensures you get the most from our relationship in an upfront manner.</p>
						<button class="btn-inverse">Read More <i class="fa fa-arrow-right"></i></button>
					</div>
					<div class="container-inverse-review center">
						<h2>What our Clients Think</h2>
						<div class=" stars">
							<i class="fa-solid fa-star fa-3x"></i>
							<i class="fa-solid fa-star fa-3x"></i>
							<i class="fa-solid fa-star fa-3x"></i>
							<i class="fa-solid fa-star fa-3x"></i>
							<i class="fa-solid fa-star fa-3x"></i>
						</div>
						<p class="customerthoughts"><b><i>Netmatters stood out from the start. Great guys and very easy to work with. Both the build and
							digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our 
							(high!) expectations and went over and above to ensure we were satisfied clients - and we are!</i></b></p>
						<p class="customerthoughts"><i>Eleanor Bishop, Head of Marketing - Ashcroft Partnership LLP</i></p>
						<div class="inverse-row gap pushbottom">
							<button class="btn-google">Google Reviews <i class="fa fa-arrow-right"></i></button><br>
							<button class="btn-trustpilot">Trustpilot Reviews <i class="fa fa-arrow-right"></i></button>
						</div>
					</div>
					</div>
				</div>
				<div class="news-container container">
					<div class="news-header">
						<h2>Latest News</h2>
						<a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a>
					</div>
					<div class="news-content-container">
						<?php
							include "./php/getnews.php";
						?>
					</div>
					<div class="news-footer">
						<a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>

				<div class="logo-row container">
					<a class="logo-images">
						<div class="logo-description"><h3>Busseys</h3>
							<p>--</p>
							<p>One of the UK's leading ford dealerships</p>
							<div class="arrow-1"></div>
						</div>
						<img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-T5gi.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/uploads/page/1/home-gZQR.png">
					</a>
					<a href="" class="logo-images">
						<div class="logo-description">
							<h3>Crane Garden Builders</h3>
							<p>--</p>
							<p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
							<div class="arrow-3"></div>
						</div>
						<img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-BsyK.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/uploads/page/1/home-MjHw.png">
					</a>
					<a class="logo-images">
						<div class="logo-description">
							<h3>Beat</h3>
							<p>--</p>
							<p>The UK's eating disorder charity founded in 1989.</p>
							<div class="arrow-1"></div>
						</div>
						<img alt="#" class="images greyscale beat-img" src="https://www.netmatters.co.uk/uploads/page/1/home-RfLc.jpg">
						<img alt="#" class="images colored beat-img" src="https://www.netmatters.co.uk/uploads/page/1/home-ukEL.png">
					</a>
					<a href="" class="logo-images">
						<div class="logo-description">
							<h3>Northern Diver</h3>
							<p>--</p>
							<p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
							<div class="arrow-2"></div>
						</div>
						<img alt="#" class="images greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-jHUl.jpg">
						<img alt="#" class="images colored" src="https://www.netmatters.co.uk/uploads/page/1/home-kGn4.png">
					</a>
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
		<script type="text/javascript" src="./js/slick.min.js"></script>
		<script src="./js/Sticky.js"></script>
		<script src="./js/Cookie.js"></script>
		<script src="./js/Navbar.js"></script>
		<script src="./js/Carousel.js"></script>
	</body>
</html>