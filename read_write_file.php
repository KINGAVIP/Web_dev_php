<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Read or write in a file</h1>
    <?php
        // $myfile=fopen("a.txt","r") or die("Unable to open");
        // echo fread($myfile,filesize("a.txt"));
        // fclose($myfile);
        $newtxt="Addtional text to be added";
        $myfiles=fopen("a.txt","r") or die("Cant");
        // fwrite($myfiles,$newtxt);
        echo fread($myfiles,filesize("a.txt"));
 
        fclose($myfiles)
    ?>
</body>
</html>