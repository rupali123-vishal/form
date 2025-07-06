<?php

if(isset($_POST['name'])){

  $sever="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($sever,$username,$password);

  if($con){
    die("connection to this database failed due to". 
    mysqli_connect_error());
  }
  //echo "success connecting to the dp";


  $name= s_post['name'];
  $gender=s_post['gender'];
  $age=s_post['age'];
  $email=s_post['email'];
  $phone=s_post['phone'];
  $desc=s_post['either'];
 $sql=" INSERT INTO 'trip'.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `either`, `dd`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
 //echo $sql;

 if($con->query(sql)==true){
   // echo "successfully inserted";

 }else{
    echo "ERROR:$sql <br> $con->error";
 }

$con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel from</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="rupa.jpeg" alt="amruthvahini jpeg">
    <div class="container">
        <h1>Welcome to Amruthvahini US Trip from</h1>
        <p>Enter your details to confirm</p>
        
         <p class="submitMSG">Thanks for submitting your form. We are happy to see you joninig for the us trip</p>
       
        <form action="index.php" method="post">
            <input type="text" name="name" id="name"placeholder="Enter your name">
            <input type="text" name="age" id="age"placeholder="Enter your age">
            <input type="text" name="gender" id="gender"placeholder="Enter your gender">
            <input type="text" name="email" id="email"placeholder="Enter your email">
            <input type="text" name="phone" id="phone"placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any information here"></textarea>
            <button class="btn">submit</button>
            <button class="btn">reset</button>
        </form>

    </div>/
    <script src="index.js"></script>
   <!-- INSERT INTO `trip` (`srno`, `name`, `age`, `gender`, `email`, `phone`, `either`, `dd`) VALUES ('1', 'text name', '23', 'male', 'this@this.com', '9999999999', 'this is my first php myadmin message', current_timestamp()); -->
    <body>
</html>