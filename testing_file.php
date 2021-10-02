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
<!doctype html>
 <html lang="en">

 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>contactus</title>
 </head>

<body>
    <div class="container">
    <h1>Contact-Us</h1>
    <p>Fill the form</p>
    
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" name="username" id="user" value="" class="form-control">
                <div id="NameHelp" class="form-text">We'll never share your details with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" id="emails" value="" class="form-control" size="30" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputMobileNumber1" class="form-label">MobileNumber</label>
                <input type="text" name="mob" id="mobiles" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter Your Message</label>
                <br>
                <textarea name="message" id="message" cols="177" rows="10" placeholder="Enter any other information here" value="" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="btn_submit" onclick="return checknull();" value="Submit">
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <!-- INSERT INTO `contactus` (`sno`, `Name`, `Email`, `MobileNumber`, `Textarea`) VALUES ('3', 'Piyush', 'this@this.com', '2575689432', 'hii'); -->
</body>

 </html>
 <script>

    function checknull(){
        //alert("sdfgsdf");
        var mess="";
        if(document.getElementById('user').value=='')
        {
           //alert("sdfsdf");
            mess+="Enter name \n";
            //alert()
        }
        if(document.getElementById('emails').value=='')
        {
            mess+="Email \n";
        }
        if(document.getElementById('mobiles').value=='')
        {
            mess+="Mobile \n";
        }   
            if(mess)
            {
                alert("Required \n"+mess);
                return false;
            }
            else
            {
                return true;
            }
    }
 </script>