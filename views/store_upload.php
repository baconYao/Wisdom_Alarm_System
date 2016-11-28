<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  
  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['uid'])) {
    echo '<p class="login">Please <a href="login.php">log in</a> to access this page.</p>';
    exit();
  }

?>

<!-- 上傳菜單主內容 -->
<div id="WTE_store_upload_Container">
  <div class="Pcspace canPc"></div>

    <div class="ui stackable container grid segment">
      
      <div class="one wide column" style="background-color:red;"></div>

      <div class="fourteen wide column">
        <form class="ui form segment" method="POST" >
        
          <div class="field">
            <label>餐廳名稱</label>
            <input class="signup_input" name="store_name" id="store_name" type="text">
          </div>
        
          <div class="field">
            <label>用餐時間</label>
            <input class="signup_input" name="store_eat_time" id="store_eat_time" type="text" >
          </div>

          <div class="field">
            <label>餐廳地址</label>
            <input class="signup_input" name="store_address" id="store_address" type="text" >
          </div>

          <div class="field">
            <label>餐廳類別 :</label>
          </div>

          <div class="inline fields">
            <div class="field">
              <label>葷素食 :</label>
                <select class="ui fluid dropdown" name="mv">
                  <option value="0">葷食</option>
                  <option value="1">素食</option>
                </select>
            </div>
          </div>

          <div class="inline fields">
            <div class="field">
              <label>中西式 :</label>
                <select class="ui fluid dropdown" name="type">
                  <option value="0">中式</option>
                  <option value="1">西式</option>
                  <option value="2">其他</option>
                </select>
            </div>
          </div>

          <div class="inline fields">
            <div class="field">
              <label>用餐類型 :</label>
                <select class="ui fluid dropdown" name="time">
                  <option value="0">早餐</option>
                  <option value="1">午餐</option>
                  <option value="2">早午餐</option>
                  <option value="3">下午茶</option>
                  <option value="4">晚餐</option>
                  <option value="5">宵夜</option>
                  <option value="6">點心</option>
                </select>
            </div>
          </div>

          <div class="inline fields">
            <div class="field">
              <label>是否提供飲料 :</label>
                <select class="ui fluid dropdown" name="drink">
                  <option value="0">是</option>
                  <option value="1">否</option>
                </select>
            </div>
          </div>
            
          <div class="inline fields">
            <div class="field">
              <input class="ui orange submit button" id="submit" multiple type="file" value="" />
            </div>
            <div class="field">
              <input class="ui blue submit button" id="submit" type="button" value="上傳" />
            </div>
          </div>

          
          <div class="ui error message"></div>
        </form>
      </div>

      <div class="one wide column" style="background-color:red;"></div>

    </div>
    <div class="Pcspace"></div>
</div>

<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>


