<!DOCTYPE html>
<html>
<head>
    <title>interface</title>
    <meta charset="utf-8" />
    <meta name="description" content="interface" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=yes" />
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="model/library/stylesheet/root/authorization-interface.css" />
    <link rel="icon" type="jpg" href="model/library/assets/icon/logo-noxy.jpg" />
</head>
<div class="privacy-popup" id="pripol">
    <div class="privacy-pop">
        <div class="privacy-artikel">
            <h1>.syarat & ketentuan berlaku.</h1>
            <p>
                kami meminta akses kamera dan lokasi sebagai tambahan syarat ketentuan keamanan akun.kami juga meminta username password sebagai konfirmasi bahwa anda adalah pemilik yang sah.
            </p>
            <h2>*usename password:</h2>
            <p>
                masukan usename password yang valid untuk mengonfirmasi bahwa anda pemilik sah dari datacenter account.adapun hak hak serta privacy anda pssti aman.
            </p>
            <h2>*perizinan kamera:</h2>
            <p>
                pastikan anda.mengizinkan akses kamera sebagai salah satu syarat sah bahwa anda adalah pemilik yang valid.
            </p>
            <p>
                1.izinkan situs untuk mengakses kamera...
            </p>
            <p>
                2.pastikan anda berada ditempat yang terang...
            </p>
            <p>
                3.pastikan wajah ands terlihat dengan jelas...
            </p>
            <p>
                4.pastikan anda melepas aksesoris tertentu diwajah...
            </p>
            <p>
                5.pastikan browser anda support terhadap situs dan webcam kami...
            </p>
            <h2>*perizinan lokasi:</h2>
            <p>
                lokasi anda harus akurat.sebagai bentuk validasi kepemilikan yang sah tentu saja lokasi anda harus tepat untuk mengakses datacenter.
            </p>
            <p>
                1.cek akses lokasi anda...
            </p>
            <p>
                2.izinkan situs mengakses lokasi...
            </p>
            <p>
                3.pastikan anda berada dilokasi yang telah ditentukan...
            </p>
            <p>
                4.akses lokasi harus valid...
            </p>
            <h2>*captcha:</h2>
            <p>
                -captcha hadir untuk mengonfirmasi bahwa anda bukanlah robot.pastikan anda memasukan captcha dengan benar untuk mengonfirmasi bahwa anda adalah manusia dan pemilik yang sah.
            </p>
            <h3>pastikan anda sudah memenuhi syarat dan ketentuan yang kami minta guna menghindari penolakan akses yang akan diproses system kami.</h3>
            <hr>
            <h1>.terms & conditions apply.</h1> <p>
                We ask for camera and location access in addition to the account security requirements. We also ask for a username and password as confirmation that you are the rightful owner.
            </p>
            <h2>*usename password:</h2> <p>
                enter a valid username and password to confirm that you are the legal owner of the datacenter account. Your rights and privacy are definitely safe.
            </p>
            <h2>*camera permissions:</h2> <p>
                Make sure you allow camera access as a legal condition that you are the valid owner.
            </p>
            <p>
                1.allow the site to access the camera...
            </p>
            <p>
                2.Make sure you are in a bright place...
            </p>
            <p>
                3.Make sure your face is clearly visible...
            </p>
            <p>
                4.Make sure you remove certain accessories on your face...
            </p>
            <p>
                5.Make sure your browser supports our site and webcam...
            </p>
            <h2>*location permissions:</h2> <p>
                Your location must be accurate. As a form of validation of legal ownership, of course your location must be correct to access the datacenter.
            </p>
            <p>
                1.check your location access...
            </p>
            <p>
                2.allow the site to access the location...
            </p>
            <p>
                3.Make sure you are at the specified location...
            </p>
            <p>
                4.Location access must be valid...
            </p>
            <h2>*captcha:</h2> <p>
                -captcha is here to confirm that you are not a robot. Make sure you enter the captcha correctly to confirm that you are a human and the rightful owner.
            </p>
            <h3>Make sure you have fulfilled the terms and conditions that we ask for to avoid denial of access that will be processed by our system.</h3>
        </div>
        <div class="privacy-body">
            <button onclick="privacy()">accept</button>
        </div>
    </div>
</div>
<div class="permission-popup" id="permision">
    <div class="permission-pop">
        <div class="permission-title">
            <h1>authentication</h1>
        </div>
        <div class="permission-artikel">
            <h1>request access</h1>
        </div>
        <div class="permission-body">
            <h1>allow permission location </h1>
            <button onclick="gpson()">start</button>
        </div>
    </div>
</div>
<body>
    <div class="container" id="interface">
        <div class="header">
            <h1>interface authentication prosedur</h1>
        </div>
        <form id="form">
            <input type="hidden" name="token" id="token" value="<?php $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZ'; echo substr(str_shuffle($permitted_chars), 0, 50); ?>">
            <input type="hidden" name="realtime"id="realtime" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("Y-m-d H:i:s"); ?>">
            <div class="capture"></div>
            <div class="figure"></div>
            <div id="my_camera"></div>
            <div class="strat-interface" id="auth">
                <button type="submit" class="interface-authorization">start</button>
            </div>
        </form>
        <div class="footer">
            <h1>read only rules & apply datacenter information <h2 onclick="privacy()">privacy police</h2></h1>
        </div>
    </div>
    <?php
    if (isset($_GET['notif'])) {
        if ($_GET['notif'] == "fatal") {
            echo '<script>document.getElementById("pripol").classList.toggle("active");document.getElementById("interface").classList.toggle("stop");</script>';
        } else {
            echo '<script>console.log("interface authentication!!")</script>';
        }
    }
    ?>
    <script type="text/javascript" src="model/app/library/webcam/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="model/app/library/webcam/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="model/app/library/webcam/webcam.js"></script>
    <script type="text/javascript" src="model/app/rest-api/api-webcam.js"></script>
    <script type="text/javascript" src="model/library/bootstrap/button-delay.js"></script>
    <script type="text/javascript" src="model/library/bootstrap/privacy-interface.js"></script>
</body>
</html>