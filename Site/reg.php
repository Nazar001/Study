<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; utf-8"/>
    <meta name="keywords" content="test, site, website"/>
    <meta name="discription" content="Этот сайт является пробным сайтом"/>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <link href="img/icon.png" rel="shortcut icon" type="image/x-icon"/>
    <title>Shop</title>
</head>
<body>
    <div id="page-wrap">
        <?php
           include("include/header.php"); 
        ?>
         <div id="wrapper">
            <div id="articles">
                <div id="Answer">
                            <h2>Регистрация</h2>
                    <form action="" method="posbjectt">
                        <div id="input">
                            <label for="name">Ваше имя</label>
                            <input type="text" name="name" id="name" placeholder="Введите ваше имя"/>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="adress@example.com"/>
                            <label for="subject">Пароль</label>
                            <input type="password" name="subject" id="subject" placeholder="Введите пароль"/>
                            <label for="subject">Подтверждение пароля</label>
                            <input type="password" name="subject" id="subject" placeholder="Введите пароль повторно"/>
                        </div>
                    </form>
                    <div id="GoMessege">
                        <a href="">Зарегистрироватся</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("include/footer.php"); 
    ?>
    <script src="js/JavaScript.js"></script>
</body>
</html>