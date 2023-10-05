<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты — Мир</title>
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="wrapper-header-container">
        <div class="header-container-obtaining">
            <div class="header-logobox">
                <a href="index.html">
                    <figure class="logobox-logocontainer">
                        <img class="logocontainer-logo" src="images/logo.png">
                    </figure>
                </a>

                <p class="logobox-name">Мир фиджитала и киберспорта</p>
            </div>
        
            <nav class="header-menu">
                <a href="index.html">Главная</a>
                <a href="archive.html">Архив</a>
                <a href="editors.html">Авторам</a>
                <a href="feedback.php">Контакты</a>
            </nav>

            <p class="header-service-title">Мир</p>

            <div class="header_burger">
                <span></span>
            </div>
        </div>
    </div>

    <div class="pg-modules-container-obtaining">
        <div class="pg-modules-container">
            <div class="module-contacts">
                <div class="contacts-textbox">
                    <p class="contacts-textbox-title">Связь с нами </p>
                    <p class="contacts-textbox-description">Для начала работы нам надо поговорить. Достаточно рассказать о своем 
                        проекте, указать контакты, и мы свяжемся, чтобы все обсудить.</p>
                </div>

                <div class="contacts-connection">
                    <div class="service-box">
                        <div class="connection-num-email">
                            <img src="icons/feedback-phone.png" alt="phone_icon">
                            <div>
                                <p>+7 (800) 555-35-35</p>
                            </div>
                        </div>

                        <div class="connection-num-email">
                            <img src="icons/feedback-letter.png" alt="letter_icon">
                            <div>
                                <p>n.v.kuznetsov@spbu.ru</p>
                            </div>
                        </div>
                    </div>

                    <div class="connection-messangers">
                        <a class="connection-link" href="https://www.whatsapp.com/">
                            <figure>
                                <img src="icons/feedback-wa.png">
                            </figure>
                        </a>
                
                        <a class="connection-link" href="https://vk.com/feed">
                            <figure>
                                <img src="icons/feedback-vk.png">
                            </figure>
                        </a>
                
                        <a class="connection-link" href="https://telegram.org/">
                            <figure>
                                <img src="icons/feedback-tg.png">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>

            <form id="form" class="module-form">
                <div class="form-lane">
                    <input name="name" class="form-field" placeholder="Имя*" required>
                    <input name="org" class="form-field" placeholder="Организация">
                </div>

                <div class="form-lane">
                    <input name="email" class="form-field" placeholder="Эл. почта*" required>
                    <input name="contact" class="form-field" placeholder="Тел. / Мес.*" required>
                </div>

                <textarea name="text" class="form-wide-field" placeholder="Короткое сообщение*" required></textarea>

                <button id="button" class="form-submit">Отправить</button>
            </form>
        </div>
    </div>

    <div class="wrapper-footer-container">
        <div class="footer-obtaining">
            <img class="footer-logo" src="images/logo.png">
    
            <div class="footer-textbox">
                <div class="footer-textbox-box-1">
                    <a href="">Политика конфиденциальности</a>
                    <a href="">Размещение рекламы</a>
                </div>

                <div class="footer-textbox-box-2">
                    <p>Images by Freepik</p>
                    <p>Copyright © 2023 Журнал</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script_submit.js"></script>

</body>
</html>