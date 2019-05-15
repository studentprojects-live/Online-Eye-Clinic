<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");

if(isset($_POST[update]))
{
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
		$filnme = $_FILES["file"]["name"];
	if($filnme == "")
	{
	mysqli_query($con,"UPDATE  products SET  branch_id =  '$_POST[bname]',name =  '$_POST[name]',product_type =  '$_POST[ptype]', sub_type =  '$_POST[ptype2]',color =  '$_POST[colorpick]',cost =  '$_POST[cost]',quantity =  '$_POST[qty]' WHERE prod_id ='$_POST[prodid]'");
	}
	else
	{
	mysqli_query($con,"UPDATE  products SET  branch_id =  '$_POST[bname]',name =  '$_POST[name]',product_type =  '$_POST[ptype]', sub_type =  '$_POST[ptype2]', image =  '$filnme',color =  '$_POST[colorpick]',cost =  '$_POST[cost]',quantity =  '$_POST[qty]' WHERE prod_id ='$_POST[prodid]'");
}}
//if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token'])
{
		if(isset($_POST[add]))
		{ 	
		move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
		$filnme = $_FILES["file"]["name"];
		
		$sql="INSERT INTO products (branch_id,product_type, name, image, color,cost,quantity,sub_type)
		VALUES
		('$_POST[bname]','$_POST[ptype]','$_POST[name]','$filnme','$_POST[colorpick]','$_POST[cost]','$_POST[qty]','$_POST[ptype2]')";
		
		if (!mysqli_query($con,$sql))
		  {
		  die('Error: ' . mysqli_error($con));
		  }
		  
		  if(mysqli_affected_rows($con) == 1)
		  {
		 $rcsucc = "Admin record inserted successfully..";
		  }
		
		}
		unset($_SESSION['token']);
}

$new_token = md5(time() . rand(0,100));
$_SESSION['token'] = $new_token;

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
        <h1>Add Product</h1>
        <p><a href="viewproducts.php">View Products</a></p>
        <script type="application/javascript" >
function validation()
{
	if(document.adprod.ptype.value == "")
	{
		alert("Product Type Should be selected.");
		document.adprod.ptype.focus();
		return false;
	}
	if(document.adprod.ptype2.value == "")
	{
		alert("Sub Type Should be selected.");
		document.adprod.ptype2.focus();
		return false;
	}
	if(document.adprod.name.value == "")
	{
		alert("Select Product Name.");
		document.adprod.name.focus();
		return false;
	}
	if(document.adprod.cost.value == "")
	{
		alert("Enter The Cost.");
		document.adprod.cost.focus();
		return false;
	}
		if(document.adprod.bname.value == "")
	{
		alert("Select Branch.");
		document.adprod.bname.focus();
		return false;
	}
	if(document.adprod.qty.value == "")
	{
		alert("Enter The Quantity.");
		document.adprod.qty.focus();
		return false;
	}

}
</script>
        
        <form action="" method="post" enctype="multipart/form-data" name="adprod" id="adprod" onsubmit="return validation()">
          <table width="644" border="0">
            <tr>
              <td width="139" height="34"><strong>Product Type</strong></td>
              
            
                <td width="163">
                <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajaxproducttype.php?q="+str,true);
xmlhttp.send();
}
</script>
  <?php /* Download all student projects in www.studentprojectguide.com */ 
  			$resultquery = mysqli_query($con,"SELECT * FROM  products where prod_id='$_GET[prodid]'");
			$rowrec = mysqli_fetch_array($resultquery);
