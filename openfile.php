<html>
<body>
	<form action="" method="post">
				<h2 ><center> Choose the file to show:</center></h2>

			   <?php
			      if ($_GET['select'] =="pdf") { echo "<center><input name='showfile' id= 'showfile' type='file' accept='.pdf' ></center>";  }
			      if ($_GET['select'] =="docx") { echo "<center><input name='showfile' id= 'showfile' type='file' accept='.docx' ></center>"; }
			      if ($_GET['select'] =="image") { echo "<center><input name='showfile' id= 'showfile' type='file' accept='image/*' ></center>"; }
			      if ($_GET['select'] =="odt") { echo "<center><input name='showfile' id= 'showfile' type='file' accept='.odt' ></center>"; }
			      if ($_GET['select'] =="text") { echo "<center><input name='showfile' id= 'showfile' type='file' accept='.txt' ></center>"; }
			   ?>
		<p><center><input type="submit" value="Show File"/>
		<div id="button"><a href="index.html">Back to main page</a></div></center></p>
	</form>
<?php
		if (isset($_POST["showfile"])) {
			 $file1= $_POST["showfile"];
			 $prog="read".$_GET['select'].".php";
			 include $prog;
		}
				  
?>
</body>
</html>