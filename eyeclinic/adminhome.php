<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
if(isset($_GET[prodid]))
{
$dt= date("Y-m-d");
mysqli_query($con,"UPDATE orders SET dispatch_date='$dt',payment='$_GET[balamt]', status='Delivered' where order_id='$_GET[prodid]'");
$resrec = "Order status updated successfully...<br>";
$resrec =$resrec.  " <a href='billingreport.php?prodid=$_GET[prodid]&balamt=$_GET[balamt]&advpaid=$_GET[advpaid]' target='_blank'>Print billing report</a>";
}
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
          <h2>Product Orders:</h2>
          <p><?php /* Download all student projects in www.studentprojectguide.com */  echo $resrec; ?></p>
          <table width="682" border="1">
            <tr>
              <th width="80" scope="col">Order No.</th>
              <th width="189" scope="col">Product detail</th>
              <th width="100" scope="col">Order date</th>
              <th width="228" scope="col">Payment details</th>
              <th width="51" scope="col">Status</th>
            </tr>
            <?php /* Download all student projects in www.studentprojectguide.com */ 
			$dt= date("Y-m-d");
$resorders =  mysqli_query($con,"SELECT * FROM  orders WHERE  dispatch_date =  '$dt' AND status='Pending' AND payment >='1'");

			while($recrows = mysqli_fetch_array($resorders))
			{	
			$resorders1 =  mysqli_query($con,"SELECT * FROM  products WHERE  prod_id =  '$recrows[prod_id]'");
			$recrows1 = mysqli_fetch_array($resorders1);	
										
           echo " <tr>
              <td>&nbsp;$recrows[order_id]</td>
              <td>";
			  $restorders2 =  mysqli_query($con,"SELECT * FROM orders where test_id ='$recrows[test_id]'");
			  		while($recrows2 = mysqli_fetch_array($restorders2))
					{
						 $restorders3 =  mysqli_query($con,"SELECT * FROM products where prod_id ='$recrows2[prod_id]'");
			  				while($recrows3 = mysqli_fetch_array($restorders3))
							{
							echo "&nbsp;".$recrows3[name]. "<br>";
							}
					}
				 /* &nbsp; Product ID: $recrows1[prod_id]<br>
				  &nbsp; Name: $recrows1[name]<br>	
				 &nbsp; Product type: $recrows1[product_type]<br>
				 &nbsp; Sub type: $recrows1[sub_type]<br>				  		  
				 */
			  echo "</td>
              <td>&nbsp;$recrows[order_date]</td>
              <td>&nbsp;Total: Rs. $recrows[total]<br>
			  &nbsp;Advance paid : Rs. $recrows[payment]<br>";
			 echo "&nbsp;Balance amount : Rs.". $balamt = $recrows[total]-$recrows[payment];
			  echo "</td>  <td align='center'>&nbsp;
			  $recrows[status]
			  <a href='adminhome.php?prodid=$recrows[order_id]&balamt=$recrows[total]&advpaid=$recrows[payment]'>Delivered</a>	
			  </td></tr>";
            }
            ?>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
      </div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>