<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Swap of two numbers</h1>
    <input type="number" name="num"> 
    <?php
        $num1=10;
        $num2=5;
        echo 'Numbers before swap are:'.$num1.' '.$num2;
        $temp=$num1;
        $num1=$num2;
        $num2=$temp;
        echo 'Numbers after swap are:'.$num1.' '.$num2;

    ?>
</body>
</html>