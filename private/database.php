<?php
  require_once('db_credentials.php');

  //function to connect to the database
  function db_connect(){
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    return $connection;
  }

  //function to disconnect to the database
  function db_disconnect($connection){
    if (isset($connection)) {
      mysqli_close($connection);
    }
  }
 ?>