//echo mysqli_num_rows($resultquery);

				$arrcont = array("Lens","Frames","Contact Lens");
				?>
                <select name="ptype" id="ptype" onchange="showUser(this.value)">
                <option value="">Select</option>
                  <?php /* Download all student projects in www.studentprojectguide.com */ 
				 foreach($arrcont as $value)
				 {
					 if($rowrec["product_type"] == $value)
					 {
					 echo "<option value='$value' selected>$value</option>";
					 }
					 else
					 {
					 echo "<option value='$value'>$value</option>";
					 }
				 }
				 ?>
                </select></td>
                <td width="128"><strong>Sub Type</strong></td>
                <td width="196"><div id="txtHint"><select name="ptype2" id="ptype2">
                 <option value="">Select</option>
                  <?php /* Download all student projects in www.studentprojectguide.com */ 
				   echo "<option value='$rowrec[sub_type]'>$rowrec[sub_type]</option>";
				  ?>
                </select></div></td>
            </tr>
            <tr>
              <td height="34"><strong>
                <label for="name" class="left">Name</label>
              </strong></td>
              <td colspan="3">
              <input name="name" class="right" type="text" id="name" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[name]; ?>" />
              </td>
            </tr>
            <tr>
              <td height="33"><strong>
                <label class="left" for="doclname2">Color</label>
              </strong></td>
              <td colspan="3"><script type="text/javascript" src="jscolor.js"></script>
				   <input name="colorpick" class="color" value="
                     <?php /* Download all student projects in www.studentprojectguide.com */ 
			  	if(isset($_GET[prodid]))
			  	{
					echo $rowrec[color];
				}
				else
				{					
					echo "66ff00";
				}
				?>">
			</td>
            </tr>
            <tr>
              <td height="30"><strong>
                <label for="loginid2" class="left">Cost</label>
              </strong></td>
              <td colspan="3"><input name="cost" type="text" class="right" id="cost" size="50" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[cost]; ?>" /></td>
            </tr>
            <tr>
              <td height="31"><strong>
                <label for="password2" class="left">Branch Name</label>
              </strong></td>
              <td colspan="3">
                <select name="bname" id="bname">
            <option value="">Select</option>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			while($rows = mysqli_fetch_array($resbranch))
			{
				if($rows[branch_id]==$rowrec[branch_id])
				{
				echo "<option value='$rows[branch_id]' selected>$rows[branch_name]</option>";
				}
				else
				{
				echo "<option value='$rows[branch_id]'>$rows[branch_name]</option>";
				}
			}
			?>
                        </select></td>
            </tr>
            <tr>
              <td height="42"><strong>
                <label class="left" for="cpassword2">Quantity</label>
              </strong></td>
              <td colspan="3"><input name="qty" class="right" type="text" id="qty" size="10" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[quantity]; ?>"/></td>
            </tr>
            <tr>
              <td height="32" valign="top"><strong>Image</strong></td>
              <td colspan="3"><label for="file"></label>
              <input type="file" name="file" id="file" />
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
              if($rowrec['image']=="")
				{
				$img = "upload/noimage.jpg";
				}	
				else
				{
				$img = "upload/".$rowrec[image];	
				}
				?><br />
                <?php /* Download all student projects in www.studentprojectguide.com */ 
			  if(isset($_GET[prodid]))
			  {
			  ?>
                <img src="<?php /* Download all student projects in www.studentprojectguide.com */  echo $img; ?>" alt="Image 02" height="100" width="120"/>
                <?php /* Download all student projects in www.studentprojectguide.com */ 
			  }
			  
			?>
              </td>
            </tr>
            <tr>
              <td height="36" colspan="4" align="center"><p>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
			  if(isset($_GET[prodid]))
			  {
			  ?>
              <br />
              	<input type="hidden" name="prodid" id="prodid" value="<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[prodid]; ?>" />
                <input type="submit" name="update" id="update" value="Update Product" class="submit_btn float_l"  />
                <?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else
				{					
				?>
<input type="submit" name="add" id="add" value="Add Product" class="submit_btn float_l" />
                <?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				?>
              </p></td>
            </tr>
          </table>
          <p>&nbsp;</p>

        </form>
  <div id="content_main">
            <p>
              <center>
              </center>
            </p>

      </div>
      </div>
        <div class="cleaner"></div>
    </div>  
<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>