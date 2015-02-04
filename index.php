<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
        <link rel="stylesheet" href="css/themes/nemanja.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
            $(function(){
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.jpg" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://marketrivals.com" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider05.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider06.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider07.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page8" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page4" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page5" data-transition="<?php echo $transitionefect ?>">Plumbing Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page6" data-transition="<?php echo $transitionefect ?>">Home Improvement</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">Available Plumbing Brands</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>

          </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
							<li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">	   
					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>	
					<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
						Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
						E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
						Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
						Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
						Message:<br>
						<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
						<input type="submit" value="Send" name="submit" class="btn">
					</form>
				</div>
			</div>
		
		</div>
<!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


        <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div data-role="page" id="page4" data-theme="<?php echo $theme ?>">
                <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <section id="navigation-menu2">
                            <ul id="menu2">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                                <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                            </ul>
                        </section>

                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page9" data-transition="<?php echo $transitionefect ?>">Plumber Testimonials - Coming Soon</a></div>
                        </div>
                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page10" data-transition="<?php echo $transitionefect ?>">Plumbing Services Coupons</a></div>
                        </div>

                    </div>
                </div>
            </div>

            <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div data-role="page" id="page5" data-theme="<?php echo $theme ?>">
                <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <section id="navigation-menu3">
                            <ul id="menu3">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                                <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                            </ul>
                        </section>
                        <img src="img/web-design/slika5.png" alt="SLider" class="images-mobile">
                        <section id="service">
                        <h1><strong>Naperville, IL Plumber</strong></h1>
                            <h2>Jim Dhamer Plumbing Service</h2>
                            <p><strong> Jim Dhamer Plumbing Service provides fast and efficient plumbing services to the Naperville and surrounding areas.</strong> With over 35 years of experience, our plumbing specialists have the experience necessary to get the job done right the first time. We specialize in both residential and commercial plumbing work.</p>
                            <p><strong>Our Plumbing Services Include:</strong></p>
                            <ul id="lista">
                                <li >Sump and ejector pump installation</li>
                                <li>Water heater installation - both standard and tankless</li>
                                <li>Electric power rodding</li>
                                <li>Drain and sewer video inspections</li>
                                <li>Drain unclogging</li>
                                <li>RPZ certification</li>
                                <p>We offer an on-call emergency service during business hours for pipe leaks and other plumbing emergencies.</p>
                                <p><strong>Contact Jim Dhamer Plumbing Service today at 630-964-2222 for all your Naperville and surrounding areas plumbing needs.</strong></p>
                            </ul>
                        </section>


                    </div>

                </div>
            </div>
            <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 6///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page6" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika6.png" alt="SLider" class="images-mobile">
                    <section id="home">
                        <h1><strong>Naperville, IL Home Improvement</strong></h1>
                        <h2><strong> Jim Dhamer Plumbing Service</strong></h2>
                        <p><strong> Jim Dhamer Plumbing Service offers the Naperville and surrounding areas quality remodeling and home improvement services.</strong> We offer upfront pricing on all our work so there are no surprises when it comes to the bill. Our team of contractors are experienced and will respect your property by cleaning up after themselves.</p>
                        <p><strong> Our Home Improvement Services Include:</strong></p>
                        <ul id="lista2">
                            <li>Toilet, tub, and sink installation</li>
                            <li>Home repair</li>
                            <li>Bathroom remodeling</li>
                            <li>Kitchen remodeling</li>
                        </ul>
                        <p><strong> Contact Jim Dhamer Plumbing Service today at 630-964-2222 for all your Naperville and surrounding areas home improvement needs.</strong></p>
                    </section>



                </div>

            </div>
        </div>
        <!--page 6///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page7" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika1.jpg" alt="SLider" class="images-mobile">
                    <section id="brands">
                   <h1><strong>Naperville, IL Available Plumbing Brands</strong></h1>
                    <h2><strong> Jim Dhamer Plumbing Service</strong></h2>
                        <p><strong>Jim Dhamer Plumbing Service offers name brand plumbing products to the Naperville, IL area.</strong> Our technicians only install the most reputable products; proven to last and offer you the kind of service that you both need and expect.</p>
                   <p><strong>Our Available Plumbing Brands Include:</strong></p>
                        <ul id="lista3">
                            <li>Bradford White and Rheem </li>
                            <li>Gerber, Grohe and Chicago Faucet</li>
                            <li>Hydromatic and Zoeller</li>
                            <li>In Sink Erator</li>
                            <li>Kohler, Sloan and Moen</li>
                            <li>Mansfield</li>

                        </ul>
                        <p><strong>Contact Jim Dhamer Plumbing Service today at 630-964-2222 for all your Naperville, IL plumbing supply needs.</strong></p>
                    </section>

                </div>

            </div>
        </div>
        <!--page 7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 8///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page8" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu1">
                        <ul id="menu1">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika4.jpg" alt="SLider" class="images-mobile">
                    <section id="pocetna">
                        <h1><strong>Naperville, IL Contractor</strong></h1>
                        <h2><strong> Jim Dhamer Plumbing Service</strong></h2>
                        <p><strong>Jim Dhamer Plumbing Service provides plumbing and home improvement services to the Naperville and surrounding areas.</strong> We have been delivering prompt and reliable service to our clients since 1974. Whether you have a plumbing emergency that needs immediate attention or are interested in home remodeling, our experienced professionals will be there for you every step of the way.</p>
                        <p><strong>Jim Dhamer Plumbing Service's Website Includes the Following WebPages:</strong></p>
                    <ul id="lista4">
                        <li><a href="#page4"> About Us</a> - Information on our company, coupons, testimonials.</li>
                        <li><a href="#page5">Plumbing Services</a> - RPZ certification, water heater installation, sump and ejector pump installation.</li>
                        <li><a href="#page6">Home Improvement</a> - Home repair, bathroom remodeling, kitchen remodeling.</li>
                        <li><a href="#page7">Available Plumbing Brands</a> - Rheem, Moen, Kohler.</li>

                    </ul>
                        <p>Standard product and labor warranties are available.</p>
                        <p><strong> Contact Jim Dhamer Plumbing Service today at 630-964-2222 for all your Naperville and surrounding areas plumbing and home improvement needs.</strong></p>
                    </section>


                </div>

            </div>
        </div>
        <!--page 8///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 9///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page9" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6">
                        <ul id="menu6">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika4.png" alt="SLider" class="images-mobile">
                    <section id="about">

                        <h1>About Jim Dhamer Plumbing Service of Naperville, IL</h1>
                        <h2>Jim Dhamer Plumbing Service</h2>
                        <p><strong>Thank you for visiting Jim Dhamer Plumbing Service's website. Our content is currently under construction, but please check back soon.</strong> If you have any urgent questions or comments, please call us at 630-964-2222 or contact us.</p>
                        <p><strong>Our business hours are:</strong> </p>
                        <p>Monday - Friday: 7:00am to 4:00pm</p>
                        <p>Saturday: 7:30am to 12:00pm</p>
                    </section>
                    </div>
                </div>
            </div>

        <!--page 9///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!--page 10///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div data-role="page" id="page10" data-theme="<?php echo $theme ?>">
                        <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                <section id="navigation-menu1">
                                    <ul id="menu1">
                                        <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                        <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                                        <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                                        <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                                    </ul>
                                </section>
                                <img src="img/web-design/slika8.jpg" alt="SLider" class="images-mobile">
                                <section id="strana10">
                                <h1><strong>Naperville, IL Plumbing Services Coupons</strong></h1>
                                    <h2><strong> Jim Dhamer Plumbing Service</strong></h2>
                                    <img src="img/web-design/kupon.png" alt="SLider" class="images-mobile">

                                </section>
                                </div>
                            </div>
                        </div>

                    <!--page 10///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
