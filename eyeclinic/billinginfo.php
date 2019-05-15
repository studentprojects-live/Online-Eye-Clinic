<?php /* Download all student projects in www.studentprojectguide.com */ 
session_start();
include("includes/header.php");
include("includes/conn.php");
$result= mysqli_query($con,"SELECT * FROM admin where admin_id='$_SESSION[admin_id]'");
$resbranch= mysqli_query($con,"SELECT * from branch where branch_id='$_SESSION[branch_id]'");
$rows = mysqli_fetch_array($resbranch)

?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Aenean varius nulla</a></li>
                        <li><a href="#">Cras mattis arcu</a></li>
                        <li><a href="#">Donec turpis ipsum</a></li>
                        <li><a href="#">Fusce sodales mattis</a></li>
                        <li><a href="#">Maecenas et mauris</a></li>
                        <li><a href="#">Mauris nulla tortor</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Nunc ac viverra nibh</a></li>
                        <li><a href="#">Praesent id venenatis</a></li>
                        <li><a href="#">Quisque odio velit</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Tempus lacus risus</a></li>
                        <li><a href="#">Ut tincidunt imperdiet</a></li>
                        <li><a href="#">Vestibulum eleifend</a></li>
                        <li class="last"><a href="#">Velit mi rutrum diam</a></li>
                    </ul>
                </div>
            </div>
   		</div>
        <div id="content" class="float_r">
          <h2>Patient Payment Information</h2>
          <form id="form" name="form1" method="post" action="">
            <p>
              <label for="fname2" class="left"> </label>
            </p>
            <table width="547" border="0">
              <tr>
                <td width="136"><label for="patname">Branch Name:</label></td>
                <td width="150"><?php /* Download all student projects in www.studentprojectguide.com */  echo $rows[branch_name];?></td>
                <td width="104">Doctor Name:</td>
                <td width="139"><label for="group"></label></td>
              </tr>
              <tr>
                <td><label for="patname">Patient Name:</label></td>
                <td><label for="patname"></label>
                <input type="text" name="patname" id="patname" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
           	while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";

  echo "</tr>";
  }
?>
            </table>
            <table width="300" border="1">
              <tr>
                <td width="139">Date</td>
                <td width="145">&nbsp;</td>
              </tr>
              <?php /* Download all student projects in www.studentprojectguide.com */ 
           	while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";

  echo "</tr>";
  }
?>
              <tr>
                <td>Product Name</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Advance Payment</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Pending Amount</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
          <h1>&nbsp;</h1><form id="form3" name="form1" method="post" action="">
            <p>&nbsp;</p>
          </form>
          
          </form>
</div>
  </div>
        <div class="cleaner"></div>
    </div> 
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>