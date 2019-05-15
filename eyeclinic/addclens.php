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
        <h1>Add doctors</h1>
        <script type="application/javascript" >
function validation()
{
	if(document.form1.name.value == "")
	{
		alert("Enter the Name.");
		document.form2.name.focus();
		return false;
	}
	if(document.form1.color.value == "")
	{
		alert("Enter the Color.");
		document.form2.color.focus();
		return false;
	}
	if(document.form1.cost.value == "")
	{
		alert("Enter the Cost.");
		document.form2.cost.focus();
		return false;
	}
	if(document.form1.bname.value=="")
	{
		alert("Select the Branch.");
		return false;
	}
	
}
</script>

        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form2" onsubmit="return validation()">
          <table width="644" border="0">
            <tr>
              <td height="34"><label for="name" class="left">Name</label></td>
              <td><input name="name" class="right" type="text" id="name" size="50" /></td>
            </tr>
            <tr>
              <td height="33"><label class="left" for="doclname2">Color</label></td>
              <td><input class="right" name="color" type="text" id="color" size="50" /></td>
            </tr>
            <tr>
              <td height="30"><label for="loginid2" class="left">Cost</label></td>
              <td><input name="cost" type="text" class="right" id="cost" size="50" /></td>
            </tr>
            <tr>
              <td height="31"><label for="password2" class="left">Branch Name</label></td>
              <td><label for="bname"></label>
                <select name="bname" id="bname">
              </select></td>
            </tr>
            <tr>
              <td height="32"><label class="left" for="cpassword2">Quantity</label></td>
              <td><input name="qty" class="right" type="text" id="qty" size="50" /></td>
            </tr>
            <tr>
              <td height="32">Image</td>
              <td><label for="image"></label>
              <input type="file" name="image" id="image" /></td>
            </tr>
            <tr>
              <td height="36" colspan="2" align="center"><p>
                <input type="submit" name="add" id="add" value="Add Contact Lens" />
              </p></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="651" border="1">
            <tr>
              <td width="153">Name</td>
              <td width="94">Color</td>
              <td width="88">Cost</td>
              <td width="135">Branch Name</td>
              <td width="69">Quantity</td>
              <td width="72">Image</td>
            </tr>
           
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
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
    </div> <!-- END of templatemo_main -->
    <?php /* Download all student projects in www.studentprojectguide.com */ 
include("includes/footer.php");
?>