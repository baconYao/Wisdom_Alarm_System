<?php
  require_once('configure/connectvars.php');
  // 會員寄信模組
  require_once('module/PHPMailer/examples/wte_send_email.php');
  // require_once('module/PHPMailer/examples/wte_send_email.php');
  //連接資料庫 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  
  //從POST抓取資料18 ej84
  $account = mysqli_real_escape_string($dbc, trim($_POST['account']));
  $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
  $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
  $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
  $mv = mysqli_real_escape_string($dbc, trim($_POST['mv']));
  $type = mysqli_real_escape_string($dbc, trim($_POST['type']));
  $habit = mysqli_real_escape_string($dbc, trim($_POST['habit']));

  // echo $habit;
  // 強制轉型
  $new_mv = (int)$mv;
  $new_type = (int)$type;

  //檢查POST的直是否為空
  if(!empty($account) && !empty($password1) && !empty($password2) && !empty($email)){

    //檢查使用者信箱是否已遭註冊
    $queryTampEmail = "SELECT * FROM tampuser WHERE email = '&email'";
    $dataTampEmail = mysqli_query($dbc, $queryTampEmail);
    $queryEmail = "SELECT * FROM user WHERE email = '&email'";
    $dataEmail = mysqli_query($dbc, $queryEmail);

    if(mysqli_num_rows($dataTampEmail) == 0 && mysqli_num_rows($dataEmail) == 0){
      //信箱無人使用

      //亂數產生一32位元的亂數值做為唯一認證碼
      $randcode = md5(uniqid(rand()));
      // echo $randcode;

      // 寄送確認信件
      send_check_mail($email,$account,$randcode);
  
      $query = "INSERT INTO tampuser (joindate,passwd,email,yn,code,account,mv,type,lifecycle) VALUES (NOW(),SHA('$password1'),'$email',0,'$randcode','$account','$new_mv','$new_type','$habit')";        
      mysqli_query($dbc, $query);

      // mysqli_close($dbc);

      // 確認使用者註冊成功
      echo '_success';
      exit();
    }
    else{
      echo '_data_used';
    }
  }
  else{
    echo '_data_empty';
  }
  
  // mysqli_close($dbc);
?>
