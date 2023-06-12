<?php
 $user='root';
 $password='';
 $db='geu';

 $conn=mysqli_connect('localhost',$user,$password,$db) or die("Connection failed");
 echo("Connection established");
 ?>