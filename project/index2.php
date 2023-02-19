<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        require_once('Registration.php');
        $result = mysqli_query($conn,"SELECT * FROM reg WHERE GRNO='" . $_POST["user_name"] . "' and password1 = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["GRNO"] = $row['GRNO'];
        $_SESSION["Name"] = $row['Name'];

        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["GRNO"])) {
    header("Location:home.html");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
    <div style = "width: 100%;height: 100vh;display: flex; align-items: center;justify-content: center;">

    
<form style = "background :blue; width :500px ; height:250PX; justify-content:center; " name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</div>
</body>