<?php

  // is_blank('abcd')
  function is_blank($value='') {
    // TODO
    return empty($value);
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    // TODO
    return (strlen($value)>=$options[0] && strlen($value)<=$options[1]);
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // TODO
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

?>
