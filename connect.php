<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
   

// $Reset = $_POST['Reset'];
// $Submit = $_Submit['Submit'];

// DATA BASE COONECTION
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}

$sql = "INSERT INTO users (pname,PDateofBirth, pgender, Gr_no, En_no, mobile_no, Sports, Department, Semester, Email, p_pass   )
VALUES ('".$_GET['Name']."','".$_GET['Date Of Birth']."','".$_GET['Gender']."','".$_GET['Gr_no']."','".$_GET['En_no']."','".$_GET['mobile_no']."','".$_GET['Sports']."','".$_GET['Department']."','".$_GET['Semester']."','".$_GET['Email']."','".$_GET['password']."')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  $conn->close();
  
  header("location:selectAll.php");

?>