<?php

if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  $On = $_POST["suggest"];

  
    if (preg_match("/([1-4]+[ ]+[O]+[n])/", $On))
    {  
      
    $data = "Gear "  . $On;
    print $data;
    $fname = "wearable.txt";
$file = fopen("upload/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);

}
if(preg_match("/([1-4]+[ ]+[O]+[f]+[f])/", $On))
{ 
$data = "Gear "  . $On;
print $data;
$fname = "wearable.txt";
$file = fopen("upload/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);
}

   
}










?>