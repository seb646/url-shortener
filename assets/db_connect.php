<?php
/** url-shortener project by GitHub user @seb646. Source: https://github.com/seb646/url-shortener. */

function db_connect() {
    static $connection;

    // If there is no connection to the MySQL database, establish one
    if(!isset($connection)) {
        // Import MySQL database connection information
        $config = parse_ini_file('db_config.ini.php'); 

        // Connect to MySQL database 
        $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
    }

    // If a connection cannot be established, return an error
    if($connection === false) {
        return mysqli_connect_error(); 
    }
    return $connection;
}

