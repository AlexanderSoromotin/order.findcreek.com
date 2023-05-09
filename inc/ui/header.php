<?php

    include_once "../config.php";

?>
<header class="">
	<div class="header">

		<div class="tabs">
            <div class="col-1">
                <a href="<?= $link ?>">
                    <img src="<?= $link ?>/assets/img/findcreek_logo.svg" height="37px">
                    <span>FINDCREEK Order</span>
                </a>
            </div>

            <div class="col-2">
                <ul>
                    <a class="anchor" anchorTo="services" href="#services">
                        <li>Услуги</li>
                    </a>
                    <a class="anchor" anchorTo="advantages" href="#advantages">
                        <li>О нас</li>
                    </a>
                    <a class="anchor" anchorTo="order" href="#order">
                        <li>Контакты</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="additional-data">
            <div class="user-info">
                <a href="<?= $idUrl ?>/auth?redirectTo=<?= urlencode($link . '/authorise') ?>&returnToken=true" class="btn btn4 auth-button">Войти</a>
            </div>
            <div class="email">
                <a href="mailto:info@findcreek.com">info@findcreek.com</a>
            </div>
        </div>
	</div>
</header>


<div class="alerts">
	<div class="alerts_list"></div>
</div>

<script type="text/javascript">

    $('.user-info').css({'display': 'none'});

    if ($.cookie('token') != undefined) {
        $.ajax({
            url: "<?= $apiUrl ?>/id/auth.checkToken/",
            method: "GET",
            data: {
                token: token
            },
            success: (result) => {
                console.log('auth.checkToken', result);

                if (result['response'] == 1) {
                    $.cookie('token', token, {expires: 45, path: '/'});
                    location.href = "<?= $link ?>";

                } else {
                    $('body').append("An error has occurred")
                }
            },
            error: (result) => {
                $('body').append("An error has occurred.")
            },
        })
    }

	function activeHeaderTab (className) {
		$('header .header').removeClass('active')
		$('.' + className).addClass('active')
	}

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
    });
</script>

<style>
    header {
        transition: .2s;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 120px;
        display: flex;
        justify-content: center;
        z-index: 100;
        margin-bottom: 20px;
    }
    header .header {
        transition: .2s;
        position: relative;
        width: 1440px !important;
        height: 40px;
        display: flex;
        padding: 0px 60px;
        margin-top: 55px;
        justify-content: space-between;
    }
    header.fixed {
        background-color: #000000D2;
        backdrop-filter: blur(4px);
        height: 80px;
    }
    header.fixed .header {
        margin-top: 20px;
    }

    header .header .tabs {
        display: flex;
    }
    header .header .col-1 {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 30px;
    }
    header .header .col-1 a {
        text-decoration: none;
        display: flex;
        align-items: center;
    }
    header .header .col-1 span {
        font-weight: 700;
        font-family: 'Montserrat', 'Findcreek', sans-serif;
        font-size: 22px;
        display: inline-block;
        color: #fff;
    }
    header .header .col-1 {
        position: relative;
        height: 100%;
        align-items: center;
    }
    header .header .col-1 img {
        height: 39px;
        margin-right: 26px;
    }
    header .col-2 {
        display: flex;
        height: 100%;
        align-items: center;
    }
    header .col-2 ul {
        list-style: none;
        display: flex;
    }
    header .col-2 ul li {
        transition: .1s;
        padding: 20px 26px;
        font-weight: 600;
        font-size: 20px;
        color: #7E7E7E;
    }
    header .col-2 ul li:hover {
        color: #fff;
    }
    header .col-2 a {
        text-decoration: none;
    }

    .header .additional-data {
        display: flex;
        align-items: center;
    }
    .header .user-info {
        /*position: absolute;*/
        /*right: 0;*/
    }
    .header .user-info .btn4 {
        width: 160px;
        border-radius: 20px;
        height: 35px;
        font-size: 16px;
    }

    header .additional-data .email a {
        transition: .1s;
        color: #c3c3c3;
        text-decoration: none;
    }
    header .additional-data .email a:hover {
        color: #fff;
    }


</style>