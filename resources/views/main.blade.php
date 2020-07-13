<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ЖК Альпийский парк</title>
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/saletabs.css" />
    <link rel="stylesheet" href="assets/css/twentytwenty.css" type="text/css" media="screen" />

    <script defer src="assets/js/jquery-3.2.1.min.js"></script>
    <script defer src="https://api-maps.yandex.ru/2.1/?apikey=782104c9-8198-45ec-b0fe-990835ce26df&load=package.full&lang=ru_RU&onload=init"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script defer src="assets/js/jquery.fancybox.min.js"></script>
    <script defer src="assets/js/jquery.maskedinput.min.js"></script>
    <script defer src="assets/js/formCheck.js"></script>

    <script defer src="assets/js/main.js"></script>
    <script defer src="assets/js/jquery.event.move.js" type="text/javascript"></script>
    <script defer src="assets/js/jquery.twentytwenty.js" type="text/javascript"></script>

    <script defer src="assets/js/mappd.js"></script>
</head>
<body>
<header class="l-wrap" id="header">
    <div class="bg-img">
        <div class="container-fluid d-none d-lg-block" style="padding-top: 24px;">
            <div class="row align-items-center justify-content-between">
                <div class="col-4">
                    <div class="item-left">
                        <img src="assets/img/logo-main.png">
                    </div>
                </div>
                <div class="col-4">
                    <div class="item-right">
                        <img src="assets/img/nomer1.png" width="150px">
                        <span><strong>Лучший строящийся жилой<br/>комплекс в г.Юрга</strong></span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="item-left">
                        <div class="line" style="width: 17%; height: 4px; background-color: rgb(231, 50, 114); border-radius: 0px;"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start" style="height: 314px;">
                <div class="col-6">
                    <div class="item-left">
                        <span style="font-size: 30px; ">Квартиры класса city-comfort</span>
                        <span style="font-size: 63px; ">от 1026900 рублей</span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3">
                    <div class="item-banners animated fadeInUp" style="background-color: rgba(231, 50, 114, 0.9);">
                        <img src="assets/img/header/bnr-1.png"><span>В ипотеку от 5 593 руб/мес</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-banners animated fadeInUp" style="background-color: rgba(219, 74, 30, 0.9);animation-delay: 200ms">
                        <img src="assets/img/header/bnr-2.png"><span>Европланировки!</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-banners animated fadeInUp" style="background-color: rgba(131,0,219,0.9);animation-delay: 200ms">
                        <img src="assets/img/header/bnr-kv.png"><span>2-комн. кв. за 1 400 000 руб</span>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                   <div class="item-banners animated fadeInUp" style="background-color: rgba(231, 50, 114, 0.9);animation-delay: 400ms">
                     <img src="img/header/bnr-3.png"><span>Рассрочка 0%</span>
                   </div>
                 </div>-->
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-5">
                    <div class="contact-form">
                        <p style="text-align: center; font-size: 18px;">Оставьте заявку прямо сейчас и получите бесплатную консультацию</p>
                        <form id="cForm">
                            <div class="formContent">
                                <!--<input id="name" type="text" class="field" name="name" placeholder="Имя">
                                <input id="phone" type="text" class="field" name="phone" required placeholder="Телефон*">-->
                                <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Получить консультацию <i class="fas fa-phone" style="margin-left: 10px"></i></button>
                            </div>
                        </form>
                        <p style="text-align: center; font-size: 12px;">Или позвоните по номеру 8(38451) 4-09-09</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-lg-none">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="header-lg">
                    <img src="assets/img/logo-main.png" style="margin: 0 auto">
                    <span style="font-size: 15px; padding-top: 20px">Квартиры класса city-comfort</span>
                    <span style="font-size: 33px;">от 1026900 рублей</span>
                    <img src="assets/img/nomer1.png" width="50px" style="margin: 0 auto;">
                    <span><strong>Лучший строящийся жилой<br/>комплекс в г.Юрга</strong></span>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="item-banners animated fadeInUp" style="background-color: rgba(231, 50, 114, 0.9);">
                    <img src="assets/img/header/bnr-1.png"><span>В ипотеку от 5 593 руб/мес</span>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="item-banners animated fadeInUp" style="background-color: rgba(224, 43, 32, 0.9);">
                    <img src="assets/img/header/bnr-2.png"><span>Европланировки!</span>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="item-banners animated fadeInUp" style="background-color: rgba(131,0,219,0.9);">
                    <img src="assets/img/header/bnr-kv.png"><span>2-комн. кв. за 1 400 000 руб</span>
                </div>
            </div>
        </div>
        <!--<div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="item-banners animated fadeInUp" style="background-color: rgba(196, 128, 27, 0.9);">
                  <img src="img/header/bnr-3.png"><span>Рассрочка 0%</span>
                </div>
          </div>
        </div>-->
    </div>

</header>
<hr class="style13" style="margin-top: 20px">


<!-- Блок 2 -->

</body>
</html>
