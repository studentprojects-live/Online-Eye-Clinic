<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");
if(isset($_POST[search]))
{
	if($_POST[group] == "Patient Name")
	{
	$result = mysqli_query($con,"SELECT * FROM  patient WHERE  pat_name LIKE  '%$_POST[patname]%'");
echo 	mysqli_affected_rows();
	}
	else if($_POST[group] == "Patient ID")
	{
	$result = mysqli_query($con,"SELECT * FROM  patient WHERE pat_id=  '$_POST[patname]'");		
	}
	else if($_POST[group] == "Contact No")
	{
	$result = mysqli_query($con,"SELECT * FROM  patient WHERE contact=  '$_POST[patname]'");		
	}
}
else if($_GET[act]==delete)
{
	mysqli_query($con,"DELETE FROM patient where pat_id='$_GET[patid]'");
	
	if(mysqli_affected_rows($con) == 1 )
	{
		$rcsucc = "<b><font color='#FF0000'>Patient record deleted successfully...</font>";
	}
}
else
{
	$result = mysqli_query($con,"SELECT * FROM patient");
}
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
include("sidebar.php");
if($_SESSION["logtype"]=='Administrator')
{
		patienthome();
}
else if($_SESSION["logtype"]=='Doctor')
{
	patientrecords();
}
			?>
            </div>
   		</div>
        <div id="content" class="float_r">
          <h2>View Patient</h2>
           <script type="application/javascript" >
function validation()
{
	if(document.form1.patname.value == "")
	{
		alert("Enter Search Field");
		document.form1.patname.focus();
		return false;
	}
		if(document.form1.group.value == "")
	{
		alert("Select the Field by which search to be made");
		document.form1.group.focus();
		return false;
	}
			
}
</script>
          
          <form id="form1" name="form1" method="post" action="" onSubmit="return validation()">
          <p><?php /* Download all student projects in www.studentprojectguide.com */  echo $rcsucc; ?></p>
          <label for="fname" class="left"> </label>
              <label for="patname">Search Name</label>
            <input type="text" name="patname" id="patname" />
            <label for="group">By</label>
<select name="group" id="group">
 <option value="">Select</option>
  <option value="Patient ID">Patient ID</option>
  <option value="Patient Name">Patient Name</option>
  <option value="Contact No">Contact No</option>
</select>
            
            <input name="search" type="submit" id="search" value="Search" />
          </p>
            <table width="547" border="1">
          <tr bgcolor="#FFFFCC">
                <td width="151"><strong>Patient Name</strong></td>
                <td width="52"><strong>Gender</strong></td>
                <td width="63"><strong>Contact</strong></td>
                <td width="132"><strong>Set Appointment</strong></td>
                <td width="115"><strong>Action</strong></td>
          </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
           	while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><a href='patad.php?patid=$row[pat_id]'>" . $row['pat_name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
    echo "<td><a href='setappointment.php?appid=$row[pat_id]'>Click here</a></td>";
	echo "<td><a href='viewpatient.php?patid=$row[pat_id]&act=delete'>Delete</a></td>";

  echo "</tr>";
  }
?>
            </table>
            <p>&nbsp;</p>
          </form>
          
          </form>
</div>
      </div>
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>