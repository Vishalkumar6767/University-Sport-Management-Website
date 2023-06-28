<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 else
 {
   echo '<script type="text/JavaScript"> 
   alert("Connection Successful!");
   </script>';
  }

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $Name  =$_POST['Name'];
     $DOB =$_POST['Date_of_Birth'];
     $Gender  =$_POST['Gender'];
     $Grno = $_POST['Gr_no'];
     $En_no =$_POST['En_no'];
     $Mobile_no = $_POST['Mobile_no'];
     $Sports = $_POST['Sports'];
     $Department = $_POST['Department'];
     $Sem = $_POST['Semester'];
     $Email = $_POST['Email'];
     $password  =$_POST['password'];
     $sql = "INSERT INTO reg1 (Name1, DOB, Gender, Grno, En_no, Mobile_no, Sports,Department , Sem, Email, password1) VALUES ('$Name', '$DOB', '$Gender', '$Grno', '$En_no', '$Mobile_no', '$Sports', '$Department', '$Sem', '$Email', '$password')";
     
    // $sql = "INSERT INTO reg1(Name, DOB, Gender, GRNO, Enrol, mobno, sports, dept, sem, Email, password1) VALUES(null, '$Name', '$DOB', '$Gender', '$Grno', '$En_no', '$Mobile_no', '$Sports', '$Department', '$Sem', '$Email', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script type="text/JavaScript"> 
        alert("Data entered successful!");
        </script>';
       // include("Admin.php");
    }
    
    
 }
 
?>