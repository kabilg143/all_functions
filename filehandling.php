<html>
    <body>
<?php

$myfile=fopen("file.txt","r+") or die("unable to open the file");

 //echo fread($myfile,filesize("file.txt"));

//echo fgets($myfile);

//echo fgetc($myfile);



$txt="\n sql = structured query language";

fwrite($myfile,$txt);

 while(!feof($myfile))
{
   echo fgets($myfile)."<br>";
}


fclose($myfile);


?>

</body>
</html>