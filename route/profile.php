<?php

session_start();
if(empty($_SESSION['loggedUser'])) header('Location:/');//проверяем авторизацию пользователя, перенаправляем на главную страницу
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bodySection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/include/getUser.php';

$row = getUserInfo($_SESSION['loggedUser']['name']);
$userGroup = getUserGroup($_SESSION['loggedUser']['id']);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="left-collum-index">
            <p> Имя пользователя: <?=$row['u.name']?> </p>
            <p> E-mail: <?=$row['mail']?> </p>
            <p> Телефон: <?=$row['phone']?> </p>
            <p> Группа: <?= $userGroup['group_concat(g.name)'] ?> </p>

        </td>
    </tr>
</table>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>

