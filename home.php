<?php
$title = 'Щелочок Максим, группа 251-361, ЛР4 — Ответ';
$page = 'home.php';
include 'header.php';
?>
    <main>
        <h2>Ответ на обращение</h2>
        <?php
        echo '<p>Здравствуйте, ' . $_POST['name'] . '</p>';

        if ($_POST['category'] == 'propose') {
            echo '<p>Спасибо за ваше предложение:</p>';
        } else {
            echo '<p>Мы рассмотрим вашу жалобу:</p>';
        }
        echo '<textarea class="answer" rows="5" readonly>' . $_POST['message'] . '</textarea>';

        if ($_FILES['attachment']['name'] != '') {
            echo '<p>Вы приложили следующий файл: ' . $_FILES['attachment']['name'] . '</p>';
        }

        echo '<a class="btn" href="index.php?name=' . urlencode($_POST['name']) . '&email=' . urlencode($_POST['email']) . '&source=' . $_POST['source'] . '">Заполнить снова</a>';
        ?>
    </main>
<?php include 'footer.php'; ?>
