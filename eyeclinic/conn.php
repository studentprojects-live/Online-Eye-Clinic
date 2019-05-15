 <?php /* Download all student projects in www.studentprojectguide.com */ 
 $con=mysqli_connect("localhost","root","","onlineeyeclinic");
 if(!$con)
 {
	 die('Error'.mysqli_error($con));
 }
 //mysql_select_db("optomate", $con);

 ?>