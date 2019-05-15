<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
if(!isset($_SESSION["admin_id"]))
{
	header("Location: index.php");	
}
include("includes/header.php");
include("includes/conn.php");
if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token'])
{
		if(isset($_POST[add]))
		{
			$sql="INSERT INTO branch (branch_name, description) VALUES ('$_POST[bname]','$_POST[description]')";
			
			if (!mysqli_query($con,$sql))
			{
			  die('Error: ' . mysqli_error($con));
			}
			
			if(mysqli_affected_rows($con) == 1 )
			{
				$rcsucc =  "<b><font color='#006600'>Branch record added successfully..</font></b>";
			}
		}
	unset($_SESSION['token']);
}

$new_token = md5(time() . rand(0,100));
$_SESSION['token'] = $new_token;

if(isset($_POST[update]))
{
	$sql="Update branch set branch_name='$_POST[bname]', description='$_POST[description]' where branch_id='$_POST[branchid]'";

	if (!mysqli_query($con,$sql))	
  	{
  		die('Error: ' . mysqli_error($con));
  	}
	
	$rcsucc = "<font color='#006600'>Branch record updated successfully..</font></b>";

}

if($_GET[act] =="edit")
{
	$resbranch =  mysqli_query($con,"Select * from branch where branch_id='$_GET[branchid]'");
	$rowsbranch = mysqli_fetch_array($resbranch);
	$branchid = $rowsbranch[branch_id];
	$branchname= $rowsbranch[branch_name];
	$desc = $rowsbranch[description];
}

if($_GET[act] =="delete")
{ 
	mysqli_query($con,"DELETE FROM branch where branch_id='$_GET[branchid]'");
	
	if(mysqli_affected_rows($con) == 1 )
	{
		$rcsucc = "<b><font color='#FF0000'>Branch record deleted successfully...</font>";
	}
}

$result = mysqli_query($con,"SELECT * FROM branch");

?>

<font color="#FF0000">        
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
     
        <div id="content_main">
        <script type="application/javascript" >
function validation()
{
	if(document.adbranch.bname.value == "")
	{
		alert("Enter the Branch Name.");
		document.adbranch.bname.focus();
		return false;
	}
	
	if(document.adbranch.description.value == "")
	{
		alert("Enter the Branch Description.");
		document.adbranch.description.focus();
		return false;
	}
}
</script>
        
          <form id="adbranch" name="adbranch" method="post" action="addbranch.php" onsubmit="return validation()">
            <h1>Add Branch</h1>
            <p><?php /* Download all student projects in www.studentprojectguide.com */  echo $rcsucc;?></p>
            <table width="660" border="0">
              <tr>
                <td width="143" height="34"><label for="bname" class="left">Branch  Name:</label></td>
                <td width="300"><p>&nbsp;
                  </p>
                  <input type="hidden" name="token" value="<?=$new_token;?>"/> 
                  <input type="hidden" name="branchid" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $branchid ;?>"  />
                  <p>
                    <input name="bname" class="right" type="text" id="bname" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $branchname ;?>" />
                </p></td>
              </tr>
              
              <tr>
                <td height="33"><label class="left" for="doclname2">Description:</label></td>
                <td><label for="description"></label>
                <textarea name="description" id="description" cols="45" rows="5" ><?php /* Download all student projects in www.studentprojectguide.com */  echo $desc ;?></textarea></td>
              </tr>
              
              <tr>
                <td height="36" colspan="2" align="center">
                <?php /* Download all student projects in www.studentprojectguide.com */ 
                if($_GET[act]=="edit")
                { 
					?>
                	<input type="submit" name="update" id="update" value="Update" />
                	<?php /* Download all student projects in www.studentprojectguide.com */ 
                }
				
                else
                {
					?>
                	<input type="submit" name="add" id="add" value="Add Branch" />
                	<?php /* Download all student projects in www.studentprojectguide.com */ 
                }
				
               ?>
               </td>
               
            </tr>
            </table>
            <p></p>
            <table width="548" border="1">
              <tr>
                <td width="218">Branch Name</td>
                <td width="181">Description</td>
                <td width="127">Action</td>
              </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
           	while($row = mysqli_fetch_array($result))
  			{
  				echo "<tr>";
   				$selbr= mysqli_query($con,"SELECT * FROM branch where branch_id = '$row[branch_id]'");
  				$recbr = mysqli_fetch_array($selbr);
  				echo "<td>" . $recbr[branch_name] . "</td>";
  				echo "<td>" . $recbr[description] . "</td>";
				echo "<td><a href='addbranch.php?branchid=$row[branch_id]&act=edit'>Edit</a> / <a href='addbranch.php?branchid=$row[branch_id]&act=delete'>Delete</a></td>";
 			 	echo "</tr>";
  			}
  			?>
            </table>
            <p>&nbsp;</p>
            <p>
            <center>
            </center>
            </p>
          	</form>
          	<p>&nbsp;</p>
        </div>
       <div class="cleaner"></div>
	</div> 
    <div class="cleaner"></div>
    </div> 
<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>