<?php

    $sql = new SQL();

    function loginHandler($req)
    {
        if (isset($req['btn-login']))
        {
            define('LOGIN_EMAIL', $req['login-email']);
            define('LOGIN_PASSWORD', $req['login-password']);

            verifyLogin(LOGIN_EMAIL, LOGIN_PASSWORD);
        }
        else if (isset($req['btn-login-google']))
        {
            echo 'not yet';
        }
    }

    function verifyLogin($email, $pswd) 
    {
        global $sql;

        echo $sql->checkExistingAccount($email, $pswd);
    }
?>