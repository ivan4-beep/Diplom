<?php
   header("Content-type: text/html;charset=utf-8");
   $server = "localhost";
   $username = "root";
   $password = '';
   $DB = 'onlineshopcar';
   $link = mysqli_connect($server, $username, $password, $DB);
   mysqli_query($link, "SET NAMES 'utf-8'");
   mysqli_query($link, "SET CHARACTER SET 'utf8'");

   if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
   }
