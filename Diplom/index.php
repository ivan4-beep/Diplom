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

   <title>Магазин техніки</title>
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
               <a class="btn" href="/" type="button">Замовити Дзвінок</a>
            </div>
         </div>
         <div class="navigation">
            <div class="bg-white flex">
               <div class="menu">
                  <ul>
                     <li><a href="#">Техніка</a>
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-1">
                           <ul>
                              <li><a href="">Телефони </a></li>
                              <li><a href="">Ноути</a></li>
                              <li><a href="">Телевізори </a></li>
                              <li><a href="">Приставки </a></li>
                              <li><a href="">Монітори </a></li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="#">Пропозиція</a></li>
                     <li><a href="#">Знижки</a></li>
                     
               
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-2">
                           <ul>
                              
                                    </ul>
                                 </div>
                              </li>
                              <li><a href=""></a></li>
                           </ul>
                        </div>
                     </li>
                    
                  </ul>
               </div>
               <div class="nav">
                  <a href=""><img src="img/search.svg" alt="Search"></a>
                  <a href=""><img src="img/shopping_cart.svg" alt="ShopCart"></a>
               </div>
            </div>
         </div>
         <div class="title">
            <h1> Перший дешевий магазин техніки </h1>
            <a class="btn" href="/" type="button">Замовити консультацію</a>
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
               <h2>Інтернет магазин техніки  - це зручно</h2>
               <p>Чимала конкуренція на ринку продажу техніки , часто, диктує інтернет-магазину
                  вимоги щодо забезпечення постійно зростаючого асортименту  за умовитехніки встановлення
                  оптимальних цін, створення для клієнтів найбільш зручного магазинк по підбору необхідних товарів,
                  організації консультації кваліфікованих фахівців.</p>
               <img src="magazin.png" alt="Движок">
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
                  <p>Ми приїдемо і привезем техніку в любу точку города  безкоштовно.
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
      
         
         <a class="previous" onclick="previousSlide()">&#10094;</a>
         <a class="next" onclick="nextSlide()">&#10095;</a>
      </div>
   </section>
   <section class="services">
      
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
   <!--<footer class="footer">
      <div class="container">
         <div class="footer-info">
           <p>Всі права захищені політикою та адміністративними нормами</p>
           <p>© 2018 Company.   Privacy Policy | Terms & Conditions</p>
      </div>
   </footer>-->
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
   <script src="js/popup.js"></script>
   <script src="js/slider.js"></script>
</body>

</html>