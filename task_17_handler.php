<?php
session_start();

$filename = 'img/upload/';

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

if (!empty($_FILES)) {
    $image = $_FILES['images'];
        if($image['name'] !== '') {        
            $file_name = uniqid($image['name']) . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
            move_uploaded_file($image["tmp_name"], "img/upload/" . $file_name);
            $sql = "INSERT INTO `images` (`id`, `image`) VALUES (NULL, '$file_name')";
            $statement = $pdo->prepare($sql);
            $statement->execute();
    
            $sql = "SELECT * FROM images"; // формируем запрос для бд
            $statement = $pdo->prepare($sql); // передаем значения в pdo
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
            $_SESSION['images'] = $result;
            header("Location: /task_17.php");
        }
        else {
            $sql = "SELECT * FROM images"; // формируем запрос для бд
            $statement = $pdo->prepare($sql); // передаем значения в pdo
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
            $_SESSION['images'] = $result;
            $danger = 'Файл был пуст';
            $_SESSION['danger'] = $danger;
            header("Location: /task_17.php");
        }
    
    }
    else {
        $sql = "SELECT * FROM images"; // формируем запрос для бд
        $statement = $pdo->prepare($sql); // передаем значения в pdo
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
        $_SESSION['images'] = $result;
        $danger = 'Файл был пуст';
        $_SESSION['danger'] = $danger;
        header("Location: /task_17.php");
    }
?>