<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
if(isset($_SESSION["login"]))
	{
		header("Location: index.php");
	}
if(isset($_POST["login"]))
{
		if($_POST["logtype"]=='Administrator')
		{
			$result = mysqli_query($con,"SELECT * FROM admin WHERE login_id='$_POST[login_id]' AND password='$_POST[password]'");
			//echo "aaa".mysqli_num_rows($result);
			if(mysqli_num_rows($result) == 1)
			{
				while($mqres = mysqli_fetch_array($result))
				{
					$_SESSION["logtype"] ="Administrator";
					$_SESSION["admin_id"] = $mqres[admin_id];
					$_SESSION["login_id"] = $mqres[login_id];
					$_SESSION["branch_id"] = $mqres[branch_id];
					$_SESSION["created_at"] = $mqres[created_at];
					$_SESSION["lastlogin"] = $mqres[lastlogin];
				}
				$dt= date("Y-m-d h:i:s");
				mysqli_query($con,"UPDATE admin SET lastlogin='$dt' where admin_id='$_SESSION[admin_id]'");
				$_SESSION["login"] = $_POST[login_id];
				header("Location: adminhome.php");
			}
			else
			{
				$msg = "<font color ='#ff0000'>Invalid Login ID and Password";
			}
		}
		
		if($_POST["logtype"]=='Doctor')
		{
			$result = mysqli_query($con,"SELECT * FROM doctor WHERE login_id='$_POST[login_id]' AND password='$_POST[password]'");
			echo "aaa".mysqli_num_rows($result);
			if(mysqli_num_rows($result) == 1)
			{
				while($mqres = mysqli_fetch_array($result))
				{
					$_SESSION["logtype"] ="Doctor";
					$_SESSION["doc_id"] = $mqres[doc_id];
					$_SESSION["branch_id"] = $mqres[branch_id];
					$_SESSION["login_id"] = $mqres[login_id];
					$_SESSION["created_at"] = $mqres[created_at];
					$_SESSION["last_login"] = $mqres[last_login];
				}
				$dt= date("Y-m-d h:i:s");
				mysqli_query($con,"UPDATE doctor SET last_login='$dt' where doc_id='$_SESSION[doc_id]'");
				
				$_SESSION["login"] = $_POST[login_id];
				header("Location: dochome.php");
			}
			else
			{
				$msg = "Invalid Login ID and Password";
			}
		}
}
		
		
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
       	  <img src="images/login.jpg" width="290" height="350" />
   		</div>
      <div id="content" class="float_r">
       <?php /* Download all student projects in www.studentprojectguide.com */ 
			if(isset($_SESSION["loginid"]))
{
echo "You already logged in<br>";
?>
   <button onclick="window.location.href='patienthome.php'">Continue</button>
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
else
{
?>
          <h2>Doctors/ Admin Login</h2>
                    <script type="application/javascript" >
function validation()
{
	if(document.login1.login_id.value == "")
	{
		alert("Enter Login ID.");
		document.login1.login_id.focus();
		return false;
	}
	
	if(document.login1.password.value == "")
	{
		alert("Enter Password..");
		document.login1.password.focus();
		return false;
	}
	
	if(document.login1.logtype.value=="")
	{
		alert("Select login Type.");
		return false;
	}
	
}
</script>
        <form id="login1" name="login1" method="post" action="" onsubmit="return validation()">
          <p>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $msg; ?></p>
            <table width="428" border="0">
              <tr>
                <td width="119"><label for="login_id">Login ID:</label></td>
                <td width="299"><input name="login_id" type="text" id="login_id" size="35" /></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><label for="password"></label>
                <input name="password" type="password" id="password" size="35" /></td>
              </tr>
              <tr>
                <td height="33">Type</td>
                <td><label for="logtype"></label>
                  <select name="logtype" id="logtype">
                  <option value="">Select</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Doctor">Doctor</option>
                </select></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="login" id="login" value="Login" /></td>
              </tr>
            </table>
            <p>
        </form>
</p>
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
?>
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