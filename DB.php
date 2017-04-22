<?php
     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db = 'TeeONDBS';
     $connect = mysqli_connect($hostname, $username, $password, $db );
     $query = "SELECT * FROM userdb";
     $result = mysqli_query($connect,$query);
     $num = mysqli_num_rows ($result);
?>