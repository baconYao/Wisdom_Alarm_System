<?php
  if(isset($_SESSION['uid'])) {
    // 
    //登入後(手機版)
    // 
    echo '<div id="mobile_menu" class="ui left thin vertical sidebar teal inverted menu">';
    echo '<a class="item" href="index.php">';
    echo '<i class="large black home icon"></i>';
    echo '<strong class="fontColor">首頁</strong>';
    echo '</a>';
    echo '<a class="item" href="menu.php">';
    echo '<strong class="fontColor">主控台</strong>';
    echo '<i class="large black dashboard icon"></i>';
    echo '</a>';
    // echo '<a class="item" href="slot.php">';
    // echo '<i class="black large cubes icon"></i>';
    // echo '<strong class="fontColor">系統架構</strong>';
    // echo '</a>';
    // echo '<a class="item" href="near.php">';
    // echo '<i class="black large child icon"></i>';
    // echo '<strong class="fontColor">團隊成員</strong>';
    // echo '</a>';
    echo '<a class="item" href="edit_persional.php">';
    echo '<i class="black large user icon"></i>';
    echo '<strong class="fontColor">個人資訊</strong>';
    echo '</a>';
    // echo '<a class="item" href="store_upload.php">';
    // echo '<i class="black large cloud upload icon"></i>';
    // echo '<strong class="fontColor">推薦餐廳</strong>';
    // echo '</a>';
    echo '<a class="item" href="logout.php">';
    echo '<i class="black large sign out icon"></i>';
    echo '<strong class="fontColor">登出</strong>';
    echo '</a>';
    echo '</div>';

    echo '<div id="top" class="pusher">';
    echo '<div class="canPhone">';
    echo '<div class="ui top fixed borderless teal inverted menu" style="height:60px;">';
    echo '<i id="mbutton" class="large black align justify icon"></i>';
    echo '<div class="right menu">';
    echo '<a><img id="logoPhone" src="../img/banana.png"></a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="Phonespace"></div>';
    echo '</div>';
    // 
    //登入後(電腦版)
    // 
    echo '<i id="gotopbutton" class="big pink arrow circle up icon"></i>';
    echo '<div id="Header" class="canPc">';
    echo '<div class="ui top fixed borderless teal inverted menu" style="height:65px;">';
    echo '<div class="item"></div>';
    echo '<!-- logo -->';
    echo '<div class="item">';
    echo '<a href="index.php"><img id="logoPc" src="../img/banana.png"></a>';
    echo '</div>';
    echo '<a id="menu_btn" class="item" href="menu.php">';
    echo '<i class="big black dashboard icon"></i>';
    echo '<strong class="fontColor">主控台</strong>';
    echo '</a>';
    // echo '<!-- 拉霸 -->';
    // echo '<a id="slot_btn" class="item" href="slot.php">';
    // echo '<i class="black big cubes icon"></i>';
    // echo '<strong class="fontColor">系統架構</strong>';
    // echo '</a>';
    // echo '<!-- MAP定位 -->';
    // echo '<a id="map_btn" class="item" href="near.php">';
    // echo '<i class="black big child icon"></i>';
    // echo '<strong class="fontColor">團隊成員</strong>';
    // echo '</a>';
    echo '<div class="right menu" href="signup.php">';
    echo '<a id="add_member_btn" class="item" href="edit_persional.php">';
    echo '<i class="black big write icon"></i>';
    echo '<strong class="fontColor">個人資訊</strong>';
    echo '</a>';
    // echo '<a id="sign_in_btn" class="item" href="store_upload.php">';
    // echo '<i class="black large cloud upload icon"></i>';
    // echo '<strong class="fontColor">推薦餐廳</strong>';
    // echo '</a>';
    echo '<a id="sign_in_btn" class="item" href="logout.php">';
    echo '<i class="black big sign out icon"></i>';
    echo '<strong class="fontColor">登出</strong>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="Pcspace"></div>';
    echo '</div>';

  }
  else
  {
    // 
    //登入前(手機版)
    // 
    echo '<div id="mobile_menu" class="ui left thin vertical sidebar teal inverted menu">';
    // 回首頁
    echo '<a class="item" href="index.php">';
    echo '<i class="large black home icon"></i>';
    echo '<strong class="fontColor">首頁</strong>';
    echo '</a>';
    // 功能介紹
    // echo '<a class="item" href="menu.php">';
    // echo '<strong class="fontColor">功能介紹</strong>';
    // echo '<i class="large black info circle icon"></i>';
    // echo '</a>';
    // 系統架構
    // echo '<a class="item" href="slot.php">';
    // echo '<i class="black large cubes icon"></i>';
    // echo '<strong class="fontColor">系統架構</strong>';
    // echo '</a>';
    //  團隊成員
    // echo '<a class="item" href="near.php">';
    // echo '<i class="black large child icon"></i>';
    // echo '<strong class="fontColor">團隊成員</strong>';
    // echo '</a>';
    //  會員登入
    echo '<a class="item signinClass">';
    echo '<i class="black large user icon"></i>';
    echo '<strong class="fontColor">會員登入</strong>';
    echo '</a>';
    // 加入會員
    echo '<a class="item signupClass">';
    echo '<i class="black large add user icon"></i>';
    echo '<strong class="fontColor">加入會員</strong>';
    echo '</a>';
    echo '</div>';

    echo '<div id="top" class="pusher">';
    echo '<div class="canPhone">';
    echo '<div class="ui top fixed borderless teal inverted menu" style="height:60px;">';
    echo '<i id="mbutton" class="large black align justify icon"></i>';
    echo '<div class="right menu">';
    echo '<a><img id="logoPhone" src="../img/banana.png"></a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="Phonespace"></div>';
    echo '</div>';
    //
    // (登入前，電腦版)
    // 
    echo '<i id="gotopbutton" class="big pink arrow circle up icon"></i>';
    echo '<div id="Header" class="canPc">';
    echo '<div class="ui top fixed borderless teal inverted menu" style="height:65px;">';
    echo '<div class="item"></div>';
    // logo回首頁
    echo '<div class="item">';
    echo '<a href="index.php"><img id="logoPc" src="http://127.0.0.1/YourName_System/img/banana.png"></a>';
    echo '</div>';
    // 功能介紹
    echo '<a id="featureBtn" class="item">';
    echo '<i class="black big info circle icon"></i>';
    echo '<strong class="fontColor">功能介紹</strong>';
    echo '</a>';
    // 系統架構
    echo '<a id="architectureBtn" class="item">';
    echo '<i class="black big cubes icon"></i>';
    echo '<strong class="fontColor">系統架構</strong>';
    echo '</a>';
    // 團隊成員
    echo '<a id="teamBtn" class="item">';
    echo '<i class="black big child icon"></i>';
    echo '<strong class="fontColor">團隊成員</strong>';
    echo '</a>';
    // 加入會員
    echo '<div class="right menu">';
    echo '<a id="add_member_btn" class="item signupClass">';
    echo '<i class="black big add user icon"></i>';
    echo '<strong class="fontColor">加入會員</strong>';
    echo '</a>';
    // 會員登入
    echo '<a id="sign_in_btn" class="item signinClass">';
    echo '<i class="black big user icon"></i>';
    echo '<strong class="fontColor">會員登入</strong>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="Pcspace"></div>';
    echo '</div>';

  }
?>
