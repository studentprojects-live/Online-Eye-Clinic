<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");
	  $resultpat = mysqli_query($con,"SELECT * FROM patient where pat_id='$_GET[patid]'");
           	$rowpat = mysqli_fetch_array($resultpat)
?>
    
     <div id="templatemo_main">
      <div id="sidebar" class="float_l">
        <div class="sidebar_box">
          <?php /* Download all student projects in www.studentprojectguide.com */ 
		  include("sidebar.php");
				adminhome();
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
              <td width="126">Appointment ID</td>
              <td width="99">Branch Name</td>
              <td width="121">Doctor Name</td>
              <td width="115">Date</td>
              <td width="122">Time</td>
              <td width="78">Status</td>
            </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
			  $result = mysqli_query($con,"SELECT * FROM appointment where pat_id='$_GET[patid]'");
			  
           	while($row = mysqli_fetch_array($result))
  {
	  $result1 = mysqli_query($con,"SELECT * FROM branch where branch_id='$row[branch_id]'");
			  $row1 = mysqli_fetch_array($result1);
  echo "<tr>";
  echo "<td><a href='patad.php?appid=$row[app_id]&patid=$_GET[patid]'>" . $row['app_id'] . "</a></td>";
  echo "<td>" . $row1['branch_name'] . "</td>";
  echo "<td>" . $row['doc_id'] . "</td>";
  echo "<td>" . $row['app_date'] . "</td>";
  echo "<td>" . $row['app_time'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>";
  }
  
?>
          </table>
          <br />
   
<?php /* Download all student projects in www.studentprojectguide.com */ 
$restt = mysqli_query($con,"SELECT * FROM test where app_id='$_GET[appid]'");
$arrrec = mysqli_fetch_array($restt);
$sph = unserialize($arrrec[sph]);
$cyl  = unserialize($arrrec[cyl]);
$axis  = unserialize($arrrec[axis]);	
?>
        <table width="464" border="0">
            <tr  bgcolor="#FFFFCC">
              <td colspan="2" align="center">Test Results</td>
            </tr>
            <tr>		
              <td width="206">Test ID: <?php /* Download all student projects in www.studentprojectguide.com */  
			 $testid = $arrrec[test_id];
			  echo $arrrec[test_id]; 
			  ?></td>
              <td width="248"> Appointment ID  <?php /* Download all student projects in www.studentprojectguide.com */  echo $arrrec[app_id]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td align="center"><strong>Left  Eye </strong></td>
              <td align="center"><strong>Right Eye  </strong></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>SPH:  <?php /* Download all student projects in www.studentprojectguide.com */  echo $sph[0]; ?></td>
              <td>SPH:  <?php /* Download all student projects in www.studentprojectguide.com */  echo $sph[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>CYL: <?php /* Download all student projects in www.studentprojectguide.com */  echo $cyl[0]; ?></td>
              <td>CYL: <?php /* Download all student projects in www.studentprojectguide.com */  echo $cyl[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>Axis: <?php /* Download all student projects in www.studentprojectguide.com */  echo $axis[0]; ?></td>
              <td>Axis: <?php /* Download all student projects in www.studentprojectguide.com */  echo $axis[1]; ?></td>
            </tr>
            <tr>
              <td height="34">Remarks:</td>
              <td>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $arrrec[remarks]; ?></td>
            </tr>
            <tr>
              <td>Specs Requirement:</td>
              <td>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $arrrec[specs_req]; ?></td>
            </tr>
          </table>
        <br />
        <table width="686" border="0">
          <tr bgcolor="#FFFFCC">
            <td colspan="6" align="center">Prescription</td>
          </tr>
       
          <tr>
            <td width="87">Test ID</td>
            <td width="127">Number Of Days</td>
            <td width="145">Medicine Names</td>
            <td width="51">Mg</td>
            <td width="83">Dosage</td>
            <td width="167">Remarks</td>
          </tr>
          <tr>
<?php /* Download all student projects in www.studentprojectguide.com */ 
$respat = mysqli_query($con,"SELECT * FROM appointment where pat_id='$_GET[pat_id]'");
$recpat = mysqli_fetch_array($respat);

$restest = mysqli_query($con,"SELECT * FROM test where app_id='$recpat[app_id]'");
$rettest = mysqli_fetch_array($restest);

			  $res = mysqli_query($con,"SELECT * FROM prescription where test_id='$rettest[test_id]'");
			  
			  $retpres = mysqli_fetch_array($res);
			  $nod= unserialize($retpres[no_of_days]);
			  $medname = unserialize($retpres[medicines]);
			  $mg = unserialize($retpres[mg]);
			  $dosage = unserialize($retpres[dosage]);
			  echo "<td>" . $retpres['test_id'] . "</td>";
     for($k=0; $k<count($nod); $k++)
  {
	  for($j=1;$j<=$k;$j++)
	  {
		  echo "<td>"  .    "</td>";
	  }
  echo "<td>" . $nod[$k] . "</td>";
  echo "<td>" . $medname[$k] . "</td>";
  echo "<td>" . $mg[$k] . "</td>";
  echo "<td>" . $dosage[$k] . "</td>";
  
 
  echo "</tr>";
  }
  
?>
 <tr>
</table>
        <p>&nbsp;</p>
        <table width="690" border="0">
          <tr bgcolor="#FFFFCC">
            <td colspan="3" align="center"><strong><a href="products.php?testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $testid; ?>">Add purchase details</a></strong></td>
            <td colspan="3" align="left">Purchase Details</td>
          </tr>
          <tr>
            <td width="90">Order ID</td>
            <td width="117">Admin Name</td>
            <td width="110">Test ID</td>
            <td width="121">Product Name</td>
            <td width="160">Order date</td>
            <td width="120">Total Amount</td>
          </tr>
<?php /* Download all student projects in www.studentprojectguide.com */ 
$res1 = mysqli_query($con,"SELECT * FROM order where app_id='$rowpres[test_id]'");
while($row = mysqli_fetch_array($res1))
  {
  echo "<tr>";
  echo "<td>" . $row['order_id'] . "</td>";
  echo "<td>" . $row['admin_id'] . "</td>";
  echo "<td>" . $row['test_id'] . "</td>";
  echo "<td>" . $row['product_id'] . "</td>";
  echo "<td>" . $row['order_date'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";

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