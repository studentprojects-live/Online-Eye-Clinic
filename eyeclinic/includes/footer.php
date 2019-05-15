<center>
    <div id="templatemo_footer">
    	<p>
			 <?php /* Download all student projects in www.studentprojectguide.com */ 
				if($_SESSION["logtype"] =="Doctor")
				{
				?>
                 <a href="dochome.php"  >Doctor's Home</a>
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else if($_SESSION["logtype"] =="Administrator")
				{
				?>
                 <a href="adminhome.php" >Admin's Home</a>
                  	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else if($_SESSION["logtype"] =="Patient")
				{
				?>
                <a href="patienthome.php"  >Patient's Home</a>
              	<?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				else
				{
				?>
               <a href="index.php"  >Home</a>
                <?php /* Download all student projects in www.studentprojectguide.com */ 
				}
				?> | <a href="products.php">Products</a> | <a href="about.html">About</a>| <a href="contact.php">Contact</a>| <a href="doclogin.php">
            Doctor/Admin Login</a>
		</p>

    	Copyright © <a href="https://www.studentprojectguide.com">StudentProjectGuide</a> | Bangalore
</div>
</center>
</body>
</html>