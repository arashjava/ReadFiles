<html>
	
	<body>
		<form action="openfile.php">
		<br>
		<h2 ><center> Opening diffrent file types in browser</center></h2>
		<p ><center> File types:</center><br>
			<center><select name="select" onchange="this.form.submit()">
				<option value="" disabled selected> -- select file type --</option>
				<option value="pdf" > PDF file</option>
				<option value="docx" > docx file</option>
				<option value="dot" > dot file</option>
				<option value="image" > Image file</option>
				<option value="text" > Text file</option>
			</select></center>
			<?php
			
				if (isset($_GET["select"])){
					if ($_GET["select"] =="pdf") { echo "<input name='showfiletype' id= 'showfiletype' type='file' accept='.pdf' onchange >";
												 $filechosen=$_GET["showfiletype"];
												  echo "file is".$filechosen;
												 }
					if ($_GET["select"] =="docx") { echo "<input name='showfiletype' type='file' accept='.docx'>";}
					if ($_GET["select"] =="dot") { echo "<input name='showfiletype' type='file' accept='.dot'>";}
					if ($_GET["select"] =="image") { echo "<input name='showfiletype' type='file' accept='image/*'>";}
					if ($_GET["select"] =="text") { echo "<input name='showfiletype' type='file' accept='.txt'>";}
				}

		    ?>
		</p>
		<div></div>
		</form>
	</body>
	
</html>