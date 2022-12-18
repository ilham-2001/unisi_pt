<?php 

    define('URI', explode('.', $_SERVER['REQUEST_URI'])[0]);
    define('METHOD', $_SERVER['REQUEST_METHOD']);

    // handle the request URI and their method
    if (URI == '/unisiSeLogin' && METHOD == 'POST')
    {
        loginHandler($_REQUEST);
    } 

?>