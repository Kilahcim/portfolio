<?php

function mail_validation($value) {
  if(preg_match('/^[a-zA-Z0-9]{1}([a-zA-Z0-9]*[\._\-]?)+@([a-zA-Z]{2,5}.[a-zA-Z]{3})$/', $value)) {
    return true;
      print 'fuck yee';
  } else {
    return false;
  }
};
function text_validation($value) {
  if(preg_match('/^[A-Z0-9]{1}[a-z]+/', $value));
}
function number_validation($value){
  if(preg_match('/^\+{1}[0-9]{11}$/', $value));
}


?>
