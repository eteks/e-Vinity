<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
<script type="text/javascript">

      function validateEmail()
      {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }

      // Form validation code will come here.
      function validate()
      {
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
		  
		  
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }

		  if( document.myForm.email.value != "" )
         {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            document.myForm.email.focus() ;
            return false;
         } 
         return( true );
         }	
		 

}
  
</script>		
	<?php
/*  
echo $comment_to_user;
$name = "username";
$email ="sd@sd.com";
$phone_no = 12345678909;
$comment = "asdfj;asdf";
echo $msg; */
//if "email" variable is filled out, send email
if (isset($_REQUEST['email']) && $_REQUEST['email']!='')  { 
	  ?>
<script type="text/javascript">
var myWindow = window.open(" ", "windowname", "width=500, height=600");
myWindow.location.href = "broucher.pdf";
</script>
<?php
	
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";	
  //Email information
$admin_email = "amuthan.p@atomicka.com";
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$phone_no = $_REQUEST['phone_no'];	 
$content=$_REQUEST['message'];	 
$subject = "Mail From e-vinity"; 
$message = '<html><body>';
$message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
$message .= "<tr><td><img src='img/logo.png' alt='PHP Gang' /></td></tr>";
$message .= "<tr><td colspan=2>Dear ".$name.",</td></tr>";
$message .= "<tr><td colspan=2>You are now download broucher <a href='broucher.pdf' target='_blank'>Here</a></td></tr>";
$message .= "<tr><td colspan=2><b>Contact Info</b><br>10, 2nd Floor, Maria Tower, <br>Vellavari Street, Muthialpet, <br>Puducherry - 605003. <br></td></tr>";
$message .= "<tr><td colspan=2 font='colr:#999999;'><a href='https://www.facebook.com/E-vinity-1751214965113308/?skip_nax_wizard=true' target='_blank'>Facebook</a>,  
<a href='https://twitter.com/VinityE' target='_blank'>Twitter</a></td></tr>"; 
$message .= "</table>";
$message .= "</body></html>";
$comment_to_user = $message;
$mail_to_user=mail($email, $subject, $comment_to_user, $header);
	
 
$subject_to_admin = "Mail From e-vinity User"; 
$msg = '<html><body>';
$msg .= '<table width="100%"; rules="all" style="border:0px solid #3A5896;" cellpadding="10">';
$msg .= "<tr><td colspan=2>Name: ".$name."</td></tr>";
$msg .= "<tr><td colspan=2>EMail: ".$email."</td></tr>";
$msg .= "<tr><td colspan=2>Phone No: ".$phone_no."</td></tr>";
$msg .= "<tr><td colspan=2>Message: ".$content."</td></tr>";
$msg .= "</table>";
$msg .= "</body></html>";
$comment_to_admin=$msg;
$mail1=mail($admin_email, $subject_to_admin, $comment_to_admin, $header);
$_REQUEST['email']="";
$email="";
  //Email response
  }
  //if "email" variable is not filled out, display the form
  else  {
//	echo "unset";
  }
