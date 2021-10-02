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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Piyush Agarwal</title>
    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="Pa.png">
<link rel="icon" type="image/png" sizes="32x32" href="Pa.png">
<link rel="icon" type="image/png" sizes="16x16" href="Pa.png">
<link rel="manifest" href="Pa.png">
<link rel="mask-icon" href="Pa.png" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    
    <style>
    footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
        body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
 </style>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html"> <img src="Piyush Agarwal.png" height="50px" width="200" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/contact.html">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Detail
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="gaming.html">Gaming</a></li>
                  <li><a class="dropdown-item" href="projects.html">Projects</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="hobbies.html">Hobbies</a></li>
                </ul>
              </li>
            </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- back to top button -->
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
     <script>
         //Get the button
         var mybutton = document.getElementById("myBtn");
         
         // When the user scrolls down 20px from the top of the document, show the button
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             mybutton.style.display = "block";
           } else {
             mybutton.style.display = "none";
           }
         }
         
         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
         }
         </script>
    
        <img src="Contact-us.jpg" class="img-fluid" alt="...">
    
    <!-- google form -->
  <div class="container">
    <!-- <div class="row">
      <div class="col">
        <div class="text-center">
         <img src="" class="rounded" alt="..." width="200px" height="200px">
        </div>
      </div> -->
    <div class="col order-5 my-3">
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
    <!-- <div class="col order-1">
        <div class="text-center">
          <img src="p.png" class="rounded" alt="...">
        </div>
      </div> -->
  </div>
  </div>
    
    <!--social media buttons-->
  
       <p style="color: black;">Mail:<a href="mailto:piyushagarwalplay@gmail.com" target="blank"> <img src="Mail.png"></a>
         </p>   

<footer>
        <p>© 2020–2021 Piyush Agarwal, Inc· | Design & Made by- Piyush Agrawal <a href="#">Privacy</a> · <a href="#">Terms</a></p>
       <a href="https://www.instagram.com/piyushagarwal34/"><img src="Instagram_icon.png.webp" alt="Instagram" style="width:42px;height:42px;"></a> 
       <a href="https://www.youtube.com/channel/UCIIJomv7KbeTYM4LEoKsSng"><img src="Youtube1.png" alt="YouTube" style="width:42px;height:42px;"></a>   
       <a href="https://www.facebook.com/people/Piyush-Agrawal/100009732365283"><img src="1260673.png" alt="Facebook" style="width:42px;height:42px;"></a>
       <a href="https://www.linkedin.com/in/piyush-agarwal-85b0301ba/"><img src="link.png" alt="Linkedin" style="width:42px;height:42px;"></a>
       <a href="https://twitter.com/piyushagarwalpl"><img src="Twitter.png" alt="Twitter" style="width:42px;height:42px;"></a>     
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
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
