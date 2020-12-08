<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u_enc($string){
  return urlencode($string);
}

function r_enc($string){
  return rawurlencode($string);
}

//always use this function when rendering data which comes dynamically to avoid xss
function h($string){
  return htmlspecialchars($string);
}

?>
