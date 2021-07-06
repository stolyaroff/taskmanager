<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);

$success = false; //создаем переменную для проверки успешного входа

if (!empty($_POST)) { //проверяем были переданы значения
    include $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/include/getUser.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    //проверка логина и пароля
    if ($user = getUserByLogin($login)) {
        if (password_verify($_POST['password'], $user['password'])){
            $success = true;
            //сохраняем пользователя в сессию
            $_SESSION['loggedUser'] = $user;
            setcookie('login', $login, time() + 60 * 60 * 24 * 30, "/");
        }
    }
}
// Подключение меню
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
// Подключение меню
include $_SERVER['DOCUMENT_ROOT'] . '/controller/mainMenu.php';
?>


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
            </td>

            <!--авторизации-->
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/authorization.php';?>

        </tr>
    </table>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';?> <!--подключаем футер-->