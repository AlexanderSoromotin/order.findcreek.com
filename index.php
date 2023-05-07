<?php
	include_once "inc/config.php";
//	include_once "inc/main.php";

	$css_ver = 4;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FINDCREEK Order</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?= $css_ver ?>">
    <link rel="stylesheet" type="text/css" href="adaptive.css?v=<?= $css_ver ?>">

    <link rel="shortcut icon" href="<?= $link ?>/assets/img/findcreek_logo.svg" type="image/png">
</head>
<body class="custom-scrollbar">

	<?
		include_once "inc/head.php";
		include_once "inc/ui/header.php";
	?>

	<main>
        <section class="black hello">
            <div class="container">
                <h2>Поможем создать <span class="colorized-text">сайт</span>, собрать <span class="colorized-text">дизайн сайта</span> или <span class="colorized-text">мобильного приложения</span></h2>
                <h3>
                    Консультации по созданию сайтов и мобильных приложений, профессиональный дизайн, разработка функционала и техническая поддержка - мы предоставляем полный спектр услуг для вашего успешного онлайн-присутствия!</h3>
                <div class="buttons">

                    <a class="btn btn1" href="#order" anchorTo="order">Оставить заявку</a>
                    <a class="btn btn2" href="#order" anchorTo="order"><span>Узнать чуть больше</span></a>

            </div>
        </section>

        <section id="services" class="white services">
            <div class="container">
                <h2 class="section-title"><b>Услуги.</b> Мы Вам перезвоним</h2>
                <div class="cards">

                    <div class="card">
                        <div class="card-header"><h3>Разработка сайтов</h3></div>
                        <div class="card-content">
                            <div class="image">
                                <div class="img">
                                    <img src="<?= $link ?>/assets/img/website.jpg" alt="">
                                </div>
                            </div>
                            <div class="description">От 25000₽</div>
                            <a class="btn btn3" href="#order" anchorTo="order">Оставить заявку</a>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header"><h3>Разработка дизайна сайта</h3></div>
                        <div class="card-content">
                            <div class="image">
                                <div class="img">
                                    <img src="<?= $link ?>/assets/img/design.jpg" alt="">
                                </div>
                            </div>
                            <div class="description">От 25000₽</div>
                            <a class="btn btn3" href="#order" anchorTo="order">Оставить заявку</a>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header"><h3>Разработка дизайна мобильного приложения</h3></div>
                        <div class="card-content">
                            <div class="image">
                                <div class="img">
                                    <img src="<?= $link ?>/assets/img/application.jpg" alt="">
                                </div>
                            </div>
                            <div class="description">От 25000₽</div>
                            <a class="btn btn3" href="#order" anchorTo="order">Оставить заявку</a>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="advantages" class="white advantages">
            <div class="container">
                <h2 class="section-title"><b>Почему мы? </b>Всё просто</h2>
                <div class="card-slider">
