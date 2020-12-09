<?php

  //function to find all Subjects
  function find_all_subjects(){
    global $db;

    $query = "select * from subjects ";
    $query .= "order by position asc";
    $result = mysqli_query($db,$query);
    return $result;
  }

 ?>
