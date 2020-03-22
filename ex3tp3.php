<?php
 echo "<h1 align=center>Centrale d'achats</h1>";
 echo "<h3>Commande clients</h3>";
 echo "<table border=2>";
   	  	 echo '<tr bgcolor="#6495ED" >';
   	  	 echo '<th 3l>Numéro de commande</th>';
   	  	 echo "<th>Numéro de client</th>";
   	  	 echo "<th>Date de commande</th>";
   	  	 echo "<th>Désignation article</th>";
   	  	 echo "<th> Quantité (Pal)</th>";
   	  	 echo "<th> Prix unitaire (Dh)</th>";
   	  	 echo "<th> Date de livraison</th> ";
   	  	 echo " <th> Adresse client </th></tr>";
   $f=fopen("fich.txt","r");
   while(!feof($f))
   {
   	$ligne=fgets($f);
   	  if(!empty($ligne))
   	  {
   	  	$T=explode("|",$ligne);
          echo "<tr>";
          echo "<td style=\"padding: 6px;\">$T[0]</td>";
          echo "<td>$T[1]</td>";
          echo "<td>$T[2]</td>";
          echo "<td>$T[3]</td>";
          echo "<td>$T[4]</td>";
          echo "<td>$T[5]</td>";
          echo "<td>$T[2]</td>";
          echo "<td>$T[6]</td></tr>";
   	  }
   }
   fclose($f);
   echo "</table>";
?>