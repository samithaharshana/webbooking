<?php

    session_start();
    $hostname = 'localhost';
    $dbname   = 'hms';
    $username = 'root'; 
    $password = '';
    mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');

    $userName=mysql_real_escape_string($_POST['username']); 
    $passWord=md5(mysql_real_escape_string($_POST['password'])); 
    $query = "SELECT id FROM member WHERE userName='$userName' and  passWord='$passWord'";
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['userName'] = $_POST['username'];
        header("Location: securedpage.html");
    }
    else 
    {
        echo "user name and password not found";
        // TODO - replace message with redirection to login page
        //  header("Location: securedpage.php");
    }