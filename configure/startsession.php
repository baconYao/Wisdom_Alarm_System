<?php
  session_start();

  if (!isset($_SESSION['uid'])) {
    if (isset($_COOKIE['uid']) && isset($_COOKIE['email'])) {
      $_SESSION['uid'] = $_COOKIE['uid'];
      $_SESSION['email'] = $_COOKIE['email'];
    }
  }
?>
