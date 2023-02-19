
<?php
if(!isset($_GET['userid']) || !ctype_digit($_GET['userid'])){
header("location:index.html");
exit();
}
require_once('DB_Connection.php');
$sql = "SELECT * FROM user WHERE userid =".$_GET['userid'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER'S DETAILS</title>
    <link rel="stylesheet" href="./register.css">
</head>
<body>
    <main>
        <div>
        <section class="container">
            <hr>
            <h1 class="header">UPDATE </h2><hr>
            <p>Update your Details.It's free and only takes a minute.</p>
                <form action="UpdateUser.php" method="POST">
                        <input type="text" name="txtfnm" class="name" placeholder="First Name" value = "<?php echo 
$row["firstname"];?>">
                        <input type="hidden" name="hidden" class="name" placeholder="First Name" value = "<?php echo 
$row["userid"];?>">
        
                        <input type="text" name="txtlnm" class="name" placeholder="Last Name" value = "<?php echo 
$row["lastname"];?>"><br><br>
        
                        <input type="email" name="txtmail" 
                        class="box" placeholder="Email" id="" value = "<?php echo 
$row["email"];?>"><br><br>

                        <input type="password" name="txtpwd" class="box" placeholder="Password" value = "<?php echo 
$row["pwd"];?>">
                        <br><br>

                        <!-- <input type="password" name="txtcpwd" class="box" placeholder="Confirm Password"><br><br> -->
                        <!-- <button class="btn" >Register Now</button> -->
                        <input type="submit" value="Update User" class="btn" />
                    </form>
        </section>
    </div>
    </main>
</body>
</html>