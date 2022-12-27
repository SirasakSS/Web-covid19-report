<?php

    $api = file_get_contents("https://static.easysunday.com/covid-19/getTodayCases.json");
    $data = json_decode($api, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Covid-19</title>

    <style>
    [class*="col"] {
        padding: 1rem;
        margin: 3px;
        /* background-color: #33b5e5; */
        text-align: center;
        color: #fff;
        border-radius: 15px;
    }

    [class*="column-case"] {
        background-color: #4896ad;
    }

    [class*="column-reco"] {
        background-color: #42c985;
    }

    [class*="column-active"] {
        background-color: #03aae2;
    }

    [class*="column-deaths"] {
        background-color: #fa535c;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <form class="d-flex" novalidate method="POST" action="province.php" novalidate name="form_province">
            <select class="form-select" aria-label="Default select example" id="province" name="province">
                    <option selected disabled> กรุณาเลือกจังหวัด </option>
                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="กระบี่">กระบี่ </option>
                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="จันทบุรี">จันทบุรี</option>
                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                    <option value="ชัยนาท">ชัยนาท </option>
                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                    <option value="ชุมพร">ชุมพร </option>
                    <option value="ชลบุรี">ชลบุรี </option>
                    <option value="เชียงใหม่">เชียงใหม่ </option>
                    <option value="เชียงราย">เชียงราย </option>
                    <option value="ตรัง">ตรัง </option>
                    <option value="ตราด">ตราด </option>
                    <option value="ตาก">ตาก </option>
                    <option value="นครนายก">นครนายก </option>
                    <option value="นครปฐม">นครปฐม </option>
                    <option value="นครพนม">นครพนม </option>
                    <option value="นครราชสีมา">นครราชสีมา </option>
                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                    <option value="นครสวรรค์">นครสวรรค์ </option>
                    <option value="นราธิวาส">นราธิวาส </option>
                    <option value="น่าน">น่าน </option>
                    <option value="นนทบุรี">นนทบุรี </option>
                    <option value="บึงกาฬ">บึงกาฬ</option>
                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                    <option value="ปทุมธานี">ปทุมธานี </option>
                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                    <option value="ปัตตานี">ปัตตานี </option>
                    <option value="พะเยา">พะเยา </option>
                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                    <option value="พังงา">พังงา </option>
                    <option value="พิจิตร">พิจิตร </option>
                    <option value="พิษณุโลก">พิษณุโลก </option>
                    <option value="เพชรบุรี">เพชรบุรี </option>
                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                    <option value="แพร่">แพร่ </option>
                    <option value="พัทลุง">พัทลุง </option>
                    <option value="ภูเก็ต">ภูเก็ต </option>
                    <option value="มหาสารคาม">มหาสารคาม </option>
                    <option value="มุกดาหาร">มุกดาหาร </option>
                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                    <option value="ยโสธร">ยโสธร </option>
                    <option value="ยะลา">ยะลา </option>
                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                    <option value="ระนอง">ระนอง </option>
                    <option value="ระยอง">ระยอง </option>
                    <option value="ราชบุรี">ราชบุรี</option>
                    <option value="ลพบุรี">ลพบุรี </option>
                    <option value="ลำปาง">ลำปาง </option>
                    <option value="ลำพูน">ลำพูน </option>
                    <option value="เลย">เลย </option>
                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                    <option value="สกลนคร">สกลนคร</option>
                    <option value="สงขลา">สงขลา </option>
                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                    <option value="สระแก้ว">สระแก้ว </option>
                    <option value="สระบุรี">สระบุรี </option>
                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                    <option value="สุโขทัย">สุโขทัย </option>
                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                    <option value="สุรินทร์">สุรินทร์ </option>
                    <option value="สตูล">สตูล </option>
                    <option value="หนองคาย">หนองคาย </option>
                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                    <option value="อุดรธานี">อุดรธานี </option>
                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                    <option value="อุทัยธานี">อุทัยธานี </option>
                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                    <option value="อ่างทอง">อ่างทอง </option>
                </select>
                <button class="btn btn-outline-success ms-2" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <h1 class="text-center mt-4 ">รายงานผู้ติดเชื้อ Covid-19 ในประเทศไทย</h1>

    <div class="container-md mt-4">
        <div class="row">
            <div class="col-sm shadow-sm column-case">
                <h2>ติดเชื้อสะสม</h2>
                <h1><?php echo number_format($data["cases"]);?></h1>
                <h6> (+<?php echo number_format($data["todayCases"]);?>)</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm shadow-sm column-reco">
                <h2>หายแล้ว</h2>
                <h1><?php echo number_format($data["recovered"]);?></h1>
                <h6> (+<?php echo number_format($data["todayRecovered"]);?>)</h6>
            </div>
            <div class="col-sm shadow-sm column-active">
                <h2>รักษาอยู่ใน รพ.</h2>
                <h1><?php echo number_format($data["active"]);?></h1>
                <h6> (<?php echo number_format($data["NewHospitalized"]);?>)</h6>
            </div>
            <div class="col-sm shadow-sm column-deaths">
                <h2>เสียชีวิต</h2>
                <h1><?php echo number_format($data["deaths"]);?></h1>
                <h6> (+<?php echo number_format($data["todayDeaths"]);?>)</h6>
            </div>
        </div>
    </div>

    <div class="container-md mt-3" align="right">
        <h5> อัปเดตข้อมูลล่าสุด :<?php echo ($data["UpdateDate"]);?> </h5>
        <h5> ที่มา :<?php echo ($data["DevBy"]);?></h5>
        <h5>
            จำนวนผู้เยี่ยมชม :
            <div id="sfcw61uhragu44ux2n8xf6m384z3kfafbrb"></div>
            <script type="text/javascript"
                src="https://counter5.optistats.ovh/private/counter.js?c=w61uhragu44ux2n8xf6m384z3kfafbrb&down=async"
                async></script><noscript><a href="https://www.freecounterstat.com" title="free website counters"><img
                        src="https://counter5.optistats.ovh/private/freecounterstat.php?c=w61uhragu44ux2n8xf6m384z3kfafbrb"
                        border="0" title="free website counters" alt="free website counters"></a></noscript>

        </h5>
    </div>

</body>

</html>