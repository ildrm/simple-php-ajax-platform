<?php
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

function check_email_pass($email, $pass) {
    global $db;
    if ($result = mysqli_query($db, "SELECT id, email, first_name, last_name, full_name, display_name FROM users WHERE `email` = '$email' AND `password` = '".sha1($pass)."' LIMIT 1")) {
        $user = mysqli_fetch_assoc($result);
        $result->close();
        return $user;
    } else {
        return false;
    }
}

function check_exist_email($email) {
    global $db;
    if ($result = mysqli_query($db, "SELECT email FROM users WHERE `email` = '$email' LIMIT 1")) {
        $user = mysqli_fetch_assoc($result);
        $result->close();
        return $user ? true : false;
    } else {
        return false;
    }
}

function get_post($id) {
    global $db;
    if ($result = mysqli_query($db, "SELECT * FROM posts WHERE `id` = '$id' LIMIT 1")) {
        $post = mysqli_fetch_assoc($result);
        $result->close();
        return $post ? $post : false;
    } else {
        return false;
    }
}