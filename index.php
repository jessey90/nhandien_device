<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords"
          content="game doat my nhan,iphone game,game iphone,game andoid,android game,download game iphone,free game iphone,game iphone free, game android free"/>
    <meta name="author" content="Đinh Tuấn Anh"/>
    <meta name="description" content="Download Game Đoạt Mỹ Nhân"/>
    <title>Download Game Đoạt Mỹ Nhân</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-32394406-9', 'vcmobile.vn');
        ga('send', 'pageview');
    </script>
</head>
<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

//Xét theo đại lý
$ref = (isset($_GET['ref'])) ? $_GET['ref'] : 'B52';

if( $detect->isiOS() ){
    header("Location: https://itunes.apple.com/us/app/oat-my-nhan/id725965448?mt=8");
}

if( $detect->isAndroidOS() ){
    header("Location: https://play.google.com/store/apps/details?id=vn.sohagame.DoatMyNhan");
}