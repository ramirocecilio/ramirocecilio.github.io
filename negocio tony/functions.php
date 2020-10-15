<?php
    $dbhost = 'localhost';
    $dbname = 'hebe'; 
    $dbuser = 'root';
    $dbpass = '';

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection->connect_error) die("Fatal error");

    function createTable($name, $query)
    {
        queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
        echo "Table '$name' created or already exists.<br>";

    }
    function queryMysql($query)
    {
        global $connection;
        $result = $connection->query($query);
        if (!$result) die("Fatal error");
        return $result;
    }

?>