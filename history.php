<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
/*
        
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
      border:solid 4px gray;
      margin:auto;
      background-color: red;

    }*/
    thead{
      background-color: #170337;
      color:white;
    }
    
    td{
        background-color: rgb(245, 142, 142);
        color:black;
    }


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
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transactions";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['Srno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>