<?php
/* Основные настройки */
const DB_HOST = 'mysql';
const DB_LOGIN = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'gbook';
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
mysqli_select_db($link, DB_NAME);

/* Основные настройки */

/* Сохранение записи в БД */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $msg   = $_POST['msg'];

    $sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
    mysqli_query($link, $sql);
}


/* Сохранение записи в БД */

/* Удаление записи из БД */
if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $sql = "DELETE FROM msgs WHERE id = $del";
    mysqli_query($link, $sql);
}
/* Удаление записи из БД */
?>
<h3>Оставьте запись</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */

$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt
        FROM msgs
        ORDER BY id DESC";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);

echo "<p>Всего записей в гостевой книге: $count</p>";

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $msg = $row['msg'];
    $dt = date('d-m-Y в H:i', $row['dt']);

    echo "<p>
        <a href=\"mailto:$email\">$name</a> $dt написал<br />$msg
        </p>
        <p align=\"right\">
        <a href=\"?id=gbook&del=$id\">Удалить</a>
        </p>";
}

mysqli_close($link);

/* Вывод записей из БД */
?>