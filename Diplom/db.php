<?php
   $server = "localhost";
   $username = "root";
   $password = '';
   $DB = 'onlineshop';
   $link = mysqli_connect($server, $username, $password, $DB);
   mysqli_query($link, "SET NAMES 'utf-8'");
   mysqli_query($link, "SET CHARACTER SET 'utf8'");

   if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
   }
