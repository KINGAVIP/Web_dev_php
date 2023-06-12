<?php
require 'connection.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $remember=$_POST['remember'];a
    $sql="SELECT login.id,login.pass FROM geu.login where login.id=$email and login.pass=$password";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        if(isset($_POST['remember']))
        {
            setcookie('email',$email.time()+60*60*7);
            setcookie('pass',$password.time()+60*60*7);
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['pass']=$password;
            header('welcome avi');
        }
        else
        {
            echo 'email or password incorrect';
        
        }
    }
    else
        echo header('welcome');

}