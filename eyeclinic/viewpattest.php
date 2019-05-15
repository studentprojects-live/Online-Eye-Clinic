<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
	
$resapp = mysqli_query($con,"SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
$retapp = mysqli_fetch_array($resapp);
$restest= mysqli_query($con,"SELECT * FROM test where app_id='$retapp[app_id]'");
$retest = mysqli_fetch_array($restest);
	
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
       <table width="432" border="0">
            <tr>
              <td colspan="2" align="center">Test Results</td>
            </tr>
            <tr>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
$restt = mysqli_query($con,"SELECT * FROM test where app_id='$retest[app_id]'");
$arrrec = mysqli_fetch_array($restt);
$sph = unserialize($arrrec[sph]);
$cyl  = unserialize($arrrec[cyl]);
$axis  = unserialize($arrrec[axis]);	
?>
              <td width="164">Test ID:<?php /* Download all student projects in www.studentprojectguide.com */  echo $retest[test_id]; ?></td>
              <td width="258"> Appointment ID <?php /* Download all student projects in www.studentprojectguide.com */  echo $retest[app_id]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td align="center">Left  Eye</td>
              <td align="center">Right Eye</td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>SPH:<?php /* Download all student projects in www.studentprojectguide.com */  echo $sph[0]; ?></td>
              <td>SPH:<?php /* Download all student projects in www.studentprojectguide.com */  echo $sph[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>CYL:<?php /* Download all student projects in www.studentprojectguide.com */  echo $cyl[0]; ?></td>
              <td>CYL:<?php /* Download all student projects in www.studentprojectguide.com */  echo $cyl[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>Axis:<?php /* Download all student projects in www.studentprojectguide.com */  echo $axis[0]; ?></td>
              <td>Axis:<?php /* Download all student projects in www.studentprojectguide.com */  echo $axis[1]; ?></td>
            </tr>
            <tr>
              <td>Remarks:<?php /* Download all student projects in www.studentprojectguide.com */  echo $arrrec[remarks]; ?></td>
              <td>Specs Requirement:<?php /* Download all student projects in www.studentprojectguide.com */  echo $arrrec[specs_req]; ?></td>
            </tr>
          </table>
      </div> 
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>