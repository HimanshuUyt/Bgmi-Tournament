<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGMI TOURNAMENT</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script>
        function checkdata()
        {
            var bgmiusername  = document.bgmiform.bgmiusername.value;
            var bgmiuid  = document.bgmiform.bgmiuid.value;
            var phoneno  = document.bgmiform.phoneno.value;

            if(bgmiusername==null || bgmiusername=="")
            {
                alert("BGMI USERNAME CAN'T BE BLANK !!!");
            }
            else if(bgmiuid==null || bgmiuid=="" || bgmiuid.length<10)
            {
                alert("BGMI UID CANT'T BE BLANK OR BGMI UID MUST BE LESS THAN 10 DIGIT !!!");
            }
            else if(phoneno==null || phoneno=="" || phoneno.length<10)
            {
                alert("PHONE NUMBER CANT'T BE BLANK OR PHONE NUMBER MUST BE LESS THAN 10 DIGIT !!!");
            }

        }
    </script>
</head>
<body class="main">
    <div class="container">
        <H1 style="text-align: center;"><span style="color: green;">BGMI</span><span style="color: orange;"> TOURNAMENT</span></H1>

        <form action="" method="post" name="bgmiform">
            <div class="form-group">  
                <label for="bgmiusername" style="color: white;">BGMI USERNAME:</label>  
                <input type="text" name="bgmiusername" class="form-control" placeholder="Enter Your BGMI USERNAME!!!" size="30"> 
            </div>  

            <div class="form-group">  
                <label for="bgmiuid" style="color: white;">BGMI UID:</label>
                <input type="text" name="bgmiuid" class="form-control" placeholder="Enter Your BGMI UID!!!" size="30">  
            </div>

            <div class="form-group">  
                <label for="phoneno" style="color: white;">Mobile No:</label>
                <input type="text" name="phoneno" class="form-control" placeholder="Enter Your Phone Number !!!" size="30">  
            </div>

            <div class="form-group">
                <label for="description" style="color: white;">Description:</label>
                <textarea name="description" placeholder="Any Question Ask Me !!!" rows="5" cols="25" class="form-control"></textarea>
            </div>

            <div class="img">
                <img src="img/gpay icon.png" alt="gpayimg" width="70px" height="70px"><span style="color: white;"> Pay Entry Fee Rs:50 On this Number : </span><span size="20px" style="color: white;">9328097349</span> 
            </div>

            <div class="img1">
                <img src="img/whatsapp.png" alt="whatsappimg" width="70px" height="70px"><span style="color: white;"> Send ScreenShort On this Number : </span><span size="20px" style="color: white;">9157711451</span>
            </div>

            <div>
                <a href="bgmithanks.html" class="btn btn-success btn-block" onclick="checkdata()" name="submit">Submit</a>
            </div>
        </form>
    </div> 
</html>