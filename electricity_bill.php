<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Electricity bill Form</h1>
    <form action="" method="POST">
        Customer Name:<input type="text" name="name">
        <br>
        Previous Reading:<input type="number" name="previous">
        <br>
        Current Reading: <input type="number" name="current">
        <br>
        <input type="submit" name="submit">
        <?php
            if(isset($_POST['submit']))
            {
                $prev=$_POST['previous'];
                $curr=$_POST['current'];
                $units=$curr-$prev;
                $bill=calculate($units);
                echo 'Total bill for the customer is:'.$bill;
            }
            function calculate($units)
            {
                $first=3;
                $second=5;
                $third=7;
                $ans=0;
                if($units<100)
                {
                    $ans=$units*$first;
                }
                else if($units>100 & $units<200)
                {
                    $rem=$units-100;
                    $ans=100*$first+$rem*$second;
                }
                else
                {
                    $ans=100*first+100*$second+($units-200)*$third;
                }
                return $ans;
            }
        ?>
    </form>
</body>
</html>