<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registeration details form</h1>
    <form action="" method="POST">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <br>
        Section: <input type="text" name="section">
        <br>
        <input type="submit" name="submit">
        <button type="submit" name="display">Display</button>
        <button type="submit" name="delete">Delete by name</button>
        <button type="submit" name="update">Update by name</button>
        <?php
            $host='localhost';
            $db='geu';
            $pass="";
            $user="root";
            
            $conn=mysqli_connect($host,$user,$pass,$db);
            if(isset($_POST['submit']))
            {
               
                $name=$_POST['name'];
                $age=$_POST['age'];
                $section=$_POST['section'];
                $sql="INSERT INTO geu.final(name,age,section) values('$name','$age','$section')";
                mysqli_query($conn,$sql);
            }
            //display
            if(isset($_POST['display']))
            {
                $disp="SELECT * FROM geu.final";
                $result=$conn->query($disp);
                if($result->num_rows>0)
                {
                    $n=mysqli_num_rows($result);
                    while($row=$result->fetch_assoc())
                    {
                        
                        echo $row['name'].' ';
        
                    }
                }
            }
            //delete
            if(isset($_POST['delete']))
            {
                $name=$_POST['name'];
                $sql="DELETE from geu.final where name='$name'";
                if($conn->query($sql)==true)
                    echo "Deleted";
                else   
                    echo "Not found";
            }
            //update
            if(isset($_POST['update']))
            {
                $name=$_POST['name'];
                $age=$_POST['age'];
                $sql="Update geu.final set age='$age' where name='$name'";
                if($conn->query($sql)==true)
                    echo 'Updated';
                else
                    echo 'Failed';    
            }
        ?>
    </form>
</body>
</html>