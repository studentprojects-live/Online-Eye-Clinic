<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");

if(isset($_GET[type]))
{
$results = mysqli_query($con,"select * from products where product_type='$_GET[type]'");	
}
else
{
$results = mysqli_query($con,"select * from products");	
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
       <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<?php /* Download all student projects in www.studentprojectguide.com */ 
			include("cssidebar.php");
			?>
            
   		</div>
        <div id="content" class="float_r">
        	<h1>New Products</h1>
            <?php /* Download all student projects in www.studentprojectguide.com */ 

			$i=0;
			while($ros = mysqli_fetch_array($results))
			{
				if($ros['image']=="")
				{
				$img = "upload/noimage.jpg";
				}	
				else
				{
				$img = "upload/".$ros[image];	
				}
	
				if($i==0)
				{	
				?>
            <div class="product_box"><a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>">
            <img src="<?php /* Download all student projects in www.studentprojectguide.com */  echo $img; ?>" alt="Image 02" height="150" width="200"/></a></a></a></a>
              <h3><?php /* Download all student projects in www.studentprojectguide.com */  echo "Name: ". $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["cost"]; ?></p>
             <?php /* Download all student projects in www.studentprojectguide.com */ 
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
                <a href="shoppingcart.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="add_to_card">Order</a>
                 <?php /* Download all student projects in www.studentprojectguide.com */ 
			 }
			 ?>
                <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="detail">Product Detail</a>
            </div>       
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			$i=1;
				}
				else if($i==1)
				{
				?>
            <div class="product_box">
           	  <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>"><img src="<?php /* Download all student projects in www.studentprojectguide.com */  echo $img; ?>" alt="Image 02" height="150" width="200"/></a>
                <h3>Name : <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["cost"]; ?></p>
                   <?php /* Download all student projects in www.studentprojectguide.com */ 
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
              <a href="shoppingcart.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="add_to_card">Order</a>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
			 }
			 ?>
              <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="detail">Product Detail</a>
            </div> 
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			$i=2;
				}
				else if($i==2)
				{
				?>       	
            <div class="product_box no_margin_right">
      <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>"><img src="<?php /* Download all student projects in www.studentprojectguide.com */  echo $img; ?>" alt="Image 02" height="150" width="200"/></a>
                <h3>Name : <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["cost"]; ?></p>       <?php /* Download all student projects in www.studentprojectguide.com */ 
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
              <a href="shoppingcart.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>" class="add_to_card">Order</a>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
			 }
			  ?>
              
              <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>" class="detail">Product Detail</a>
            </div> 
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			$i=0;
				}
				?>    
            	<?php /* Download all student projects in www.studentprojectguide.com */ 
			}
			?>
      </div> 
        <div class="cleaner"></div>
    </div>
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>