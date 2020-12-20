<div class="lang_panel">
    <?php

    if (isset($_COOKIE['lang_cookie'])) {
        switch ($_COOKIE['lang_cookie']) {
            case 'rus':
                echo '<p style="color: white">Выбранный язык: ' . $_COOKIE['lang_cookie'] . '.</p>';
                break;
            case 'eng':
                echo '<p style="color: white">Selected language: ' . $_COOKIE['lang_cookie'] . '.</p>';
                break;
            case 'ukr':
                echo '<p style="color: white">Обрана мова: ' . $_COOKIE['lang_cookie'] . '.</p>';
                break;
        }
    } else {
        echo '<p style="color: white">Обрана мова: ukr.</p>';
    }

    ?>
    <a href="?lang=rus"><img src="images/flags/russia.png" alt="rus" style="width: 25px; height: 15px"></a>
    <a href="?lang=eng"><img src="images/flags/united_kingdom.png" alt="eng" style="width: 25px; height: 15px"></a>
    <a href="?lang=ukr"><img src="images/flags/ukraine.png" alt="ukr" style="width: 25px; height: 15px"></a>
</div>