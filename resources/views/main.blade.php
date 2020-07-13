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
<!-- Конец Блок 2 -->

<!-- Меню -->
<div class="header-menu">
    <div class="topMenu">
        <ul id="menu">
            <div class="iconMenu"><img src="assets/img/menu-closed-icon.png" alt="Иконка меню"/></div>
            <div class="logoMenu"><img src="assets/img/logo-border.png"></div>
            <div class="iconTel"><a href="tel:+73845140909" class="phone"></a></div>
            <div class="itemsMenu">
                <li><a href="/#block7" class="menu__link">Выбрать квартиру</a></li>
                <li><a href="/#block5" class="menu__link">Район</a></li>
                <li><a href="/" class="img__link"><img src="assets/img/logo-border.png"></a></li>
                <li><a href="/#block10" class="menu__link">Ипотека</a></li>
                <li><a href="/#block11" class="menu__link">Ход строительства</a></li>
            </div>
        </ul>
        <div class="telMenu">
            <a href="tel:+73845140909" class="callback__phone">+7 (384) 514-09-09</a>
            <span><i class="fas fa-phone"></i> позвонить</span>
        </div>
    </div>
</div>
<!-- Конец Меню -->

<!-- Блок 3 -->
<div class="l-wrap" id="Block3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="item-center">
                    <div class="video-responsive">
                        <!-- <iframe width="auto" height="auto" src="https://www.youtube.com/embed/NNFKvqiTmSk?showinfo=0&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/gr08fcew1yE?showinfo=0&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span style="font-size: 64px;"><strong>8 причин</strong></span>
                    <span style="font-size: 34px;">переехать</span>
                    <span style="font-size: 34px;">в ЖК "Альпийский парк"</span>
                    <div class="line" style="width: 25%; height: 4px; background-color: #e02b20; border-radius: 0px;margin: 10px auto"></div>
                    <div class="line" style="width: 17%; height: 4px; background-color: #db4a1e; border-radius: 0px;margin: 10px auto"></div>

                </div>
            </div>
            <div class="col-12 col-lg-7">
                <a class="bgimage" href="assets/img/block-3/picbig-1.jpg"></a>
            </div>
        </div>
        <div class="padding"></div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-1.svg" style="width: 40px;">
                    <span class="spCentr">СЕМЕЙНЫЕ<br>ПЛАНИРОВКИ</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-2.svg" style="width: 40px;">
                    <span class="spCentr">ТЁПЛЫЕ<br>КИРПИЧНЫЕ СТЕНЫ</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-3.svg" style="width: 40px;">
                    <span class="spCentr">СОВРЕМЕННЫЙ<br>ДВОР</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-4.svg" style="width: 40px;">
                    <span class="spCentr">ОБОСОБЛЕННАЯ<br>ТЕРРИТОРИЯ</span>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-5.svg" style="width: 40px;">
                    <span class="spCentr">ИНДИВИДУАЛЬНЫЕ<br>ПАРКОВКИ</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-6.svg" style="width: 40px;">
                    <span class="spCentr">ВЫСОКИЙ УРОВЕНЬ<br>БЕЗОПАСНОСТИ</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-7.svg" style="width: 40px;">
                    <span class="spCentr">ВСЯ ВАЖНАЯ<br>ИНФРАСТРУКТУРА<br>РЯДОМ</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="item-center">
                    <img src="assets/img/block-3/icon-8.svg" style="width: 40px;">
                    <span class="spCentr">КОМФОРТНЫЕ<br>УСЛОВИЯ ПОКУПКИ</span>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="contact-form" style="margin: 25px;">
                    <p style="text-align: center; font-size: 18px;">Оставьте заявку прямо сейчас и получите бесплатную консультацию</p>
                    <form id="cForm">
                        <div class="formContent">
                            <!--<input id="name" type="text" class="field" name="name" placeholder="Имя">
                            <input id="phone" type="text" class="field" name="phone" required placeholder="Телефон*">-->
                            <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Получить консультацию <i class="fas fa-phone" style="margin-left: 10px"></i></button>
                            <div class="result">
                                <span id="answer"></span>
                                <span id="loader"><img src="assets/img/loader.gif" alt=""></span>
                            </div>
                        </div>
                    </form>
                    <p style="text-align: center; font-size: 12px;">Или позвоните по номеру 8(38451) 4-09-09</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="style13">
