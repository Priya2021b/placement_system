<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)

        }
       
        .col{
            background-color: rgb(219,255,255);
            color:green;
            margin:0 70px ;

        }
        .ba{
            color: black;
            text-align: center;
            background-color: rgb(219,255,255);
            display: grid;
        }
        
     

    </style>
</head>
<body>
    
</body>
</html>

<?php
include("backend.php");
//error_reporting(0);
$query = "SELECT * FROM form";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_array($data);

 //echo $result[2];




  
if($total != 0)
{
    ?>
    <div class="col">
     <h2 align="center" color= "">Placement Student of ABESEC</h2>
    </div>
    <table  class="ba" border="4px" cellspacing="7" width="100%" align="center">
        <tr>
        <th width="8%">Image</th>
        <th width="10%">Name</th>
        <th width="10%">Contact Number</th>
        <th width="12%">Email</th>
        <th width="12%">Linked id</th>
        <th width="10%">First Company</th>
        <th width="10%">Package</th>
        <th width="10%">Placement</th>
    </tr>

   <?php
   while($result = mysqli_fetch_assoc($data))
   {
        echo 
             "<tr> 

                <td><img src='".$result['std_image']."'height='100px' width='100px'></td>
                <td>".$result['name']."</td>
                <td>".$result['mobile']."</td>
                <td>".$result['email']."</td>
                <td>".$result['linked']."</td>
                <td>".$result['company']."</td>
                <td>".$result['package']."</td>
                <td>".$result['placement']."</td>
             </tr>
               ";
    
   }
}
else
{
    echo "Not any records";

}
?>
</table>