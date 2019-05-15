<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
$restest=mysqli_query($con,"SELECT * from test where test_id='$_GET[testi]'");
$retest= mysqli_fetch_array($restest);
$resapp=mysqli_query($con,"SELECT * from appointment where app_id='$retest[app_id]'");
$retapp= mysqli_fetch_array($resapp);
$resdoc=mysqli_query($con,"SELECT * from doctor where doc_id='$retapp[doc_id]'");
$retdoc= mysqli_fetch_array($resdoc);
$respat=mysqli_query($con,"SELECT * from patient where pat_id='$retapp[pat_id]'");
$retpat= mysqli_fetch_array($respat);
if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token'])
{
		if(isset($_POST[bill]))
		{
			echo "tast";
			$dt = date("Y-m-d");
			$sql="INSERT INTO doctor_bill (test_id, test_fee,consultation_fee,others,date,remarks) VALUES ('$_GET[testi]','$_POST[testfee]','$_POST[consultationfee]','$_POST[otherfee]','$dt','$_POST[remarks]')";
			
			if (!mysqli_query($con,$sql))
			{
			  die('Error: ' . mysqli_error($con));
			}
			
			if(mysqli_affected_rows($con) == 1 )
			{
				$rcsucc =  "<b><font color='#006600'>Bill record added successfully..</font></b>";
			}
		}
		unset($_SESSION['token']);
}


?>
<script>
function myFunc()
{
	var test= parseFloat(document.getElementById("testfee").value, 10);
	var consult= parseFloat(document.getElementById("consultationfee").value, 10);
			
	var other= parseFloat(document.getElementById("otherfee").value, 10);

	var sum= test+consult+other;
	
	document.getElementById("total").value= sum;	
}
</script>
    
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
          <h2>Doctor Bill Generation</h2>
         
         <script type="application/javascript" >
function validation()
{
	if(document.form1.testfee.value == "")
	{
		alert("Enter the Test Amount");
		document.form1.testfee.focus();
		return false;
	}
	if(document.form1.consultationfee.value=="")
	{
		alert("Enter the Consultation Amount");
		document.form1.consultationfee.focus();
		return false;
	}
	if(document.form1.remarks.value=="")
	{
		alert("Enter Remark");
		document.form1.remarks.focus();
		return false;
	}
}
</script>
         
          <form id="form1" name="form1" method="post" action="" onSubmit="return validation()">
            <input type="hidden" name="token" value="<?=$new_token;?>"/>  <p>
              <label for="fname2" class="left"> </label>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
if(isset($_POST[bill]))
{
	?>
              <a href="viewappointment.php">View Appointments</a>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
}
else
{
?>      
            </p>
            <table width="547" border="0">
              <tr>
                <td colspan="4" align="center"><p>KAMATH OPTICALS</p>
                <p>EYE TEST CLINIC</p></td>
              </tr>
              <tr>
                <td colspan="3">Test ID:<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testi];?></td>
                <td>Date:<?php /* Download all student projects in www.studentprojectguide.com */  echo date("d-m-Y"); ?></td>
              </tr>
              <tr>
                <td width="136"><label for="patname">Patient Name:</label></td>
                <td width="150"><input name="patname" type="text" id="patname" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $retpat[pat_name]?>" readonly="readonly"/></td>
                <td width="104">Doctor Name:</td>
                <td width="139"><label for="docname"></label>
                <input name="docname" type="text" id="patname2" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $retdoc[doc_name]?>" readonly="readonly"/></td>
              </tr>
             
              <tr>
                <td>Test Fee:</td>
                <td colspan="3"><label for="testfee"></label>
                <input name="testfee" type="text" id="testfee" onchange="myFunc()" value="0"/></td>
              </tr>
              <tr>
                <td>Consultation Fee:</td>
                <td colspan="3"><input name="consultationfee" type="text" id="consultationfee" onchange="myFunc()" value="0"/></td>
              </tr>
              <tr>
                <td>Other Fee:</td>
                <td colspan="3"><input name="otherfee" type="text" id="otherfee" onchange="myFunc()" value="0" /></td>
              </tr>
              <tr>
                <td><strong>Total</strong></td>
                <td colspan="3"><input name="total" type="text" id="total" value="0" readonly="readonly" /></td>
              </tr>
              <tr>
                <td>Remarks:</td>
                <td colspan="3"><label for="remarks"></label>
                  <textarea name="remarks" id="remarks" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td colspan="4" align="center"><input type="submit" name="bill" id="bill" value="Generate Bill" /></td>
              </tr>
            </table>
             <?php /* Download all student projects in www.studentprojectguide.com */ 
}
?>
          </form>
</div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>