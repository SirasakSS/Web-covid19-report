<?php

    $api = file_get_contents("https://static.easysunday.com/covid-19/getTodayCases.json");
    $data = json_decode($api, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
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
            <form class="d-flex" novalidate method="POST" action="province.php" novalidate>
                <select class="form-select" aria-label="Default select example" name="province_con">
                    <option selected disabled> กรุณาเลือกจังหวัด </option>
                    <option value="0">อุทัยธานี</option>
                    <option value="1">ปัตตานี</option>
                    <option value="2">หนองบัวลำภู</option>
                    <option value="3">ขอนแก่น</option>
                    <option value="4">บุรีรัมย์</option>
                    <option value="5">นครสวรรค์</option>
                    <!-- <option value="6">ทั้งประเทศ</option> -->
                    <option value="7">กาฬสินธุ์</option>
                    <option value="8">ตราด</option>
                    <option value="9">กระบี่</option>
                    <option value="10">แม่ฮ่องสอน</option>
                    <option value="11">ชลบุรี</option>
                    <option value="12">ยะลา</option>
                    <option value="13">สิงห์บุรี</option>
                    <option value="14">อุตรดิตถ์</option>
                    <option value="15">ลพบุรี</option>
                    <option value="16">สระแก้ว</option>
                    <option value="17">สมุทรปราการ</option>
                    <option value="18">อุบลราชธานี</option>
                    <option value="19">ตาก</option>
                    <option value="20">นราธิวาส</option>
                    <option value="21">บึงกาฬ</option>
                    <option value="22">สุพรรณบุรี</option>
                    <option value="23">ระนอง</option>
                    <option value="24">เชียงราย</option>
                    <option value="25">ชุมพร</option>
                    <option value="26">ประจวบคีรีขันธ์</option>
                    <option value="27">ชัยนาท</option>
                    <option value="28">ชัยภูมิ</option>
                    <option value="29">ร้อยเอ็ด</option>
                    <option value="30">ยโสธร</option>
                    <option value="31">นครราชสีมา</option>
                    <option value="32">นครปฐม</option>
                    <option value="33">พระนครศรีอยุธยา</option>
                    <option value="34">อำนาจเจริญ</option>
                    <option value="35">กำแพงเพชร</option>
                    <option value="36">พัทลุง</option>
                    <option value="37">พังงา</option>
                    <option value="38">ปทุมธานี</option>
                    <option value="39">ระยอง</option>
                    <option value="40">เชียงใหม่</option>
                    <option value="41">ลำพูน</option>
                    <option value="42">อ่างทอง</option>
                    <option value="43">นครพนม</option>
                    <option value="44">น่าน</option>
                    <option value="45">มหาสารคาม</option>
                    <option value="46">เพชรบูรณ์</option>
                    <option value="47">อุดรธานี</option>
                    <option value="48">สุราษฎร์ธานี</option>
                    <option value="49">ฉะเชิงเทรา</option>
                    <option value="50">กาญจนบุรี</option>
                    <option value="51">มุกดาหาร</option>
                    <option value="52">สงขลา</option>
                    <option value="53">นนทบุรี</option>
                    <option value="54">นครศรีธรรมราช</option>
                    <option value="55">สุโขทัย</option>
                    <option value="56">นครนายก</option>
                    <option value="57">พิจิตร</option>
                    <option value="58">แพร่</option>
                    <option value="59">ราชบุรี</option>
                    <option value="60">สตูล</option>
                    <option value="61">พิษณุโลก</option>
                    <!-- <option value="62">หนองคาย</option> -->
                    <option value="63">จันทบุรี</option>
                    <option value="64">เพชรบุรี</option>
                    <option value="65">หนองคาย</option>
                    <option value="66">สมุทรสงคราม</option>
                    <option value="67">ศรีสะเกษ</option>
                    <option value="68">พะเยา</option>
                    <option value="69">ภูเก็ต</option>
                    <option value="70">สุรินทร์</option>
                    <option value="71">ลำปาง</option>
                    <option value="72">สกลนคร</option>
                    <option value="73">กรุงเทพมหานคร</option>
                    <option value="74">เลย</option>
                    <option value="75">ปราจีนบุรี</option>
                    <option value="76">สระบุรี</option>
                    <option value="77">ตรัง</option>
                    <option value="78">สมุทรสาคร</option>
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