<!-- Конец Блок 3 -->
<!-- Блок 4 -->
<!--<div class="l-wrap" id="block4">-->
<!--  <div class="container-fluid">-->
<!--    <div class="row align-items-center">-->
<!--      <div class="col-12">-->
<!--        <div class="item-center">-->
<!--          <span style="font-size: 34px;">Акции и спецпредложения</span>-->
<!--          <div class="line" style="width: 25%; height: 4px; background-color: #e02b20; border-radius: 0px;margin: 10px auto"></div>-->
<!--          <div class="line" style="width: 17%; height: 4px; background-color: #db4a1e; border-radius: 0px;margin: 10px auto"></div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="row align-items-center">-->
<!--      <div class="col-12" style="padding-left: 0;">-->
<!--        <div class="ctr-center" style="margin: 20px 0 20px 0; text-align: center;">-->
<!--          <a class="sl&#45;&#45;control-prev" href="#slider-one" role="button" data-slide="prev">-->
<!--            <span><i class="fas fa-angle-left"></i></span>-->
<!--            <span class="sr-only">Previous</span>-->
<!--         </a>-->
<!--         <a class="sl&#45;&#45;control-next" href="#slider-one" role="button" data-slide="next">-->
<!--            <span><i class="fas fa-angle-right"></i></span>-->
<!--            <span class="sr-only">Next</span>-->
<!--          </a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--        <div id="slider-one" class="carousel slide" data-ride="carusel">-->
<!--          <div class="carousel-inner w-100" style="height: 540px">-->
<!--            <div class="carousel-item active" data-interval="3000">-->
<!--              <div class="container-fluid" style="background-color: #f3f3f6">-->
<!--                <div class="row align-items-center">-->
<!--                  <div class="col-12 col-lg-7">-->
<!--                    <div class="bg-sl" style="background-image: url('img/block-4/slide-1.jpg');"></div>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-lg-5">-->
<!--                    <p style="text-align: center;"><span style="font-size: 30px;">Мы добавляем </span><span style="font-size: 70px; color: #e02b20">50</span><span style="font-size: 38px; color: #e02b20">тыс. руб.</span></p>-->
<!--                    <p style="text-align: center;"><span style="font-size: 22px;">к материнскому<br>капиталу!</span></p>-->
<!--                      <div class="btn-sl">-->
<!--                        <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Подробнее <i class="fas fa-phone" style="margin-left: 10px"></i></button>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="carousel-item" data-interval="3000">-->
<!--              <div class="container-fluid" style="background-color: #f3f3f6">-->
<!--                <div class="row align-items-center">-->
<!--                  <div class="col-12 col-lg-7">-->
<!--                    <div class="bg-sl" style="background-image: url('img/block-4/slide-2.jpg'); background-position: right center;"></div>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-lg-5">-->
<!--                    <p style="text-align: center;"><span style="font-size: 30px;">ИПОТЕКА</span></p>-->
<!--                    <p style="text-align: center;"><span style="font-size: 22px;">от</span><span style="font-size: 70px; color: #e02b20">7,6</span><span style="font-size: 38px; color: #e02b20">%</span></p>-->
<!--                      <div class="btn-sl">-->
<!--                        <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Подробнее <i class="fas fa-phone" style="margin-left: 10px"></i></button>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="carousel-item" data-interval="3000">-->
<!--              <div class="container-fluid" style="background-color: #f3f3f6">-->
<!--                <div class="row align-items-center">-->
<!--                  <div class="col-12 col-lg-7">-->
<!--                    <div class="bg-sl" style="background-image: url('img/block-4/slide-3.jpg'); background-position: right center;"></div>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-lg-5">-->
<!--                    <p style="text-align: center;"><span style="font-size: 30px;">Семейная ипотека<br>с господдержкой</span></p>-->
<!--                    &lt;!&ndash;<p style="text-align: center;"><span style="font-size: 22px;">от</span><span style="font-size: 70px; color: #e02b20">9,5</span><span style="font-size: 38px; color: #e02b20">%</span></p>&ndash;&gt;-->
<!--                      <div class="btn-sl">-->
<!--                        <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Подробнее <i class="fas fa-phone" style="margin-left: 10px"></i></button>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>      -->
<!--          </div>-->
<!--        </div>-->
<!--        <hr class="style13" style="margin-top: 10px">-->
<!--</div>-->
<div class="l-wrap" id="block10">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="komf-center">
                    <span>Легкая ипотека!</span>
                    <div class="line" style="width: 25%; height: 4px; background-color: #e02b20; border-radius: 0px;margin: 10px auto"></div>
                    <div class="line" style="width: 17%; height: 4px; background-color: #db4a1e; border-radius: 0px;margin: 10px auto"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ip-img">
                    <img src="assets/img/block-10/pic-ipoteka.png">
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-3">
                <div class="ip-center">
                    <img src="assets/img/block-10/rubl-icon.svg" style="width: 40px;">
                    <span style="display: inline-block;">от </span>
                    <span style="display: inline-block; font-size: 26px;color: #e02b20"><strong>200 000</strong></span>
                    <span style="display: inline-block;">рублей</span>
                    <span style="margin-top: 5px; opacity: 0.5">первый взнос</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="ip-center">
                    <img src="assets/img/block-10/calc-icon.svg" style="width: 40px;">
                    <span style="display: inline-block;">от </span>
                    <span style="display: inline-block; font-size: 26px;color: #e02b20"><strong>7,6</strong></span>
                    <span style="display: inline-block;">%</span>
                    <span style="margin-top: 5px; opacity: 0.5">ставка по ипотеке</span>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="ip-center">
                    <img src="assets/img/block-10/matcap-icon.svg" style="width: 40px;">
                    <span style="display: inline-block;color: #e02b20;"><strong>Материнский капитал</strong></span>
                    <span style="margin-top: 5px; opacity: 0.5">в счет первого взноса</span>
                </div>
            </div>
        </div>
        <div class="padding" style="height: 35px"></div>
        <div class="row">
            <div class="col-12">
                <div class="btn-sl">
                    <button id="button" class="button" data-fancybox data-src="#callback" type="submit">Получить консультацию <i class="fas fa-phone" style="margin-left: 10px"></i></button>
                </div>
            </div>
        </div>
        <div class="padding" style="height: 35px"></div>
    </div>
