<!DOCTYPE html>
<html>

<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
?>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  /*
   * Получаем текущий час в виде строки от 00 до 23
   * и приводим строку к целому числу от 0 до 23
   */

  $leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
['link'=>'О нас', 'href'=>'about.php'],
['link'=>'Контакты', 'href'=>'contact.php'],
['link'=>'Таблица умножения', 'href'=>'table.php'],
['link'=>'Калькулятор', 'href'=>'calc.php']
  ];


  
  $dateTime = date_create('now');


  $hour = (int) $dateTime->format('H');
  $welcome = ''; // Инициализируем переменную для приветствия

  if ($hour > 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
  } elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
  } elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
  } elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Добрый вечер';
  } else {
    $welcome = 'Доброй ночи';
  }
  ?>

  <?php include 'inc/top.inc.php'; ?>
  <?php include 'inc/menu.inc.php'; ?>
  <?php include 'inc/index.inc.php'; ?>
  <?php include 'inc/bottom.inc.php'; ?>


  

</body>

</html>

