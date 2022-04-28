<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <script src="/js/history.js"></script>
    <script>
        setCookie(0);
    </script>
    <title>Personal website</title>
</head>

<body>
    <div class="wrapper">
        <main class="page">
            <nav class="navbar navbar-expand-lg navbar-light header-bg">
                <a class="navbar-brand header__brand" href="#">
                    <img alt="" class="d-inline-block align-top" height="30" src="/source/img/heart_logo.png" width="34">
                </a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <div class="container">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item active">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/main">
                                    Hello
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/about">Обо мне</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <div class="dropdown__menu" id="dropdown">
                                    <a class="nav-link" href="/interests" id="dropbtn">Интересы</a>
                                    <ul class="dropdown-content" id="myDropdown">
                                        <li>
                                            <a href="/interests#books">Книги</a>
                                        </li>
                                        <li>
                                            <a href="/interests#films">Фильмы</a>
                                        </li>
                                        <li>
                                            <a href="/interests#hobbies">Хобби</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/study">Учеба</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/gallary">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/contacts">Контакт</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/test">Тест</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/history">История</a>
                            </li>
                            <li class="nav-item">
                                <img alt="" class="nav-img" src="/img/cycle.svg">
                                <a class="nav-link" href="/guestbook">Гостевая книга</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <span id="data"></span>
            </nav>
           
            <?php 
            include 'app/views/'.$content_view; 
            ?>

        </main>
    </div>
</body>
<script src="/js/changeImage.js"></script>
<script src="/js/data.js"></script>
<script src="/js/dropdown.js"></script>

</html>