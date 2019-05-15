<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");


if(isset($_POST[submit]))
{
	$dob= date("Y-m-d", strtotime($_POST[dob]));
	mysqli_query($con,"UPDATE  patient SET  pat_name =  '$_POST[name]', dob = '$dob',email_id = '$_POST[emailid]', contact= '$_POST[contact]',address='$_POST[address]' WHERE  pat_id ='$_POST[patid]'");
	if(mysqli_affected_rows($con) == 1)
	{
		$msg = "<b><font color='#009900'>Patient record updated successfully</font></b>";
	}
	else
	{
		$msg = "<b><font color='#FF0000'>Failed to update profile</font></b>";
	}
}
if(isset($_GET[patid]))
{
	$respatrec =  mysqli_query($con,"Select * from patient where pat_id='$_GET[patid]'");
}
else
{
$respatrec =  mysqli_query($con,"Select * from patient where pat_id='$_SESSION[pat_id]'");
}
$rowspat = mysqli_fetch_array($respatrec);
$patid = $rowspat[pat_id];
$patname = $rowspat[pat_name];
$dob = $rowspat[dob];
$gender= $rowspat[gender];
$address= $rowspat[address];
$contact = $rowspat[contact];
$emailid = $rowspat[email_id];
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php /* Download all student projects in www.studentprojectguide.com */ 
				include("sidebar.php");
				patienthome();
				?>
                
            </div>
   		</div>
        <div id="content" class="float_r">
          <h2>Update Patient Profile </h2>
<p><?php /* Download all student projects in www.studentprojectguide.com */  echo $msg; ?></p>
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
	if(document.form1.name.value == "")
	{
		alert("Enter the Name.");
		document.form1.name.focus();
		return false;
	}
	if(document.form1.dob.value == "")
	{
		alert("Enter Date Of Birth.");
		document.form1.dob.focus();
		return false;
	}
	if(document.form1.address.value == "")
	{
		alert("Enter Address.");
		document.form1.address.focus();
		return false;
	}
	if(document.form1.contact.value == "")
	{
		alert("Enter Contact.");
		document.form1.contact.focus();
		return false;
	}
	if(document.form1.contact.value.length < 10||document.form1.contact.value.length > 11 )
	{
		alert("Enter Proper Contact.");
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
}
	</script>
    
          <form name="form1" id="form1" method="post" action="" onsubmit="return validation()"  >
            <table width="525" border="0">
            <tr>
                <td width="127">Name:</td>
                <td width="388"><input type="hidden" name="patid" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $patid;?>"  />                  <input class="right" name="name" type="text" id="name" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $patname;?>" /></td>
              </tr>
              <tr>
                <td><label for="dob" class="left">Gender:</label>
                <label></label></td>
                <td>
                <input name="gender" type="text" class="right"  id="gender" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $gender;?>" readonly="readonly" /></td>
              </tr>
              <tr>
                <td><label for="dob" class="left">Date Of Birth:</label></td>
                <td><script type="text/javascript" src="datetimepicker.js"></script>
                <input type="Text" name="dob" id="demo1" maxlength="25" size="25"  value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $dob ;?>"><a href="javascript:NewCal('demo1','ddmmmyyyy',false,24)"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
              </tr>
              <tr>
                <td valign="top">Address:</td>
                <td><textarea class="right" name="address" cols="39" rows="5" wrap="physical" id="address"><?php /* Download all student projects in www.studentprojectguide.com */  echo $address;?></textarea></td>
              </tr>
              <tr>
                <td><label for="contact" class="left" >Contact No.:</label>
                <br /></td>
                <td><p>
                  <input name="contact" type="text" class="right" id="contact" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $contact;?>"/>
                </p></td>
              </tr>
              <tr>
                <td >Email- ID:</td>
                <td><input name="emailid" type="text" class="right"  id="emailid" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $emailid;?>"/></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit"  id="submit" value="Update" class="buttonabc"/></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>