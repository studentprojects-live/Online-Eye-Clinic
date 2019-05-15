<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");
if($_SESSION["logtype"]== "Patient")
		{
			$res = mysqli_query($con,"Select * from patient");
			$retpat = mysqli_fetch_array($res);
			$name= $retpat['pat_name'];
			$gender= $retpat['gender'];
			$password= $retpat['password'];
			$email_id= $retpat['email_id'];
			$contact= $retpat['contact'];
		}

?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
          <?php /* Download all student projects in www.studentprojectguide.com */ 
		  include("sidebar.php");
		  ?>
            </div>
   		</div>
        <div id="content" class="float_r">
          <table width="506" border="0">
            <tr>
              <td width="119" height="46">Name:</td>
              <td width="377"><input class="right" name="fname" type="text" id="fname" size="50" readonly="readonly" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $name; ?>"/></td>
            </tr>
            <tr>
              <td height="44"><span class="left">Gender:</span></td>
              <td><?php /* Download all student projects in www.studentprojectguide.com */ 
					echo $gender;
			  ?>
             </td>
            </tr>
            <tr>
              <td height="47">Password:</td>
              <td><input class="right" name="password" type="password" readonly="readonly" id="emailid4" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $password; ?>" /></td>
            </tr>
            <tr>
              <td height="56">Email-ID:</td>
              <td><input class="right" name="emailid" type="text" id="emailid" readonly="readonly" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $email_id; ?>"/></td>
            </tr>
            <tr>
              <td height="50">Contact:</td>
              <td><input class="right" name="contact" type="text" id="emailid3" readonly="readonly" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $contact; ?>" /></td>
            </tr>
          </table>
      </div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>