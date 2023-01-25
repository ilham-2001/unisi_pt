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

    function registerAccount($req)
    {
        global $sql;
        
        define('FULLNAME', "$req[fname] $req[lname]");
        define('EMAIL', $req['email']);
        define('NOTELEPON', $req['noTelepon']);
        define('JURUSAN', $req['jurusan']);
        define('NIM', explode('@', EMAIL)[0]);
        
        echo json_encode($sql->insertAccount(FULLNAME, EMAIL, NOTELEPON, JURUSAN, NIM));

    }
?>