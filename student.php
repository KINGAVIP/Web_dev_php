<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student database form</h1>
    <form action="" method="POST">
        Roll: <input type="number" name="roll">
        <br>
        Name: <input type="text" name="name">
        <br>
        Phone: <input type="text" name="phone">
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit" name="submit">
        <?php
            if(isset($_POST['submit']))
            {
                $user="root";
                $pass="";
                $db="geu";
                $roll=$_POST['roll'];
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $age=$_POST['age'];
                $conn=mysqli_connect("localhost",$user,$pass,$db);
                if(!$conn)
                {
                    die("Could not connect");
                }
                $sql="INSERT INTO geu.student(roll,name,phone,age) values('$roll','$name','$phone','$age')";
                mysqli_query($conn,$sql);
            }
        ?>
    </form>
</body>
</html>