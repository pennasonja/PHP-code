<?php
    $host='localhost';
    $username='root';
    $password='Ryhma3';
    $dbname = "Iot";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
