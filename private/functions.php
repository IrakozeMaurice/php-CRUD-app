<?php

//helper function for url paths
function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

//function to encode url we get from urls
function u_enc($string){
  return urlencode($string);
}

//function to encode url we get from urls
function r_enc($string){
  return rawurlencode($string);
}

//always use this function when rendering dynamic data to html to avoid xss
function h($string){
  return htmlspecialchars($string);
}

//http header functions
function error_404(){
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}
function error_500(){
  header($_SERVER["SERVER_PROTOCOL"] . " Internal server error");
  exit();
}

//redirect function
function redirect_to($location){
    header("Location: " . $location);
    exit();
}

// detect form submission
function is_post_request(){
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}







?>
