<?php
//
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if($_POST['btn_submit']=='Submit')
{

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(); 
    //$mail->SMTPDebug = true;   
    $mail->SMTPSecure = 'ssl';
    //            $mail->SMTPSecure = 'tls';                                        //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'piyushagarwalplay@gmail.com';                     //SMTP username
    $mail->Password   = 'piyushagarwal2575669';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('piyushagarwalplay@gmail.com');
    $mail->addAddress('piyushagarwalplay@gmail.com');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $content='';
    $content.='<table><tr><td>Name &nbsp;</td><td>'.$_POST['username'].'</td></tr>';
    $content.='<tr><td>Email &nbsp;</td><td>'.$_POST['email'].'</td></tr>';
    $content.='<tr><td>Mobile &nbsp;</td><td>'.$_POST['mob'].'</td></tr>';
    $content.='<tr><td>Message &nbsp;</td><td>'.$_POST['message'].'</td></tr>';
    $content.='</table>';
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//

   /*$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "contactus";
   $conn = mysqli_connect($servername, $username, $password,$dbname);

       if(!$conn)
       {
        die("Connection to this database is failed due to".mysqli_connect_error());
       }
    //    echo "Success connecting to the db";
    */
        if($_POST['username']!='')
        {
            $name = $_POST['username'];
            $Email = $_POST['email'];
            $mobilenumber = $_POST['mob'];
            $message = $_POST['message'];
           // $sql="INSERT INTO `contactus`(`Name`, `Email`, `MobileNumber`, `Textarea`) VALUES('".$name."', '".$Email."', '".$mobilenumber."', '".$message."')";
            // $sql = "INSERT INTO `contactus`(`name`, `Email`, `mobilenumber`, `message`) VALUES('".$name."', '".$Email."', '".$mobilenumber."', '".$message."')";
            //echo $sql;

            /*if($conn->query($sql) == true)
            {
                echo "Successfully inserted";
            }
            else
            {
                echo "ERROR: $sql <br> $conn->error";
            }*/
        }

   //$conn->close();
}
?>