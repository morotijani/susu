<?php

    define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/susu/');
        
    define('PROOT', '/susu/');

    // Load the environment variables from the .env file
    define('RECAPTCHA_SITE_KEY_PUBLIC', $_ENV['RECAPTCHA_SITE_KEY_PUBLIC']);
    define('RECAPTCHA_SITE_KEY_SECRETE', $_ENV['RECAPTCHA_SITE_KEY_SECRETE']);
    define('RECAPTCHA_KEY', $_ENV['RECAPTCHA_KEY']);

    define('MAIL_EMAIL', $_ENV['MAIL_EMAIL']);
    define('MAIL_KEY', $_ENV['MAIL_KEY']);
    define('MAIL_HOST', $_ENV['MAIL_HOST']);
    define('MAIL_PORT', $_ENV['MAIL_PORT']);

    define('IPINFO_KEY', $_ENV['IPINFO_KEY']);

    define('ARKESEL_SMS_API_KEY', $_ENV['ARKESEL_SMS_API_KEY']);
    
    // Define the idle timeout period (e.g., 5 minutes = 300 seconds)
	define('IDLE_TIMEOUT', 600); // 600 seconds = 10 minutes