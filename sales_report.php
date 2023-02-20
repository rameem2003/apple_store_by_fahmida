<?php 

include './configuration/connection.php';

$report_query = "SELECT * FROM `checkout`";
$run_report_query = mysqli_query($conn, $report_query);
$total_sales = mysqli_num_rows($run_report_query);

// system time
$date = date("d/m/Y");
$time = date("h:m:sa")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report || Apple Store</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/report.css">
</head>
<body>
    <div class="report">
        <div class="head">
            <h1>Apple Store Dashboard</h1>
            <h3 class="welcome">Sales Report</h3>
            <h3>Total sales <?php echo $total_sales ?></h3>
            <h3>Current Time is: <?php echo $date . "," . $time; ?></h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Sales ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Products</th>
                    <th scope="col">Total Prize</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all iphones in table
                if(mysqli_num_rows($run_report_query) > 0){
                    while($sales = mysqli_fetch_assoc($run_report_query)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $sales['salesID']; ?></</th>
                                <td><?php echo $sales['c_name']; ?></td>
                                <td><?php echo $sales['phone']; ?></td>
                                <td><?php echo $sales['address']. ", " . $sales['city']; ?></</td>
                                <td><?php echo $sales['products']; ?></td>
                                <td><?php echo $sales['total_prize']; ?> ৳</td>
                                <td><?php echo $sales['payment']; ?></td>
                                <td><?php echo $sales['time']; ?></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Report Empty";
                }

            ?>
                
            </tbody>
        </table>
    </div>
    




    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>