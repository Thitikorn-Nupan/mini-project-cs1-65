<?php   require ('../function/section-into-data-main.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="thitikorn develop in thailand">
    <meta name="description" content="โปรแกรมคำนวณ BMI , BMR">
    <link rel="icon" href="../image/idea.png">
    <link rel="stylesheet" href="../css/style-page-main.css">
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
            <li class="clicks"><a href="#inputs">find BMI</a></li>
            <li class="clicks"><a href="#inputs">find BMR</a></li>
            <li class="clicks"><a href="#cook-advice">cooking</a></li>
            <li class="clicks"><a href="#bottom">functions</a></li>
        </ul>

    </nav>

    </section>
    <!-- end menu -->


    <!-- head , advice -->
    <section class="contro-main-head"> 
        <div class="section-advice-grid">

                <div class="items">
                    <div class="i-mage-bmi"></div>
                <!-- info -->
                <div class="info">
                    <h3>BMI คืออะไร ??</h3>
                    <p>Body Mass Index (BMI) คือค่าดัชนีที่ใช้ชี้วัดความสมดุลของน้ำหนักตัว (กิโลกรัม) และส่วนสูง (เซนติเมตร) 
                        ซึ่งสามารถระบุได้ว่า ตอนนี้รูปร่างของคนคนนั้นอยู่ในระดับใด ตั้งแต่อ้วนมากไปจนถึงผอมเกินไป
                        (BMI) = weight [Kg] / (height)^2 
                        สูตรคำนวณเหมาะสำหรับใช้ประเมินผู้ที่มีอายุตั้งแต่ 20 ปีขึ้นไป  ประโยชน์ของการวัดค่า BMI 
                        เพื่อดูอัตราเสี่ยงต่อการเกิดโรคต่าง ๆ ตรวจสอบภาวะไขมันและความอ้วน ดังนั้นการทำให้ร่างกายอยู่ในเกณฑ์ปกติ
                        จึงมีความสำคัญอย่างยิ่งกับผู้ที่ต้องการรักษาสุขภาพในระยะยาว
                    </p>
                </div> 
                <!-- end info -->
                </div>

                <div class="items">
                    <div class="i-mage-bmr"></div>
                <!-- info -->
                <div class="info">
                    <h3>BMR คืออะไร ??</h3>
                    <p id="actions">Basal Metabolic Rate (BMR) คืออัตราการความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน 
                        หรือจำนวนแคลอรี่ขั้นต่ำที่ต้องการใช้ในชีวิตแต่ละวัน ดังนั้นการคำนวณ BMR จะช่วยให้คุณคำนวณปริมาณ
                        แคลอรี่ที่ใช้ต่อวันเพื่อรักษาน้ำหนักปัจจุบันได้และเมื่ออายุมากขึ้นเราจะควบคุมน้ำหนักได้ยากขึ้น
                        เพราะ BMR เราลดลง การอดอาหารก็เป็นสาเหตุหนึ่งที่ทำให้ BMR 
                        ลดลง วิธีป้องกันคือ “หมั่นออกกำลังกาย” เพื่อเพิ่มประสิทธิภาพของการเผาผลาญ ซึ่งจะทำให้ BMR ไม่ลดลงเร็วเกินไป
                    </p>
                </div> 
                <!-- end info -->
                </div>

        </div> <!-- end section-advice-grid -->   
    </section>
    <!-- end head , advice -->


    <!-- forms-input *BMI* -->
    <section class="contro-main-formbmi" >
        <form action="#actions" method="post">  
            
            <div class="main-input" id="inputs">
                <h3>เครื่องคำนวณ (Body Mass Index) BMI</h3>
                <div class="section-input-grid">
                    
                    <div class="number-input">
                        <label class="" for="">น้ำหนัก (Kg.) : </label>
                        <input class="space-input" type="number" name="weight_bmi" id="" step="any" min="0" require>
                    </div>

                    <div class="number-input">
                        <label class="" for="">ส่วนสูง (Cm.) : </label>
                        <input class="space-input" type="number" name="height_bmi" id="" step="any"  min="0" require>
                    </div>

                </div>
            </div>

            <div class="main-action" >
                <button class="actions" type="submit" value="" name="send-one" require>send</button>
                <button class="actions" type="reset" value="">reset</button>
                <?php if(isset($_POST['send-one'])) {?>
                    <a class="actions-to-result" href="page-result.php">
                <?php echo"<b>&#127882";?>result<?php echo"&#127882</b>"; }?></a> 
            </div>

        </form> 
    </section>
    <!-- end forms-input *BMI* -->


    <!-- forms-input *BMR* -->
    <section class="contro-main-formbmr">
        <form action="#actions" method="post"> 

        <div class="main-input">  
            <h3>เครื่องคำนวณ (Basal Metabolic Rate) BMR</h3>
            
            <div class="section-input-grid-bmr">
                
                <div class="number-input">
                    <label class="" for="">น้ำหนัก (Kg.) : </label>
                    <input class="space-input" type="number" name="weight_bmr" id="" step="any" min="0" required>
                </div>

                <div class="number-input">
                    <label class="" for="">ส่วนสูง (Cm.) : </label>
                    <input class="space-input" type="number" name="height_bmr" id="" step="any" min="0"required>
                </div>

                <div class="number-input">
                    <label class="text-age" for="">อายุ (Age) : </label>
                    <input class="space-input" type="number" name="age" id="" min="0"required>
                </div>

            </div>

            <div class="group-gender">
                <label for="">เพศ</label>
                <input class="space-gender" type="radio" name="gender" id="" value="male"required>ชาย
                <input class="space-gender" type="radio" name="gender" id=""value="female"required>หญิง
            </div>

        </div>
            
            <div class="main-action" >
                <?php if(isset($_POST['send-two'])) {?>
                    <a class="actions-to-result" href="page-result.php">
                <?php echo"<b>&#127882";?>result<?php echo"&#127882</b>"; }?> </a> 
                <button class="actions-two" type="submit" value="" name="send-two" required>send</button>
                <button class="actions-two" type="reset" value="">reset</button>
            </div>

        </form>
    </section>
    <!-- end forms-input *BMR* -->


    <!-- cooking -->
    <section class="contro-main-cook" id="cook-advice">
        <span class="span-text">The Right Diet</span>
        <div class="section-cooking-grid">
            
            <div class="item-cooks">
                <div class="i-mage-c-one"></div>
                <div class="info-food">
                    <h3>แกงจืดผักกาดขาว</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>138 Cal</b></p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-two"></div>
                <div class="info-food">
                    <h3>ผัดหน่อไม้ฝรั่งกุ้ง</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>230 Cal</b></p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-three"></div>
                <div class="info-food">
                    <h3>ไข่ตุ๋นกุ้งสด</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>160 Cal</b> (ไข่ 2 ฟอง)</p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-four"></div>
                <div class="info-food">
                    <h3>ต้มยำทะเลน้ำใส</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>110 Cal</b></p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-five"></div>
                <div class="info-food">
                    <h3>สลัดปลาแซลมอนย่าง</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>198 Cal</b></p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-six"></div>
                <div class="info-food">
                    <h3>ยำไก่ยอข้าวกล้อง</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>270 Cal</b></p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-seven"></div>
                <div class="info-food">
                    <h3>ข้าวยำปักษ์ใต้</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>248 Cal</b> (ไข่ 2 ฟอง)</p>
                </div>
            </div>

            <div class="item-cooks">
                <div class="i-mage-c-eight"></div>
                <div class="info-food">
                    <h3>ลาบหมู</h3>
                    <p>พลังงานที่ได้รับโดยประมาณ <b>130 Cal</b></p>
                </div>
            </div>

        </div>  <!-- section-cooking-grid -->
    </section>
    <!-- end cooking -->



    <!-- main fuction -->
    <section class="contro-main-function">
        
        <form action="#bottom" method="post">
            <div class="main-input-function"> <!--  set center -->
                <h3>เครื่องคำนวณ (Various Problems)</h3>
             <div class="section-main-real">
                
                <div class="real-input">
                    <label for="">1. จำนวนจริง (real numbers) : </label>
                    <input class="space-integer" type="number" name="realnum_one" id="" step="any" required>
                </div>

                <div class="real-input">
                    <label for="">2. จำนวนจริง (real numbers) : </label>
                    <input class="space-integer" type="number" name="realnum_two" id="" step="any" required>
                </div>

             </div>

            <div class="group-function">
             <label class="message-chooses" for="">เลือก</label>
                    
                <div class="section-chooses-grid">
                        <div class="chooses"><input class="space-cricle" type="radio" name="function" id="" value="percentage" required>จำนวน C<sub>1</sub> เป็นกี่เปอร์เซ็นต์ของจำนวน C<sub>2</sub></div>
                        <div class="chooses"><input class="space-cricle" type="radio" name="function" id="" value="multiply-table" required>ตารางสูตรคูณแม่ที่ C<sub>1</sub> ถึงแม่ที่ C<sub>2</sub></div>
                        <div class="chooses"><input class="space-cricle" type="radio" name="function" id="" value="sigma" required>หาค่า Σ ของจำนวน C<sub>1</sub> ถึงจำนวน C<sub>2</sub></div>
                        <div class="chooses"><input class="space-cricle" type="radio" name="function" id="" value="expo" required>หาค่าของจำนวน C<sub>1</sub> ยกกำลังด้วยจำนวน C<sub>2</sub></div>    
                </div>

            </div>


            <div class="main-action" >
                <button class="actions" type="submit" value="" name="send-three" require>send</button>
                <button class="actions" type="reset" value="">reset</button>
                
                <?php if(isset($_POST['send-three'])) {?>
                    <a class="actions-to-result" href="page-result.php">
                <?php echo"<b>&#127882";?>result<?php echo"&#127882</b>"; }?></a> 
            </div>

        </div>
        </form>
        
    </section>
    <!-- main fuction -->
    
    
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
