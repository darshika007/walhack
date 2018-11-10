<?php
$var1=$_GET['PKid'];

$query="update query set faq=1 where id=".$var1;
mysqli_query($db,$query) or die(mysqli_error($select_db));
header('location:query.php');

 ?>
