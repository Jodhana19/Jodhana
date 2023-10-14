<?php

include('Db.php');

include('sendEmail.php');

 


$email = $_POST['email'];

$password = $_POST['password'];

$code = rand();
$sql1 = "INSERT INTO `verification` (`id`,`email`,`name`,`code`,`is_verified`) VALUES (null, '$email','$password','$code',0)";
// echo $sql1;
// $sql = "INSERT INTO `verification`  VALUES (NULL, '$password', '$email', '$code')";

$result = mysqli_query($conn,$sql1);

if ($result) {

    echo "Registration successfull. Please verify your email.";

    $sendMl->send($code,$email);
   

  }


 

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <button type="submit">submit</button>
    </form>
</body>
</html>


