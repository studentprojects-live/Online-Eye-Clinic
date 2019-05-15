<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
//Auto Logout coding
$inactive = 600;
if(isset($_SESSION['timeout']) ) {
  $session_life = time() - $_SESSION['timeout'];
  if($session_life > $inactive) { 
    header("Location: logout.php"); 
  }
}
$_SESSION['timeout'] = time();

date_default_timezone_set('Asia/Kolkata');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Eye Clinic</title>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
        	<h1><a href="index.php">Online Eye Clinic</a></h1>
        </div>
        
  <div id="header_right">
	<?php
				if($_SESSION["logtype"] =="Patient")
				{
	?>
        	<strong><a href="updatepatient.php" style="color: red;">Profile</a></strong>|
	        <strong><a href="logout.php" style="color: red;">Logout</a></strong>
	<?php
				}
				else
				{
	?>
        	<strong><a href="login.php" style="color: red;">Login</a></strong>|
	        <strong><a href="register.php" style="color: red;">Register</a></strong>
	<?php
				}
	?>
  </div>
        
        <div class="cleaner"></div>
    </div> 
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                
                <?php /* Download all student projects in www.studentprojectguide.com */ 

				if($_SESSION["logtype"] =="Doctor")
				{
				?>
                 <li><a href="dochome.php"  >Doctor's Home</a></li>
                  <li><a href="#">Patient records</a>
            	    	 <ul>
                         <li><a href="viewpatient.php">View Patient</a></li>
                          <li><a href="addpatient.php">Add patient</a></li>
                        <li><a href="viewappointment.php">View appointments</a></li>
                       
        	          </ul>
                </li>
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else if($_SESSION["logtype"] =="Administrator")
				{
				?>
                 <li><a href="adminhome.php" >Admin's Home</a></li>
                      
                <li><a href="#">Accounts</a>
            	    	 <ul>
                        <li><a href="viewpatient.php">Patients</a></li>
                        <li><a href="viewdoctor.php">Doctors</a></li>
        	          </ul>
                </li>
                  <li><a href="#">Maintenance</a>
                <ul>
                        <li><a href="addbranch.php">Add Branch</a></li>
                        <li><a href="addnewadmin.php">Add Admin</a></li>
                        <li><a href="adddoctors.php">Add Doctor</a></li>
                        <li><a href="addpatient.php">Add Patient</a></li>
                        <li><a href="addproduct.php">Add Product</a></li>
        	     </ul>
                 </li>      
                <li><a href="inventory.php">Inventory</a></li>
                  	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else if($_SESSION["logtype"] =="Patient")
				{
				?>
                 <li><a href="patienthome.php">Patient's Home</a></li>
                 <li><a href="setappointment.php">Book An Eye Test</a></li>
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else
				{
				?>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Registration</a>
                <li><a href="products.php">View Spectacles and Lenses</a></li>
                <?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				
			

				if(isset($_SESSION["logtype"]))
				{
				?> 
            <li><a href="logout.php">Logout</a></li>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				?>
       
            </ul>
        </div> 
    </div>