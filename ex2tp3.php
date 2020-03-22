<?php
   $f=fopen("fich.txt","r");
   while(!feof($f))
   {
   	$ligne=fgets($f);
   	  if(!empty($ligne))
   	  {
   	  	$T=explode("|",$ligne);
   	  	for($i=0;$i<6;$i++)
   	  	 print_r($T[$i]);
   	  	 echo "<br>";

   	  }
   }
   fclose($f);
   ?>