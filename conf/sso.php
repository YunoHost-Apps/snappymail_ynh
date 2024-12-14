<?php

// Enable SnappyMail Api and include index file 
$_ENV['SNAPPYMAIL_INCLUDE_AS_API'] = true;
require 'app/index.php';

// Retrieve email and password
if (isset($_SERVER['HTTP_YNH_USER_EMAIL']) && isset($_SERVER['PHP_AUTH_PW'])) {
        $email = $_SERVER['HTTP_YNH_USER_EMAIL'];
        $password = $_SERVER['PHP_AUTH_PW'];
        $ssoHash = \RainLoop\Api::CreateUserSsoHash($email, $password);
        // redirect to webmail sso url
        \header('Location: https://__DOMAIN____PATH__/app/?sso&hash='.$ssoHash);
}
else {
        \header('Location: https://__DOMAIN____PATH__/app/');
}
