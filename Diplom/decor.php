<?php require('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
   <title>Оформлення замовлення</title>
   <link rel="stylesheet" href="css/styles.css">

</head>

<body>
   <div class="popup__tovar">

   </div>
   <form action="#" method="POST" class="form_active">
      <p>Введіть імя</p>
      <input type="text" name="name" id="name" required minlength="3">
      <p>Введіть прізвище</p>
      <input type="text" name="surname" id="surname" required minlength="4">
      <p>Введіть пошту</p>
      <input type="text" name="gmail" id="gmail" required>
      <p>Введіть номер телефону</p>
      <input type="tel" name="phone" id="tel" minlength="10" maxlength="10">
      <p>Виберіть місто доставки</p>
      <select name="city" id="city" class="sel_city" required>
         <option value="Київ">Київ</option>
         <option value="Львів">Львів</option>
         <option value="Полтава">Полтава</option>
         <option value="Харків">Харків</option>
         <option value="Житомир">Житомир</option>
      </select>
      <input type="submit" class="send-gmail" value="Оформлення замовлення">
   </form>
   <?php

   if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['gmail']) && isset($_POST['phone']) && isset($_POST['city'])) {
      $name = $_POST['name'];

      echo $surname = $_POST['surname'];
      $gmail = $_POST['gmail'];
      $phone = $_POST['phone'];
      $city = $_POST['city'];
      $query = "INSERT INTO `owner` (`id`, `name`, `surname`, `gmail`, `phone`, `city`) VALUES (NULL, '$name', '$surname', '$gmail', $phone, '$city');";

      mysqli_query($link, $query);
      
   }
   ?>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>