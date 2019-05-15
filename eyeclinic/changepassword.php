<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");


//echo.mysqli_num_rows($result);

if(isset($_POST[logina]))
{
mysqli_query($con,"UPDATE patient SET password='$_POST[password]' WHERE pat_id='$_POST[pat_id]' ");
	if(mysqli_affected_rows($con) == 1)
	{
		$passwordupdate= 1;
	}
//$result1 = mysqli_query($con,"SELECT * FROM patient WHERE pat_id='$_POST[pat_id]' AND password='$_POST[cont_no]'");
	
//echo.mysqli_num_rows($result);
}
else
{
	$result = mysqli_query($con,"SELECT * FROM patient WHERE pat_id='$_POST[pat_id]' AND contact='$_POST[cont_no]'");
}
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
       	  <div class="sidebar_box"><span class="bottom"></span>
           	<h3>New Users</h3>
            <a href="register.php"><img src="images/register.jpg" width="238" height="225" /></a> </div>
   		</div>
      <div id="content" class="float_r">

          <h2>Change password</h2>

          <script type="application/javascript" >
function validation()
{
	if(document.login.password.value == "")
	{
		alert("Enter New Password");
		document.login.password.focus();
		return false;
	}
	else if(document.login.password.value.length<8 || document.login.password.value.length>15 )
	{
		alert("Minimum charaters for password is 8 and maximum character is 15");
		document.login.password.focus();

		return false;
	}
	if(document.login.cpassword.value == "")
	{
		alert("Confirm the New Password");
		document.login.cpassword.focus();
		return false;
	}
	
	
	if(document.form1.password.value != document.form1.cpassword.value)
	{
		alert("Password not matching...");
		return false;
	}
}
</script>
        <form id="login" name="login" method="post" action="" onsubmit="return validation()">
      &nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $msg; ?> </p>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
	if(isset($_POST[logina]) && $passwordupdate == 1)
	{
		echo "<center><h3>Password updated successfully..</h3></center>";	
		echo "<center><h3><a href='login.php'> Click here to login..</a></h3></center>";	
	}
	else
	{
		if(mysqli_num_rows($result) == 0)
		{
		echo "<center><h3>Customer ID or contact number not exist in database</h3></center>";
		}
		else
		{
	?>    <p>Please enter New password.</p>
             <table width="464" height="177" border="0">
              <tr>
                <td width="170"><label for="pat_id">Patient ID:</label></td>
                <td width="284"><input name="pat_id" type="text" id="pat_id" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $_POST[pat_id] ?>" size="35" readonly="readonly" /></td>
              </tr>
              <tr>
                <td>New Password</td>
                <td><input name="password" type="password" id="password" size="35" /></td>
              </tr>
              <tr>
                <td>Confirm password</td>
                <td><label for="cpassword"></label>
                <input name="cpassword" type="password" id="cpassword" size="35" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="logina" id="logina" value="Change password" /></td>
              </tr>
            </table>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			}
	}
			?>
            <p>
        </form>
</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </div>
  </div>
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>