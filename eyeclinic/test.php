<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");
$resultq = mysqli_query($con,"SELECT * FROM appointment where app_id = '$_GET[appid]'");
$rowsapprec = mysqli_fetch_array($resultq);
echo mysqli_num_rows($resultq);
$sph = array($_POST['lsph'],$_POST['rsph']);
$cyl = array($_POST['lcyl'],$_POST['rcyl']);
$axis = array($_POST['laxis'],$_POST['raxis']);
$arraysph = serialize($sph);
$arraycyl = serialize($cyl);
$arrayaxis = serialize($axis);
if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token'])
{
if(isset($_POST[submit]))
{
	$ins = "INSERT INTO test (app_id,sph,cyl,axis,remarks,specs_req) VALUES ('$rowsapprec[app_id]','$arraysph','$arraycyl','$arrayaxis','$_POST[remarks]','$_POST[req]')";
	if (!mysqli_query($con,$ins))
  	{
  		die('Error: ' . mysqli_error($con));
  	}
	$insi = mysqli_insert_id($con);
    mysqli_query($con,"UPDATE appointment SET status='Done
' where app_id='$_GET[appid]'");
 	if(mysqli_affected_rows($con) == 1)
  	{
 		$rcsucc = "Test Details saved successfully..";
 	}

}
unset($_SESSION['token']);
}

$new_token = md5(time() . rand(0,100));
$_SESSION['token'] = $new_token;
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
          <h2>Add Test Results</h2>
          <?php /* Download all student projects in www.studentprojectguide.com */  echo $rcsucc;?>
          
          
          <script type="application/javascript" >
function validation()
{
	if(document.form1.lsph.value == "")
	{
		alert("Enter Left Eye SPH Value. ");
		document.form1.lsph.focus();
		return false;
	}
	if(document.form1.lcyl.value == "")
	{
		alert("Enter Left Eye CYL Value. ");
		document.form1.lcyl.focus();
		return false;
	}
	if(document.form1.laxis.value == "")
	{
		alert("Enter Left Eye Axis Value. ");
		document.form1.laxis.focus();
		return false;
	}
	if(document.form1.rsph.value == "")
	{
		alert("Enter Right Eye SPH Value. ");
		document.form1.rsph.focus();
		return false;
	}
	if(document.form1.rcyl.value == "")
	{
		alert("Enter Right Eye CYL Value.");
		document.form1.rcyl.focus();
		return false;
	}
	if(document.form1.raxis.value == "")
	{
		alert("Enter Right Eye Axis Value. ");
		document.form1.raxis.focus();
		return false;
	}
	
	if(document.form1.remarks.value == "")
	{
		alert("Enter Remarks. ");
		document.form1.remarks.focus();
		return false;
	}
	
	
	if(document.form1.req.value=="")
	{
		alert("Confirm Specs Requirement.");
		document.form1.req.focus();
		return false;
	}
	
}
</script>
          
           <form id="form1" name="form1" method="post" action="" onSubmit="return validation()">
           <input type="hidden" name="token" value="<?=$new_token;?>"/> 
           <p>
              <label for="fname2" class="left"> </label>
           </p>
<?php /* Download all student projects in www.studentprojectguide.com */ 
if(isset($_POST[submit]))
{
	?>
    <a href="prescription.php?testi=<?php /* Download all student projects in www.studentprojectguide.com */  echo $insi; ?>">Add prescription records</a>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
}
else
{
?>           
           <table width="604" border="0">
             <tr>
               <td>Appointment ID               </td>
               <td>&nbsp;</td>
               <td>
               
			   <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowsapprec[app_id];  ?></td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
                <td width="131" colspan="2"><label for="patname">Patient Name:</label></td>
                <td width="165"><?php /* Download all student projects in www.studentprojectguide.com */  
				$resultq1 = mysqli_query($con,"SELECT * FROM patient where pat_id = '$rowsapprec[pat_id]'");
$rowsapprec1 = mysqli_fetch_array($resultq1);
				echo $rowsapprec1[pat_name];  
				?></td>
                <td width="133">Doctor Name:</td>
                <td width="157"><?php /* Download all student projects in www.studentprojectguide.com */  
				$resultq2 = mysqli_query($con,"SELECT * FROM doctor where doc_id = '$rowsapprec[doc_id]'");
$rowsapprec2 = mysqli_fetch_array($resultq2);
				echo $rowsapprec2[doc_name]; 
				echo "</td>
             </tr>";
   
           		while($row = mysqli_fetch_array($result))
  				{
  					echo "<tr>";
  					echo "<td>" . $row['fname'] . "</td>";
  					echo "<td>" . $row['lname'] . "</td>";
  					echo "<td>" . $row['gender'] . "</td>";
  					echo "<td>" . $row['dob'] . "</td>";
  					echo "<td>" . $row['contact'] . "</td>";
	  				echo "</tr>";
  				}

			?>
          
         </table>
            
           <p></p>
           <table width="634" border="0">
             <tr bgcolor="#FFFFCC">
               <td colspan="2" align="center">Left  Eye</td>
               <td colspan="2" align="center">Right Eye</td>
             </tr>
             <tr bgcolor="#FFFFCC">
               <td width="81">SPH:</td>
               <td width="197"><label for="lsph"></label>
                 <label for="lsph"></label>
               <input type="text" name="lsph" id="lsph" /></td>
               <td width="184">SPH:</td>
               <td width="154"><input type="text" name="rsph" id="rsph" /></td>
             </tr>
             <tr bgcolor="#FFFFCC">
               <td>CYL:</td>
               <td><input type="text" name="lcyl" id="lcyl" /></td>
               <td>CYL:</td>
               <td><input type="text" name="rcyl" id="rcyl" /></td>
             </tr>
             <tr bgcolor="#FFFFCC">
               <td>Axis:</td>
               <td><input type="text" name="laxis" id="laxis" /></td>
               <td>Axis:</td>
               <td><input type="text" name="raxis" id="raxis" /></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>Remarks:</td>
               <td><label for="remarks"></label>
               <textarea name="remarks" id="remarks" cols="30" rows="2"></textarea></td>
               <td>Specs Requirement:</td>
               <td><label for="req"></label>
                 <select name="req" id="req">
                   <option value="">Select</option>
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               </select></td>
             </tr>
             <tr>
               <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Save Test Results" /></td>
               <td align="center">&nbsp;</td>
               <td align="center">&nbsp;</td>
             </tr>
           </table>
           <?php /* Download all student projects in www.studentprojectguide.com */ 
}
?>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
          
          </form>
          <h1>&nbsp;</h1>
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