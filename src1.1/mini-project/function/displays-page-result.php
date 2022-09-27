<?php


require ('section-into-data-main.php');


$sql = " SELECT * FROM tablebmi order by id desc";  /*  SELECT * FROM tablebmi ดึงทุกเรคอร์ดจากตาราง mysqli + order by id desc คำสั่งเรียงข้อมูล */ 
$result = mysqli_query($conn,$sql); /* คำสั่ง Run */
$row = mysqli_fetch_assoc($result);  /*  _fetch_assoc เวลาดึงข้อมูลจะต้องอ้างอิงจากชื่อฟิลด์เท่านั้น */


function bmi ($weight , $height) {

    $change_unit = $height/100;
    $bmi = $weight/($change_unit*$change_unit);

    echo "".number_format($bmi,2);

}

function bmr ($weight , $height , $age , $gender) {
    
    /*
    strcmp() function การเปรียบเทียบข้อความ (case sensitive เหมือนกันจะ return 0) 
    */ 
    
    $bmr = 0;

    if(strcmp($gender,"male") == 0)  { /* formula male */

       $bmr = 66+(intval(13.7*$weight))+intval((5*$height))-(intval(6.8*$age)); 
       
       /*  intval() is function cut floating */

    }
    else {
        
        $bmr = 665+(intval(9.6*$weight))+(intval(1.8*$height))-(4.7*$age);

    }

    echo"$bmr Kcal";

}

function multiplay_table ($numone , $numtwo) {
            
    $num_one = (int) $numone; // change type
    $num_two = (int) $numtwo;
            
            for ($i = $num_one ; $i <= $num_two ; $i++) {
                echo "<b>mutiply table $i</b><br>";
                for($n = 1 ; $n <= 10 ; $n++) {
                    echo"$i x $n equal ",$i*$n,"<br>";
                }
            }

}

function percentage ($numone , $numtwo) {
        
    $precent = ($numone*100)/$numtwo;
    echo "".number_format($numone,2)." equal <b>".number_format($precent,1)."</b>% of ".number_format($numtwo,2);

}

function sigma($numone , $numtwo) {
    $sigma = 0;
    
    for ($i = $numone ; $i <= $numtwo ; $i++) {
            $sigma = $sigma+$i;
    }
  
    echo "Σ $numone to $numtwo equal ".$sigma;

}

function expo ($numone , $numtwo) { 
    
    $base = (int)$numone; 
    
    if ($numone >= 0 && $numtwo >= 0) { 
        
        $numone = (int) $numone;
        $numtwo = (int) $numtwo;

        for ($i = 1 ; $i < $numtwo ; $i++) {  
            $base *= $numone;       
        }

        if($numtwo == 0) {
            $base = 1;
            echo "$numone<sup>$numtwo</sup> equal $base";
        }
        elseif ($numone == 0 && $numtwo > 0 ) { 
            echo "$numone<sup>$numtwo</sup> equal Infinity"; 
        }
        else {
            echo "($numone)<sup>$numtwo</sup> equal $base";
        }

    
    }

    elseif ($numone < 0 && $numtwo >= 0) {
        
        $numtone_positive = (int) abs( $numone );
        $base = (int) $numtone_positive; 
        $numone = (int) $numone;
        $numtwo = (int) $numtwo;
        
        for ($i = 1 ; $i < $numtwo ; $i++) {  
            $base *= $numtone_positive;       
        }

            if ($numtwo%2 == 0 && $numtwo != 0) {
                echo "($numone)<sup>$numtwo</sup> equal ".$base; 
            }
            elseif($numtwo%2 != 0) {
                echo "($numone)<sup>$numtwo</sup> equal ".$base*-1; 
            }
            
            elseif($numtwo == 0) {
                $base = 1;
                echo "$numone<sup>$numtwo</sup> equal $base"; 
            }        

    }
    
    elseif ( $numone < 0 && $numtwo <= 0) {
        
        $numtone_positive = (int) abs( $numone );
        $numtwo_positive = (int) abs( $numtwo );
        $sum_expo = (int) $numtone_positive;
        $numone = (int) $numone;
        $numtwo = (int) $numtwo;

        for ($i = 1 ; $i < $numtwo_positive ; $i++) {  
            $sum_expo  *= $numtone_positive;       
        }

        $sum_expo = 1/$sum_expo;

        echo "$numone<sup>$numtwo</sup> equal ".($sum_expo*-1); // -1^0

    }

    elseif ( $numone >= 0 && $numtwo < 0) {
        
        $numtwo_positive = (int) abs( $numtwo );
        $sum_expo = (int) $numone;
        $numone = (int) $numone;
        $numtwo = (int) $numtwo;

        for ($i = 1 ; $i < $numtwo_positive ; $i++) {  
            $sum_expo  *= $numone;       
        }

        
        if ($numone == 0 && $numtwo < 0 ) { 
            echo "$numone<sup>$numtwo</sup> equal Infinity"; 
        }
        else { 
            $sum_expo = 1/$sum_expo; echo "($numone)<sup>$numtwo</sup> equal $sum_expo";
         }

    }
}

?>