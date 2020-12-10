<?php

  //function to find all Subjects
  function find_all_subjects(){
    global $db;

    $query = "select * from subjects ";
    $query .= "order by position asc";
    // echo $query . '<br>';    //troubleshooting code
    $result = mysqli_query($db,$query);
    confirm_result_set($result);
    return $result;
  }

 ?>
