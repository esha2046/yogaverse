<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2 style="font-size:50px"><u>Our Packages</u></h2>
</div>
<div class="header">
<div style="background-color:beige">
<p>	<b>Introductory Package:</b><br>

Price: Rs.3500 - Rs.8000 for a set number of basic classes.</p><hr>
<p><b>Unlimited Monthly Membership:</b><br>

Price: Rs.6500 - Rs.10000 per month for unlimited access to all classes.</p><hr>
<p><b>Class Passes:</b><br>

Price: Rs.4800 - Rs.8000 for a set number of class passes (e.g., 5 or 10 passes) with a validity period.</p><hr>
<p><b>Private Sessions Package:</b><br>

Price: Rs.8000  - Rs.12000 per session or $300 - $600 for a package of 4-8 sessions. </p><hr>
<p><i>To complete payment process and officialy be part of our classs please contact 98********</i></p>
</div>	
<div class="content">
  	<!-- notification message -->
  		<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="yoga.html" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>