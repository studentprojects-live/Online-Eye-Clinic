<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
if(!isset($_SESSION["admin_id"]))
{
	header("Location: index.php");	
}
include("includes/header.php");
include("includes/conn.php");

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
				inventorysidebar();
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
        
          <form id="adbranch" name="adbranch" method="post" action="" onsubmit="return validation()">
            <h1>Sales Inventory</h1>
              Search Branch
              <select name="group" id="group">
                <option value="">Select</option>
                <?php /* Download all student projects in www.studentprojectguide.com */ 
				$resultbranch = mysqli_query($con,"SELECT * FROM  branch");
                	while($row = mysqli_fetch_array($resultbranch))
  				{
    	    		if($_POST[group] == $row[branch_id])
					{
			        echo "<option value='$row[branch_id]' selected >$row[branch_name]</option>";
					}
					else
					{
					 echo "<option value='$row[branch_id]'>$row[branch_name]</option>";
					}
              	}
              ?>
              </select>
              <input name="search" type="submit" id="search" value="Search" />
            </p>
            <table width="678" border="1">
              <tr>
                <td width="289"><strong>Product information</strong></td>
                <td width="177"><strong>Image</strong></td>
                <td width="83"><strong>Color</strong></td>
                <td width="101" align="center"><strong>&nbsp;Amount collected</strong></td>                
              </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
			  $resultbranch1 = mysqli_query($con,"SELECT DISTINCT prod_id FROM  orders ");   

			 	//	image	color	cost	quantity						
				while($row1 = mysqli_fetch_array($resultbranch1))
				{
					 
					 $resultbranch = mysqli_query($con,"SELECT * FROM  products where prod_id='$row1[prod_id]'");
					 $row = mysqli_fetch_array($resultbranch);
					   
					   $resultbranch = mysqli_query($con,"SELECT * FROM  orders where prod_id='$row1[prod_id]'");
					 $pqty = mysqli_num_rows($resultbranch);
					   
  				echo "<tr>";
				echo "<td>  Product ID:  $row[prod_id]<br>
							Product name: $row[name] <br>
							Product type: $row[product_type] <br>
						    Sub type : $row[sub_type]
				</td>";
				echo "<td align='center'> <img src='upload/$row[image]' width='150' height='100'></td>";	
				echo "<td>" ;
				?>
                
				<table bgcolor="<?php /* Download all student projects in www.studentprojectguide.com */  echo $row[color]; ?>" width="20" height="20" align="center"> 
                <tr>
                <td></td>
                </tr>
                </table>
                
				<?php /* Download all student projects in www.studentprojectguide.com */ 
				echo  "</td>";
				echo "<td align='center'>" . $row[cost] * $pqty . "</td>";
				echo "</tr>";
				}
  			?>
            </table>
 <script>
function printpage()
  {
  window.print()
  }
</script>


<input type="button" value="Print this page" onclick="printpage()">
       
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