<footer>
    <div class="footer">
        <div class="terms">
            <ul>
                <a href="<?= $link ?>/#"><li>О себе</li></a>
                <a href="<?= $link ?>/#"><li>Политика конфиденциальности</li></a>
                <a href="<?= $link ?>/#"><li>Условия пользования</li></a>
                <a href="<?= $link ?>/#"><li>Политика в отношении файлов cookie</li></a>
                <a href="<?= $link ?>/#"><li>Информация о рекламе</li></a>
                <a href="<?= $link ?>/#"><li>Справочный центр</li></a>
                <a href="<?= $link ?>/#"><li>Реклама</li></a>
                <a href="<?= $link ?>/#"><li>Настройки</li></a>
                <a href="<?= $link ?>/#"><li>Продукты компании</li></a>
                <a href="<?= $link ?>/#"><li></li></a>
                <a href="<?= $link ?>/#"><li></li></a>
            </ul>
        </div>
        <div class="copyright">© FINDCREEK, Inc., <?= date('Y') ?>.</div>
    </div>
</footer>

<style>

footer {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
}
footer .footer {
    position: relative;
    width: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
footer ul {
    display: flex;
    list-style: none;
}
footer ul a {
    transition: .1s;
    text-decoration: none;
}
footer ul a:hover {
    opacity: .6;
}
footer ul li {
    font-size: .75rem;
    /* color: var(--text_neutral_color); */
    color: #9C9C9E;
    padding: 4px 8px;
    font-weight: 500;
}
footer .copyright {
    display: flex;
    justify-content: center;
    font-size: .75rem;
    color: #9C9C9E;
    font-weight: 500;
    margin-top: 8px;
    margin-bottom: 12px;
}



</style>