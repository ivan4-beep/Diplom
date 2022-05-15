<?php
require('addto.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/main.js"></script>

   <title>Avto Online</title>
</head>

<body>
   <header class="header">
      <div class="container">
         <div class="headering">
            <div class="header__logo">
               <a href="#"><img src="img/logo_1.svg" alt="logo-ty                                                                                                    pe"></a>
               <a href="#"><img src="img/logo_2.svg" alt="logo-type"></a>
            </div>
            <div class="header__menu">
               <div class="header__menu__img">
                  <img src="img/time.svg" alt="time">
               </div>
               <div class="header__menu__text">
                  <span>Графік роботи</span>
                  <p>С понеділка по п'ятницю: 7:00 - 6:00</p>
               </div>
               <div class="header__menu__img">
                  <img src="img/phone.svg" alt="phone">
               </div>
               <div class="header__menu__text">
                  <span>Телефонуйте нам</span>
                  <p> 08002712838</p>
               </div>
               <a class="btn" href="/" type="button">Замовити послугу</a>
            </div>
         </div>
         <div class="navigation">
            <div class="bg-white flex">
               <div class="menu">
                  <ul>
                     <li><a href="#">Сервіс</a>
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-1">
                           <ul>
                              <li><a href="">Автобуси</a></li>
                              <li><a href="">Машини</a></li>
                              <li><a href="">Мотоцикли</a></li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="#">Пропозиція</a></li>
                     <li><a href="#">Оцінки</a></li>
                     <li><a href="#">Вигляд</a></li>
                     <li><a href="#">Магазин</a>
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-2">
                           <ul>
                              <li><a href="">Колеса</a></li>
                              <li><a href="">Ліхтарі</a>
                                 <img src="img/arrow_more.svg" alt="More">
                                 <div class="sub-menu-2__item">
                                    <ul>
                                       <li><a href="">Світлі</a></li>
                                       <li><a href="">Сині</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href=""></a></li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="#">Про нас</a></li>
                  </ul>
               </div>
               <div class="nav">
                  <a href=""><img src="img/search.svg" alt="Search"></a>
                  <a href=""><img src="img/shopping_cart.svg" alt="ShopCart"></a>
               </div>
            </div>
         </div>
         <div class="title">
            <h1>Першокласний сервіс - наша головна автомобільна</h1>
            <a class="btn" href="/" type="button">Замовити послугу</a>
         </div>
      </div>
   </header>
   <section class="article">
      <div class="container">
         <div class="bg-article">
            <img src="img/bg_section1.png" class="back-photo">
            <div class="container-article">
               <div class="content-title">
                  <span>Хто ми?</span>
               </div>
               <h2>Інтернет магазин автозапчастин - це зручно</h2>
               <p>Чимала конкуренція на ринку продажу автомобільних запчастин, часто, диктує інтернет-магазину
                  вимоги щодо забезпечення постійно зростаючого асортименту запчастин за умови встановлення
                  оптимальних цін, створення для клієнтів найбільш зручного сервісу по підбору необхідних товарів,
                  організації консультації кваліфікованих фахівців.</p>
               <img src="img/dvigun.png" alt="Движок">
            </div>
         </div>
      </div>
   </section>
   <section class="offers">
      <div class="container">
         <div class="content-title">
            <span>Ми пропонуємо вам</span>
         </div>
         <h3>Вигідно тільки у нас</h3>
         <div class="offers__main">
            <div class="offers__main__item">
               <div class="offers__main__item__photo">
                  <img src="img/service_item1.svg" alt="offers1">
               </div>
               <div class="offers__main__item__content">
                  <span>Якісне обслуговування.</span>
                  <p>Ми приїдемо і оглянемо машину безкоштовно, зробимо діагностику і через пару тижнів скажімо ціну.
                     Швидке обслуговування - гарантоване.
                  </p>
               </div>
            </div>
            <div class="offers__main__item">
               <div class="offers__main__item__photo">
                  <img src="img/service_item2.svg" alt="offers2">
               </div>
               <div class="offers__main__item__content">
                  <span>послуги професіоналів</span>
                  <p>У нас є до 100 співробітників які скажуть кращі поради і головне недорого.</p>
               </div>
            </div>
            <div class="offers__main__item">
               <div class="offers__main__item__photo">
                  <img src="img/service_item3.svg" alt="offers3">
               </div>
               <div class="offers__main__item__content">
                  <span>Чесна робота</span>
                  <p>Підтримка 24 на 7, завжди допоможемо і проконсультуємо з будь-якої точки світу</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="video">
      <div class="video-bg">
         <div class="video-bg__item fade">
            <img class="carousel" src="img/bgvideo.png" alt="">
            <div class="container">
               <div class="video-container">
                  <h4>Ми кращі в своїй справі, ми надамо вам кращі якості нашої роботи</h4>
                  <div class="play-video">
                     <img src="img/play.png" alt="play">
                  </div>
               </div>
            </div>
         </div>
         <div class="video-bg__item fade">
            <img class="carousel" src="img/sliderI.jpg" alt="">
            <div class="container">
               <h4>Illum qui dolorem eum quo voluptas ut distinctio</h4>
               <div class="advantage">
                  <div class="advantage__item">
                     <img src="img/work-item1.svg" alt="">
                     <div class="block">
                        <span>16k+</span>
                        <p>Заміна масла</p>
                     </div>
                  </div>
                  <div class="advantage__item">
                     <img src="img/car_transmission.svg" alt="">
                     <div class="block">
                        <span>13k+</span>
                        <p>Починка трансмісії</p>
                     </div>
                  </div>
                  <div class="advantage__item">
                     <img src="img/work-item3.svg" alt="">
                     <div class="block">
                        <span>15k+</span>
                        <p>Виконаємо вирівнювання</p>
                     </div>
                  </div>
                  <div class="advantage__item">
                     <img src="img/work-item4.svg" alt="">
                     <div class="block">
                        <span>11,500+</span>
                        <p>Двигуни відремонтовані</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="video-bg__item fade">
            <img class="carousel" src="img/sliderII.jpg" alt="">
            <div class="container">
               <div class="description">
                  <span>Ми співпрацюємо у найвіддаленіших точках світу</span>
                  <p>Україна, Іспанія, Росія, Париж, Італія, Швеція, Німеччина, Польша,
                     Швейцарія, Бельгія, Австрія, Греція, Нідерланди...</p>
               </div>
            </div>
         </div>
         <a class="previous" onclick="previousSlide()">&#10094;</a>
         <a class="next" onclick="nextSlide()">&#10095;</a>
      </div>
   </section>
   <section class="services">
      <div class="bg-services">
         <div class="services-img">
            <img src="img/gears.png" alt="logo">
         </div>
         <div class="container">
            <div class="services-content">
               <div class="content-title">
                  <span>Наш сервіс</span>
               </div>
               <h5>Така можливість тільки у нас</h5>
               <div class="services-cards">
                  <div class="services-cards-location">
                     <div class="services-cards__item">
                        <img src="img/car_bay1.svg" alt="item1">
                        <span>Багатоточкові перевірки</span>
                        <p>Кожен місяць, за вашими автомобілями проводиться перевірка</p>
                     </div>
                     <div class="services-cards__item">
                        <img src="img/car_bay2.svg" alt="item2">
                        <span>Ремонт авто</span>
                        <p>Це головний плюс, а саме ціна + якість.</p>
                     </div>
                     <div class="services-cards__item">
                        <img src="img/car_bay3.svg" alt="item3">
                        <span>Автотехнічне обслуговування</span>
                        <p>Перевіримо справність ваших елементів в машині</p>
                     </div>
                  </div>
                  <div class="services-cards-location">
                     <div class="services-cards__item">
                        <img src="img/car_bay4.svg" alt="item4">
                        <span>Шини</span>
                        <p>Підібрати розмір, установка колес - не проблема</p>
                     </div>
                     <div class="services-cards__item">
                        <img src="img/car_bay5.svg" alt="item5">
                        <span>Сервісна гарантія</span>
                        <p>Ми пропонуємо вам гарантію на рік, яка допоможе повернути гроші або ж встановити нову деталь</p>
                     </div>
                     <div class="services-cards__item">
                        <img src="img/car_bay6.svg" alt="item6">
                        <span>Онлайн магазин</span>
                        <p>Тільки у нас найпоширеніші товари у світі, великий асортимент товарів та гарна ціна</p>
                     </div>
                  </div>
                  <a class="btn" href="/" type="button">Learn more</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="feedback">
      <div class="container">
         <div class="feedback__inner">
            <div class="feedback__inner__form">
               <div class="bg-white">
                  <div class="feedback__inner__form__content">
                     <h6>Призначити зустріч</h6>
                     <div class="form-info">
                        <input type="text" placeholder="Name" required>
                        <input type="text" placeholder="Email" required>
                        <input type="number" placeholder="Phone" required>
                        <input type="text" placeholder="Service" required>
                     </div>
                     <textarea name="" id="comment" placeholder="Tell us about the car needing service(s)"></textarea>
                     <a class="btn" href="/" type="button">Призначити зустріч</a>
                  </div>
               </div>
            </div>
            <div class="feedback__inner__order">
               <span>Ми можемо зробити все, що вам подобається</span>
               <p class="number">17k</p>
               <p>обслуговування клієнтів (і підрахунок)</p>
            </div>
         </div>
      </div>
   </section>
   <section class="tovar">
      <div class="container">
         <div class="tovar-content">

         </div>
         <a href="#popup" id="shopping-popup" class="tovar__btn btn" type="button">
            Перейти до кошика
         </a>
      </div>
   </section>

   <div id="popup" class="popup">
      <div class="popup__body" id="popup__body">
         <div class="popup__content">
            <a href="" id="popup__close">X</a>
            <div class="popup__title">Кошик</div>
            <div class="popup__tovar">
               <div class="popup__img">
                  <img src="img/modal-cart-dummy.svg" alt="Корзина">
               </div>
               <div class="popup__text">
                  <p class="popup__text__one">Кошик порожній</p>
                  <p class="popup__text__two">Но це ніколи не пізно виправити:)</p>
               </div>
            </div>
            <div class="popup__continue"></div>
         </div>
      </div>
   </div>
      <!--<footer class="footer">
      <div class="container">
         <div class="footer-info">
           <p>Всі права захищені політикою та адміністративними нормами</p>
           <p>© 2018 Company.   Privacy Policy | Terms & Conditions</p>
      </div>
   </footer>-->
   <script src="js/popup.js"></script>
   <script src="js/slider.js"></script>
</body>

</html>