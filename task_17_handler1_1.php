<?php
session_start();
$_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
$filename = 'img/upload/';
$SES = $_SESSION["origURL"];
var_dump($SES);

$driver = 'mysql'; // тип базы данных, с которой мы будем работать 
$host = '127.0.0.1';// альтернатива '127.0.0.1' - адрес хоста, в нашем случае локального
$db_name = 'php_basic'; // имя базы данных 
$db_user = 'root'; // имя пользователя для базы данных 
$db_password = ''; // пароль пользователя 
$charset = 'utf8'; // кодировка по умолчанию 
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; // массив с дополнительными настройками подключения. В данном примере мы установили отображение ошибок, связанных с базой данных, в виде исключений 

try {
    $dsn = "$driver:host=$host;dbname=$db_name;charset=$charset"; $pdo = new PDO($dsn, $db_user, $db_password, $options); // подставляем переменные для подключения к бд
}

catch(PDOException $e) {
    die('Error :' . $e->getMessage()); // выводим ошибку в подключении
};
if(!empty($_GET)) {
    $sql = "SELECT `image` FROM images WHERE id=:id"; // формируем запрос для бд
    $statement = $pdo->prepare($sql); // передаем значения в pdo
    $statement->execute($_GET);
    $result = $statement->fetch(PDO::FETCH_ASSOC); 
    unlink($filename . $result['image']);

    $sql = "DELETE FROM images WHERE id=:id"; // формируем запрос для бд
    $statement = $pdo->prepare($sql); // передаем значения в pdo
    $statement->execute($_GET);
    if ($SES = "http://tasks/task_18.php") {
        // unset($_SESSION["origURL"]);
        header("Location: /task_18_handler.php");
    }
    if ($SES = "http://tasks/task_17.php") {
        // unset($_SESSION["origURL"]);
        header("Location: /task_17_handler.php");
    }
}
else {
    if ($SES = "http://tasks/task_18.php") {
        // unset($_SESSION["origURL"]);
        header("Location: /task_18.php");
    }
    else {
        // unset($_SESSION["origURL"]);
        header("Location: /task_17.php");
    }

   
}
?>