<!--                    <div class="card-slider-arrow arrow-left hidden"></div>-->
<!--                    <div class="card-slider-arrow arrow-right"></div>-->

                    <div class="cards">
                        <div class="card">
                            <div class="card-header"><h3>ПЕРСОНАЛИЗАЦИЯ</h3></div>
                            <div class="card-content">
                                <h4>Мы создаем уникальные продукты, учитывая потребности каждого клиента и особенности их бизнеса.</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3>КАЧЕСТВО</h3></div>
                            <div class="card-content">
                                <h4>Мы гарантируем высокое качество работы и удовлетворяем потребности клиентов, дорабатывая проект до полного удовлетворения.</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3>ЭКСПЕРТНОСТЬ</h3></div>
                            <div class="card-content">
                                <h4>Наши специалисты имеют опыт в разных областях веб-разработки и дизайна, следят за тенденциями и предлагают передовые решения.</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3>ЦЕНЫ</h3></div>
                            <div class="card-content">
                                <h4>Мы предлагаем конкурентоспособные цены без скрытых доплат, чтобы наши клиенты получили максимальную выгоду от нашей работы.</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3>СРОКИ</h3></div>
                            <div class="card-content">
                                <h4>Мы всегда придерживаемся графика проекта и доставляем проект в срок</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3>ИННОВАЦИИ</h3></div>
                            <div class="card-content">
                                <h4>Мы используем Laravel для создания высококачественных и инновационных сайтов, соответствующих самым высоким требованиям.</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="order" class="white order">
            <div class="container">
                <h2 class="section-title"><b>Подать заявку</b></h2>
                <div class="order-form">
                    <h3>Какой вид услуги Вас интересует?</h3>
                    <div class="radio-buttons">
                        <button class="selected">Разработка сайта</button>
                        <button class="">Дизайн сайта</button>
                        <button class="">Дизайн мобильного приложения</button>
                    </div>
                    <div class="form-content">
                        <div class="inputs">
                            <input class="" type="text" name="name" placeholder="Ваше имя">
                            <input class="" type="text" name="mail" placeholder="Ваш email">
                        </div>
                        <div class="send">
                            <button class="send-form keyframe-send">
                                <div class="send-step-1">Оставить заявку</div>
                                <div class="send-step-2">Отправка ...</div>
                                <div class="send-step-3">Заявка отправлена!</div>
                                <div class="send-step-4">Произошла ошибка (</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="height: 500px" class="space"></div>
    </main>



	<?
		include_once "inc/ui/footer_simple.php";
		include_once "inc/ui/popup_tools.php";
	?>

	<script type="text/javascript">
        cardsBlockWidth = $('section.advantages .cards').width();
        step = Number($('section.advantages .card').css('width').replace('px', '')) + 23;
        pos = 0;
        screenWidth = window. innerWidth - 10;
        console.log(step);

        $('section.advantages .arrow-right').click(function () {
            moveSlider('right');
        })
        $('section.advantages .arrow-left').click(function () {
            moveSlider('left');
        })

        function moveSlider (direction) {
            if (direction == 'right') {
                if (pos + screenWidth < cardsBlockWidth + 200) {
                    pos += step;
                }
            }

            if (direction == 'left') {
                if (pos > 0) {
                    if (pos <= step) {
                        pos = step
                    }
                    pos -= step;
                }
            }

            if (pos <= 0) {
                $('section.advantages .arrow-left').addClass('hidden');
            } else {
                $('section.advantages .arrow-left').removeClass('hidden');
            }

            if (pos + screenWidth < cardsBlockWidth) {
                $('section.advantages .arrow-right').removeClass('hidden');
            } else {
                $('section.advantages .arrow-right').addClass('hidden');
            }

            $('section.advantages .cards').css({'margin-left': pos * -1 + 'px'});
        }

        $('section.order .radio-buttons button').click((e) => {
            $('section.order .radio-buttons button').removeClass('selected');
            $(e.target).addClass('selected');
        })

        var isMouseDown = false;
        var startX, scrollLeft, margin;
        var list = $('section.advantages .card-slider');

        list.on('mousedown', function(e) {
            isMouseDown = true;
            startX = e.pageX - list.offset().left;
            margin = Number(list.find('.cards').css('margin-left').replace('px', ''));
            // console.log('margin = ', margin)

        });

        list.on('mousemove', function(e) {
            if(!isMouseDown) return;
            e.preventDefault();

            endX = e.pageX - list.offset().left;
            x = (startX - endX) * -1;
            result = margin + x;

            if (result > 0) return;
            if (result < cardsBlockWidth * -1) return;

            list.find('.cards').css({'margin-left': result});
        });

        list.on('mouseup', function(e) {
            isMouseDown = false;
        });

        list.on('mouseleave', function(e) {
            isMouseDown = false;
        });


        hideFormErrors = setTimeout(() => {}, 10);
        function showFormError (inputName) {
            $('.order-form input[name="' + inputName + '"]').addClass('error');

            clearInterval(hideFormErrors);
            hideFormErrors = setTimeout(() => {
                $('.order-form input').removeClass('error');
            }, 500);
        }

        $('section.order .send-form').click((e) => {
            if (!$('section.order .send-form').hasClass('keyframe-send')) {
                return;
            }
            name = $('.order-form input[name="name"]').val();
            email = $('.order-form input[name="email"]').val();
            workType = $('.order-form .selected').text();
            time = Math.floor(Math.random(1) * 300 + 200);
            console.log(time);

             if (name == '') {
                 showFormError('name');
                 return;
             }
             if (email == '') {
                 showFormError('email');
                 return;
             }

            $('section.order .send-form').addClass('keyframe-sending').removeClass('keyframe-send');
            $.ajax({
                url: "<?= $apiUrl ?>/id/order.create",
                method: "post",
                cache: false,
                data: {
                    name: name,
                    email: email,
                    workType: workType
                },
                success: (response) => {
                    setTimeout(() => {
                        $('section.order .send-form').addClass('keyframe-sended').removeClass('keyframe-sending');
                        setTimeout(() => {
                            $('section.order .send-form').addClass('keyframe-send').removeClass('keyframe-sended');
                        }, 2000)
                        $('.order-form input[name="name"]').val('');
                        $('.order-form input[name="email"]').val('');
                    }, 200)
                },
                error: (response) => {
                    setTimeout(() => {
                        $('section.order .send-form').addClass('keyframe-error').removeClass('keyframe-sending');
                        setTimeout(() => {
                            $('section.order .send-form').addClass('keyframe-send').removeClass('keyframe-error');
                        }, 2000)
                    }, 200)
                }
            })
        })

        $('a[anchorTo], a[anchorTo] span').click((e) => {
            e.preventDefault();
            anchor = $(e.target).attr('anchorTo');
            if (!anchor) {
                anchor = $(e.target).parents('a').attr('anchorTo');
            }

            console.log($(e.target))
            console.log(anchor)
            $('html, body').animate({scrollTop: $('#' + anchor).offset().top}, 600);
            return false;
        })


    </script>
</body>
</html>