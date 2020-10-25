    <?php
    session_start();
    include_once(dirname(__DIR__).'/configs/db.php');
    include_once(dirname(__DIR__).'/libraries/functions.php');
    if (isset($_SESSION['user'])) {
        echo 'You are logged in.';
        die;
    } elseif ($_POST and isset($_POST['email']) and isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if ($user = check_email_pass($email, $pass)) {
            //print_r($user);
            $_SESSION['user'] = json_encode($user);
            echo 'Successfully logged in.';
            die;
        }
    }
    ?>
    <table>
        <tr>
            <td>Email:</td>
            <td><input id="login_email" type="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input id="login_password" type="password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="Login" onclick="login($('#login_email').val(), $('#login_password').val())">
            </td>
        </tr>
    </table>
    <script>
    function login(email, pass) {
        getURL('POST','#page','pages/form-login.php',{email,pass});
    }
    </script>