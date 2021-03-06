<?php
  require_once('configure/connectvars.php');
  // Start the session
  session_start();
  // Clear the error message
  $error_msg = "";
  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['uid'])) {
    // if (isset($_POST['submit'])) {
      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      // Grab the user-entered log-in data
      $user_email = mysqli_real_escape_string($dbc, trim($_POST['email']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['passwd']));

      if(!empty($user_email) && !empty($user_password)){
        // Look up the user_email and password in the database
        $query = "SELECT uid, email FROM user WHERE email = '$user_email' AND passwd = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and user_email session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['uid'] = $row['uid'];
          $_SESSION['email'] = $row['email'];
          setcookie('uid', $row['uid'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('email', $row['email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          // $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
          // header('Location: ' . $home_url);
        }
        else {
          // The username/password are incorrect so set an error message
          $error_msg = 'Sorry, you must enter a valid email and password to log in.';
        }
      }
    // }
  }
  else {
    $error_msg = 'uid';
  }


  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['uid'])) {
    echo '<p class="error">' . $error_msg . '</p>';
  } else {
    // Confirm the successful log-in
    echo $_SESSION['email'] ;
  }
?>
