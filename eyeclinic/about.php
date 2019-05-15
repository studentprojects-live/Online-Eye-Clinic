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
          <h2>Add Test Results</h2>
           <form id="form" name="form1" method="post" action="">
           
           <p>
              <label for="fname2" class="left"> </label>
           </p>
           
           <table width="604" border="0">
             <tr>
               <td>Appointment ID               </td>
               <td>&nbsp;</td>
               <td><input type="text" name="appid" id="appid" /></td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
                <td width="131" colspan="2"><label for="patname">Patient Name:</label></td>
                <td width="165"><input type="text" name="patname" id="patname" /></td>
                <td width="133">Doctor Name:</td>
                <td width="157"><label for="docname"></label>
                <input type="text" name="patname2" id="patname2" /></td>
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
              <td colspan="2">&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">Remarks:</td>
                <td colspan="3"><label for="remarks"></label>
                <textarea name="remarks" id="remarks" cols="45" rows="5"></textarea></td>
            </tr>
            
            <tr>
                <td colspan="2">Test Fee:</td>
                <td colspan="3"><label for="testfee"></label>
                <input type="text" name="testfee" id="testfee" /></td>
            </tr>
           
            <tr>
                <td colspan="2">Consultation Fee:</td>
                <td colspan="3"><input type="text" name="consultationfee" id="consultationfee" /></td>
            </tr>

            <tr>
                <td colspan="2">Total</td>
                <td colspan="3"><input type="text" name="total" id="total" /></td>
            </tr>
              
            <tr>
                <td colspan="5" align="center"><input type="submit" name="bill" id="bill" value="Generate Bill" /></td>
            </tr>
          
         </table>
            
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