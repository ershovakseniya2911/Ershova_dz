<?php
if((date("H")) > 20.01 && date("H") < 07.59){
    $style = 'style-night.css';
} else{
    $style = 'style.css';
}
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type="text/css" href='<?php echo $style; ?>'>

    <title>Mysite</title>
</head>
<body>

</body>
</html><html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style/style.css">
    <title>Title</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row header__info">
            <img class="header__logo" src="../image/decoclay_mgn.png" alt="Упс...проблемка">
            <a class="table-link" href="table.html" target="_blank">Таблица</a>
        </div>
    </div>
</header>

<main class="main">
    <div class="container">
        <section class="row">
            <div class="foto">
                <img src="../image/foto.jpg" alt="Упс...проблемка">
            </div>
            <div class="info">
                <div class="name">
                    <h1 class="name">Ершова Ксения</h1>
                </div>
                <div class="info-gr">
                    <div class="aboutme">
                        <p class="aboutme">
                            Место работы: ОАО "ММК-МЕТИЗ" Хобби: декорирование кружек и ложек из полимерной глины. Основатель бренда творческой мастерской "DECOCLAY_MGN"
                        </p>
                    </div>
                    <div class="feedback">
                        <div class="feedback">
                            Преподаватель Регина все объясняет вежливо, доступно, не просто поток теории,
                            а сразу отработка на практике, что очень нравится,
                            так материал усваивается в разы быстрее. Отвечает на все вопросы, которые возникли в ходе урока,
                            ждет и помогает, каждому студенту, если возникает каккая-либо проблема с выполнением задания.
                            Темп очень устраивает, для меня ,как новичка, очень удобно. Хотелось бы, чтобы продолжалось обучение в таком же темпе.
                            Сложности для меня состоят в том, что многие слова не знаю их значений, и по
                            возможности давать устные определения тому или иному слову.
                            В целом , первым занятием удовлетворена.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cup">
            <div class="cup__wrapper">

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/stich.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        Стич
                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/serdce.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        С любовью
                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/pryanya.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        Девочка с пряней
                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/novogodnya.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        Новогодняя девочка
                    </div>
                </div>

            </div>

        </section>
    </div>

    <section class="cup2">
        <div class="cup2__wrapper">

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/stich.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Стич
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/serdce.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Связано с любовью
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/pryanya.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Девочка с пряней
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup__img">
                    <img src="../image/novogodnya.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Новогодняя девочка
                </div>
            </div>

        </div>

    </section>
    </div>




</main>
<footer>
    <div class="footer">
        <p class="footer-content-right">Свяжитесь с нами</p>
        <div class="footer-content-right">
            <a href="https://vk.com/id85687042"><img src="../image/logoVK.jpg" class="icon-style" alt="VK icon">Вконтакте</a>
            <a href="https://www.instagram.com/decoclay_mgn/"><img src="../image/logoINST.png" class="icon-style" alt="INST icon">INSTAGRAM</a>
            <a href="https://github.com/ershovakseniya2911?tab=repositories"><img src="../image/github.jpg" class="icon-style" alt="GitHub icon">GitHub</a>
        </div>

    </div>


</footer>


</body>
</html>