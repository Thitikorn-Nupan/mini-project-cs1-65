<?php 

 
    /* conect database */
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bmidb";
    $conn = mysqli_connect($servername , $username , $password , $dbname);  /*  function use links database  mysqli_connect(); */
    
    if (!$conn) {
        echo "Connection failed : ".mysqli_connect_error();
    }
    
    /* end conect database */



    
    
?>