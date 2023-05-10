<footer>
    <div class="footer">
        <div class="terms">
            <ul>
                <a href="<?= $link ?>/#"><li>О себе</li></a>
                <a target="_blank" href="https://cloud.findcreek.com/storage/647eb0cb2af18d1787cc77cdf3016887a16f24d3.pdf"><li>Политика конфиденциальности</li></a>
                <a target="_blank" href="https://cloud.findcreek.com/storage/c717b506e4b1252708418001c6ab72e87759e6eb.pdf"><li>Условия пользования</li></a>
                <a target="_blank" href="https://cloud.findcreek.com/storage/f961c8a1099de05ff4a47d5989d7dfc0e5596f97.pdf"><li>Политика в отношении файлов cookie</li></a>
                <a href="<?= $link ?>/#"><li>Информация о рекламе</li></a>
                <a href="<?= $link ?>/#"><li>Справочный центр</li></a>
                <a href="<?= $link ?>/#"><li>Реклама</li></a>
                <a href="<?= $link ?>/#"><li>Настройки</li></a>
                <a href="<?= $link ?>/#"><li>Продукты компании</li></a>
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

@media screen and (max-width: 1300px) {
    footer .terms {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }
    footer ul {
        width: 70%;
        flex-wrap: wrap;
        justify-content: center;
    }
    footer ul li {
        white-space: nowrap;
        padding: 4px 12px;
    }
}

@media screen and (max-width: 500px) {
    footer .footer {
        width: 100%;
    }
    footer ul {
        width: 100%;
        flex-direction: column;
        justify-content: center;
    }
    footer ul a {
        text-align: center;
    }
    footer ul li {
        margin-bottom: 10px;
        font-size: 14px;
    }
    footer .terms {
        margin-bottom: 20px;
    }
}



</style>