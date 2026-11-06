<?php
$title = 'Щелочок Максим, группа 251-361, ЛР4 — Главная';
$page = 'index.php';

// значения из ссылки «Заполнить снова»
$name = '';
$email = '';
$source = 'ads';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $source = $_GET['source'];
}

include 'header.php';
?>
    <main>
        <h2>О моём хобби</h2>
        <p>Я студент Московского Политеха. Во время учёбы часто засиживаюсь допоздна, и так кофе стал моим главным увлечением. Сначала я пил обычный растворимый, потом купил турку, а позже попробовал френч-пресс и аэропресс. Теперь я веду записи: какие зёрна купил, как заваривал и что получилось. Эта страница — мой кофейный дневник, и здесь я собираю всё, что узнал.</p>

        <?php
        $photos = [
            'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600',
            'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600'
        ];
        echo '<img src="' . $photos[date('s') % 2] . '" alt="Меняющаяся фотография кофе">';
        ?>
        <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=600" alt="Кофейные зёрна">

        <h2>Что мне нравится в кофе</h2>
        <p>Кофе для меня — не только напиток, но и повод остановиться посреди загруженного дня. Вот что мне нравится больше всего:</p>
        <ul>
            <?php
            $items = [
                'Запах свежемолотых зёрен',
                'Возможность попробовать новый способ заварки',
                'Разный вкус у зёрен из разных стран',
                'Спокойные минуты перед парами'
            ];
            foreach ($items as $item) {
                echo '<li>' . $item . '</li>';
            }
            ?>
        </ul>
        <p>Фотография вверху меняется в зависимости от секунды: если секунда чётная, вы видите одну чашку, если нечётная — другую.</p>

        <h2>Форма обратной связи</h2>
        <form action="home.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <label for="name">ФИО</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="row">
                <label for="email">Ваш e-mail</label>
                <input type="email" id="email" name="email" placeholder="example@mail.ru" value="<?php echo $email; ?>">
            </div>
            <div class="row">
                <label for="category">Тема обращения</label>
                <select id="category" name="category">
                    <option value="propose">Предложение</option>
                    <option value="complain">Жалоба</option>
                </select>
            </div>
            <div class="row">
                <label for="message">Сообщение</label>
                <textarea id="message" name="message" rows="5"></textarea>
            </div>
            <div class="row">
                <span class="label">Откуда узнали обо мне</span>
                <div class="group">
                    <label class="inline"><input type="radio" name="source" value="ads"<?php if ($source == 'ads') echo ' checked'; ?>> Реклама из интернета</label>
                    <label class="inline"><input type="radio" name="source" value="friends"<?php if ($source == 'friends') echo ' checked'; ?>> Рассказали друзья</label>
                </div>
            </div>
            <div class="row">
                <label for="attachment">Файл</label>
                <input type="file" id="attachment" name="attachment">
            </div>
            <div class="row">
                <span class="label"></span>
                <label class="inline"><input type="checkbox" name="agree"> Даю согласие на обработку данных</label>
            </div>
            <div class="row">
                <span class="label"></span>
                <button type="submit" class="btn">Отправить</button>
            </div>
        </form>
    </main>
<?php include 'footer.php'; ?>
