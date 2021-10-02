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
    <?php include 'pure.php';?>

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