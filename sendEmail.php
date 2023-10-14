<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

    class sendEmail

    {

        

        function send($code,$email)

        {

 

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            // $mail->Host = 'smtp.mailtrap.io'; // SMTP host as gmail 
            $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            $mail->Username = 'jodhanashop19@gmail.com';  // sender gmail host              

            $mail->Password = 'aghyycogzctacxef'; // sender gmail host password                          

            $mail->SMTPSecure = 'tls';  // for encrypted connection                           
            // $mail->SMTPSecure = 'ssl';  // for encrypted connection                           

            $mail->Port = 587;   // port for SMTP     
            // $mail->Port = 465;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('jodhanashop19@gmail.com', "Jodhana Shop"); // sender's email and name

            $mail->addAddress($email, "Receiver");  // receiver's email and name

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification';

            $mail->Body    = '
            Welcome to The Jodhana Shop, Please click this button to verify your account: <a href=http://localhost/Jodhana/Welcome.php?code='.$code.'>Verify</a>' ;
            
            // $mail->AddAttachment('logo.png');

                // echo $email;

            $mail->send();

            // echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            echo $email;
        }

        }

    }

$sendMl = new sendEmail();

?>