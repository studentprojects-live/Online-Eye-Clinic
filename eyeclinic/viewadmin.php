<?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/header.php");
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
          <h2>View Admin</h2>
          <form id="form3" name="form1" method="post" action="">
            <p>
              <label for="fname" class="left"> </label>
              <label for="patname">Search Name</label>
            <input type="text" name="patname" id="patname" />
            <label for="group">By</label>
<select name="group" id="group">
</select>
            Search
            <input type="submit" name="search" id="search" value="Search" />
            </p>
            <table width="458" border="1">
          <tr>
                <td width="155">Admin Name</td>
                <td width="146">Branch</td>
                <td width="135">Contact No</td>
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
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
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