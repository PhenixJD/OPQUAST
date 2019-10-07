<?php
include "glossaire.php";
?>

<!DOCTYPE html>
 <html>
   <head>
   <meta charset="utf-8">
   <title></title>
   </head>
   <body>
   	<input type="button" onclick='window.location.reload(false)' value="Rafraichir"/>
   	<br><br>
   	<?php
   	$index = rand(0, count($glossaire) - 1);
   	echo $glossaire[$index]['title'].':'.'<br><br>';
   	echo $glossaire[$index]['description'];
   	?>
   	<br>
   	<!-- <a href="exopq.php">next</a> -->

   </body>
 </html>