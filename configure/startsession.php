<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['uid'])) {
    if (isset($_COOKIE['uid']) && isset($_COOKIE['email'])) {
      $_SESSION['uid'] = $_COOKIE['uid'];
      $_SESSION['email'] = $_COOKIE['email'];
    }
  }
?>
