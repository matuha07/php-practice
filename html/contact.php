<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
	 <!-- Область основного контента -->
	 <?php
		$size = ini_get('post_max_size');
        $unit = strtoupper(substr($size, -1));
        $value = (int)$size;

        switch ($unit) {
          case 'G': $value *= 1024;
          case 'M': $value *= 1024;
          case 'K': $value *= 1024;

        }

        $size = $value;
	 ?>

    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
    <!-- Область основного контента -->
  </div>
  
</body>

</html>
