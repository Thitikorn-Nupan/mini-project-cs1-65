<?php 

        /* 
       mysqli_fetch_array(ผลลัพธ์จาก query) จะส่งข้อมูลมาในรูปแบบชนิด array   
       $sql = "SELECT * FROM tablebmi";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
       */


    require ('../config/config-main.php');
    

    if ( isset($_POST['weight_bmi']) && isset($_POST['weight_bmi']) ) {
        
        $weight_bmi = $_POST['weight_bmi'];
        $height_bmi = $_POST['height_bmi']; 
        
        $sql = "INSERT INTO tablebmi (weight_bmi , height_bmi ) VALUES ('$weight_bmi', '$height_bmi')";
        $result = mysqli_query($conn,$sql);  
        /* function use ติดต่อ(run) ฐานข้อมูลแล้วทำการ query , insert , delete , update */
        
        if (!$result) {
            echo "Record data failed : ".mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }

    if ( isset($_POST['weight_bmr']) && isset($_POST['weight_bmr']) ) {
        
        $weight_bmr = $_POST['weight_bmr'];
        $height_bmr = $_POST['height_bmr'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO tablebmi (weight_bmr,height_bmr,age,gender) VALUES ('$weight_bmr','$height_bmr','$age','$gender')";
        $result = mysqli_query($conn , $sql);
        
        if (!$result) {
            echo "Record data failed : ".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
        
    if ( isset($_POST['realnum_one']) && isset($_POST['realnum_two']) ) {

        $realnum_one = $_POST['realnum_one'];
        $realnum_two = $_POST['realnum_two'];
        $functions =$_POST['function'];

        $sql = "INSERT INTO tablebmi (realnum_one , realnum_two , functions) VALUES ('$realnum_one','$realnum_two','$functions')";
        $result = mysqli_query($conn , $sql);

        if (!$result) {
            echo "Record data failed : ".mysqli_error($conn);
        }

        mysqli_close($conn);
    }


?>