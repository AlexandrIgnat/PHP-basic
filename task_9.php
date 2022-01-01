
<?php

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
}



// $people = $statement->fetchAll(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="form-group">
                                    <form action="task_9.php" method="POST">
                                        <label class="form-label" for="simpleinput">Text</label>
                                        <input type="text" id="simpleinput" name="text" class="form-control">
                                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php
        // if (isset($_POST['text']) && $_POST['text'] != '') {
        
        //     // $sql = "INSERT INTO `input` (`id`, `text`) VALUES (NULL, '$name');"; // формируем запрос для бд
        //     // $sql2 = "SELECT text FROM input";
            
        //     // $statement = $pdo->prepare($sql); // передаем значения в pdo
            
        //     // $statement->execute();
            
        //     $sql2 = "SELECT text FROM input";
        //     $statement2 = $pdo->query($sql2); // передаем значения в pdo
        //     // $statement2->execute();
        //     $information = $statement2->fetchAll(PDO::FETCH_ASSOC); 
        //     $name = $_POST['text'];
        //     // $exe;
        //         foreach( $information as $value) :
        //             if ($value['text'] == $name) {
        //                 $exe = true;
        //                 break;
        //             }
        //             else {
        //                 $exe = false;
        //             }
        //             // var_dump($key_name['text']);
        //         endforeach;
        //         // if ()
        //         var_dump($exe);
        // }
        if (isset($_POST['text']) && $_POST['text'] != '') {
            $name = $_POST['text'];
            $sql = "INSERT INTO `input` (`id`, `text`) VALUES (NULL, '$name');"; // формируем запрос для бд
            
            $statement = $pdo->prepare($sql); // передаем значения в pdo
            $statement->execute();
            }
?>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
