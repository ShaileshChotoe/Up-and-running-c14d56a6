<?php
 $host = 'localhost';
 $db   = 'netland';
 $user = 'root';
 $pass = '';
 $charset = 'utf8mb4';
 
 $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 try {
      $pdo = new PDO($dsn, $user, $pass);
      echo "connected to database of $db with version " . get_database_version($pdo);
 } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
 }

function get_database_version($pdo)
{
    return $pdo->getAttribute(constant("PDO::ATTR_SERVER_VERSION")) . "\n";
}

?>