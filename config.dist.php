<?php

    // site name
    define('SITE_NAME', 'YOUR_APP_NAME');


    // Database configs
    define("DB_HOST", "YOUR_HOST");
    define("DB_DATABASE", "YOUR_DB_NAME");
    define("DB_USERNAME", "YOUR_DB_USERNAME");
    define("DB_PASSWORD", "YOUR_DB_PASSWORD");
    define("DB_PORT", 3306);


    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);


    // site_url
    define('BASE_URL', 'YOUR_APP_URL');