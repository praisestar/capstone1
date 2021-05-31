<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Capstone Website</title>
	
<link href="css/capstone.css" rel="stylesheet" type="text/css">
	


</head>

<body>
	<div class="container">
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="AboutUs.html">About Us</a></li>
			<li><a href="Products.html">Products</a></li>
			<li><a href="Meettheteam.html">Meet the Team</a></li>
			<li><a href="ContactUs.html">Contact Us</a></li>
		
		</ul>
	
	
	</nav></div>
	<div class="container">
		<div class="horizontal-list"><ul>
		
	<li><img src="img/Capstone-Logo.png" alt="" width="75%"></li>
			<li>&nbsp;</li>
			
			
			
		
		<li><h2 class="headers" align="center">CONTACT INFORMATION</h2>
			<p class="pheaders" align="center">Tel: 07992931523</p>
			<p class="pheaders" align="center">Email Address: office@capstone.com</p>
			
			</li>
			</ul></div></div>
	<div class="container">
		<hr>
	
	</div>
	<div class="container">
		
		<img style="object-fit: cover" src ="img/woman-3083379_1920.jpg" alt="" width="100%" height="350px">
		
	
	
	</div>
	<div class="container">
		<hr>
	
	</div>
	<div class="container">
		<div class="corners" style="width: 95%">
		 <p align="justify" style="font: Helvetica; font-size: medium" >Thank you for submitting the form! We are super excited and will get back to you shortly! These are the details which we have picked up for you.</p>

        <!-- Getting the output from the form value provided through 'form.php' -->
        <p style="font: Helvetica; font-size: medium">Full Name: <?php echo $_POST['fname']; // displaying the value of Full Name provided in 'ContactUs.html' while submitting the form ?></p>
        <p style="font: Helvetica; font-size: medium">Email Address: <?php echo $_POST['emailadd']; // displaying the value of Email Address provided in 'ContactUs.html' while submitting the form ?></p>
        <p style="font: Helvetica; font-size: medium">Country: <?php echo $_POST['country']; // displaying the value of Country provided in 'ContactUs.html' while submitting the form ?></p>
        <p style="font: Helvetica; font-size: medium">Message: <?php echo $_POST['subject']; // displaying the value of Message provided in 'ContactUs.html' while submitting the form ?></p>
        <!-- End of getting the value from the submitted form -->
	</div>
		</div>
		
		<div class="container">
		<hr>
	
	</div>
	<div class="container">
	
		<span class="heading">What our customers say</span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

		
		</div>
	<div class="container">
		<hr>
	
	</div>

	<div class="container">
		<p class="pfooter">Copyright 2021: Capstone. All Rights Reserved. <a href="Privacy and security policy.txt" target="_blank">Privacy Policy</a> and <a href="Terms and conditions.txt" target="_blank">Terms and Conditions.</a></p>
	
	
	</div>
	<div class="container">
	<table>
		<tr>
		
			<td><img src ="img/AWS_Restart_Logo.jpg" alt="" width="50%"></td>
			<td><img src ="img/In40.jpg" alt="" width="20%"></td>
			
			</tr></table></div>
	

</body>
</html>