<?php /* Download all student projects in www.studentprojectguide.com */ 
$q=$_GET["q"];

include("includes/conn.php");

$sql="UPDATE appointment SET status='Done' WHERE app_id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "Done";
?>
