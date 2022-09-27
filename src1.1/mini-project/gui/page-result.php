<?php require('../function/displays-page-result.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="thitikorn deverlop in thailand">
    <meta name="description" content="โปรแกรมคำนวณ BMI , BMR">
    <link rel="icon" href="../image/idea.png">
    <link rel="stylesheet" href="../css/style-page-result.css">
    <title>healthy calculate</title>
</head>

<body>
    
    <!-- menubar -->
    <section class="control-main-menu">
            
            <nav class="section-grid">
                <div class="logo">
                    <img class="img" src="../image/idea.png" alt="healthy">
                    <p>healthy calculate</p>
                </div>
    
                <ul class="ul-grid">
                    <li class="clicks"><a href="page-main.php">find BMI</a></li>
                    <li class="clicks"><a href="page-main.php">find BMR</a></li>
                    <li class="clicks"><a href="page-main.php">cooking</a></li>
                    <li class="clicks"><a href="page-main.php">functions</a></li>
                </ul>
            </nav>

    </section>
    <!-- end menubar -->



       
    <!-- displays result -->
    <section class="contro-main-displays">
        
        <div class="displays-result" id="displays">
            <div class="main-box">
                <h3>BMI</h3>
                    <div class="output">
                        <?php  
                    
                            if ($row['weight_bmi'] == 0 || $row['height_bmi'] == 0) {
                                    
                                echo"0.00";
                            
                            } 
                            else {
                                
                                bmi($row['weight_bmi'],$row['height_bmi']);
                            }
                        ?> 
                    </div>    
            </div>
        </div>
        
        
        <div class="displays-result" id="displays">
            <div class="main-box">
                <h3>BMR</h3>
                    <div class="output"> 
                        <?php                  
                            if($row['weight_bmr'] == 0 || $row['height_bmr'] == 0) {
                                
                                echo"0 Kcal";
                            
                            }
                            else {
                            
                                bmr($row['weight_bmr'],$row['height_bmr'],$row['age'],$row['gender']);

                            }
                        ?>
                    </div>    
            </div>
        </div>

    </section>
    <!-- end displays result -->


    <!-- table -->
    <section class="contro-main-table">
            
            <table class="bmi-table">
                <!-- มี tage tr คลุมเสมอ -->
                <tr class="top-table">
                    <th class="th">BMI</th>
                    <th class="th">Standard Criteria</th>
                    <th class="th">Risk Factor</th>
                </tr>
                <tr>
                    <td>น้อยกว่า 18.5</td>
                    <td>ผอม</td>
                    <td>เสี่ยงมากกว่าคนปกติ</td>
                </tr>
                <tr>
                    <td>ระหว่าง 18.5 - 22.90</td>
                    <td>ปกติ</td>
                    <td>ทั่วไป / ปกติ</td>
                </tr>
                <tr>
                    <td>ระหว่าง 23 - 24.90</td>
                    <td>อ้วนระดับ 1</td>
                    <td>อัตรายระดับ 1</td>
                </tr>
                <tr>
                    <td>ระหว่าง 25 - 29.90</td>
                    <td>อ้วนระดับ 2</td>
                    <td>อัตรายระดับ 2</td>
                </tr>
                <tr>
                    <td>มากกว่า 30</td>
                    <td>อ้วนมาก</td>
                    <td>อัตราย</td>
                </tr>
            </table>
    </section>
    <!-- end table -->


    <!-- output function -->
    <section class="contro-main-functions">
            <div class="displays-function">
                
                <div class="main-box">
                    <h3 > 
                        <?php 
                            if(strcmp($row['functions'],"percentage") == 0){ echo"Percentage";} 
                            elseif(strcmp($row['functions'],"multiply-t") == 0 ){ echo"Multiply Table";} 
                            elseif(strcmp($row['functions'],"sigma") == 0 ){ echo"Sigma";}
                            elseif(strcmp($row['functions'],"expo") == 0 ){ echo"Exponential";}
                            else{echo"Hello , Have a good day.";} 
                        ?> 
                    </h3>

                    <div class="output">
                        <?php 
                        
                        if (strcmp($row['functions'],"percentage") == 0 ) {

                                if($row['realnum_one'] < $row['realnum_two'] && $row['realnum_one'] >= 0 ) {
                                    percentage ($row['realnum_one'] , $row['realnum_two']);
                                }
                                else {
                                    echo"can't process.";
                                }

                        }

                        elseif (strcmp($row['functions'],"multiply-t") == 0 ) {
                            
                                if ($row['realnum_one'] >= 0 && $row['realnum_two'] >= $row['realnum_one']) {
                                    multiplay_table ($row['realnum_one'] , $row['realnum_two']);
                                }
                                else {
                                    echo"can't process.";
                                }
                            
                        }

                        elseif (strcmp($row['functions'],"sigma") == 0 ) {
                            
                                if($row['realnum_one'] >= 0 && $row['realnum_two'] > $row['realnum_one'] ) {
                                    sigma($row['realnum_one'] ,$row['realnum_two']);
                                }
                                else {
                                    echo"can't process.";
                                }

                        }

                        elseif (strcmp($row['functions'],"expo") == 0 ) {
                            
                                if($row['realnum_one'] != NULL) {
                                    expo($row['realnum_one'] ,$row['realnum_two']);
                                }
                                else {
                                    echo"can't process.";
                                }

                        }


                        ?>
                    </div>

                </div> <!-- main-box -->

            </div>
        </section>
        <!-- output function -->



    <!-- footer -->
    <footer>
        <section class="contro-main-footer"  id="bottom">
            
            <div class="logo-footer">
                <img class="img" src="../image/idea.png" alt="healthy">
                <p>healthy calculate</p>
            </div>
            
            <div class="email">
                <p>email : healthy-calculate@rmutp.ac.th</p>
            </div>
            
        </section>
    </footer>
    <!-- footer -->

</body>
</html>
