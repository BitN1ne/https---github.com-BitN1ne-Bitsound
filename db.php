<?php
    //Устанавливаем доступы к базе данных:
        $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
        $user = 'w91942dh_databas'; //имя пользователя, по умолчанию это root
        $password = 'Bit9133769'; //пароль, по умолчанию пустой
        $db_name = 'w91942dh_databas'; //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
        $link = mysqli_connect($host, $user, $password, $db_name);
        ini_set('error_reporting', E_ALL);
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

    /*
        Соединение записывается в переменную $link,
        которая используется дальше для работы mysqi_query.
    */
?>