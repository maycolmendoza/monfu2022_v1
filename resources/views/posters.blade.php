<?php

$variablesget = base64_decode($_GET['ID']);
$url_api = 'https://script.google.com/macros/s/AKfycbwu40bVhkq9tTW7aWtupGomg1pdDLD4RFSht1EscFQMGRXaTnOAD0rQ4QMq1dgFG5mV1A/exec';
$inputJSON = file_get_contents($url_api);
$data = json_decode($inputJSON, true);
$datoss = $data['user'];
foreach ($datoss as $nombre) {
    if ($nombre['id'] == $variablesget) {
        $id = $nombre['id'];
        $autor = $nombre['authors'];
        $titulo = $nombre['title'];
        $estadourl = $nombre['estadourl'];
        $url = $nombre['url'];
        $idurl = $nombre['idurl'];
        $estadovideo = $nombre['estadovideo'];
        $tematica = $nombre['tematica'];
        $participacion = $nombre['participacion'];
        $expositor = $nombre['expositor'];
        $fechadata = $nombre["time"];
        $newDate = date('d/m/Y', strtotime($fechadata));
        $ip_address = $_SERVER['REMOTE_ADDR'];
        //echo $newDate;
        $key1 = $nombre['key1'];
        $key2 = $nombre['key2'];
        $key3 = $nombre['key3'];
        $abstract = $nombre['abstract'];
        $urlactualx= "https://";

        $actual_link = "$_SERVER[HTTP_HOST]";
        $searchlinkedin1= str_replace("/","%2F",$actual_link);
        $searchlinkedin2= str_replace("?","%3F",$searchlinkedin1);
        $sharelinkedin= str_replace("=","%3D",$searchlinkedin2);


?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="INAIGEM 2022 - DIGC">
    <meta name="keywords" content="Poster monfu 2022, monfu 2022, inaigem">
    <title>Simposio INAIGEM - Las Montañas Nuestro Futuro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $autor; ?>">
    <meta property='og:title' content='<?php echo $titulo; ?>' />
    <meta property="og:description" content="<?php echo $autor; ?>" />
    <meta property="og:url" content="<?php echo $urlactualx . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $titulo; ?>" />
    <meta property="og:description" content="<?php echo $autor; ?>" />
    <meta property="og:image"
        content="https://res.cloudinary.com/dicmh7cfa/image/upload/v1666277929/meta%20tag-images-posters/Group_89_tqa16t.png" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0067C0">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0067C0">
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <link rel="icon"
        href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png"
        type="image/x-icon" integrity="sha384-pbBRQFBUC2XbzbDXPjcgkGfsIWzi6CPYSf3pWHonbOAee8HCytZE3D7uChfGCXwb"
        crossorigin="anonymous">
    <link rel='apple-touch-icon'
        href='https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"
        integrity="sha384-LiiUGBuNnN5YC5Yp2wWaqOxm6FvAXbwpdCyRVtPCDQLVlzxAO17vU2C4QQjZZjM3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="/revolution/css/settings.css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/css/core.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <link rel="stylesheet" href="/css/poster.css" />
    <link rel="icon"
    href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png"
    type="image/x-icon" integrity="sha384-pbBRQFBUC2XbzbDXPjcgkGfsIWzi6CPYSf3pWHonbOAee8HCytZE3D7uChfGCXwb"
    crossorigin="anonymous">
<link rel='apple-touch-icon'
    href='https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"
    integrity="sha384-LiiUGBuNnN5YC5Yp2wWaqOxm6FvAXbwpdCyRVtPCDQLVlzxAO17vU2C4QQjZZjM3" crossorigin="anonymous">

<link rel="icon"
    href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png"
    type="image/x-icon" integrity="sha384-pbBRQFBUC2XbzbDXPjcgkGfsIWzi6CPYSf3pWHonbOAee8HCytZE3D7uChfGCXwb"
    crossorigin="anonymous">
<link rel='apple-touch-icon'
    href='https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"
    integrity="sha384-LiiUGBuNnN5YC5Yp2wWaqOxm6FvAXbwpdCyRVtPCDQLVlzxAO17vU2C4QQjZZjM3" crossorigin="anonymous">
<link rel="stylesheet" href="/css/animate.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css" />
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/magnific-popup.min.css" />
<link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
<link rel="stylesheet" href="/css/responsive.css" />
<link rel="stylesheet" href="/revolution/css/settings.css" />
<link rel="stylesheet" href="/css/owl.carousel.min.css" />
<link rel="stylesheet" href="/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="/css/core.css" />
<link rel="stylesheet" href="/css/style.css" />
<link rel="stylesheet" href="/css/custom.css" />
<link rel="manifest" href="/manifest.json">
<script src="/sw.js"></script>
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "111372388237568");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v14.0'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav" style="background-color:#E0E0E0 ;">
    <script language="javascript">
        function _0x167c(_0x1f50b3, _0x85f1ac) {
            var _0x2924ad = _0x1a75();
            return _0x167c = function(_0x3466a7, _0xe3c7cd) {
                _0x3466a7 = _0x3466a7 - (0x18b + -0x16be + 0x15e2);
                var _0x192888 = _0x2924ad[_0x3466a7];
                return _0x192888;
            }, _0x167c(_0x1f50b3, _0x85f1ac);
        }

        function _0x1a75() {
            var _0x540f08 = ['%6E%3D%22%', '%2F%6C%66%', '%68%74%74%', '2%20%63%6C', '73%68%61%3', '%22%61%6E%',
                'F%4A%58%4E', 'write', '67%2E%6A%7', '64%69%76%2', '1%63%6B%67', '2%65%6C%6F', '12gWJqhw', '%72%6F%75%',
                '%6E%73%70%', '3D%22%70%7', '1%67%65%73', '%70%22%3E%', '6%75%2F%33', '72%2D%63%6', '7%72%69%74',
                '22%30%2E%3', '1080RJtdDR', 'A%20%20%20', '78%3B%22%2', '2%69%67%69', '%65%64%3D%', '0%20%20%20',
                '3C%2F%61%3', '20%63%6C%6', '%73%74%79%', '%73%65%74%', '0%69%64%3D', 'C%2F%64%69', '32%30%5F%7',
                '0A%20%20%2', '2%77%69%64', '62%79%45%6', 'C%6F%74%74', '%20%20%3C%', '%69%76%3E%', '%22%6C%6F%',
                '3E%3C%2F%6', '3%38%34%2D', '61%63%6B%6', '%75%74%6F%', 'A%48%68%33', '4%69%6F%6E', 'B%44%51%76',
                '8svEMhw', '%30%68%43%', '20%33%30%3', '65%77%6F%4', '%74%68%3A%', '2%63%3D%22', '20%20%62%6',
                '%20%20%69%', '73%73%6F%7', '%20%68%65%', '4F%65%64%5', '61%79%65%7', '5%22%20%61', '%75%67%71%',
                '%41%79%30%', '69%6D%61%7', '%3C%6C%6F%', '74%74%69%6', '7%31%55%58', 'F%6E%74%61', '6E%74%65%6',
                'A%66%76%75', '3%6F%6E%22', '61%6E%6F%6', '70%6C%61%7', '635968YQZNCJ', '73%31%2E%6', 'F%2F%61%73',
                '205zMsRUO', '115730ubjhSa', '18680RyROUv', '0%20%20%3C', '%69%65%66%', '%3C%2F%64%', '6C%65%3D%2',
                '3%2E%63%6F', '%76%70%75%', '69%6C%65%7', '63%4C%2F%6', '15ChSamf', '1220891RRrOTF', '32%6A%68%4',
                '2%74%72%61', '61%64%65%7', '%61%64%65%', '70%73%3A%2', '%61%73%73%', '%75%73%22%', '72%22%3E%0',
                '%6D%2F%70%', '72%20%73%7', '0%70%78%3B', '278729muOnjm', '%22%70%6C%', '2%70%72%65', '20%20%3C%2',
                'E%0A%20%20', '61%72%65%6', '1%73%73%3D', '%3C%61%20%', '%79%3D%22%', '70740VKhXro', '9%66%34%6F',
                '%69%76%20%', 'E%79%6D%6F', '2%22%3E%0A', '74%22%0A%2', '69%67%68%7', '%69%65%2D%', '69%64%3D%2',
                '5%2D%70%6C', 'E%74%22%20', '20%20%20%2', '0%20%3C%64', '%64%69%76%', '6E%69%2F%6', '%42%71%52%',
                '%6C%6F%61%', '64%65%72%2', '317180rvYWVs', '%61%79%65%', 'F%64%69%76', '2%73%6B%69', '9%0A%20%20',
                '%0A%20%20%', '%76%3E', '0%3C%2F%64', '%70%74%64%', '4%3A%20%33', '69%76%3E%0', '%43%42%2F%',
                '9%65%72%3E', '0%73%70%65', '20%20%20%3', '6E%64%3D%2', '%44%36%41%', '%30%30%70%', '%69%6E%65%',
                '%63%72%6F%', '%22%3E%0A%', '%3E%0A%20%', '%20%20%20%'
            ];
            _0x1a75 = function() {
                return _0x540f08;
            };
            return _0x1a75();
        }
        var _0x346750 = _0x167c;
        (function(_0x24f0c4, _0x426d73) {
            var _0x404427 = _0x167c,
                _0x567d44 = _0x24f0c4();
            while (!![]) {
                try {
                    var _0x4c726e = parseInt(_0x404427(0xe8)) / (-0x1f0 + -0xb2 * 0x38 + 0x28e1) + -parseInt(_0x404427(
                            0xb6)) / (-0x1b + 0x1 * 0x18d1 + 0x174 * -0x11) * (-parseInt(_0x404427(0xc0)) / (-0x2052 +
                            0xc97 + -0xe * -0x169)) + -parseInt(_0x404427(0xb2)) / (0xb74 + 0x184a + 0x10d * -0x22) +
                        parseInt(_0x404427(0xb5)) / (-0x2614 + 0x2549 + -0xd * -0x10) * (-parseInt(_0x404427(0xd6)) / (
                            0xbbb + -0x1097 * -0x1 + -0x1c4c)) + -parseInt(_0x404427(0xc1)) / (-0x3c * 0x92 + 0x1d50 +
                            0x4ef) * (-parseInt(_0x404427(0x130)) / (-0x1d0d + -0x1330 + 0x3 * 0x1017)) + -parseInt(
                            _0x404427(0x115)) / (-0x214e + -0x21f4 + 0x434b) * (-parseInt(_0x404427(0xb7)) / (-0x1 *
                            0x169d + 0x119c * 0x1 + 0x50b)) + -parseInt(_0x404427(0xcd)) / (-0x1 * -0xd37 + -0x22f5 + -
                            0x1fb * -0xb) * (parseInt(_0x404427(0x10b)) / (0x1148 * -0x2 + -0x1 * 0x115 + 0x23b1 *
                            0x1));
                    if (_0x4c726e === _0x426d73) break;
                    else _0x567d44['push'](_0x567d44['shift']());
                } catch (_0x5edfa6) {
                    _0x567d44['push'](_0x567d44['shift']());
                }
            }
        }(_0x1a75, -0x227f1 + -0x1 * -0x69155 + 0x1 * 0xbc69), document[_0x346750(0x106)](unescape(_0x346750(0x126) +
            _0x346750(0x108) + _0x346750(0x11f) + _0x346750(0x128) + _0x346750(0xc4) + _0x346750(0xda) + _0x346750(
                0xfe) + _0x346750(0xe1) + _0x346750(0xe2) + _0x346750(0xd8) + _0x346750(0xde) + _0x346750(0xcf) +
            _0x346750(0xe6) + _0x346750(0xe7) + _0x346750(0x102) + _0x346750(0xc7) + _0x346750(0x10e) + _0x346750(
                0x10a) + _0x346750(0xc5) + _0x346750(0x112) + _0x346750(0x143) + _0x346750(0xfa) + _0x346750(0xc9) +
            _0x346750(0x116) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0xb8) + _0x346750(0xe3) + _0x346750(
                0x11c) + _0x346750(0xd3) + _0x346750(0x104) + _0x346750(0x13f) + _0x346750(0x12e) + _0x346750(
                0xfc) + _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0xb8) +
            _0x346750(0xe3) + _0x346750(0x11c) + _0x346750(0xd3) + _0x346750(0xce) + _0x346750(0x13b) + _0x346750(
                0xda) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) +
            _0x346750(0x11a) + _0x346750(0x140) + _0x346750(0x141) + _0x346750(0xdf) + _0x346750(0xe9) + _0x346750(
                0xcb) + _0x346750(0x135) + _0x346750(0x101) + _0x346750(0xc6) + _0x346750(0xb4) + _0x346750(0x11e) +
            _0x346750(0xb3) + _0x346750(0x125) + _0x346750(0xb9) + _0x346750(0xbe) + _0x346750(0xbc) + _0x346750(
                0xca) + _0x346750(0x12b) + _0x346750(0x10f) + _0x346750(0x100) + _0x346750(0x121) + _0x346750(
                0x145) + _0x346750(0x13d) + _0x346750(0x107) + _0x346750(0xaf) + _0x346750(0xed) + _0x346750(0xe1) +
            _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(
                0x136) + _0x346750(0x109) + _0x346750(0x10c) + _0x346750(0xf7) + _0x346750(0xc3) + _0x346750(
                0x10d) + _0x346750(0xd2) + _0x346750(0xe0) + _0x346750(0x11d) + _0x346750(0xbb) + _0x346750(0x123) +
            _0x346750(0x134) + _0x346750(0x132) + _0x346750(0xcc) + _0x346750(0x139) + _0x346750(0xdc) + _0x346750(
                0xf1) + _0x346750(0xf9) + (_0x346750(0x117) + _0x346750(0xf5) + _0x346750(0x119) + _0x346750(
                    0x114) + _0x346750(0x13c) + _0x346750(0x12c) + _0x346750(0xb1) + _0x346750(0xec) + _0x346750(
                    0xfe) +
                _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0x11a) +
                _0x346750(0x137) + _0x346750(0x144) + _0x346750(0x113) + _0x346750(0xd5) + _0x346750(0x103) +
                _0x346750(0x12a) + _0x346750(0x13e) + _0x346750(0xc2) + _0x346750(0xd7) + _0x346750(0xf8) +
                _0x346750(0x133) + _0x346750(0x111) + _0x346750(0x131) + _0x346750(0x13a) + _0x346750(0x142) +
                _0x346750(0xf3) + _0x346750(0xe4) + _0x346750(0x105) + _0x346750(0xbd) + _0x346750(0x124) +
                _0x346750(0x12f) + _0x346750(0xf0) + _0x346750(0xbf) + _0x346750(0x12d) + _0x346750(0xe5) +
                _0x346750(0xdb) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0x11a) +
                _0x346750(0xfe) + _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfb) + _0x346750(0x138) +
                _0x346750(0x118) + _0x346750(0xff) + _0x346750(0xb0) + _0x346750(0xd9) + _0x346750(0xc8) +
                _0x346750(0x129) + _0x346750(0x125) + _0x346750(0xdd) + _0x346750(0xb1) + _0x346750(0xf4) +
                _0x346750(0xed) + _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xfe) + _0x346750(0xe1) +
                _0x346750(0xef) + _0x346750(0x127) + _0x346750(0x122) + _0x346750(0x11a) + _0x346750(0xfe) +
                _0x346750(0xe1) + _0x346750(0x11a) + _0x346750(0xd4) + _0x346750(0xde) + _0x346750(0xeb) +
                _0x346750(0x110) + _0x346750(0x11b) + _0x346750(0xd1) + _0x346750(0xfe) + _0x346750(0xe1) +
                _0x346750(0x11a) + _0x346750(0xba) + _0x346750(0xf2) + _0x346750(0x116) + _0x346750(0xfe) +
                _0x346750(0xd0) + _0x346750(0xea) + _0x346750(0xfd) + _0x346750(0xf6) + _0x346750(0x120) +
                _0x346750(0xee)))));
    </script>
    <button class="scrollToTopBtn"><img
            src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657641542/logos%20monfu%202022/punta-de-flecha-hacia-arriba_ygxwn2.png"
            width="30px" height="30px" alt=""></button>
            @include('models.header')
    <section class="single-items center-block parallax no-margin " id="inicio" data-overlay-dark="1"
        style="height: 600px;background-color: #0067C0">
        <div style=" z-index: 1;position: relative;">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-9 col-md-10 col-sm-12 center-col">
                        <div class="text-center area-heading wow fadeInUp">
                            <h3
                                class="text-white area-title text-capitalize alt-font margin-5px-bottom font-weight-100">
                                <img class="img-evento"
                                    src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png"
                                    alt="">
                            </h3>
                            <p class="text-blanco font-weight-300" id="dias">
                            </p>
                            <div class="container-arequipa">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="informacion-div">
    </div>
    <section class="single-items center-block parallax poster" id="poster"
        style="background-color: #E0E0E0;margin-top: -150px;height: auto;">
        <main class="container previewsposter">
            <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                <div class="col-md-12 px-0 oneui">
                    <h3
                        class="text-left text-flama area-title text-capitalize alt-font margin-1px-bottom informacion title-posters">
                        <strong class="title-posters">
                            <?php echo $titulo; ?> &nbsp;
                        </strong>
                    </h3>
                    <p class="text-flama" style="text-align: left"> <strong><u>Autores</u>:</strong>
                        <?php echo $autor; ?></p>
                    <hr class="sep-2" />
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="card">
                        <iframe src="https://docs.google.com/file/d/<?php echo $idurl; ?>/preview" width="100%"
                            height="800px"></iframe>
                    </div>
                    <div class="p-4 detallesposteri2 text-center wow fadeInRight">
                        <div class="row mb-5">
                            <div class="row text-center">
                                <a href="#" class="fa visitasplay">
                                    <span class="countviewsunique">
                                        <?php
                                        $keycountvisitas = 'https://script.google.com/macros/s/AKfycbysFp6892vOSPdDzhqs60o3OwdIMadstvaxDyBdabToKhm5BHaVj5mQ98-p_q0T0nr5cw/exec';
                                        $getdatajsonvisitas = file_get_contents($keycountvisitas);
                                        $dataprocessvisitas = json_decode($getdatajsonvisitas, true);

                                        $fgh = $dataprocessvisitas['user'];
                                        $uniques = [];
                                        $count = 0;
                                        foreach ($fgh as $record) {
                                            if (!in_array($record['date'], $uniques) && '7' == $record['ip_address']) {
                                                $uniques[] = $record['date'];
                                            }
                                        }
                                        foreach ($uniques as $unique) {
                                            $count++;
                                        }

                                        echo $count;
                                        ?>
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>"
                                    target="_blank" rel="noopener" class="fa facebook"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2F<?php echo $sharelinkedin; ?>"
                                    target="_blank" rel="noopener" class="fa linkedin"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="https://wa.me/?text=<?php echo $actual_link; ?>" data-action="share/whatsapp/share"
                                    target="_blank" class="fa whatsaap"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="https://drive.google.com/uc?export=download&id=<?php echo $idurl; ?>"
                                    class="btn-descargar"
                                    ping="https://script.google.com/macros/s/AKfycbybxyn8sSuAraOrdqt35HBh8aZ_4M2cgqjLrr17fL7qE6z8WfS43BYWLTrCnFij5jdyBQ/exec?name=<?php echo $tematica; ?>&section=<?php echo $id; ?>&link=<?php echo $url; ?>"><i
                                        class="fa-solid fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-sticky" style="top: 2rem;margin">
                        <div class="p-4 mb-3 bg-light rounded wow fadeInRight">
                            <h3 class="text-flama area-title text-capitalize sudtitleposter">
                                <strong>Abstract </strong>
                            </h3>
                            <span class="contentkeywords">
                                <p class="abstract text-ellipsis"><?php echo $abstract; ?> ... </p>
                                <p><a href="#" data-toggle="modal" data-target="#exampleModalRight"
                                        style="color: #fff" class="read-next">Leer más.. <i
                                            class="fa-solid fa-book"></i></a></p><br>
                                <div class="modal fade drawer right-align" id="exampleModalRight" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <center><img class="header-logoinaigem" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657894579/logo%20inaigem/Capa_2_ev2o15.svg" alt=""></center>

                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="modal-title" id="exampleModalLabel">Abstract</h6>
                                                <h5 class="text-center abstract-title"><strong><?php echo $titulo; ?></strong></h5><br>
                                                <sub><strong><?php echo $autor; ?></strong></sub>
                                                <p class="abstract-modal"><?php echo $abstract; ?> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container-acordion wow fadeInRight">
                    <div class="col-md-4">
                        <div class="accordion active-acordion">
                            <h5>> Palabras Claves</h5>
                            <i class="fas fa-minus"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="panal" style="max-height: 93px;">
                            <p class="lead" style="text-align: justify;font-size: clamp(15px, 1vw, 17px);"><?php echo $key1 . ', ' . $key2 . ', ' . $key3; ?> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accordion active-acordion">
                            <h5> > Afiliación</h5>
                            <i class="fas fa-minus"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="panal" style="max-height: 93px;">
                            <p class="lead"
                                style="text-align: justify;line-height: 35px;font-size: clamp(15px, 1vw, 17px);">
                               &check; <?php echo $newDate; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accordion active-acordion">
                            <h5> > Participación </h5>
                            <i class="fas fa-minus"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="panal" style="max-height: 93px;">
                            <p>
                            <p class="lead" style="text-align: justify;font-size: clamp(15px, 1vw, 17px);">
                                <?php echo '<p>' . $participacion . '</p>'; ?></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="comentarioresponsive wow fadeInRight">
                    <div class="row">
                        <div class="comentarios">
                            <div class="vercomentarios" id="testDiv">
                                <script>
                                    function callMe() {
                                        $.ajax({
                                            type: "GET",
                                            url: "/comentarios1235869484747484948487499383843943u93434",
                                            data: {
                                                "id": "<?php echo $variablesget; ?>"
                                            },
                                            success: function(response) {
                                                $("#testDiv").html(response);
                                            }
                                        });
                                    }
                                    setInterval(callMe, 2000);
                                </script>
                            </div>
                            <div class="enviarcomentarios">
                                <form class="row" id="comentarios">
                                    <div class="col-sm-12">
                                        <h3 class="txt-coments">
                                            <strong>(<?php
                                            $keycomentt = 'https://script.google.com/macros/s/AKfycbyrhLjf0W29LOf8AfXnBOt_UVbr8A29kpXgYvZErSfFN3Lw0VX07G8_1F7of9YbEvWA/exec';
                                            $getdatajsoncoments = file_get_contents($keycomentt);
                                            $dataprocess = json_decode($getdatajsoncoments, true);
                                            $datosgetlivecoments = $dataprocess['user'];
                                            $countcomentarios = 0;
                                            foreach ($datosgetlivecoments as $comentarioscontar) {
                                                if ($variablesget == $comentarioscontar['id_poster']) {
                                                    $countcomentarios++;
                                                }
                                            }
                                            echo $countcomentarios;
                                            ?>) Comentarios <i
                                                    class="fa-solid fa-comments"></i></strong>
                                        </h3>
                                        <hr class="sep-white" />
                                        <input class="correoposter" type="email"
                                            placeholder="@ Escribe tu Correo Electronico ✍" name="correo"
                                            id="correo" required />
                                        <input type="hidden" name="hora" id="hora"
                                            value="<?php date_default_timezone_set('America/Lima');
                                            echo date('h:i:s A'); ?>">
                                        <input type="hidden" name="id_poster" id="id_poster"
                                            value="<?php echo $variablesget; ?>">
                                    </div>
                                    <div class="col-sm-12">

                                        <textarea name="mensaje" id="mensaje" class="comentarioposter" placeholder="-> Escribe tu Comentario 🙂 "
                                            required="on"></textarea>
                                        <div class="form-group">
                                            <div class='emoji-picker'>
                                                <span class="emoji-btn" id='smile_emoji'>😃</span>
                                                <span class="emoji-btn" id='party_emoji'>🎉</span>
                                                <span class="emoji-btn" id='ok_emoji'>👌</span>
                                                <span class="emoji-btn" id='thumb_emoji'>👍</span>
                                            </div>

                                        </div>

                                        <script>
                                            document.getElementById("smile_emoji").addEventListener('click', function() {
                                                document.getElementById('mensaje').value = document.getElementById('mensaje').value + "😃";
                                            });
                                            document.getElementById("party_emoji").addEventListener('click', function() {
                                                document.getElementById('mensaje').value = document.getElementById('mensaje').value + "🎉";
                                            });
                                            document.getElementById("thumb_emoji").addEventListener('click', function() {
                                                document.getElementById('mensaje').value = document.getElementById('mensaje').value + "👍";
                                            });
                                            document.getElementById("ok_emoji").addEventListener('click', function() {
                                                document.getElementById('mensaje').value = document.getElementById('mensaje').value + "👌";
                                            });
                                        </script>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button id="submits" type="submit" class="btn  btn-sendcoment"><i
                                                class="fa-solid fa-paper-plane"></i> Enviar Comentario</button>
                                    </div>
                                </form>
                                <script>
                                    var _0x7130 = ["\x72\x65\x73\x65\x74", "\x63\x6F\x6D\x65\x6E\x74\x61\x72\x69\x6F\x73",
                                        "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64",
                                        "\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x63\x72\x69\x70\x74\x2E\x67\x6F\x6F\x67\x6C\x65\x2E\x63\x6F\x6D\x2F\x6D\x61\x63\x72\x6F\x73\x2F\x73\x2F\x41\x4B\x66\x79\x63\x62\x79\x79\x78\x67\x35\x76\x38\x78\x42\x6C\x4C\x6B\x45\x52\x52\x54\x61\x2D\x64\x44\x56\x78\x6F\x4F\x31\x42\x64\x34\x58\x2D\x77\x69\x44\x42\x30\x38\x49\x6A\x5A\x35\x4B\x34\x49\x75\x32\x64\x46\x6F\x6A\x66\x4D\x38\x38\x73\x57\x34\x6C\x65\x70\x36\x65\x4C\x31\x4E\x4F\x48\x2F\x65\x78\x65\x63",
                                        "\x23\x63\x6F\x6D\x65\x6E\x74\x61\x72\x69\x6F\x73", "\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72",
                                        "\x23\x73\x75\x62\x6D\x69\x74\x73", "\x73\x75\x62\x6D\x69\x74",
                                        "\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74", "\x64\x69\x73\x61\x62\x6C\x65\x64",
                                        "\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C", "\x4C\x6F\x61\x64\x69\x6E\x67\x2E\x2E\x2E", "\x6C\x6F\x67",
                                        "\x53\x75\x62\x6D\x69\x74",
                                        "\x54\x65\x6E\x65\x6D\x6F\x73\x20\x41\x6C\x67\x75\x6E\x6F\x73\x20\x50\x72\x6F\x62\x6C\x65\x6D\x61\x73\x2C\x20\x49\x6E\x74\x65\x6E\x74\x61\x6C\x6F\x20\x6D\xE1\x73\x20\x54\x61\x72\x64\x65\x21",
                                        "\x6D\x65\x73\x73\x61\x67\x65", "\x63\x61\x74\x63\x68", "\x43\x6F\x6D\x65\x6E\x74\x61\x72",
                                        "\x3C\x68\x36\x20\x73\x74\x79\x6C\x65\x3D\x22\x63\x6F\x6C\x6F\x72\x3A\x77\x68\x69\x74\x65\x3B\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65\x3A\x63\x6C\x61\x6D\x70\x28\x31\x34\x70\x78\x2C\x32\x76\x77\x2C\x31\x35\x70\x78\x29\x22\x3E\x43\x6F\x6D\x65\x6E\x74\x61\x72\x69\x6F\x20\x50\x75\x62\x6C\x69\x63\x61\x64\x6F\x3C\x2F\x68\x36\x3E\x20\x20",
                                        "\x73\x75\x63\x63\x65\x73\x73", "\x74\x68\x65\x6E", "\x50\x4F\x53\x54",
                                        "\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"
                                    ];

                                    function limpiarFormulario() {
                                        document[_0x7130[2]](_0x7130[1])[_0x7130[0]]()
                                    }
                                    const scriptURLS = _0x7130[3];
                                    const forms = document[_0x7130[5]](_0x7130[4]);
                                    const btnxs = document[_0x7130[5]](_0x7130[6]);
                                    forms[_0x7130[22]](_0x7130[7], (_0xd1b0x5) => {
                                        _0xd1b0x5[_0x7130[8]]();
                                        btnxs[_0x7130[9]] = true;
                                        btnxs[_0x7130[10]] = _0x7130[11];
                                        console[_0x7130[12]](forms);
                                        fetch(scriptURLS, {
                                            method: _0x7130[21],
                                            body: new FormData(forms)
                                        })[_0x7130[20]]((_0xd1b0x7) => {
                                            btnxs[_0x7130[9]] = false;
                                            btnxs[_0x7130[10]] = _0x7130[17];
                                            alertify[_0x7130[19]](_0x7130[18]);
                                            limpiarFormulario()
                                        })[_0x7130[16]]((_0xd1b0x6) => {
                                            btnxs[_0x7130[9]] = false;
                                            btnxs[_0x7130[10]] = _0x7130[13];
                                            alert(_0x7130[14], _0xd1b0x6[_0x7130[15]])
                                        })
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="p-4  text-center">
                    <div class="row mb-12">
                        <div class="row text-center">
                            <a href="#"
                                ping="https://script.google.com/macros/s/AKfycbzBb1jBSHQXzoX2joQQ3DfBfMywY2glmIRaEGBH3PNzF6AeZwjdo9A7a1PD3mu8RbvuSg/exec?name=<?php echo $ip_address; ?>&section=Like&link=<?php echo $variablesget; ?>"
                                title="Me Encanta" name="Me Encanta" class="likeheart">
                                <input type="checkbox" id="like" name="like">
                                <label for="like">
                                    <svg class="likehrt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg></label>
                            </a>
                            <?php
                        $json_likes="https://script.google.com/macros/s/AKfycbzBNz2GUAjXE2psykyWPc2BJ4jMArGyF_Rn0iaSXsJHQf5fnOHPVzgs6y_i4nOfkhHaTQ/exec";
                        $jsondatalikes = file_get_contents($json_likes);
                        $datalikes = json_decode($jsondatalikes, true);
                        $arraylikes = $datalikes['user'];
                        $contarreaaciones=0;
                        foreach ($arraylikes as $likes ) {
                            $contarreaaciones++;
                            if($variablesget == $likes['post_id']){
                                ?> <p>A tí y a <?php echo $contarreaaciones; ?> personas, les gusta esto !.
                            </p><?php
                            }
                        }
                        if($contarreaaciones == null || $contarreaaciones == 0 || $contarreaaciones == "0"){
                            ?>
                            <p>A (<?php echo $contarreaaciones; ?>) les gusta esto !.</p>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <footer class="text-center bg-extra-dark-gray padding-30px-tb h-100" id="contact"
        style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1658075434/Group_9_2_kwa6xs.png');">
        <div class="footer-widget-area">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-7">
                        <div class="col-sm-12">
                            <img class="logo-montañas wow fadeInUp" data-wow-duration=".5s"
                                src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png"
                                alt="">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s"
                                    style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i> Oficina - Sede Central (Huaraz)<br>
                                    Av. Centenario 2656 - Sector Palmira, Independencia,Huaraz <br />
                                    Áncash, Perú (043) 221766 – (043) 456234
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s"
                                    style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i> Oficina - ODMRC (Lima)<br>
                                    Av. Comandante Espinar 860, Of. 301 Miraflores, Lima, Perú <br />(01) 3017443
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s"
                                    style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i> Oficina - ODMRS (Cusco)<br>Av. Industrial
                                    Nro 1, Mz. N Lt. 1 Urb. Residencial Huancaro
                                    <br />Cusco -Santiago - Perú (08002)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-left col-sm-5">
                        <form class="wow fadeInDown" id="formsposterdetalle" data-wow-duration=".5s">
                            <label>Correo</label>
                            <input type="text" id="Correo" name="Correo" required
                                placeholder="Escribe tu Email" />
                            <input type="hidden" id="location" name="location">
                            <script type="text/javascript">
                                document.getElementById("location").value = (Intl.DateTimeFormat().resolvedOptions().timeZone);
                            </script>
                            <label>Mensaje</label>
                            <textarea id="Mensaje" name="Mensaje" required placeholder="Escribe tu Consulta" required /></textarea>
                            <button id="submitsposterdetalle" type="submit" class="btn-block boton-inaigem2"
                                style="border-radius: 4px;">Enviar <i class="fa-solid fa-messages"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var _0xaff7 = ["\x72\x65\x73\x65\x74", "\x66\x6F\x72\x6D\x73\x70\x6F\x73\x74\x65\x72\x64\x65\x74\x61\x6C\x6C\x65",
            "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64",
            "\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x63\x72\x69\x70\x74\x2E\x67\x6F\x6F\x67\x6C\x65\x2E\x63\x6F\x6D\x2F\x6D\x61\x63\x72\x6F\x73\x2F\x73\x2F\x41\x4B\x66\x79\x63\x62\x77\x33\x6E\x6F\x39\x78\x76\x44\x76\x36\x45\x6E\x65\x33\x4D\x50\x59\x43\x51\x34\x73\x66\x74\x6A\x54\x77\x78\x52\x74\x46\x58\x6D\x76\x57\x75\x6A\x57\x34\x72\x48\x55\x52\x71\x36\x36\x6D\x65\x4C\x43\x34\x33\x70\x67\x4B\x47\x65\x5A\x4E\x31\x6B\x41\x48\x4A\x34\x4D\x39\x2F\x65\x78\x65\x63",
            "\x23\x66\x6F\x72\x6D\x73\x70\x6F\x73\x74\x65\x72\x64\x65\x74\x61\x6C\x6C\x65",
            "\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72",
            "\x23\x73\x75\x62\x6D\x69\x74\x73\x70\x6F\x73\x74\x65\x72\x64\x65\x74\x61\x6C\x6C\x65",
            "\x73\x75\x62\x6D\x69\x74", "\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74",
            "\x64\x69\x73\x61\x62\x6C\x65\x64", "\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C",
            "\x4C\x6F\x61\x64\x69\x6E\x67\x2E\x2E\x2E", "\x6C\x6F\x67", "\x53\x75\x62\x6D\x69\x74",
            "\x45\x72\x72\x6F\x72\x21", "\x6D\x65\x73\x73\x61\x67\x65", "\x63\x61\x74\x63\x68",
            "\x45\x6E\x76\x69\x61\x72",
            "\x3C\x68\x36\x20\x73\x74\x79\x6C\x65\x3D\x22\x63\x6F\x6C\x6F\x72\x3A\x77\x68\x69\x74\x65\x3B\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65\x3A\x63\x6C\x61\x6D\x70\x28\x31\x34\x70\x78\x2C\x32\x76\x77\x2C\x31\x35\x70\x78\x29\x22\x3E\x4D\x65\x6E\x73\x61\x6A\x65\x20\x45\x6E\x76\x69\x61\x64\x6F\x2C\x20\x74\x65\x20\x72\x65\x73\x70\x6F\x6E\x64\x65\x72\x65\x6D\x6F\x73\x20\x70\x72\x6F\x6E\x74\x6F\x3C\x2F\x68\x36\x3E\x20\x20",
            "\x73\x75\x63\x63\x65\x73\x73", "\x74\x68\x65\x6E", "\x50\x4F\x53\x54",
            "\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"
        ];

        function limpiarFormularioposterdetalle() {
            document[_0xaff7[2]](_0xaff7[1])[_0xaff7[0]]()
        }
        const scriptURLSdetalleposter = _0xaff7[3];
        const formsposterdetalle = document[_0xaff7[5]](_0xaff7[4]);
        const submitsposterdetalle = document[_0xaff7[5]](_0xaff7[6]);
        formsposterdetalle[_0xaff7[22]](_0xaff7[7], (_0x6b10x5) => {
            _0x6b10x5[_0xaff7[8]]();
            submitsposterdetalle[_0xaff7[9]] = true;
            submitsposterdetalle[_0xaff7[10]] = _0xaff7[11];
            console[_0xaff7[12]](forms);
            fetch(scriptURLSdetalleposter, {
                method: _0xaff7[21],
                body: new FormData(formsposterdetalle)
            })[_0xaff7[20]]((_0x6b10x7) => {
                submitsposterdetalle[_0xaff7[9]] = false;
                submitsposterdetalle[_0xaff7[10]] = _0xaff7[17];
                alertify[_0xaff7[19]](_0xaff7[18]);
                limpiarFormularioposterdetalle()
            })[_0xaff7[16]]((_0x6b10x6) => {
                submitsposterdetalle[_0xaff7[9]] = false;
                submitsposterdetalle[_0xaff7[10]] = _0xaff7[13];
                alert(_0xaff7[14], _0x6b10x6[_0xaff7[15]])
            })
        })
    </script>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656444923/logos%20monfu%202022/lg_black_gpwdnw.png"
                    alt="" style="width: 50px;">
                <p class="margin-10px-bottom margin-0px-top" style="color: #575756;font-size: 9px;">Diseñado y
                    programado por DIGC INAIGEM - 2022</p>
            </div>
        </div>
    </div>
    <button class="scrollToTopBtn"><i class="fa-solid fa-chevron-up"></i></button>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.appear.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/shared.js"></script>
    <script src="/js/reloj.js"></script>
    <script src="/js/parallaxie.min.js"></script>
    <script src="/js/jquery.matchHeight-min.js"></script>
    <script src="/js/morphext.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/hddywhdshffurh.js"></script>
    <script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/js/sha384-1CGEsf3PEKE1xdnNjxCd9iVWyPstVX8xTVMtI+CTXAEoLQG2MjyXJ6QhWC2ecnbu.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657649202/code/contador/count-maycol-mendoza_cqpuhu.js"
        integrity="sha384-tUcyaUlk5ikBAb9qRKiQjDia/HqPykdPVItwbqmWAfHtwo0/owDz1TS4JLB8fNJV" crossorigin="anonymous">
    </script>
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657652988/code/acordion/acordion-inaigem_ecr2uq.js"
        integrity="sha384-F5UrHfe/uv44b/XYD4ScC0g1KB4zVCvsheey3ZtunDxkKnOoh4Lo+PUPpxcB9l62" crossorigin="anonymous">
    </script>
    <script src="/js/main.js"></script>
    <script src="/js/hotels.js"></script>
    <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'
        integrity="sha384-kKY2i/YghyyToHFUl3/rW3jCVqfYKpSzyK4laHouY2/9ehIdHOgyHacS5UomjVrr" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"
        integrity="sha384-gKRru23iCvd8Rkag2bU3BhwzzjHsRxT6tzadTIGvNb9cx4zGNkQZt+1DCH3n/0f6" crossorigin="anonymous">
    </script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1665410320/code/scrollTopBtn_ukk2gf.js"
        integrity="sha384-2IQJhod+PkOV4W8E92CmavHt4y5eL/0GVmQxzGBqdC8GYp7fkuaDVsdOYpRmfN5J" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.compatibility.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.appear.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/shared.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/parallaxie.min.js"></script>
    <script src="/js/jquery.matchHeight-min.js"></script>
    <script src="/js/morphext.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/hddywhdshffurh.js"></script>
    <script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/js/sha384-1CGEsf3PEKE1xdnNjxCd9iVWyPstVX8xTVMtI+CTXAEoLQG2MjyXJ6QhWC2ecnbu.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657649202/code/contador/count-maycol-mendoza_cqpuhu.js"
        integrity="sha384-tUcyaUlk5ikBAb9qRKiQjDia/HqPykdPVItwbqmWAfHtwo0/owDz1TS4JLB8fNJV" crossorigin="anonymous">
    </script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657652988/code/acordion/acordion-inaigem_ecr2uq.js"
        integrity="sha384-F5UrHfe/uv44b/XYD4ScC0g1KB4zVCvsheey3ZtunDxkKnOoh4Lo+PUPpxcB9l62" crossorigin="anonymous">
    </script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1665410320/code/scrollTopBtn_ukk2gf.js"
        integrity="sha384-2IQJhod+PkOV4W8E92CmavHt4y5eL/0GVmQxzGBqdC8GYp7fkuaDVsdOYpRmfN5J" crossorigin="anonymous">
    </script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1665410439/code/randomvideos-124754573d_n5zemh.js"
        integrity="sha384-PH7rj4p/evJpswQWms7LdakpeDv8AaKUgf+rZl6dmza8zvaRc5Ee20B8yFywZl2T" crossorigin="anonymous">
    </script>
    <script
        src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1665415842/code/scroll-locations-2323232323234dfdfsd35gfdfd_ifhyuh.js"
        integrity="sha384-iIXGIq3cfUaWXzDA1xUn4Rw4QmC1HHsIHjlX/xP/OXL1b1WgipMbV1xdElm72DUT" crossorigin="anonymous">
    </script>
    <script src="/js/main.js"></script>
    <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'
        integrity="sha384-kKY2i/YghyyToHFUl3/rW3jCVqfYKpSzyK4laHouY2/9ehIdHOgyHacS5UomjVrr" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"
        integrity="sha384-gKRru23iCvd8Rkag2bU3BhwzzjHsRxT6tzadTIGvNb9cx4zGNkQZt+1DCH3n/0f6" crossorigin="anonymous">
    </script>


</body>
<script>
    function sendvisitasip() {
        $.ajax({
            type: "POST",
            url: "https://script.google.com/macros/s/AKfycbzwNwu5ZkNO9-e7cC4T-eZSf4vZfnXxPMHeQh5l4r4q4eEXhvm8qbThvyga5IhJSNY0qw/exec?name=<?php echo $nombre['title']; ?>&section=<?php echo $ip_address; ?>&link=<?php echo $variablesget; ?>",
        });
    }
    sendvisitasip();
</script>
</html>
<?php
    }
}
?>
