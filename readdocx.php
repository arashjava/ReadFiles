<?php 
$file="RefundLetter";
$filein=$file.".docx";
$fileout=$file.".txt";

shell_exec("python2 docx2txt.py '".$filein."' > '".$fileout."'");     //  sudo chmod a+x docx2txt.py    everybody can run it
//////////////////////////////////////////////////////////////////////////////   sudo chmod 777 .



$file = fopen($fileout, "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
     echo fgets($file). "<br>";
  }
fclose($file); 
shell_exec("rm -R RefundLetter.txt") ;    //  remove the text files from disk


?>


