<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");

mysqli_query($con,"DELETE FROM products WHERE prod_id='$_GET[delid]'");
$resbranch = mysqli_query($con,"select * from branch");

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
        <h1>View Products</h1>
        <p><a href="addproduct.php">Add produts</a></p>
        <script type="application/javascript" >
function validation()
{
	if(document.adprod.ptype.value == "")
	{
		alert("Product Type Should be selected.");
		return false;
	}
	if(document.adprod.ptype2.value == "")
	{
		alert("Sub Type Should be selected.");
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
		return false;
	}
	if(document.adprod.qty.value == "")
	{
		alert("Enter The Quantity.");
		document.adprod.qty.focus();
		return false;
	}
	if(document.adprod.file.value == "")
	{
		alert("Select The Image.");
		document.adprod.file.focus();
		return false;
	}
}
</script>
        
        <form action="" method="post" enctype="multipart/form-data" name="adprod" id="adprod" onsubmit="return validation()">
          <table width="681" border="1">
            <tr bgcolor="#CCCCCC">
              <td width="108"><strong>Image</strong></td>
              <td width="210"><strong>Product info</strong></td>
              <td width="106"><strong>Cost</strong></td>
              <td width="66"><strong>Quantity</strong></td>
              <td width="96"><strong>Branch Name</strong></td>
              <td width="55"><strong>Action</strong></td>
            </tr>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			$resultquery = mysqli_query($con,"SELECT * FROM  products");
		while($rowrec = mysqli_fetch_array($resultquery))
		{
			?>
            <tr>				
              <td>&nbsp;<img src="upload/<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[image]; ?>" width="100" height="100"  /></td>
              <td>&nbsp;<strong>Product name: </strong><?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[name]; ?><br />
             &nbsp;<strong>Product type:</strong> <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[product_type]; ?><br />
              &nbsp;<strong>Sub type:</strong> <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[sub_type]; ?><br /><table width="174" border="0">
                <tr>
                  <td width="37"><strong>Color</strong> : </td>
                  <td width="68" bgcolor="<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[color]; ?>">&nbsp;</td>
                </tr>
              </table>
              <br />
              </td>
              <td>&nbsp;Rs. <?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[cost]; ?></td>
              <td>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $rowrec[quantity]; ?></td>
              <td>
			  <?php /* Download all student projects in www.studentprojectguide.com */  
$resultquery1 = mysqli_query($con,"SELECT * FROM  branch where branch_id='$rowrec[branch_id]'");
$rowrec1 = mysqli_fetch_array($resultquery1);
			  echo $rowrec1[branch_name]; 
			  ?>
              </td>
              <td align="center"		>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo 
			  "<a href='addproduct.php?prodid=$rowrec[prod_id]'>Edit</a> <hr>
			  <a href='viewproducts.php?delid=$rowrec[prod_id]'>Delete</a>"; ?></td>
            </tr>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
		}
		?>
          </table>
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