<?php
$correct_login = 'admin';
$correct_password = '12345';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1600');
            background-size: cover;
            background-position: center;
        }
        form {
            width: 320px;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            color: #3b2a22;
        }
        h1 {
            margin: 0 0 10px;
            text-align: center;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            border: 1px solid #999;
            border-radius: 5px;
        }
        .inline {
            display: inline;
            font-weight: normal;
        }
        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background-color: #4a2e20;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #b5723d;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Вход</h1>
        <?php
        if (isset($_POST['login']) && $_POST['login'] == $correct_login && $_POST['password'] == $correct_password) {
            echo '<p>Авторизация прошла успешно!</p>';
        } elseif (isset($_POST['login'])) {
            echo '<p>Неверный логин или пароль</p>';
        }
        ?>
        <label for="login">Логин</label>
        <input type="text" id="login" name="login" required>

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required>

        <input type="checkbox" id="remember" name="remember">
        <label for="remember" class="inline">Запомнить меня</label>

        <button type="submit">Войти</button>
    </form>
</body>
</html>