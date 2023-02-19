<?php

?>


<?php
$con= new mysqli("localhost","root","","test");
$name = $_POST['search'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM reg
WHERE Name LIKE '%{$Name1}%' OR Gr_no LIKE '%{$Grno}%'");
while ($row = mysqli_fetch_array($result))
{
echo $row['Name'] . " " . $row['Gr_no'];
echo "<br>";
}
mysqli_close($con);
?>
