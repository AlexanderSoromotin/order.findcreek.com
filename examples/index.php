<?php
	include_once "../inc/config.php";
//	include_once "../inc/main.php";

	$css_ver = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Разработка на заказ</title>
    <meta name="description" content="Примеры работ от веб-студии FINDCREEK.">
    <meta name="keywords" content="сайт, создание сайтов, дизайн, разработка, разработка функционала, заказ, мобильное приложение, заявка, техническая поддержка, бизнес">

    <link rel="stylesheet" type="text/css" href="style.css?v=<?= $css_ver ?>">
    <link rel="stylesheet" type="text/css" href="adaptive.css?v=<?= $css_ver ?>">

    <link rel="shortcut icon" href="<?= $link ?>/assets/img/findcreek_logo.svg" type="image/png">
</head>
<body class="custom-scrollbar">

	<?
		include_once "../inc/head.php";
		include_once "../inc/ui/header.php";
	?>

	<main>
        <section class="black hello">
            <div class="container">
                <div class="hello-info">
                    <h1>Здесь собраны все работы студии FINDCREEK</h1>
                    <h2>
                        Вы можете посмотреть, какие сайты и макеты уже были реализованы студией за всё время
                    </h2>
                    <div class="buttons">

                        <a class="btn btn5" href="<?= $link ?>#order">Оставить заявку</a>
                    </div>
                </div>
                <div class="image">
                    <img src="<?= $link ?>/assets/img/findcreek_order_examples_hello.png" alt="">
                </div>
        </section>

        <section id="examples" class="black examples">
            <div class="container">
                <div class="tabs">
                    <div class="tab">
                        <a data-type="all" class="btn btn6 selected" href="#all">Все</a>
                    </div>
                    <div class="tab">
                        <a data-type="design" class="btn btn6" href="#design">Дизайн макеты</a>
                    </div>
                    <div class="tab">
                        <a data-type="websites" class="btn btn6" href="#websites">Сайты</a>
                    </div>
                </div>

                <div class="works">
                    <div class="item" data-type="design">
                        <div class="slider">
                            <div class="images-header">UI/UX дизайн для Пермского филиала компании Красный Крест</div>
                            <div class="arrows">
                                <div class="arrow-container arrow-left hidden">
                                    <div class="arrow"></div>
                                </div>
                                <div class="arrow-container arrow-right">
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <div class="slider-list">
                                <div class="list">
                                    <div class="image">
                                        <img src="https://cloud.findcreek.com/storage/449acf64c6f3bbcc856f862ad19400546ddde76d.jpg" alt="Изображение примера работ">
                                    </div>
                                    <div class="image">
                                        <img src="https://cloud.findcreek.com/storage/6205e6f609997dd04c858621338e2a6da9704525.jpg" alt="Изображение примера работ">
                                    </div>
                                    <div class="image">
                                        <img src="https://cloud.findcreek.com/storage/62e35663f2d16f87d149ff1f588967346dd544c4.jpg" alt="Изображение примера работ">
                                    </div>
                                    <div class="image">
                                        <img src="https://cloud.findcreek.com/storage/492d85e59057211fcbeb0d12789a43541de58097.jpg" alt="Изображение примера работ">
                                    </div>
                                    <div class="image">
                                        <img src="https://cloud.findcreek.com/storage/23cbb5620f227ed34d49f03e8653adc96cfeecf7.jpg" alt="Изображение примера работ">
                                    </div>
                                    <div class="image">
                                        <img src="" alt="Изображение примера работ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-header">
                                <div class="date">Был реализован за 28 дней</div>
                                <div class="company-name">Красный Крест</div>
                            </div>
                            <div class="text">
                                Сайт для организации Красный Крест был разработан за 28 дней после подписания договора.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="height: 200px" class="space"></div>
    </main>



	<?
		include_once "../inc/ui/footer_simple.php";
		include_once "../inc/ui/popup_tools.php";
	?>

	<script type="text/javascript">
        $(".header-menu-examples li").addClass("selected")
        $(".tabs .tab").click(function () {
            workType = $(this).find("a").attr("data-type");
            filterWorks(workType)
            console.log("workType", workType)
            if ($(this).find("a").hasClass("selected")) {
                return;
            }
            $(".tabs .tab a.selected").removeClass("selected");
            $(this).find("a").addClass("selected")


        })

        function filterWorks (workType) {
            items = $(".works .item").length;

            for (let i = 0; i < items; i++) {
                item = $(".works .item:eq(" + i + ")");
                console.log(item)
                if (item.attr("data-type") == workType || workType == "all") {
                    item.removeClass("hidden");
                    continue;
                }

                item.addClass("hidden");
            }
        }

        $(".works .slider .arrow-container").click(function () {
            imgCount = $(this).parents(".slider").find(".image").length;
            imageWidth = $(this).parents(".slider").find(".image").width();
            listWidth = imgCount * imageWidth;
            listLeft = Number($(this).parents(".slider").find(".list").css("left").replace("px", ""))

            if ($(this).hasClass("arrow-right")) {
                // Сдвиг влево
                $(this).parents(".slider").find(".arrow-left").removeClass("hidden")
                if ((listLeft * -1) < listWidth - imageWidth) {
                    listLeft -= imageWidth;
                    if (listLeft % imageWidth != 0) {
                        listLeft = Math.round(listLeft / imageWidth) * imageWidth;
                    }
                    $(this).parents(".slider").find(".list").css({"left": `${listLeft}px`});
                }
                if ((listLeft * -1) >= listWidth - imageWidth) {
                    $(this).parents(".slider").find(".arrow-right").addClass("hidden")
                    $(this).parents(".slider").find(".list").css({"left": `${(listWidth - imageWidth) * -1}px`});
                }
            } else {
                // Сдвиг вправо
                $(this).parents(".slider").find(".arrow-right").removeClass("hidden")

                if (listLeft < 0) {
                    listLeft += imageWidth;
                    if (listLeft % imageWidth != 0) {
                        listLeft = Math.round(listLeft / imageWidth) * imageWidth;
                    }

                    $(this).parents(".slider").find(".list").css({"left": `${listLeft}px`});
                }
                if (listLeft >= 0) {
                    $(this).parents(".slider").find(".arrow-left").addClass("hidden")
                    $(this).parents(".slider").find(".list").css({"left": `0px`});
                }
            }

            console.log("Картинок", imgCount);
            console.log("Ширина картинки",  imageWidth);
            console.log("Ширина листа картинок",  listWidth);
            console.log("Сдвиг листа",  listLeft);


        })


    </script>
</body>
</html>