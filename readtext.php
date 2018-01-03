<?php
?>
<html>
<head><title>PHP says hello</title></head>
<body>
<b>
<?php

$file = fopen($file1, "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgets($file). "<br>";
  }
fclose($file);

?>


</b>
</body>
</html>