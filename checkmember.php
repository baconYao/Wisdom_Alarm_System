<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>
<div id="WTE_checkmember_Container">
  <div class="ui container" style="height:300px;">
    <div class="Pcspace canPc"></div>
    <div class="Phonespace canPhone"></div>
<?php
  require_once('configure/connectvars.php'); 
  // 連接資料庫
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // 抓取連結傳送的使用者資料
  $code = $_GET['code'];
  $email = $_GET['email'];

  //echo $code . '     '; //驗證確認
  //echo $email . '     ';

  //資料不為空
  if(!empty($code) && !empty($email)){
    $query = "SELECT email,code FROM tampuser WHERE email = '$email' AND code = '$code'";
    $data = mysqli_query($dbc, $query);

    //資料存在
    if(mysqli_num_rows($data) == 1){
        $query = "UPDATE tampuser SET yn = 1 WHERE email = '$email' AND code = '$code'";
        mysqli_query($dbc, $query);

        //獲取tampuser的值
        $query = "SELECT * FROM tampuser WHERE email = '$email' AND code = '$code'";
        $data = mysqli_query($dbc, $query);
        if($row = mysqli_fetch_array($data))
        {
          // 獲取資料
          $uid = $row['uid'];
          $account = $row['account'];
          $passwd = $row['passwd'];
          $email = $row['email'];
          $mv = $row['mv'];
          $type = $row['type'];

          // 將使用者資料從「暫存待認證區 tampuser」移至「已認證使用者區 user」
          $query = "INSERT INTO user (uid,passwd,email,account) VALUES ('$uid','$passwd','$email','$account')";        
          mysqli_query($dbc, $query);

          $query = "INSERT INTO upreference (uid,mv,type) VALUES ('$uid','$mv','$type')";        
          mysqli_query($dbc, $query);

          // 分解lifecycle字串
          // 0..早午餐
          // 1..下午茶
          // 2..宵夜
          // 3..點心
          // 4..飲料
          $depart_lifecycle = explode("," , $row['lifecycle']);
          if(count($depart_lifecycle > 0))
          {
            foreach ($depart_lifecycle as $word) 
            {
              $query = "INSERT INTO ulifecycle (uid,lifecycle) VALUES ('$uid','$word')";
              mysqli_query($dbc, $query);
            }
          }
          //echo 'to ulifecycle 完成   @@@@@@@@@@@@@@@@  ';
        }
        //HTML 水平置中
        echo '<p align="center"><b><font size="6">會員已認證</font></b></p>'; // valign="center"
        mysqli_close($dbc);
      }
      else{
        echo '會員認證失敗';
      }
  }
  else{
    echo '沒有資料';
  }
?>

  </div>
</div>

<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>