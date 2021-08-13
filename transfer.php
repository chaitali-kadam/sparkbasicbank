<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction</title>
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

    tr:nth-child(even){background-color: #E34589

}
  body{
      height: 900px;
      background-image: linear-gradient(rgba(255, 0, 0, 0.3),rgba(0, 255, 0, 0.3),rgb(83, 189, 221));
      }
    
  
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php
        include 'nav.html';
    ?>
<br>
<div id ="cust">
<h1><b>START THE TRANSACTION</b></h1>
<br>
<table>
  <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account Number</th>
        <th>Current Balance</th>
        <th>Operation</th>
        
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
    <td><a href="transaction.php?id= <?php echo $data['id'] ;?>">
    <button type="button" class="btn btn-info btn-lg text-light"><b>Transaction</b></button></a></td>
  </tr>	

  
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

















