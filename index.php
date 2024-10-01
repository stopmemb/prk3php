<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика 3 Захаров живу на губкина приходите в гости :)</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    if (isset($_POST['reg'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phonenumber'];
        $flag = 'true';
        $errors = [
            '<p class="errors">Не ввели значение</p>',
            '<p class="errors">Нельзя вводить буквы</p>',
            '<p class="errors">Нельзя вводить цифры</p>',
            '<p class="errors">Не больше 350 кг</p>',
            '<p class="errors">Не больше 100 лет</p>'
        ];
    }
    ?>
    <h1>Животные</h1>
    <section>
        <div class="form">
            <?
            class Animal
            {
                public $name, $age, $color, $ves;
                function write()
                {
            ?>
                    <div class="animal">
                        <div class="animal_who">
                            <p>Лев, король зверей</p>
                        </div>
                        <div class="animal_name_img">
                            <div class="animal_img">
                                <img src="assets/img/lion.jpg" alt="">
                            </div>
                            <div class="animal_name">
                                <p>Лев Матвей</p>
                            </div>
                        </div>
                        <div class="animal_info">
                            <p>Лев — вид хищных млекопитающих, один из пяти представителей рода пантер (Panthera), относящегося к подсемейству больших кошек в составе семейства кошачьих.</p>
                        </div>
                        <div class="animal_text">
                            <p>Матвею 24 года и его окрас песчано-жёлтый</p>
                        </div>
                    </div><?;
                        }
                        function wrote()
                        {
                            ?>
                    <div class="animal">
                        <div class="animal_who">
                            <p>Кролик, трус среди всех</p>
                        </div>
                        <div class="animal_name_img">
                            <div class="animal_img">
                                <img src="assets/img/rabbit.jpg" alt="">
                            </div>
                            <div class="animal_name">
                                <p>Кролик Женя</p>
                            </div>
                        </div>
                        <div class="animal_info">
                            <p>Домашний кролик (лат. Oryctolagus cuniculus domesticus) — разновидность европейского дикого кролика, одомашненное млекопитающее из семейства зайцевых, отряда зайцеобразных.</p>
                        </div>
                        <div class="animal_text">
                            <p>Жене 5 года и его окрас тёмно-серый</p>
                        </div>
                    </div><?;
                        }
                        function wrete()
                        {
                            ?>
                    <div class="animal">
                        <div class="animal_who">
                            <p>Волк, безумно можно быть первым</p>
                        </div>
                        <div class="animal_name_img">
                            <div class="animal_img">
                                <img src="assets/img/wolf.jpg" alt="">
                            </div>
                            <div class="animal_name">
                                <p>Волк АУФ</p>
                            </div>
                        </div>
                        <div class="animal_info">
                            <p>Волк, или серый волк, или обыкновенный волк (лат. Canis lupus), — вид хищных млекопитающих из семейства псовых (Canidae).</p>
                        </div>
                        <div class="animal_text">
                            <p>Жене 5 года и его окрас серо-бурый</p>
                        </div>
                    </div><?;
                        }
                    }
                    $lion = new Animal();
                    $personName = $lion->name;
                    $lion->write();
                    $lion->wrote();
                    $lion->wrete();
                            ?>
        </div>
    </section>
</body>

</html>