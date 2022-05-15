
 <?php

   $json = file_get_contents('../goods.json');
   $json = json_decode($json, true);

   $message = '';
   $message .= '<p>Заказ в магазині</p>';
   $message .= '<p>Добрий день: ' . $_POST['name'] . ' ' . $_POST['surname'] . '</p>';
   $message .= '<p>Для уточнення товару ми вам зателефонуємо за номером: ' . $_POST['tel'] . '</p>';
   $message .= '<p>Доставка в місто: ' . $_POST['city'] . '</p>';

   $cart = $_POST['cart'];
   $sum = 0;
   foreach ($cart as $id => $count) {
      $message .= $json[$id]['name'] . '-----';
      $message .= $count . '--------';
      $message .= $count * $json[$id]['cost'];
      $message .= '<br>';
      $sum = $sum + $count * $json[$id]['cost'];
   }


   $subject = "Привіт, user, ви залишили замовлення на сайті";

   $to = "bilokintaras@gmail.com" .
      $from = trim($_POST['gmail']);
   $headers  = "From: $from" . "\r\n" .
      "Reply-To: $from" . "\r\n" .
      "X-Mailer: PHP/" . phpversion();


   $m = mail($to, $subject, $message, $headers);
   if ($m) {
      echo "Почта надіслана";
   } else {
      echo "Помилка";
   }
   ?>
