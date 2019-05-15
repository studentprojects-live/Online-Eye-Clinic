<?php /* Download all student projects in www.studentprojectguide.com */ 
$q=$_GET["q"];

include("includes/conn.php");

$sql="SELECT * FROM doctor WHERE branch_id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<select name='docname'>";

while($row = mysqli_fetch_array($result))
  {
  echo "<option value='$row[doc_id]'>" . $row[doc_name] . "</option>";
  }
echo "</select>";

mysqli_close($con);
?>