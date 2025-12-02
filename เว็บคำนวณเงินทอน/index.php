<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="mitr-medium" style="margin-left: 20px; margin-top: 20px; margin-bottom: 30px;">ไงพวก ไปคิดเงินสิ้นค้าของนายซะ!!</h1>

    <?php
        $Money = isset($_POST['Money_user']) ? (float)$_POST['Money_user'] : 0;
        $Price = isset($_POST['Price_user']) ? (float)$_POST['Price_user'] : 0;
        $Change = $Money - $Price;
        $ChangeInt = (int)$Change;

        $coins10 = intdiv($ChangeInt, 10); //ทบทวน หารหาจำนวนเหรียญ 10
        $remain = $ChangeInt % 10; //ทบทวน หาจำนวนเหรียญเศษที่เหลือด้วย mod10
        $coins5 = intdiv($remain, 5); //ทบทวน หารหาจำนวนเหรียญ 5 ด้วยการหาร
        $coins1 = $remain % 5; //ทบทวน หาจำนวนเหรียญ 1
    ?>

    <!--เช็คค่าตัวแปร-->
    <p class="mitr-medium" style="margin-left: 20px">เช็คค่าตัวแปร: ราคา = <?php echo $Price; ?>, เงิน = <?php echo $Money; ?>, เงินทอน = <?php echo $Change; ?></p>
    
    <!--กล่องทำงานนะจ๊ะ-->
    <div class="workspace mitr-regular">
        <h1 class="mitr-medium">พื้นที่คิดเงิน</h1>
        
    <!--value="<?php echo $Price; ?>"-->
        <form method="post">
            <table align="center">
                <tr>
                    <td>
                        <p align="left" class="mitr-regular" style="margin-top: 15px; font-size: 20px;">กรอกราคาสินค้าทั้งหมด</p>
                        <input type="number" name="Price_user" placeholder="ป้อนราคาสิ้นค้าทั้งหมด" style="width:750px;">

                        <p align="left" class="mitr-regular" style="margin-top: 15px; font-size: 20px;">กรอกจำนวนเงินที่รับมา</p>
                        <input type="number" name="Money_user" placeholder="จำนวนเงินที่รับมา" style="width:750px;">
                    </td>
               
                    <td align="center">
                        <button type="submit" style="margin-top: 45px; margin-left: 40px; width:150px; height:150px;" class="mitr-regular">ยืนยันทั้งหมด</button>
                    </td>
                </tr>
            </table>
        </form>

        <table>
            <tr>
                <td>
                    <div class="workspace" style="width: 350px; height: 250px;" align="left">
                        <p class="mitr-medium" style="font-size: 25px;">เงินทอน</p><br>
                        <p class="mitr-medium" style="font-size: 40px; margin-top: 20px;"> <?php $Change >= 0 ? print number_format($Change, 2)." บาท" : print "เงินไม่พอจ้าาาา"; ?></p>
                    </div>
                </td>

                <td>
                    <div class="workspace" style="width: 140px; height: 250px; margin-left: 90px;">
                        <p class="mitr-medium" style="font-size: 19px;">เหรียญ 10</p><br>
                        <p class="mitr-medium" style="font-size: 40px; margin-top: 20px;"> <?php echo $coins10; ?></p>
                    </div>
                </td>

                <td>
                    <div class="workspace" style="width: 130px; height: 250px; margin-left: 50px;">
                        <p class="mitr-medium" style="font-size: 20px;">เหรียญ 5</p><br>
                        <p class="mitr-medium" style="font-size: 40px; margin-top: 20px;"> <?php echo $coins5; ?></p>
                    </div>
                </td>

                <td>
                    <div class="workspace" style="width: 130px; height: 250px; margin-left: 50px;">
                        <p class="mitr-medium" style="font-size: 20px;">เหรียญ 1</p><br>
                        <p class="mitr-medium" style="font-size: 40px; margin-top: 20px;"> <?php echo $coins1; ?></p>
                    </div>
                </td>
             </tr>
        </table>
    </div>

</body>
</html>
