<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");


if(isset($_POST[submit]))
{
	mysqli_query($con,"UPDATE  admin SET  branch_id =  '$_POST[bname]',admin_name =  '$_POST[aname]',login_id =  '$_POST[loginid]',email_id =  '$_POST[emailid]' WHERE  admin_id ='$_SESSION[admin_id]'");
	if(mysqli_affected_rows($con) == 1)
	{
		$resvar = "<b><font color='#009900'>Admin records updated successfully</font></b>";
	}
	else
	{
		$resvar= "<b><font color='#FF0000'>Failed to update profile</font></b>";
	}
}
if(isset($_GET[adminid]))
{
	$resadminrec =  mysqli_query($con,"Select * from admin where admin_id='$_GET[adminid]'");
}
else
{
$resadminrec =  mysqli_query($con,"Select * from admin where admin_id='$_SESSION[admin_id]'");
}
$rowsadmin = mysqli_fetch_array($resadminrec);
$adminid = $rowsadmin[admin_id];
$brid = $rowsadmin[branch_id];
$adname = $rowsadmin[admin_name];
$loginid= $rowsadmin[login_id];
$password = $rowsadmin[password];
$email_id = $rowsadmin[email_id];
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php /* Download all student projects in www.studentprojectguide.com */ 
				include("sidebar.php");
				adminhome();
			?>
            </div>
   		</div>
        <div id="content" class="float_r">
        <h1>Update Admin Profile</h1>
         <p><?php /* Download all student projects in www.studentprojectguide.com */  echo $resvar; ?></p>
               
        <script type="application/javascript" >
function validation()
{
	//Validation for Email ID
	em = document.form1.emailid.value;
		pos1 = em.indexOf("@")
		pos = em.indexOf(" ")
		pos2 = (pos1+1)
		server = em.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
		//Email ID
//	    return false
	if(document.form1.aname.value == "")
	{
		alert("Enter Name");
		document.form1.aname.focus();
		return false;
	}
	
	if(document.form1.password.value == "")
	{
		alert("Enter Password");
		document.form1.password.focus();
		return false;
	}
	
	if(document.form1.cpassword.value == "")
	{
		alert("Confirm The Password");
		document.form1.cpassword.focus();
		return false;
	}
	
	if(document.form1.password.value != document.form1.cpassword.value)
	{
		alert("Password not Matching...");
		return false;
	}
	
	else if(em == "")
	{
		document.form1.emailid.focus();
		alert("Email cannot be blank");
		return false;                
	}

	else if(em.length<8)
	{
			document.form1.emailid.focus();
			alert("Email length cannot be less than 8 characters");
			return false;  
	}
		else if(em.indexOf("@")==-1)
		{
			document.form1.emailid.focus();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.form1.emailid.focus();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(em.indexOf(".")==-1)
		{
			document.form1.emailid.focus();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.form1.emailid.focus();

			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.form1.emailid.focus();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		}
		else if(server.indexOf(".")==0)
		{
			document.form1.emailid.focus();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.form1.emailid.focus();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.form1.emailid.focus();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
	
	
	if(document.form1.bname.value=="")
	{
		alert("Select Branch Name");
		return false;
	}
	
}
</script>
        <form name="form1"  id="form1" method="post" action="" onsubmit="return validation()">
        <table width="595" border="0">
          <tr>
            <td width="127" height="40"><label for="aname" class="left">Admin Name:</label></td>
            <td width="458"><label for="aname" class="left"></label>
            <input type="hidden" name="adminid" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $adminid;?>"  />
            <input class="right" name="aname" type="text" id="aname" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $adname ;?>"/></td>
          </tr>
          <tr>
            <td height="35"><label  class="left" for="loginid" >Login ID:</label></td>
            <td><input  class="right" name="loginid" type="text" id="loginid" size="50" readonly="readonly" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $loginid ;?>" /></td>
          </tr>
          <tr>
            <td height="35">Email-ID</td>
            <td><input name="emailid" type="text" id="emailid" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo  $email_id;?>" /></td>
          </tr>
          <tr>
            <td height="45"><label for="contact" class="left">Branch Name:</label></td>
            <td>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
           	$resadminreca =  mysqli_query($con,"Select * from branch");
			?>
            <select name="bname" id="bname">
            <option value="">Select</option>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			while($rowsa = mysqli_fetch_array($resadminreca))
			{
				if($brid == $rowsa["branch_id"])
				{
				echo "<option value='$rowsa[branch_id]' selected='selected'>$rowsa[branch_name]</option>";
				}
				else
				{
				echo "<option value='$rowsa[branch_id]'>$rowsa[branch_name]</option>";	
				}
			}
			?>
            </select></td>
          </tr>
          <tr>
            <td height="35" align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Update Admin" class="buttonabc"/></td>
          </tr>
        </table>
        </form>
        <div id="content_main"><p></p>
            <p><br />
            </p>
            <p><br />
              <br />
              <br />
              <br />
          </p>
            <p><br />
              <br />
            </p>
            <p>
              <center>
              </center>
            </p>
          <p>&nbsp;</p>
        </div>
        <div class="cleaner"></div>
</div> 
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>