<?php
    //start the session
    session_start();
    //check if counter is set
    if(!isset($_COOKIE['counter']))
    {
        //if counter cookie is not set , set it to 0
        setcookie('counter',0,time()+(86400*30),'/'); //cookie expires in 30days
    }
    //check if session counter is set
    if(!isset($_SESSION['counter']))
    {
        $_SESSION['counter']=0;
    }

    //Increment the counter
    $_COOKIE['counter']++;
    $_SESSION['counter']++;

    //displays the counter values
    echo "Cookie counter:".$_COOKIE['counter']."<br>";
    echo "Session counter:".$_SESSION['counter']."<br>";
    // session_destroy();
?>