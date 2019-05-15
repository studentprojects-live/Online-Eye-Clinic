 <?php /* Download all student projects in www.studentprojectguide.com */ 
 session_start();
 if(!isset($_SESSION["admin_id"]))
{
	header("Location: index.php");	
}
 include("includes/header.php");
 include("includes/conn.php");
$dt = date("Y-m-d");
 
if(isset($_POST[submit]))
{ 							
$sql="INSERT INTO admin (branch_id,admin_name, login_id,email_id,password)
VALUES
('$_POST[bname]','$_POST[aname]','$_POST[loginid]','$_POST[email]','$_POST[password]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
  if(mysqli_affected_rows($con) == 1)
  {
 $rcsucc = "Admin record inserted successfully..";
  }

}

if($_GET[act] =="delete")
{ 
	mysqli_query($con,"DELETE FROM admin where admin_id='$_GET[adminid]'");
	if(mysqli_affected_rows($con) == 1 )
	{
		$rcsucc = "Admin record deleted successfully...";
	}
}
$result = mysqli_query($con,"SELECT * FROM admin");
$resbranch = mysqli_query($con,"select * from branch");
?>       
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
		  
				include("sidebar.php");
			
					

if($_SESSION["logtype"]=='Administrator')
{
			maintenancesidebar();
}
else if($_SESSION["logtype"]=='Patient')
{
			patienthome();
}
else if($_SESSION["logtype"]=='Doctor')
{
	doctorhome();
}

			?>	
            </div>
   		</div>
        <div id="content" class="float_r">
        <h1>Add New Admin</h1>
        <p><font color="green"><b><?php /* Download all student projects in www.studentprojectguide.com */  echo $rcsucc; ?></b></font></p>
        
        <script type="application/javascript" >
function validation()
{
	//Validation for Email ID
	em = document.adadmin.email.value;
		pos1 = em.indexOf("@")
		pos = em.indexOf(" ")
		pos2 = (pos1+1)
		server = em.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
		//Email ID
//	    return false
	
	if(document.adadmin.aname.value == "")
	{
		alert("Enter Name.");
		document.adadmin.aname.focus();
		return false;
	}
	
	if(document.adadmin.loginid.value == "")
	{
		alert("Enter Login Id.");
		document.adadmin.loginid.focus();
		return false;
	}
	
	
	
	if(em == "")
	{
		document.adadmin.email.focus();
		alert("Email cannot be blank");
		return false;                
	}

	else if(em.length<8)
	{
			document.adadmin.email.focus();
			alert("Email length cannot be less than 8 characters");
			return false;  
	}
		else if(em.indexOf("@")==-1)
		{
			document.adadmin.email.focus();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.adadmin.email.focus();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(em.indexOf(".")==-1)
		{
			document.adadmin.email.focus();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.adadmin.email.focus();

			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.adadmin.email.focus();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		}
		else if(server.indexOf(".")==0)
		{
			document.adadmin.email.focus();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.adadmin.email.focus();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.adadmin.email.focus();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
		if(document.adadmin.password.value == "")
	{
		alert("Enter the Password.");
		document.adadmin.password.focus();
		return false;
	}
	if(document.adadmin.password.value.length<8 || document.adadmin.password.value.length>15 )
	{
		alert("minimum charaters for password is 8 and maximum character is 15");
		document.adadmin.password.focus();

		return false;
	}
	if(document.adadmin.cpassword.value == "")
	{
		alert("Confirm the Password.");
		document.adadmin.cpassword.focus();
		return false;
	}
	
	if(document.adadmin.password.value != document.adadmin.cpassword.value)
	{
		alert("Password not matching...");
		return false;
	}
	
		if(document.adadmin.bname.value=="")
		{
			alert("Branch should be selected...");
			return false;
		}

	
	
}
</script>
        
        <form method="post" action="" onsubmit="return validation()" name="adadmin" id="adadmin" >
        <table width="595" border="0">
          <tr>
            <td width="118" height="40"><label for="aname" class="left">Admin Name:</label></td>
            <td width="304"><label for="aname" class="left"></label>
              <input class="right" name="aname" type="text" id="aname" size="50" /></td>
          </tr>
          <tr>
            <td height="35"><label  class="left" for="loginid" >Login ID:</label></td>
            <td><input  class="right" name="loginid" type="text" id="loginid" size="50" /></td>
          </tr>
          <tr>
            <td height="35">Email-ID</td>
            <td><input name="email" type="text" class="right"  id="dob2" size="50" /></td>
          </tr>
          <tr>
            <td height="45">Password</td>
            <td><input name="password" type="password" class="right"  id="password" size="50" /></td>
          </tr>
          <tr>
            <td height="45">Cofirm password</td>
            <td><input name="cpassword" type="password" class="right"  id="dob3" size="50" /></td>
          </tr>
          <tr>
            <td height="45">Branch Name:</td>
            <td><select name="bname" id="bname">
            <option value="">Select</option>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			while($rows = mysqli_fetch_array($resbranch))
			{
				echo "<option value='$rows[branch_id]'>$rows[branch_name]</option>";
			}
			?>
                        </select>
            </td>
          </tr>
          <tr>
            <td height="45" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Add Admin" class="buttonabc"/></td>
          </tr>
          <tr>
            <td height="35" colspan="2"><table width="582" border="1">
              <tr>
                <td width="119">Admin Name</td>
                <td width="104">Login Id</td>
                <td width="125">Email-Id</td>
                <td width="100">Branch Name</td>
                <td width="100">Action</td>
              </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
           	while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['admin_name'] . "</td>";
  echo "<td>" . $row['login_id'] . "</td>";
  echo "<td>" . $row['email_id'] . "</td>";
  $selbr= mysqli_query($con,"SELECT * FROM branch where branch_id = '$row[branch_id]'");
  $recbr = mysqli_fetch_array($selbr);
  echo "<td>" . $recbr[branch_name] . "</td>";
  echo "<td><a href='updateadmin.php?adminid=$row[admin_id]'>Edit</a> / <a href='addnewadmin.php?adminid=$row[admin_id]&act=delete'>Delete</a></a></td>";
  echo "</tr>";
  }
?>
         
            </table>
            <p>&nbsp; </p></td>
          </tr>
          <tr>
            <td height="35" colspan="2">&nbsp;</td>
          </tr>
        </table>
        </form>
        <div id="content_main"></div>
        <div class="cleaner"></div>
</div> 
        <div class="cleaner"></div>
    </div> 
<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>