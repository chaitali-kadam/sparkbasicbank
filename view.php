<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f74495f7ad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>View Cutomer</title>
  <style>

    h1{
      text-align:center;
      text-shadow: 2px 2px 5px pink;
      font-size: 40px;

    }

    table{
      border-collapse:collapse;
      width: 90%;
      color:red;
      font-family: "Times New Roman", Times, serif;
      font-size: 25px;
      text-align:center;
      height:500px;
      border:solid 4px gray;
      margin:auto;
      background-color: #ffc300;

    }
    th{
      background-color: #170337;
      color:white;
    }

    tr{
      color:black;
    }

    tr:nth-child(even){background-color: #E34589}
    
    body{
      height: 750px;
      background-image: linear-gradient(rgba(255, 0, 0, 0.3),rgba(0, 255, 0, 0.3),rgb(83, 189, 221));
          }

  </style>
</head>
<body>
<?php
        include 'nav.html';
    ?>
    
      
<br>
<div id ="cust">
<h1><b>Customer Details</b></h1>

<table>
  <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account Number</th>
        <th>Balance</th>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from customer"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Account Number']; ?></td>
    <td><?php echo $data['Balance']; ?></td>

    
  </tr>	

  
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</div>
</body>
</html>
