

 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    session_start();
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD']=='POST')
 {
    
     
     $user_name =$_POST['Username'];
     $password  =$_POST['password1'];
     
    $sql = "SELECT *  FROM `reg1` where Grno= '$user_name' and password1='$password' ";
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
    if(is_array($row)) {
        $_SESSION["Grno"] = $row['Grno'];
        $_SESSION["password1"] = $row['password'];

        } else {
         $message = "Invalid Username or Password!";
        }
  
    
        if($count>0)
    {
    
        header("location:subindex.html");
    }else{
        echo '<script type="text/JavaScript"> 
   alert("Please Enter Correct username and password!");
   </script>';
      
    }
    
    
 }
    ?>






<!-- <?php
error_reporting(0);
include('connect.php');
$Username = $_POST['Username'];
$password1 = $_POST['password1'];

 echo $sql = "select * from  'reg1' where Grno = '$Username' and password1 ='$password1'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count ==1){
    echo " <h1><center> Login successfull</center></h1>";
}
else{
    echo "<h1><center> login failed!br
    invalid username or password</center></h1>";
}



?> -->