<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>
<div id="checkmember_Container">
  <div class="ui container" style="background-color:white; height: 60vh;">
    <div class="Pcspace canPc"></div>
    <div class="Phonespace canPhone"></div>
<?php
  require_once('configure/connectvars.php'); 
  // 連接資料庫
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // 抓取連結傳送的使用者資料
  $code = $_GET['code'];
  $email = $_GET['email'];

  //資料不為空
  if(!empty($code) && !empty($email)){
    $query = "SELECT email,code FROM tampuser WHERE email = '$email' AND code = '$code'";
    $data = mysqli_query($dbc, $query);

    //資料存在
    if(mysqli_num_rows($data) == 1){
        $query = "UPDATE tampuser SET validate = 1 WHERE email = '$email' AND code = '$code'";
        mysqli_query($dbc, $query);

        //獲取tampuser的值
        $query = "SELECT * FROM tampuser WHERE email = '$email' AND code = '$code'";
        $data = mysqli_query($dbc, $query);
        if($row = mysqli_fetch_array($data))
        {
          // 獲取資料
          $account = $row['account'];
          $passwd = $row['passwd'];
          $email = $row['email'];

          // 將使用者資料從「暫存待認證區 tampuser」移至「已認證使用者區 user」
          $query = "INSERT INTO user (passwd,email,account) VALUES ('$passwd','$email','$account')";        
          mysqli_query($dbc, $query);


        }
        echo '<h2 class="ui center aligned icon header"><i class="massive pink check circle icon"></i>會員認證成功</h2>';
        mysqli_close($dbc);
      }
      else{
        echo '<h2 class="ui center aligned icon header"><i class="massive remove circle outline icon"></i>會員認證失敗</h2>';
      }
  }
  else{
    echo '<h2 class="ui center aligned icon header"><i class="massive remove circle outline icon"></i>會員認證失敗</h2>';
  }
?>

  <!-- </div> -->
</div>

<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>

