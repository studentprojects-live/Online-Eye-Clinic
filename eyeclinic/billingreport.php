<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/conn.php");
$restest=mysqli_query($con,"SELECT * from orders where order_id='$_GET[prodid]'");
$retest= mysqli_fetch_array($restest);


$restest=mysqli_query($con,"SELECT * from test where test_id='$retest[2]'");
$retest= mysqli_fetch_array($restest);

//echo mysqli_num_rows($restest);
$resapp=mysqli_query($con,"SELECT * from appointment where app_id='$retest[1]'");
$retapp= mysqli_fetch_array($resapp);

$respat=mysqli_query($con,"SELECT * from patient where pat_id='$retapp[2]'");
$retpat= mysqli_fetch_array($respat);


?>
<html>
<head>
  <script>
function printpage()
  {
  window.print()
  }
</script>
</head>
<body onLoad="printpage()">
<table width="639" border="1">
  <tr>
    <th colspan="3" scope="row"><p>OPTOMATE</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th width="191" scope="row">Order No. <?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[prodid]?> </th>
    <td width="240">&nbsp;</td>
    <td width="186">Date: <?php /* Download all student projects in www.studentprojectguide.com */  echo date("Y-m-d"); ?></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <td colspan="2">&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $retpat[pat_name]; ?></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Particulars</th>
    <td><strong>AMOUNT</strong></td>
  </tr>
  <?php /* Download all student projects in www.studentprojectguide.com */ 
  $restest=mysqli_query($con,"SELECT * from orders where order_id='$_GET[prodid]'");
while($retest= mysqli_fetch_array($restest))
{
	//$respr=mysqli_query($con,"SELECT * from products where prod_id='$retest[3]'");
	//$retpr= mysqli_fetch_array($respr);
	
	  $restorders2 =  mysqli_query($con,"SELECT * FROM orders where test_id ='$retest[test_id]'");
			  		while($recrows2 = mysqli_fetch_array($restorders2))
					{
						 $restorders3 =  mysqli_query($con,"SELECT * FROM products where prod_id ='$recrows2[prod_id]'");
			  				while($recrows3 = mysqli_fetch_array($restorders3))
							{
								?>
                                <tr>
    							<th colspan="2" scope="row">&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $recrows3[name];?></th>
    							<td>&nbsp;<?php /* Download all student projects in www.studentprojectguide.com */  echo $recrows3[cost];?></td>
  								</tr>
                                <?php /* Download all student projects in www.studentprojectguide.com */ 
								
							//echo "&nbsp;".$recrows3[name]. "<br>";
							}
					}

?>
 
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
?>
 <tr>
    <th colspan="2" scope="row">Total</th>
    <td><strong><?php /* Download all student projects in www.studentprojectguide.com */  echo $_GET[balamt]; ?></strong></td>
  </tr>
</table>
          

</body>
</html>

   
