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

  //function to find all pages
  function find_all_pages(){
    global $db;

    $query = "select * from pages ";
    $query .= "order by subject_id asc, position asc";
    // echo $query . '<br>';    //troubleshooting code
    $result = mysqli_query($db,$query);
    confirm_result_set($result);
    return $result;
  }

  //function to find a subject by id
  function find_subject_by_id($id){
    global $db;

    $query = "select * from subjects ";
    $query .= "where id = '" . $id . "'";
    $result = mysqli_query($db,$query);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject;  //returns assoc. array
  }

  //function to insert a subject in the database
  function insert_subject($subject){
    global $db;

    $query = "insert into subjects ";
    $query .= "(menu_name, position, visible) ";
    $query .= "values (" ;
    $query .= "'" . $subject['menu_name'] . "',";
    $query .= "'" . $subject['position'] . "',";
    $query .= "'" . $subject['visible'] . "'";
    $query .= ")";
    echo $query;
    $result = mysqli_query($db, $query);  //returns true or false for insert queries
    if ($result) {
      return true;
    }else {
      //insert failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_subject($subject){
    global $db;
    
    $query = "update subjects set ";
    $query .= "menu_name='" .$subject['menu_name'] . "',";
    $query .= "position='" .$subject['position'] . "',";
    $query .= "visible='" .$subject['visible'] . "' ";
    $query .= "where id='" .$subject['id'] . "' ";
    $query .= "LIMIT 1";

    $result = mysqli_query($db, $query);    //returns true or false
    if ($result) {
      return true;
    } else {
      //update failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
?>
