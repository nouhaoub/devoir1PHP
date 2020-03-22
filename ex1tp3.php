<?php
$listpic = array('fruit.jpg','legume1.jpg','legume5.jpg','legume3.jpg','legume6.jpg','legume2.jpg',);
shuffle($listpic);
echo'<br><h1 align="center"><b>Délice des Fruits & légumes</b></h1><br><br>';
echo '<table style='position:relative;left:60px;>';
echo '<tr">';

for($i=0;$i<=3;$i++)
{
	 echo '<td><div  class="image">';
    echo '<img  src= " ' .$listpic[$i].'"   style="width:300px;height:300px;margin-right:100px;>';
    echo '</div></td>';
}
echo "</tr></table>";
?>