<?php 

    define('URI', explode('.', $_SERVER['REQUEST_URI'])[0]);
    define('METHOD', $_SERVER['REQUEST_METHOD']);

    // handle the request URI and their method
    if (URI == '/unisiSeLogin' && METHOD == 'POST')
    {
        if (METHOD == 'GET')
        {
            // get all dummy call for team data

        } 
        else if ('POST'){
            // Do some post stuff
            loginHandler($_REQUEST);
        }
    } 
    else if (URI == '/unisiCft') 
    {
        if (METHOD == 'GET')
        {
            // get all dummy call for team data

        } 
        else if ('POST') {
            // Do some post stuff

        }
    }
    else if (URI == '/unisi_pt/unisiRegister')
    {
        if (METHOD == 'GET')
        {
            // get all dummy call for team data

        } 
        else if ('POST') {
            // Do some post stuff
            registerAccount($_REQUEST);
        }
    }
    
?>