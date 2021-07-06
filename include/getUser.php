<?php
function getUserByLogin($login){
    $login = mysqli_real_escape_string(getConnection(), $login);
    $checkUser = mysqli_query(getConnection(), "SELECT * FROM `users` WHERE `name` = '$login'");
    return mysqli_fetch_assoc($checkUser);
}

function getUserInfo($login){
    $login = mysqli_real_escape_string(getConnection(), $login);
    $result = mysqli_query(
        getConnection(),
        "select users.name as 'u.name', users.mail, users.phone, g.name as 'g.name'
              from users left join users_has_groups as uhg left join `groups` g 
              on uhg.groups_id = g.id on users.id = uhg.users_id where users.name=" . "'$login'");
    return mysqli_fetch_assoc($result);
}

function getUserGroup($id){
    $result = mysqli_query(
        getConnection(),
        "select group_concat(g.name) 
        from `users_has_groups` as `uhg` 
        left join `groups` as `g` on uhg.groups_id=g.id where uhg.users_id =" . "$id");

    return mysqli_fetch_assoc($result);
}
