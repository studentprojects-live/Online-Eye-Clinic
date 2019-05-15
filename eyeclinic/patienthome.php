<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
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
        
        <h4> Appointment details:</h4>
        <table width="686" border="1">
<tr bgcolor="#CCCCCC">
  <td width="89" height="23"><h5><strong>App No.</strong></h5></td>
        <td width="198"><h5><strong>Doctor Name</strong></h5></td>
                <td width="153"><h5><strong>Appointment Date</strong></h5></td>
                    <td width="113"><h5><strong>Time</strong></h5></td>
                <td width="99"><h5><strong>Status</strong></h5></td>
      </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
		$dt= date("Y-m-d");
		
		$result = mysqli_query($con,"SELECT * FROM  appointment WHERE app_date='$dt' AND pat_id='$_SESSION[pat_id]' AND status='pending'");

           	while($row = mysqli_fetch_array($result))
  {	
  		$retpat =mysqli_query($con,"SELECT * FROM patient WHERE pat_id= '$row[pat_id]'");
  		$patrec = mysqli_fetch_array($retpat);
	
		$retdoc =mysqli_query($con,"SELECT * FROM doctor WHERE doc_id= '$row[doc_id]'");
	  	$docrec = mysqli_fetch_array($retdoc);

  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</td>";
  echo "<td>" . $docrec['doc_name'] . "</td>";
  echo "<td>" . $row['app_date'] . "</td>";
  echo "<td>" . $row['app_time'] . "</td>";
   echo "<td>";

   if($row['status'] == "pending")
   {
	   echo "Pending";
   }
   else
   {
	   $dt= date("Y-m-d");
	   	$rettests =mysqli_query($con,"SELECT * FROM test WHERE dispatch_date='$dt'");
  $rectests = mysqli_fetch_array($rettests);
  
	   echo "Done";
   }
  
 echo "  </td>";
  echo "</tr>";
  }
?>
          </table>
          <br /><br />
        <h4> Product orders:</h4>
        <table width="682" border="1">
            <tr bgcolor="#CCCCCC">
              <th width="80" scope="col"><h5>Order No.</h5></th>
              <th width="189" scope="col"><h5>Product detail</h5></th>
              <th width="100" scope="col"><h5>Order date</h5></th>
              <th width="228" scope="col"><h5>Payment details</h5></th>
              <th width="51" scope="col"><h5>Status</h5></th>
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
      </div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>