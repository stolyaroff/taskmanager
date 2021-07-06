<td class="right-collum-index">
    <!--Вывод меню в зависимости авторизован пользователь или нет-->
    <?php if (!isset($_SESSION['loggedUser'])) : ?>
    <div class="project-folders-menu">
        <ul class="project-folders-v">
            <li class="project-folders-v-active"><a href="/?login=yes">Авторизация</a></li>
            <li><a href="#">Регистрация</a></li>
            <li><a href="#">Забыли пароль?</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>

    <!--Подключаем форму и сообщения об ошибках-->
    <?php if (isset($_GET['login']) && $_GET['login'] == 'yes') {
        if ($success){
            include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
        }elseif (empty($_POST)){
        } else {
            include $_SERVER['DOCUMENT_ROOT'] . '/include/error.php';
        }
        include $_SERVER['DOCUMENT_ROOT'] . '/include/form.php';
        };?>
    <?php else : ?>
        <div class="project-folders-menu">
            <ul class="project-folders-v">
                <li class="project-folders-v-active"><a href="/include/logout.php">Выйти</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    <?php endif;?>
</td>