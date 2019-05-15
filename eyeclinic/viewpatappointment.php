<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");

$resultpat = mysqli_query($con,"SELECT * FROM patient where pat_id='$_SESSION[pat_id]'");
$rowpat = mysqli_fetch_array($resultpat)

?>
    
     <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php /* Download all student projects in www.studentprojectguide.com */ 
				include("sidebar.php");
				patienthome();
				?>
            </div>
   		</div>
      <div id="content" class="faq float_r">
          <table width="616" border="0">
            <tr bgcolor="#FFFFCC">
              <td colspan="2" align="center">Patient Profile</td>
            </tr>
            <tr>
              <td width="284">Name: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[pat_name]; ?></td>
              <td width="322"><form id="form1" name="form1" method="post" action="">
                <label for="name"></label>
                Email-ID: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[email_id]; ?>
              </form></td>
            </tr>
            <tr>
              <td>Date Of Birth: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[dob]; ?></td>
              <td>Gender: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[gender]; ?></td>
            </tr>
            <tr>
              <td>Address: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[address]; ?></td>
              <td>Contact: <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowpat[contact]; ?></td>
            </tr>
          </table>
          <br />

        <table width="687" border="0">
            <tr bgcolor="#FFFFCC">
              <td colspan="6" align="center">Appointment Details</td>
            </tr>
            <tr>
              <td width="126"><strong>Appointment ID</strong></td>
              <td width="99"><strong>Branch Name</strong></td>
              <td width="121"><strong>Doctor Name</strong></td>
              <td width="115"><strong>Date</strong></td>
              <td width="122"><strong>Time</strong></td>
              <td width="78"><strong>Status</strong></td>
            </tr>
<?php /* Download all student projects in www.studentprojectguide.com */ 

$retapp = mysqli_fetch_array($result);
			 

$result = mysqli_query($con,"SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");	
	  
	while($row = mysqli_fetch_array($result))
  {
	  $result1 = mysqli_query($con,"SELECT * FROM branch where branch_id='$row[branch_id]'");
			  $row1 = mysqli_fetch_array($result1);
		$resdoctor= mysqli_query($con,"SELECT * from doctor where doc_id='$row[doc_id]'");
			  $retdoctor= mysqli_fetch_array($resdoctor);	   
  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</a></td>";
  echo "<td>" . $row1['branch_name'] . "</td>";
  echo "<td>" . $retdoctor['doc_name'] . "</td>";
  echo "<td>" . $row['app_date'] . "</td>";
  echo "<td>" . $row['app_time'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>";
  }
  
?>
          </table>
 	</div> 
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>