<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
include("includes/conn.php");
?>
    
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2>Glasses</h2>
                            <p>Glasses, also known as eyeglasses (formal) or spectacles, are frames bearing lenses worn in front of the eyes. They are normally used for vision correction or eye protection. Safety glasses are a kind of eye protection against flying debris or against visible and near visible light or radiation.</p>
							</div>
						
						<div class="detail">
							<h2>Sunglasses</h2>
                            <p>Sunglasses allow better vision in bright daylight, and may protect against damage from high levels of ultraviolet light. Other types of glasses may be used for viewing visual information (such as stereoscopy) or simply just for aesthetic or fashion purposes.
Historical types of glasses include the pince-nez, monocle, lorgnette, and scissor or scissors-glasses.
</p>
							</div>
						
						<div class="detail">
							<h2>Modern Glasses</h2>
                            <p>Modern glasses are typically supported by pads on the bridge of the nose and by temple arms (sides) placed over the ears. CR-39 lenses are the most common plastic lenses due to their low weight, high scratch resistance, low dispersion, and low transparency to ultraviolet and infrared radiation. Polycarbonate and Trivex lenses are the lightest and most shatter-resistant, making them the best for impact protection.</p>
							</div>
                            
                            <div class="detail">
							<h2>History</h2>
                            <p>The earliest historical reference to magnification dates back to ancient Egyptian hieroglyphs in the 5th century BC, which depict "simple glass meniscal lenses". The earliest written record of magnification dates back to the 1st century AD, when Seneca the Younger, a tutor of Emperor Nero of Rome, wrote: "Letters, however small and indistinct, are seen enlarged and more clearly through a globe or glass filled with water".</p>
							</div>
                            
                            <div class="detail">
							<h2>History</h2>
                            <p>The first eyeglasses were made in Italy at about 1286, according to a sermon delivered on February 23, 1306 by the Dominican friar Giordano da Pisa (ca. 1255–1311):It is not yet twenty years since there was found the art of making eyeglasses, which make for good vision... </p>
							</div>
                            
                            <div class="detail">
							<h2>History</h2>
                            <p>The earliest pictorial evidence for the use of eyeglasses is Tommaso da Modena's 1352 portrait of the cardinal Hugh de Provence reading in a scriptorium. Another early example would be a depiction of eyeglasses found north of the Alps in an altarpiece of the church of Bad Wildungen, Germany, in 1403.</p>
							</div>
                            
                            <div class="detail">
							<h2>Invention</h2>
                            <p>The American scientist Benjamin Franklin, who suffered from both myopia and presbyopia, invented bifocals. Serious historians have from time to time produced evidence to suggest that others may have preceded him in the invention; however, a correspondence between George Whatley and John Fenno, editor of The Gazette of the United States, suggested that Franklin had indeed invented bifocals, and perhaps 50 years earlier than had been originally thought.[</p>
							</div>
                            
                            <div class="detail">
							<h2>Modern</h2>
                            <p>Despite the increasing popularity of contact lenses and laser corrective eye surgery, glasses remain very common, as their technology has improved. For instance, it is now possible to purchase frames made of special memory metal alloys that return to their correct shape after being bent. </p>
							</div>
						
					</div>
					
				</div>
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div>
                				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div>
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="images/slider/1.jpg" alt="Slider 01" />
				</div>
				
				<div class="item item_2">
					<img src="images/slider/2.jpg" alt="Slider 02" />
				</div>
				
				<div class="item item_3">
					<img src="images/slider/3.jpg" alt="Slider 03" />
				</div>
                
				<div class="item item_4">
					<img src="images/slider/4.jpg" alt="Slider 04" />
				</div>
                
                <div class="item item_5">
					<img src="images/slider/5.jpg" alt="Slider 05" />
				</div>
                
                <div class="item item_6">
					<img src="images/slider/6.jpg" alt="Slider 06" />
				</div>
                
                <div class="item item_7">
					<img src="images/slider/7.jpg" alt="Slider 07" />
				</div>
                
                <div class="item item_8">
					<img src="images/slider/8.jpg" alt="Slider 08" />
				</div>
                
			</div>
    </div> 
    
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
        	<h1>Products</h1>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
if(isset($_GET[type]))
{
$results = mysqli_query($con,"select * from products where product_type='$_GET[type]' ORDER BY prod_id DESC  LIMIT 0 , 9");	
}
else
{
$results = mysqli_query($con,"select * from products ORDER BY prod_id DESC  LIMIT 0 , 9");	
}
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
                <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="add_to_card">Product Detail</a>
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
              <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>&testids=<?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[testids]; ?>" class="add_to_card">Product Detail</a>
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
                <p class="product_price">Rs. <?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["cost"]; ?></p>
              <a href="productdetail.php?proid=<?php /* Download all student projects in www.studentprojectguide.com */  echo $ros["prod_id"]; ?>" class="add_to_card">Product Detail</a>
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