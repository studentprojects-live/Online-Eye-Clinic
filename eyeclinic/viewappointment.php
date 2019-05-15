<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
if(isset($_POST[group]))
{
	$arr = $_POST[group];
	$i=0;
	//print_r($arr);
	foreach($arr as $value)
	{
		if($brquery == "")
		{
		$brquery = "(". $brquery. " branch_id='".$value."' ";
		}
		else
		{
		$brquery = $brquery. " OR branch_id='".$value."'";
		}
	}
	$brquery = $brquery.")";
}

//echo $brquery;
if(isset($_POST[search]))
{
	if($_POST[group2] == "Doctor Name")
	{
	$bquery1 = "SELECT * FROM  doctor WHERE  doc_name LIKE  '%$_POST[lol]%' AND ".$brquery;	
	$result1 = mysqli_query($con,$bquery1);	
	$bquery = "SELECT * FROM  appointment WHERE  doc_name LIKE  '%$result1[0]%'";	
	$result = mysqli_query($con,$bquery);
	}
	else if($_POST[group2] == "Patient Name")
	{
	$bquery = "SELECT * FROM  appointment WHERE pat_name=  '$_POST[lol]' AND ".$brquery;
	$result = mysqli_query($con,$bquery);		
	}
	else if($_POST[group2] == "Patient ID")
	{
	$bquery = "SELECT * FROM  appointment WHERE pat_id=  '$_POST[lol]' AND ".$brquery;
	$result = mysqli_query($con,$bquery);		
	}
	else if($_POST[group2] == "Appointment Date")
	{
	$bquery = "SELECT * FROM  appointment WHERE  app_date=  '$_POST[lol]' AND ".$brquery;	
	$result = mysqli_query($con,$bquery);		
	}

}
else
{
	$result = mysqli_query($con,"SELECT * FROM appointment");
	echo mysqli_error($con);
}
$resbranch = mysqli_query($con,"select * from branch");
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
          <h2>View Appointments
            </h2>
            <script type="application/javascript" >
function validation()
{
	if(document.form1.group.value == "")
	{
		alert("Select Branch");
		document.form1.group.focus();
		return false;
	}
		if(document.form1.lol.value == "")
	{
		alert("Enter Search Field");
		document.form1.lol.focus();
		return false;
	}
		if(document.form1.group2.value == "")
	{
		alert("Select By which Search to be made");
		document.form1.group2.focus();
		return false;
	}
	
}
</script>
            <form id="form1" name="form1" method="post" action="" onSubmit="return validation()" >
            <p>
              <label for="fname" class="left"> </label>
              <label for="patname"><strong>Select Branch:</strong></label>
              
<script>
function selectCheckBox()
{
var total=""
for(var i=0; i < document.form.nums.length; i++){
if(document.form.nums[i].checked)
total +=document.form.nums[i].value + "\n"
}
if(total=="")
alert("select scripts")
else
alert("Selected Values are : \n"+total);
}
</script>

<div style="overflow:auto;width:200px;height:40px;border:1px solid #336699;padding-left:5px">
<?php /* Download all student projects in www.studentprojectguide.com */ 
while($rows = mysqli_fetch_array($resbranch))
			{
echo "<input type='checkbox' name='group[]' id='group[]'  value='$rows[branch_id]'>$rows[branch_name]<br>";
			}
?>
</div>
            </p>
            <p>
              <label for="lol">Search
                <input type="text" name="lol" id="lol" />
              </label>
              <label for="group2">By</label>
<select name="group2" id="group2">

				<option value="">Select</option>
                <option value="Patient ID">Patient ID</option>
                <option value="Patient Name">Patient Name</option>
                <option value="Appointment Date">Appointment Date</option>
</select>
              <input type="submit" name="search" id="search" value="Search" />
            </p>
            <table width="640" border="1">
<tr>
  <td width="82" height="42">Appointment No.</td>
                <td width="96">Doctor Name</td>
                <td width="132">Patient Name</td>
                <td width="166">Appointment Date/ Time</td>
                <td width="130">Status</td>
          </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 

           	while($row = mysqli_fetch_array($result))
  {	
  $retpat =mysqli_query($con,"SELECT * FROM patient WHERE pat_id= '$row[pat_id]'");
  $patrec = mysqli_fetch_array($retpat);
	$retdoc =mysqli_query($con,"SELECT * FROM doctor WHERE doc_id= '$row[doc_id]'");
  $docrec = mysqli_fetch_array($retdoc);
  if($row[pat_id] == 0)
  {
	  break;
  }
  
  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</td>";
  echo "<td>" . $docrec['doc_name'] . "</td>";
  echo "<td>" . $patrec['pat_name'] . "</td>";
  echo "<td>" . $row['app_date']. " ". $row['app_time'] . "</td>";
   echo "<td>";

   if($row['status'] == "pending")
   {
	   echo "Pending | <a href='test.php?appid=$row[app_id]'>Update</a>";
   }
   else
   {
	   	$rettests =mysqli_query($con,"SELECT * FROM test WHERE app_id= '$row[app_id]'");
  $rectests = mysqli_fetch_array($rettests);
  
	   echo "Done | <a href='products.php?appid=$row[app_id]&patid=$row[pat_id]&testids=$rectests[test_id]'>Order specs</a>";
   }
  
 echo "  </td>";
  echo "</tr>";
  }
?>
          </table>
            
          </form>
     
</div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>