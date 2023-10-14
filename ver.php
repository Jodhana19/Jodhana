<!DOCTYPE html>
<html lang="en">

<?php
include('Db.php');

include('sendEmail.php');

 


$email = $_POST['email'];

$code = rand();

$sql1 = "INSERT INTO `user` (`id`,`email`,`code`,`is_verified`) VALUES (null, '$email','$code',0)";

// echo $sql1;
// $sql = "INSERT INTO `verification`  VALUES (NULL, '$password', '$email', '$code')";

$result = mysqli_query($conn,$sql1);

if ($result) {

    // echo "Registration successfull. Please verify your email.";

    $sendMl->send($code,$email);

  }
 

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="stye.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-[0px] m-[0px]">

    
    <div class="video-container ">
        <video autoplay muted loop>
            <source src="Camel with cameleer walking in desert on sunset(4K_HD) (1).mp4" type="video/mp4" />
        </video>
        <div class="h-[100%] w-[100vw]  lg:w-[65vw]  md:w-[75vw] font-black  bg-slate-700  opacity-60 min-h-[100px] pt-7  pb-0   md:skew-x-[-9deg] sm: skew-x-[0deg]  before: origin-top-right ">
            <div class="md:w-[250px] w-[160px] mt-8 h-[150px] md:h-[200px]  m-auto md:-skew-x-[-9deg]"><img src="20231012_173722.png" class="w-[100%] h-[100%] " alt=""></div>
            <div class="mx-[20%] mt-8 text-white font-normal text-2xl text-center tracking-wider md:skew-x-[9deg] ">
                <p class="text-center my-4">We have sent you an Email, please Verify Your Email</p>
               
                <div class="w-[40%] md:w-[20%] my-5 mx-auto text-white">
                    <img src="hand.png" alt="">
                </div>

            </div>
        </div>
        <!-- <div class="w-[100px] h-[100px] border-2 border-red-900 m-5 before: -skew-lg-x-[9deg] before: or "></div> -->
        <div class=" md:flex-col flex place-items-end fixed top-[85%] md:top-[300px] mx-[24.5%] md:mx-0 md:right-10  py-5 z-10">
            <div class="hover:bg-green-200 bg-gray-600 w-[40px] text-center py-1 rounded-xl  text-white text-4xl md:m-2  m-4" > <a href="https://twitter.com/JodhanaShop" target="_blank"><i
                    class="fab fa-twitter"></i></a></div>
            <div class="hover:bg-green-200 bg-gray-600 w-[40px] text-center py-1 rounded-xl  text-white text-4xl md:m-2  m-4" > <a href="https://www.facebook.com/profile.php?id=61552467596452" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></div>
            <div class="hover:bg-green-200 bg-gray-600 w-[40px] text-center py-1 rounded-xl  text-white text-4xl md:m-2  m-4" ><a href="https://www.instagram.com/jodhanashop/" target="_blank"><i
                    class="fab fa-instagram" ></i></a></div>
        </div>
    </div>
   
</body>

</html>