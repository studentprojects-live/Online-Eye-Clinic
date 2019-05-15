<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
	  $resultpat = mysqli_query($con,"SELECT * FROM patient where pat_id='$_SESSION[pat_id]'");
           	$rowpat = mysqli_fetch_array($resultpat);
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
        <p>&nbsp;</p>
        <table width="701" border="0">
          <tr>
            <td colspan="6" align="center"><strong>Prescription</strong></td>
          </tr>
          <tr>
            <td width="65">Test ID</td>
            <td width="95">No Of Days</td>
            <td width="132">Medicine Names</td>
            <td width="39">Mg</td>
            <td width="71">Dosage</td>
            <td width="273">&nbsp;</td>
          </tr>
         
           <?php /* Download all student projects in www.studentprojectguide.com */ 
$respat = mysqli_query($con,"SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
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
            <td>Remarks:</td>
            <td colspan="5"><?php /* Download all student projects in www.studentprojectguide.com */  echo $retpres['remarks'];?></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div> 
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>