?>
		
		

		
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>e-Vinity | Contact Us</title>

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Medium.css' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Heavy.css' rel='stylesheet' type='text/css'>

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Stroke Font Icon css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">

        <!-- Animate css -->
        <link rel="stylesheet" href="css/animate.css">

        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Jquery-ui -->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		
        <!-- Favicons -->
        <!-- <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png"> -->
        <link rel="icon" href="img/fav.png"/>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- This Template Is Fully Coded By Linkon Miyan from rexord.com -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div id="preloader">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        </div>
        <div class="top_area">
        	<div class="mbl_num">
        		<!-- <span>8940400949, 8940400941, 0413 - 3291001</span> -->
        		<ul>
        			<li><img src="img/icon_footer_contact_2.png" /><a href="tel:+91-8940400949">+91 - 8940400949,</a></li>
        			<li><a href="tel:+91-8940400941">+91 - 8940400941</a></li>
        			<li><img src="img/phone_icon.png" /><a href="tel:+91 - 413 - 3291001">+91 - 413 - 3291001</a></li>
        		</ul>
        	</div><!--mbl_num-->
        	<div class="social_icons">
        		<ul class="footer_social">
                    <li><a href="https://www.facebook.com/E-vinity-1751214965113308/?skip_nax_wizard=true" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/VinityE" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/e-vinity-big-data-093b43117" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
        	</div><!--social_icons-->
        </div><!--top_area-->
        <header class="header_area">
            <div class="">
                <div class="header_content">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="logo">
                                <!-- <a href="index.html"><img src="img/icon_cap.png" alt="">Edu<span>campus</span></a> -->
                                <a href="index.html"><img src="img/logo.png"></a>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                             
                            </div>
                        </div>                                    
                        <div class="col-md-10 col-sm-10 nav_area">
                            <nav class="main_menu">
                                <div class="navbar-collapse collapse"> 
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="index.html">Home</a></li>
                                        <!-- <li><a href="courses.html">Courses</a></li> -->
                                        <li><a href="courses.html#courses_data">Datawarehouse</a></li>
                                        <li><a href="courses.html#courses_bigdata">Bigdata</a></li>
                                        <li><a href="courses.html#courses_analytics">Advanced Analytics</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <!-- <li><a href="events.html">Events</a></li> -->
                                        <li><a href="news.html">News</a></li>
                                        <!-- <li><a href="alumni.html">Alumni</a></li> -->
                                        <li class="current_page_item"><a href="contact.html">Contact Us</a></li>
                                        <li><a href="broucher.pdf" target="_blank">View Brochure</a></li>
                                    </ul>                                                     
                                </div>
                            </nav>
                            <!-- <form action="index.html" class="header_search hidden-xs">
                                <input type="text" placeholder="Search">
                                <input type="submit" value="">
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="breadcrumb_area">
            <div class="breadcrumb_top">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_title section-padding">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_bottom">
                <div class="container">
                    <div class="row">
                        <div class="breadcrumb_nav">
                            <div class="col-sm-5">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="col-sm-7">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- <div class="download-brou">
        	<a href="broucher.pdf" class="broucher_align" target="_blank">Download Broucher </a>
		</div> -->
        <section class="send_us_email_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6 fix_p">
                        <div class="send_email">
                            <div class="section-padding">
                                <h2>For More Information</h2>
                                <div class="email_form">
                                    <form  method="post"name="myForm" onsubmit="return(validate());"  action="contact.php" >
                                        <div class="col-md-6 fix_p_r">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name">
                                        </div>
                                        <div class="col-md-6 fix_p_r">
                                            <label>Your E-Mail <span>*</span></label>
                                            <input type="text" name="email">
                                        </div>
                                        <div class="col-md-12 fix_p_r">
                                            <label>Phone Number</label>
                                            <input type="text"  name="phone_no">
                                        </div>
                                        <!-- <div class="col-md-6 fix_p_r">
                                            <label>Subject</label>
                                            <input type="text">
                                        </div> -->
                                        <div class="col-md-12 fix_p_r">
                                            <label>Message</label>
                                            <textarea name="message" cols="30" rows="10"></textarea></div>
                                            <input type="submit" value="Send message">
                                    </form>								
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="map_location_area">
            <div class="google_map">
                <div class="map_caption">
                    <h2>How To Reach Us</h2>
                    <div class="row contact_info">
                        <div class="col-sm-4">
                            <ul>
                                <li><i class="pe-7s-map-marker"></i>10, 2nd Floor,  Maria Tower, Vellavari Street, Muthialpet, Puducherry - 605003.</li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul>
                                <li><i class="pe-7s-call"></i><a href="tel:+91 - 413 - 2235600">+91 - 413 - 2235600</a></li>
                                <!-- <li><i class="pe-7s-print"></i><a href="tel:+123-456-789-001">+123 456 789 001</a></li> -->
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul>
                                <li><i class="pe-7s-mail"></i><a href="mailto:info@e-vinity.com">info@e-vinity.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a href="#"><i class="fa fa-chevron-right"></i>Get The Direction</a> -->
                </div>
            </div>
        </section>
        
        
        <div id="map_area"></div>
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="newslatter">
                                <form action="index.html">
                                    <input type="email" placeholder="Email Address">
                                    <input type="submit" value="">
                                </form>
                                <p>To Recieve Our Updates Via E-mail</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="footer_widgets">
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">About us</h2>
                                    <p>We are the first IT training institute to give real time training to our students, located in Pondicherry - India. Our motive is to align our students to the current trend in the IT market.</p>
                                    <ul class="footer_social">
                                        <li><a href="https://www.facebook.com/E-vinity-1751214965113308/?skip_nax_wizard=true" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/VinityE" target="_blank"><i class="fa fa-twitter"></i></a></li>
