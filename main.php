<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'https://cs9.pikabu.ru/post_img/big/2016/10/22/6/1477128283192211030.png'?>
            <?php include 'menu_inc.html'?>
        </div>

        <div class="about_me">
            <h1><?php echo $p ?></h1>

            <div class="data">
                <div class="myImg">
                    <?php
                        echo '<img src="https://upload.wikimedia.org/wikipedia/ru/c/cf/%D0%9B%D0%BE%D0%B1%D0%BE%D1%81_%D0%A3%D0%9F%D0%9D%D0%A4%D0%9C_%28%D0%BB%D0%BE%D0%B3%D0%BE%29.png"'
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут:
                    <?php echo $name, ' ', $surname . '<br>';
                            echo 'город:', ' ', $city; ?>
                    </p>

                    <p> Мне
                    <?php echo $age; ?>
                    лет </p>
                    <p>У меня есть несколько переменных</p>
                    <p>И я могу с ними взаимодействовать</p>
                </div>
            </div>

            <div class="knowledge">
                <?php include 'knowledge_inc.php'; ?>
                <p>
                    Переменные: <?php echo $a, ' ', $b, ' ', $c; ?> 
                </p>
            
                <br>

                <?php
                    $a = 32;
                    $b = 6;
                    $c = $a ** $b;
                    echo $c
                ?> 
                <br>
                <?php echo $c ?>
            </div>

            <div class="article">
                <p class="text">Тут я типо рассказываю Вам о себе и своей увлекательной жизни)</p>
            </div>
        </div>

        <div class="footer">
            <?php include 'footer_inc.php' ?>
        </div>
    </div>
</body>
</html>