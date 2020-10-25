<?php
    session_start();
    include_once(dirname(__DIR__).'/configs/db.php');
    include_once(dirname(__DIR__).'/libraries/functions.php');

    if ($_POST and isset($_POST['email']) and isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        print_r($_POST);
        if (check_exist_email($email)) {
            echo 'User with this email is exist.';
        } else {
            echo 'OK';
        }
    }
    ?>
    <table>
        <tr>
            <td>First Name:</td>
            <td><input id="login_firstname" type="firstname"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input id="login_lastname" type="lastname"></td>
        </tr>
        <tr>
            <td>Full Name:</td>
            <td><input id="login_fullname" type="fullname"></td>
        </tr>
        <tr>
            <td>Display Name:</td>
            <td><input id="login_displayname" type="displayname"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input id="login_email" type="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input id="login_password" type="password"></td>
        </tr>
        <tr>
            <td>Re-Password:</td>
            <td><input id="login_repassword" type="password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="Register" onclick="login($('#login_firstname').val(), $('#login_lastname').val(), $('#login_fullname').val(), $('#login_displayname').val(), $('#login_email').val(), $('#login_password').val())">
            </td>
        </tr>
    </table>
    <script>
    function login(firstname, lastname, fullname, displayname, email, pass) {
        getURL('POST','#page','pages/form-register.php',{firstname, lastname, fullname, displayname, email, pass});
    }
    </script>