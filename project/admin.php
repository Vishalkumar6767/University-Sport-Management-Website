<?php
require_once('Registration.php');
$sql = "SELECT*FROM reg";
$result = mysqli_query($conn,$sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    nav{
    width: 100%;
}
nav, ul li{
    list-style: none;
    float: left;
    padding-left: 20px;
    background-color: aliceblue;
    fill-opacity: 2.5;
    padding-right: 40px;
}
ul li{
   
    text-decoration: none;
}
.logo{
    background-color: aliceblue;
    font-display: none;
}
.das{
 margin: 30px 20px 10px 20px;
 
}
table{
    border: red 2px;
 border-radius:  5px;
 border-style: borderbox 2px;
 

}
.heading tr th{
    margin: 10 px;
    padding: 5px 5px 5px ;
    color: red;
}
.cont{
    text-align: center;

}
table thead tbody tr td :hover{
    background-color: skyblue;
    color: yellow;
}

</style>
<body>
   <nav><ul>
    <li class="logo"><img src="LOGO1.png" alt="" width="200px" height="auto"></li>
    <li><a href="http://" target="_blank" rel="noopener noreferrer">Home</a></li>
    <li>Gallary</li>
    <li>Events</li>
    <li>Form</li>
    <li>Attendance</li>
    <li>News</li>
    
   </ul></nav>


   <section class="dashboard">
    <div class="container dashboard_container">
        <main>
            <section class="das">
                <h3 style="text-align:center ;">STUDENT DETAIL LIST</h3>
                <table>
                    <thead class="heading">
                        <tr>
                            <th >NAME</th>
                            <th>GR NO</th>
                            <th>ENROLLMENT_NO</th>
                            <th>Date of Birth</th>
                            <th>Sports</th>
                            <th>Department</th>
                            <th>Email</th>
                            
                            

                        </tr>
                    </thead>

                    <tbody class="cont">
                        <?php
                        while($row = mysqli_fetch_assoc($result)){

                            echo '<tr>
                                <td>'.$row['Name'].'</td>
                                <td>'.$row['GRNO'].'</td>
                                <td>'.$row['Enrol'].'</td>
                                <td>'.$row['DOB'].'</td>
                                <td>'.$row['sports'].'</td>
                                <td>'.$row['dept'].'</td>
                                <td>'.$row['Email'].'</td>
                               <td></td>
                                
                            </tr>';
                        }
?>

                    </tbody>
                </table>
            </section>
        </main>
    </div>
   </section>

    
</body>
</html>