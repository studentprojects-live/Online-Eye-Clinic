<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
if(isset($_SESSION["login"]))
	{
		header("Location: patienthome.php");
	}
if(isset($_POST["login"]))
{
	$sqllogin="SELECT * FROM patient
	WHERE email_id='$_POST[email_id]' AND password='$_POST[password]'";
		$result = mysqli_query($con,$sqllogin);
//echo.mysqli_num_rows($result);
	if(mysqli_num_rows($result) == 1)
	{
			while($mqres = mysqli_fetch_array($result))
			{
			$_SESSION["logtype"] ="Patient";
			$_SESSION["pat_id"] = $mqres[pat_id];
			$_SESSION["email_id"] = $mqres[email_id];
			$_SESSION["created_at"] = $mqres[created_at];
			}
			$_SESSION["login"] = $_POST[email_id];
			header("Location: patienthome.php");
	}
	else
	{
		$msg = "<b><font color='#FF0000'>Invalid Login ID and Password";
	}

}
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
       	  <div class="sidebar_box"><span class="bottom"></span>
           	<h3>New Users</h3>
            <a href="register.php"><img src="images/register.jpg" width="238" height="225" /></a> </div>
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
          <h2>Login</h2>
          
          <script type="application/javascript" >
function validation()
{
	//Validation for Email ID
	em = document.login.email_id.value;
		pos1 = em.indexOf("@")
		pos = em.indexOf(" ")
		pos2 = (pos1+1)
		server = em.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
		//Email ID
	if(em == "")
	{
		document.login.email_id.focus();
		alert("Email cannot be blank");
		return false;                
	}

	else if(em.length<8)
	{
			document.login.email_id.focus();
			alert("Email length cannot be less than 8 characters");
			return false;  
	}
		else if(em.indexOf("@")==-1)
		{
			document.login.email_id.focus();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.login.email_id.focus();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(em.indexOf(".")==-1)
		{
			document.login.email_id.focus();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.login.email_id.focus();

			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.login.email_id.focus();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		}
		else if(server.indexOf(".")==0)
		{
			document.login.email_id.focus();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.login.email_id.focus();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.login.email_id.focus();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
		
	
	if(document.login.password.value == "")
	{
		alert("Enter Password..");
		document.login.password.focus();
		return false;
	}
	
}
</script>
          
        <form id="login" name="login" method="post" action="" onsubmit="return validation()">
          <p>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $msg; ?></p>
            <table width="428" border="0">
              <tr>
                <td width="119"><label for="email_id">Email ID:</label></td>
                <td width="299"><input name="email_id" type="text" id="email_id" size="35" /></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><label for="password"></label>
                <input name="password" type="password" id="password" size="35" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="login" id="login" value="Login" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><strong><a href="forgotpassword.php">Forgot Password</a></strong></td>
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