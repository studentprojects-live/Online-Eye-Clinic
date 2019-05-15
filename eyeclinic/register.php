 <?php /* Download all student projects in www.studentprojectguide.com */ 
 include("includes/header.php");
 include("includes/conn.php");

 
if(isset($_POST['submit']))
{
	
	$dt=date("Y-m-d");
$sql="INSERT INTO patient (pat_name, email_id, password,gender, contact,created_at)
VALUES
('$_POST[fname] $_POST[lname]','$_POST[emailid]','$_POST[password]','$_POST[gender]','$_POST[contact]','$dt')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
  if(mysqli_affected_rows($con) == 1)
  {
	echo "<script>alert('Patient registered successfully..');</script>";
	echo "<script>window.location='login.php';</script>";
  }

}

?>  
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Existing Users</h3>   
                <div class="content"> <a href="login.php"><img src="images/login.jpg" width="222" height="167" /></a> </div>
            </div>
   		</div>
        <div id="content" class="float_r">
          <h2>Patient Registration</h2>
        	<p> <?php /* Download all student projects in www.studentprojectguide.com */  
			if($rcsucc != "")
			{
			echo $rcsucc; 
			}
			else
			{
			?></p>
            
            <script type="application/javascript" >
function validation()
{
	//Validation for Email ID
	em = document.reg.emailid.value;
		pos1 = em.indexOf("@")
		pos = em.indexOf(" ")
		pos2 = (pos1+1)
		server = em.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
		//Email ID
		
	if(document.reg.fname.value == "")
	{
		alert("Enter the First Name.");
		document.reg.fname.focus();
		return false;
	}
	
	if(document.reg.lname.value == "")
	{
		alert("Enter the Last Name.");
		document.reg.lname.focus();
		return false;
	}
	if(document.reg.gender.value == "")
	{
		alert("Select Gender");
		document.reg.gender.focus();
		return false;
	}
	if(em == "")
	{
		document.reg.emailid.focus();
		alert("Email cannot be blank");
		return false;                
	}

	else if(em.length<8)
	{
			document.reg.emailid.focus();
			alert("Email length cannot be less than 8 characters");
			return false;  
	}
		else if(em.indexOf("@")==-1)
		{
			document.reg.emailid.focus();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.reg.emailid.focus();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(em.indexOf(".")==-1)
		{
			document.reg.emailid.focus();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.reg.emailid.focus();

			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.reg.emailid.focus();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		}
		else if(server.indexOf(".")==0)
		{
			document.reg.emailid.focus();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.reg.emailid.focus();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.reg.emailid.focus();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
		if(document.reg.password.value == "")
	{
		alert("Enter the Password.");
		document.reg.password.focus();
		return false;
	}
	if(document.reg.password.value.length<8 || document.reg.password.value.length>15 )
	{
		alert("Minimum charaters for password is 8 and Maximum character is 15");
		document.reg.password.focus();

		return false;
	}
	
	if(document.reg.cpassword.value == "")
	{
		alert("Please Confirm the Password.");
		document.reg.cpassword.focus();
		return false;
	}
	
	if(document.reg.password.value != document.reg.cpassword.value)
	{
		alert("Password not matching.");
		return false;
	}
	
	
	if(document.reg.contact.value == "")
	{
		alert("Enter the Contact.");
		document.reg.contact.focus();
		return false;
	}
	if(document.reg.contact.value.length < 10 || document.reg.contact.value.length>11)
	{
		alert("Enter proper Contact.");
		return false;
	}
	
}
</script>
            
          <form id="reg" name="reg" method="post" action="" onsubmit="return validation()">
         
            <table width="478" border="0">
              <tr>
                <td width="171" height="55">First Name:</td>
                <td width="300"><input class="right" name="fname" type="text" id="fname" size="50" /></td>
              </tr>
              <tr>
                <td height="43">Last Name:</td>
                <td><input  class="right" name="lname" type="text" id="lname" size="50" /></td>
              </tr>
              <tr>
                <td height="40"><label for="dob" class="left">Gender:</label>
                  <label></label></td>
                <td><label>
                  <input type="radio" name="gender" value="Male" id="gender" />
                  Male
                  <input type="radio" name="gender" value="Female" id="gender" />
                  Female</label></td>
              </tr>
              <tr>
                <td height="49">Email-ID:</td>
                <td><input class="right" name="emailid" type="text" id="emailid" size="50" /></td>
              </tr>
              <tr>
                <td height="49">Password:</td>
                <td><input class="right" name="password" type="password" id="emailid4" size="50" /></td>
              </tr>
              <tr>
                <td height="43">Confirm Password:</td>
                <td><input class="right" name="cpassword" type="password" id="emailid2" size="50" /></td>
              </tr>
              <tr>
                <td height="43">Contact:</td>
                <td><input class="right" name="contact" type="text" id="emailid3" size="50" /></td>
              </tr>
              <tr>
                <td height="39" colspan="2" align="center"><input type="submit" name="submit"  id="submit" value="Register" class="buttonabc"/></td>
              </tr>
            </table>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			}
			?>
            <p>&nbsp;</p>
          </form>
          <div id="content_main"><form id="form1" name="form1" method="post" action="">
            <p>
              <center>
              </center>
            </p>
      </form>
      </div>
      </div>
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>