<?php
if(!isset($_GET['GRNO']) || !ctype_digit($_GET['GRNO'])){
header("location:php/admin.php");
exit();
}

require_once('php/Registration.php');

$sql = "DELETE FROM reg WHERE userid ='".$_GET['GRNO']."'";

if(mysqli_query($conn,$sql)){
echo "deleted table successfully";
}else{
echo "error in deleting record".mysqli_connect_error();
}
header("location:browseUser.php");
mysqli_close($conn);
?>
