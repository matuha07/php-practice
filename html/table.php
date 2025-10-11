<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  
  $cols = 10;
  $rows = 10;
  $color = 'yellow';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
  }
  $cols = ($cols) ? $cols : 10;
  $rows = ($rows) ? $rows : 10;
  $color = ($color) ? $color : 'yellow';
  ?>



  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="post">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?= $_POST['cols'] ?? $cols ?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?= $_POST['rows'] ?? $rows ?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?= $_POST['color'] ?? $color ?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <table border='1' width="200">
      <?php
      drawTable($cols, $rows, $color);       
      ?>
    </table>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>

</body>

</html>