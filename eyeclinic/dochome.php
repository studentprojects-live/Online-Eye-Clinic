<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
$dt = date("Y-m-d");
	
?>
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			include("sidebar.php");
			doctorhome();
			?>
            </div>
   		</div>
        <div id="content" class="float_r">
        <?php /* Download all student projects in www.studentprojectguide.com */ 
		$result = mysqli_query($con,"SELECT * FROM  appointment WHERE app_date='$dt' AND branch_id='$_SESSION[branch_id]'");
		?>
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
          
      </div>
  </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>