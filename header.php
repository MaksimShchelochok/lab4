<?php
date_default_timezone_set('Europe/Moscow');
$menu = [
    'index.php'   => 'Главная',
    'methods.php' => 'Способы заварки',
    'tips.php'    => 'Советы',
    'login.php'   => 'Вход',
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Кофейный дневник</h1>
        <nav>
            <?php
            foreach ($menu as $link => $menu_name) {
                echo '<a href="' . $link . '"';
                if ($link == $page) echo ' class="selected_menu"';
                echo '>' . $menu_name . '</a>';
            }
            ?>
        </nav>
    </header>