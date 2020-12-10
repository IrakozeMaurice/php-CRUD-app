<?php
  require_once('db_credentials.php');

  //function to connect to the database
  function db_connect(){
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    confirm_db_connect();
    return $connection;
  }

  //function to disconnect to the database
  function db_disconnect($connection){
    if (isset($connection)) {
      mysqli_close($connection);
    }
  }

  //function to check database connection error
  function confirm_db_connect(){
    if (mysqli_connect_errno()) {
      $msg = "Database connection failed";
      $msg .= mysqli_connect_error();
      $msg .= " (" .mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  //function to check if query succeeded
  function confirm_result_set($result_set){
    if (!$result_set) {
      exit("Database query failed.");
    }
  }
 ?>
