<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");


if(isset($_POST[submit]))
{
	mysqli_query($con,"UPDATE  doctor SET  branch_id = '$_POST[bname]',doc_name =  '$_POST[docname]',clinic_name =  '$_POST[cname]', 
	email_id =  '$_POST[emailid]',phone =  '$_POST[phone]',mobile =  '$_POST[mobile]',login_id =  '$_POST[loginid]',password =  '$_POST[password]' WHERE  doc_id ='$_POST[docid]'");
	if(mysqli_affected_rows($con) == 1)
	{
		$resvar = "Doctor record updated successfully";
	}
}
if(isset($_SESSION["doc_id"]))
{
		$resdocrec =  mysqli_query($con,"Select * from doctor where doc_id='$_SESSION[doc_id]'");
}
else
{
	$resdocrec =  mysqli_query($con,"Select * from doctor where doc_id='$_GET[docid]'");
}
	

$rowsdoc = mysqli_fetch_array($resdocrec);
$docid = $rowsdoc[doc_id];
$brid = $rowsdoc[branch_id];
$docname = $rowsdoc[doc_name];
$clinicname= $rowsdoc[clinic_name];
$emailid = $rowsdoc[email_id];
$phone= $rowsdoc[phone];
$mobile= $rowsdoc[mobile];
$loginid= $rowsdoc[login_id];
$password = $rowsdoc[password];
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
          <h1>Update Doctor Profile</h1>
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
	if(document.form1.docname.value == "")
	{
		alert("Enter Name");
		document.form1.docname.focus();
		return false;
	}
	if(document.form1.password.value == "")
	{
		alert("Enter Password");
		document.form1.password.focus();
		return false;
	}
	if(document.form1.password.value.length<8 || document.form1.password.value.length>15 )
	{
		alert("Minimum charaters for password is 8 and maximum character is 15");
		document.form1.password.focus();

		return false;
	}
	if(document.form1.cpassword.value == "")
	{
		alert("Confirm the Password");
		document.form1.cpassword.focus();
		return false;
	}
	if(document.form1.password.value != document.form1.cpassword.value)
	{
		alert("Password not Matching");
		return false;
	}
	
	if(em == "")
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
		alert("Select Branch.");
		return false;
	}
	if(document.form1.cname.value == "")
	{
		alert("Enter Clinic Name");
		document.form1.cname.focus();
		return false;
	}
	if(document.form1.mobile.value == "")
	{
		alert("Enter The Mobile Number");
		document.form1.mobile.focus();
		return false;
	}
	if(document.form1.mobile.value.length < 5 || document.form1.mobile.value.length>11)
	{
		alert("Enter Proper Mobile Number");
		return false;
	}
	
}
</script>
          <form id="form1" name="form1" method="post" action=""  onsubmit="return validation()">
          <p>
            <label for="fname" class="left"> </label>
            </p>
            <table width="595" border="0">
              <tr>
                <td width="118" height="40"><label for="docname" class="left">Doctor Name:</label></td>
                <td width="304"><label for="docname" class="left"></label>
               	  <input type="hidden" name="docid" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $docid ;?>"  />
                <input class="right" name="docname" type="text" id="docname" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $docname;?>"/></td>
              </tr>
              <tr>
                <td height="35"><label  class="left" for="loginid" >Login ID:</label></td>
                <td><input  class="right" name="loginid" type="text" id="loginid" readonly="readonly" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $loginid ;?>" /></td>
              </tr>
              <tr>
                <td height="39">Password:</td>
                <td><input name="password" type="password" class="right"  id="password" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $password ;?>"/></td>
              </tr>
              <tr>
                <td height="39">Confirm Password:</td>
                <td><input name="cpassword" type="password" class="right"  id="dob" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $password;?>" /></td>
              </tr>
              <tr>
                <td height="35">Email-ID:</td>
                <td><input name="emailid" type="text" class="right"  id="dob2" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $emailid ;?>" /></td>
              </tr>
              <tr>
                <td height="45"><label for="contact" class="left">Branch Name:</label></td>
                 <?php /* Download all student projects in www.studentprojectguide.com */ 
           	$resdocreca =  mysqli_query($con,"Select * from branch");
			?>
                <td><select name="bname" id="bname">
                <?php /* Download all student projects in www.studentprojectguide.com */ 
			while($rowsa = mysqli_fetch_array($resdocreca))
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
                <td height="45">Clinic Name</td>
                <td><input name="cname" type="text" class="right"  id="dob5" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $clinicname ;?>" /></td>
              </tr>
              <tr>
                <td height="45">Phone:</td>
                <td><input name="phone" type="text" class="right"  id="dob3" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $phone ;?>" /></td>
              </tr>
              <tr>
                <td height="45">Mobile:</td>
                <td><input name="mobile" type="text" class="right"  id="dob4" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $mobile ;?>" /></td>
              </tr>
              <tr>
                <td height="35" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update" class="buttonabc"/></td>
              </tr>
            </table>
            <p>&nbsp; </p>
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