</div>
<div class="l-wrap" style="background-color: rgb(41, 44, 54)">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-3">
                <div class="bank-box">
                    <img src="assets/img/block-10/Sberbank.png">
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="bank-box">
                    <img src="assets/img/block-10/VTB.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Конец Блок 4 -->
<!-- Блок 5 -->

<!-- Конец Блок 5 -->

<!-- Блок 6 -->
<div class="l-wrap" id="block6">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="item-center">
                    <span style="font-size: 54px;">Семейные планировки</span>
                    <div class="line" style="width: 25%; height: 4px; background-color: #e02b20; border-radius: 0px;margin: 10px auto"></div>
                    <div class="line" style="width: 17%; height: 4px; background-color: #db4a1e; border-radius: 0px;margin: 10px auto"></div>
                </div>
            </div>
        </div>
        <div class="padding"></div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #03ad9f">
                        <img src="assets/img/block-6/pl-1.jpg" alt="img18"/>
                        <figcaption>
                            <p>Кладовые и гардеробные</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #6e4b93">
                        <img src="assets/img/block-6/pl-2.jpg" alt="img18"/>
                        <figcaption>
                            <p>Все квадратные метры полезны</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #e73272">
                        <img src="assets/img/block-6/pl-3.jpg" alt="img18"/>
                        <figcaption>
                            <p>Светлые детские комнаты</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #03ad9f">
                        <img src="assets/img/block-6/pl-4.jpg" alt="img18"/>
                        <figcaption>
                            <p>Большие кухни</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #6e4b93">
                        <img src="assets/img/block-6/pl-5.jpg" alt="img18"/>
                        <figcaption>
                            <p>Детская и родительская спальни разнесены</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box">
                    <figure class="effect-apollo" style="background: #e73272">
                        <img src="assets/img/block-6/pl-6.jpg" alt="img18"/>
                        <figcaption>
                            <p>Большие балконы широкие окна</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="padding"></div>
    <hr class="style13" style="margin-top: 10px">
</div>
<!-- Конец Блок 6 -->
</body>
</html>
