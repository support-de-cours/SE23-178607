<?php 

// DSN - Domain Server Name
// driver://dbhost=xxx;dbport=xxxx;dbname=xxxx;dbcharset=xxx;
$dsn = DB_DRIVER."://";
$dsn.= "dbhost=".DB_HOST.";";
$dsn.= "dbport=".DB_PORT.";";
$dsn.= "dbname=".DB_SCHEMA.";";
$dsn.= "dbcharset=".DB_CHARSET.";";

dump($dsn, false);

// Instance de PDO
// --
$stmt = new \PDO($dsn, DB_USER, DB_PASS);

dump($stmt);
