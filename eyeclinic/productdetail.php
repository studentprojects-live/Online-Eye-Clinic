<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
$resultrec = mysqli_query($con,"SELECT * FROM products where prod_id='$_GET[proid]'");
$arrprod = mysqli_fetch_array($resultrec);
			
$prod_id = $arrprod[prod_id];
$branch_id = $arrprod[branch_id];
$name = $arrprod[name];
$product_type = $arrprod[product_type];
$sub_type = $arrprod[sub_type];
$image = $arrprod[image];
$color = $arrprod[color];
$cost = $arrprod[cost];
$quantity = $arrprod[quantity];

				if($image=="")
				{
				$img = "upload/noimage.jpg";
				}	
				else
				{
				$img = "upload/".$image;	
				}
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php /* Download all student projects in www.studentprojectguide.com */ 
				include("sidebar.php");
				products(1);
				?>
            </div>
         
        </div>
        
 <div id="content" class="float_r">
        	
            <h1><?php /* Download all student projects in www.studentprojectguide.com */  echo $name; ?></h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/"><img src="<?php /* Download all student projects in www.studentprojectguide.com */  echo $img; ?>" alt="Image 01" height="300" width="300" /></a>
            </div>
            <div class="content_half float_r">
				<table>
                    <tr>
                        <td height="30" width="160">Product type</td>
                        <td>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $product_type; ?></td>
                    </tr>
                    <tr>
                    	<td height="30">Sub type:</td>
                        <td><?php /* Download all student projects in www.studentprojectguide.com */  echo $sub_type; ?></td>
                    </tr>
                    <tr>
                      <td height="30">Color:</td>
                      <td width="20" height="20" bgcolor="<?php /* Download all student projects in www.studentprojectguide.com */  echo $color; ?>"></td>
                    </tr>
                    <tr>
                      <td height="30">Cost:</td>
                      <td><?php /* Download all student projects in www.studentprojectguide.com */  echo $cost; ?></td>
                    </tr>
                    <tr><td height="30">Quantity:</td><td><?php /* Download all student projects in www.studentprojectguide.com */  echo $quantity; ?></td></tr>
                    <tr><td height="30">Product Stock Status:</td><td>
					<?php /* Download all student projects in www.studentprojectguide.com */  
					if($quantity>1) 
					{
						$disp= "<font color='#009900'><strong>IN STOCK</strong></font>";
						echo $disp;
					}
					?></td></tr>
                    
                </table>
                <div class="cleaner h20"></div>
		<?php /* Download all student projects in www.studentprojectguide.com */ 
        if(isset($_SESSION["admin_id"]))
        {
        ?>
                <a href="shoppingcart.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $prodid; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>">Place Order</a>
				<?php /* Download all student projects in www.studentprojectguide.com */ 
                }
				?>
			</div>
            <div class="cleaner h30"></div>
            
            <div class="cleaner h50"></div>
 
            
      </div> 
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>