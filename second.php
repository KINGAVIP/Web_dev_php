<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Take value and predict even or odd</h1>
    <form>
    <input type="number" name="num" > 
    <input type="submit" name="submt" id="submt" >
    <?php
        // $num=$_POST['num'];
        // echo $num;
        function check($num)
        {
            if($num%2==0)
                return 'even';
            else   
                return 'odd';
        }
        if(isset($_GET['submt']))
        {
            echo 'Hello world';
            $num=$_GET['num'];
            echo 'The result is:'.check($num);
        }
        
        
    ?>
    </form>
</body>
</html>