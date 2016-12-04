<?php

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>

<script type="text/javascript">
  $(document).ready(function(){

    $('.signup_input').popup({
      on: 'focus'
    });
    // 表單確認
    $('.ui.form.segment')
      .form({
        inline : true,
        on: 'blur',
        fields: {
          account: {
            identifier  : 'account',
            rules: [
              {
                type   : 'empty',
                prompt : '請輸入使用者名稱'
              },
              {
                type   : 'regExp[/^[A-Za-z0-9_-]{4,16}$/]',
                prompt : '請輸入4~16位的使用者名稱'
              }
            ]
          },
          email: {
            identifier  : 'email',
            rules: [
              {
                type   : 'email',
                prompt : '請輸入正確的e-mail格式'
              },
            ]
          },
          password1: {
            identifier  : 'password1',
            rules: [
              {
                type   : 'regExp[/^[A-Za-z0-9]{8,16}$/]',
                prompt : '請輸入8~16位的密碼'
              }
            ]
          },
          password2: {
            identifier  : 'password2',
            rules: [
              {
                type   : 'regExp[/^[A-Za-z0-9]{8,16}$/]',
                prompt : '請輸入8~16位的密碼'
              }
            ]
          },
        }
      });

    $('#submit').click(function(){
      // 取得欄位值
      var account = $("#account").val();
      var password1 = $("#password1").val();
      var password2 = $("#password2").val();
      var email = $("#email").val();

      var sendData = "account="+account+"&password1="+password1+"&password2="+password2+"&email="+email;
      // alert(typeof sendData);

      $.ajax({
        url:"signupToDB.php",
        data:sendData,
        type:"POST",
        beforeSend:function(){
          $("#dimmer").dimmer('show');
        },
        success:function(msg){
          //會自己回報一個error，不知道為甚麼=....=
          console.log('success! : '+msg);
          if(msg == "mail_success_success"){
            $('#success_modal')
              .modal('setting', 'transition', 'vertical flip')
              .modal('show')
            ;
          }
          else if(msg=="_data_used"){
            $('#email_modal')
              .modal('setting', 'transition', 'vertical flip')
              .modal('show')
            ;
          }
          else if(msg=="_data_empty"){
            $('#form_modal')
              .modal('setting', 'transition', 'vertical flip')
              .modal('show')
            ;
          }
        },
        error:function(xhr, ajaxOptions, thrownError){
          // console.log('error_status: ' + xhr.status);
          // console.log('error_status: ' + thrownError);
          // 有註冊成功
          $('#success_modal')
            .modal('setting', 'transition', 'vertical flip')
            .modal('show')
          ;
        },
        complete:function(){
          $("#dimmer").dimmer('hide');
        }
      });
    });

  });
    
</script>


<div id="dimmer" class="ui dimmer">
  <div class="ui text loader">資料傳輸中...</div>
</div>


<!-- 已成功註冊，待收信確認 -->
<div id="success_modal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    What To Eat <strong>會員註冊</strong>
  </div>
  <div class="image content">
    <div class="image">
      <img src="img/icon.png" alt="icon">
    </div>
    <div class="description">
      <h2>歡迎成為WTE的一份子</h2>
      <h2 style="color:red;">請至信箱收取會員確認信</h2>
    </div>
  </div>
</div>

<!-- 信箱已經被註冊-->
<div id="email_modal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    What To Eat <strong>訊息錯誤</strong>
  </div>
  <div class="image content">
    <div class="image">
      <img src="img/icon.png" alt="icon">
    </div>
    <div class="description">
      <h2>此電子信箱已經註冊過囉ˊ3ˋ</h2>
    </div>
  </div>
</div>

<!-- 表單未填完整-->
<div id="form_modal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    What To Eat <strong>訊息錯誤</strong>
  </div>
  <div class="image content">
    <div class="image">
      <img src="img/icon.png" alt="icon">
    </div>
    <div class="description">
      <h2>表單尚未填寫完整喔ˊ3ˋ</h2>
    </div>
  </div>
</div>

<div id="signup_Container">
  <div class="Pcspace canPc"></div>
  <div class="Pcspace canPhone"></div>

  <div class="ui stackable container grid segment">

    <div class="sixteen wide column">
      <form class="ui basic form segment" method="POST" >
      
        <div class="field">
          <label>使用者名稱</label>
          <input class="signup_input" name="account" id="account" type="text" data-content="至少4個字元，可以使用英文字母、數字" data-variation="small">
        </div>
      
        <div class="field">
          <label>建立密碼</label>
          <input class="signup_input" name="password1" id="password1" type="password" data-content="密碼至少要有8個字元。建議您不要使用已在其他網站登錄的密碼或容易被猜到的密碼 " data-variation="small">
        </div>
        <div class="field">
          <label>確認密碼</label>
          <input name="password2" id="password2" type="password">
        </div>


        <div class="field">
          <label>電子信箱</label>
          <input class="signup_input" name="email" id="email" type="text" data-content="我們會藉由這個電子郵件地址來確保您的帳戶安全性，您隨時可以自行透過「帳戶設定」管理相關功能。" data-variation="small">
        </div>

        <input class="ui blue submit button" id="submit" type="button" value="註冊" />
        <div class="ui error message"></div>
      </form>
    </div>
  </div>
</div>

<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>

