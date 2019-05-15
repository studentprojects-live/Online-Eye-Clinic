<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");

?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
       	  <div class="sidebar_box"><span class="bottom"></span>
           	<h3>New Users</h3>
            <a href="register.php"><img src="images/register.jpg" width="238" height="225" /></a> </div>
   		</div>
      <div id="content" class="float_r">
      
          <h2>Forgot password</h2>
          
  <script type="application/javascript" >
function validation()
{
	if(document.login.pat_id.value == "")
	{
		alert("Enter Patient ID");
		document.login.pat_id.focus();
		return false;
	}
	if(document.login.cont_no.value == "")
	{
		alert("Enter Contact Number");
		document.login.cont_no.focus();
		return false;
	}
	if(document.login.cont_no.value.length<5 || document.login.cont_no.value.length>11 )
  	{
		alert("Not valid number");
		document.login.cont_no.focus();
		return false; 
	}

}
</script>
          
        <form id="login" name="login" method="post" action="changepassword.php" onSubmit="return validation()">
          <p>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $msg; ?> Please enter Patient ID and Contact number to change password.</p>
      
             <table width="428" border="0">
              <tr>
                <td width="119" height="32"><label for="pat_id">Patient ID:</label></td>
                <td width="299"><input name="pat_id" type="text" id="pat_id" size="35" /></td>
              </tr>
              <tr>
                <td height="31">Contact No.</td>
                <td><label for="cont_no"></label>
                <input name="cont_no" type="text" id="cont_no" size="35" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="login" id="login" value="Change" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><strong><a href="login.php">Login</a></strong></td>
              </tr>
            </table>
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