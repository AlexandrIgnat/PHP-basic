<?php

session_start();

$driver = 'mysql'; // тип базы данных, с которой мы будем работать 
$host = '127.0.0.1';// альтернатива '127.0.0.1' - адрес хоста, в нашем случае локального
$db_name = 'php_basic'; // имя базы данных 
$db_user = 'root'; // имя пользователя для базы данных 
$db_password = ''; // пароль пользователя 
$charset = 'utf8'; // кодировка по умолчанию 
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; // массив с дополнительными настройками подключения. В данном примере мы установили отображение ошибок, связанных с базой данных, в виде исключений 

try {
    $dsn = "$driver:host=$host;dbname=$db_name;charset=$charset"; 
    $pdo = new PDO($dsn, $db_user, $db_password, $options); // подставляем переменные для подключения к бд
}

catch(PDOException $e) {
    die('Error :' . $e->getMessage()); // выводим ошибку в подключении
};

$email = $_POST['email'];
$password = $_POST['password'];
$option = [
    'cost' => 12,
];
$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
$table = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($table)) {

    if ((isset($_POST['email']) && (isset($_POST['password']))) && (($_POST['email'] != '') && ($_POST['password'] != ''))) {   
        $sql = "SELECT `email` FROM `users` WHERE email=:email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        $information = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($information)) {
            $danger = "Введенная запись уже присутствует в таблице";
            $_SESSION['danger'] = $danger;
            header("Location: /task_11.php");
            exit;
        } 
        else {
            $password = password_hash($password, PASSWORD_BCRYPT, $option);
            $sql = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password');"; // формируем запрос для бд
            $statement = $pdo->prepare($sql); // передаем значения в pdo
            $statement->execute();  
            $success = "Запись успешно добавлена";
            $_SESSION['success'] = $success;
            header("Location: /task_11.php");
        } 
    }
    else {
        $danger = "Введена не корректная информация";
        $_SESSION['danger'] = $danger;
        header("Location: /task_11.php");
    }
}
else {
    if ((isset($_POST['email']) && (isset($_POST['password']))) && (($_POST['email'] != '') && ($_POST['password'] != ''))) {
        $password = password_hash($password, PASSWORD_BCRYPT, $option);
        $sql = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')"; // формируем запрос для бд
        $statement = $pdo->prepare($sql); // передаем значения в pdo
        $statement->execute();  
        $success = "Запись успешно добавлена";
        $_SESSION['success'] = $success;
        header("Location: /task_11.php");
        exit;      
    } 
    else {
        $danger = "Введена не корректная информация";
        $_SESSION['danger'] = $danger;
        header("refresh: 2; url=/task_11.php");
    }
}
?>