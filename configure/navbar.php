<?php
  if(isset($_SESSION['uid'])) {
    // 
    //登入後(手機版)
    // 
    echo '<div id="mobile_menu" class="ui left thin vertical sidebar yellow inverted menu">';
    echo '<a class="item" href="index.php">';
    echo '<i class="large black home icon"></i>';
    echo '<strong class="fontColor">首頁</strong>';
    echo '</a>';
    echo '<a class="item" href="index2.php">';
    echo '<strong class="fontColor">主控台</strong>';
    echo '<i class="large black dashboard icon"></i>';
    echo '</a>';
    
    echo '<a class="item" href="#">';
    echo '<i class="black large user icon"></i>';
    echo '<strong class="fontColor">個人資訊</strong>';
    echo '</a>';
   
    echo '<a class="item" href="logout.php">';
    echo '<i class="black large sign out icon"></i>';
    echo '<strong class="fontColor">登出</strong>';
    echo '</a>';
    echo '</div>';

    echo '<div id="top" class="pusher">';
    echo '<div class="canPhone">';
    echo '<div class="ui top fixed borderless yellow inverted menu" style="height:60px;">';
    echo '<i id="mbutton" class="large black align justify icon"></i>';
    echo '<div class="right menu">';
    echo '</div>';
    echo '</div>';
    echo '<div class="Phonespace"></div>';
    echo '</div>';
    // 
    //登入後(電腦版)
    // 
    echo '<i id="gotopbutton" class="big pink arrow circle up icon"></i>';
    echo '<div id="Header" class="canPc">';
    echo '<div class="ui top fixed borderless yellow inverted menu" style="height:65px;">';
    echo '<div class="item"></div>';
    echo '<a href="index.php" id="homeBtn" class="item">';
    echo '<i class="black big home icon"></i>';
    echo '<strong class="fontColor">主頁</strong>';
    echo '</a>';
    echo '<a id="menu_btn" class="item" href="index2.php">';
    echo '<i class="big black dashboard icon"></i>';
    echo '<strong class="fontColor">主控台</strong>';
    echo '</a>';
    
    echo '<div class="right menu" href="#">';
    echo '<a id="add_member_btn" class="item" href="#.php">';
    echo '<i class="black big write icon"></i>';
    echo '<strong class="fontColor">個人資訊</strong>';
    echo '</a>';
    
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
    echo '<div id="mobile_menu" class="ui left thin vertical sidebar yellow inverted menu">';
    // 回首頁
    echo '<a class="item" href="index.php">';
    echo '<i class="large black home icon"></i>';
    echo '<strong class="fontColor">首頁</strong>';
    echo '</a>';
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
    echo '<div class="ui top fixed borderless yellow inverted menu" style="height:60px;">';
    echo '<i id="mbutton" class="large black align justify icon"></i>';
    echo '<div class="right menu">';
    echo '</div>';
    echo '</div>';
    echo '<div class="Phonespace"></div>';
    echo '</div>';
    //
    // (登入前，電腦版)
    // 
    echo '<i id="gotopbutton" class="big pink arrow circle up icon"></i>';
    echo '<div id="Header" class="canPc">';
    echo '<div class="ui top fixed borderless yellow inverted menu" style="height:65px;">';
    echo '<div class="item"></div>';
    // logo回首頁
    
    echo '<a href="index.php" id="homeBtn" class="item">';
    echo '<i class="black big home icon"></i>';
    echo '<strong class="fontColor">主頁</strong>';
    echo '</a>';
    
    // 功能介紹
    echo '<a id="featureBtn" class="item">';
    echo '<i class="black big info circle icon"></i>';
    echo '<strong class="fontColor">功能介紹</strong>';
    echo '</a>';
    // 介紹影片
    echo '<a id="videoIntroduceBtn" class="item">';
    echo '<i class="black big file video outline icon"></i>';
    echo '<strong class="fontColor">介紹影片</strong>';
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