<!--                                         <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
 -->                                        <li><a href="https://www.linkedin.com/in/e-vinity-big-data-093b43117" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                             <div id="accordion">
                             <div class="col-md-6 col-sm-9 frequent_questions">
                                <h3 class="widget_title">FAQ's</h3>
                                <ul>
                                    <li>
                                        <h3 class="accordianheader">Q: How will big data impact the industry?<a name="test"></a></h3>
                                        <div class="accordianbody">
                                            <p>
                                                A : According to Gartner Inc., big data technology will grow radically over the next few years. Gartner research predicts that by 2015, 4.4 million IT jobs will have been created to staff big data initiatives. Even now, a Gartner survey has discovered that 40% of almost 500 IT executives have invested or will invest in big data technology.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="accordianheader">Q: Why is Hadoop popular?</h3>
                                        <div class="accordianbody">
                                            <p>
                                                A : Hadoop's popularity is partly due to the fact that it is used by some of the world's largest Internet businesses to analyze unstructured data.Hadoop enables distributed applications to handle data volumes in the order of thousands of exabytes.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="accordianheader">Q: Can I manage the Cloud Big Data service through my Cloud Control Panel?</h3>
                                        <div class="accordianbody">
                                            <p>
                                                A : Yes, you can manage your Cloud Big Data service through the Rackspace Cloud Control Panel, as well as by using a RESTful API.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="accordianheader">Q: What will I be able to do upon completing the Big Data Specialization?</h3>
                                        <div class="accordianbody">
                                            <p>
                                                A : You will be able to process, analyze, and interpret massive and complex data using common Big Data technologies, including Splunk and Apache Hadoop. You will have hands-on experience building data tools, visualizations, and dashboards.every company have a lot of openings with that bigdata knowledge you can place anywhere.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="accordianheader">Q: Is there an easy way to migrate data from Hadoop into a relational database?</h3>
                                        <div class="accordianbody">
                                            <p>
                                                A : The Hadoop JDBC driver can be used to pull data out of Hadoop and then use the DataDirect JDBC Driverto bulk load the data into Oracle, DB2, SQL Server, Sybase, and other relational databases. DataDirect bulk load provides an optimized, scalable option for efficiently moving data. Throughput is accelerated, and performance is maximized.
                                            </p>
                                        </div>
                                    </li>
    								<li>
                                    	<h3 class="accordianheader">Q: Is there a certain skill set that is necessary for managing big data?</h3>
                                    	<div class="accordianbody">
                                    		<p>
                                    			A : Data scientist is an emerging role that will likely be more and more in demand as big data continues to gain momentum. This is a difficult skill set to find because it requires knowledge of new technologies such as Hadoop and Cassandra, familiaritty with the domain where the data resides, and creative analytical and problem-solving abilities and you have to put more effort for your prosperous future.
                                    		</p>
                                    	</div>
                                    </li>
                                    <li>
                                    	<h3 class="accordianheader">Q: How much Java do I need to know for Big a data?</h3>
                                    	<div class="accordianbody">
                                    		<p>
                                    			A : Knowledge of Java or OOPS programming languages is preferable but not mandatory. With us you can put some effort and its more than enough.
                                    		</p>
                                    	</div>
                                    </li>
                                    <li>
                                    	<h3 class="accordianheader">Q: Will I get a chance to work with huge datasets?</h3>
                                    	<div class="accordianbody">
                                    		<p>
                                    			A :  You will work on multiple case studies as part of the course. The case studies will involve hands-on work with huge datasets.
                                    		</p>
                                    	</div>
                                    </li>
                                    <li>
                                    	<h3 class="accordianheader">Q: Do I need to know R?</h3>
                                    	<div class="accordianbody">
                                    		<p>
                                    			A : Knowledge of basic Excel is preferable but not mandatory. With us you can put some effort its is more than enough because we provide you knowledge for R from scratch.
                                    		</p>
                                    	</div>
                                    </li>
                                </ul>
                            </div>
							</div><!--accordion-->

                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">contact info</h2>
                                    <ul class="footer_contact">
                                        <li>10, 2nd Floor,  Maria Tower, Vellavari Street, Muthialpet, Puducherry - 605003.</li>
                                        <li><a href="tel:+91 - 413 - 2235600">+91 - 413 - 2235600</a></li>
                                        <!-- <li>+01 123 456 78</li> -->
                                        <li style="text-transform: none;"><a href="mailto:info@e-vinity.com">info@e-vinity.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <p>© 2016 evinity. All rights reserved</p>
                        </div>
                        <div class="col-sm-8">
                            <nav class="footer_menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms & Conditions</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery Latest version -->
        <script src="js/vendor/jquery.1.11.1.js"></script>

        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 17,
                scrollwheel: false,
                center: new google.maps.LatLng(11.9540193,79.8317578)
              };

              var map = new google.maps.Map(document.getElementById('map_area'), mapOptions);
			var contentString = '<div id="content">'+
		      	'<div id="siteNotice">'+
		     	'</div>'+
		     	'<div id="bodyContent">'+
		      	'<p><b>e-Vinity</b></p>'+
		      	'<p>10, 2nd Floor, Maria Tower,Vellavari Street, Muthialpet,Puducherry - 605003.</p>'+
		      	'<p>info@evinity.com</p>'+
		      	'<p>+91 - 413 - 2235600</p>'+
		      	'</div>'+
		      	'</div>';
		  		var infowindow = new google.maps.InfoWindow({
		      		content: contentString
		  		});

              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map,
                title: 'e-Vinity'
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
            
        </script> 
		
    
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>

        <!-- jQuery Counterup and Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>

        <!-- jQuery easing -->
        <script src="js/jquery.easing.1.3.min.js"></script>

        <!-- jQuery owl carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- WOW Animation -->
        <script src="js/wow.min.js"></script>
           
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
            <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->		

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->		 

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->	    

        <!-- jQuery main script -->
        <script src="js/gistfile1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>