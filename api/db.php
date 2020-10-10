<?php
 
    $username = "root";
    $password = "root";
    $host = "localhost";
    $dbname = "telegraph";
     
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');  
     
    try
    {
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8",$username, $password ,$options);
    }
    catch(PDOException $ex)
    {
        die("Failed to connect to the database: " . $ex->getMessage());
    } 
   // an error.  This allows us to use try/catch blocks to trap database errors.
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);   
     
?>