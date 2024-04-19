<?php include("backend.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud operation</title>
    <link rel="stylesheet"type="text/css"href="form.css">
    <style>
        body{
            background-image: url("login_background.jpg")
        }
        .container{
            background: #000;
            color: #fff;
        }
    </style>
    
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="title">
            Registration form
        </div>
        <div class="form">
        <div class="input">
        <label for="">Upload Image</label>
        <input type="file" name="uploadfile" style="width: 100%;">
        </div>
        <div class="input">
        <label for="">Name</label>
        <input type="text" class="input"name="fname" required>
        </div>
        <div class="input">
            <label for="">Contact Number</label>
            <input type="mobile" class="input" name="mobile" required >
        </div>
        <div class="input">
        <label for="">Email</label>
        <input type="email" class="input"name="email" required>
        </div>
        <div class="input">
        <label for="">Linkdin id</label>
        <input type="email" class="input"name="linked">
        </div>
        <div class="input">
        <label for="">First Company Name</label>
        <input type="text" class="input"name="fcompany" required>
        </div>
        <div class="input">
        <label for="">Package</label>
        <input type="text" class="input"name="package" required>
        </div>
        <!-- <div class="input">
            <label for="">CV</label>
            <input type="file" class="input" name="cv" required>
        </div> -->
        <div class="input">
        <label for="">Placement</label>
        <select name="placement" id="" required>
            <option value="not selected">Select</option>
            <option value="off campus">off campus</option>
            <option value="on campus">On campus</option>
         </select>
        </div>
        
        <div class="input">
        <label for="" class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
        </label>
        <p>Agree to terms and conditions</p>
        </div>
        
        <div class="input">
        <input type="submit" value="register" class="btn" name="register">
        </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
    if($_POST['register'])
    
    {
       $filename = $_FILES["uploadfile"]["name"]; 
       $tempname = $_FILES["uploadfile"]["tmp_name"];
       $folder = "images/".$filename;
       move_uploaded_file($tempname, $folder);    
        
       $fname     = $_POST['fname'];
       $mobile    =    $_POST['mobile'];
       $email     = $_POST['email'];
       $linked    = $_POST['linked'];
       $fcompany  = $_POST['fcompany'];
       $package   = $_POST['package']; 
       $placement = $_POST['placement'];

     
    //    $query = "INSERT INTO FORM VALUES('$folder','$fname','$mobile','$email','$linked','$fcompany','$package','$placement')";
       $result=mysqli_query($conn ,"INSERT INTO FORM VALUES('$folder','$fname','$mobile','$email','$linked','$fcompany','$package','$placement')");
    //    $data = mysqli_query($conn,$query);

       if($result)
       {
          echo "data inserted into database";
       }
       else
       {
          echo "failed";
       }
    
    }
?>