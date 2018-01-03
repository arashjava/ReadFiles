
<html>
<head><title>PHP says hello</title></head>
<body>
<b>
<?php

//	$file1="vekalat.pdf";

	header('Content-type:application/pdf');
	header('Content-Description:inline; filename="'.$file1.'"');
	header('Content-Transfer-Encoding:binary');
	header('Accept-ranges:bytes');
	@readfile($file1);
	


fclose($myfile);
?>
</b>
</body>
</html>