$(document).ready(function(){
  
// *******************************************************************
  // 共用頁面
  //control the top sidebar menu
  $("#mbutton").on({
    mouseenter: function(){
      $(this).addClass('animated jello');
    },
    mouseleave: function(){
      $(this).removeClass("animated jello");
    },
    click: function(){
      $('.ui.sidebar')
      .sidebar('setting', 'transition', 'slide along')
      .sidebar('toggle') ;
    }
  });

  //功能介紹_PC
  $("#featureBtn").on({
    mouseenter: function(){
      $(this).addClass("active purple");
    },
    mouseleave: function(){
      $(this).removeClass("active purple");
    },
    click: function(){
      $('html,body').animate({scrollTop:$('#featureZone').offset().top},600);
    }
  });

  // 介紹影片_PC
  $("#videoIntroduceBtn").on({
    mouseenter: function(){
      $(this).addClass("active orange");
    },
    mouseleave: function(){
      $(this).removeClass("active orange");
    },
    click: function(){
      $('html,body').animate({scrollTop:$('#videoIntroZone').offset().top},600);
    }
  });

  // 系統架構_PC
  $("#architectureBtn").on({
    mouseenter: function(){
      $(this).addClass("active orange");
    },
    mouseleave: function(){
      $(this).removeClass("active orange");
    },
    click: function(){
      $('html,body').animate({scrollTop:$('#architectureZone').offset().top},600);
    }
  });
  // 團隊成員_PC
  $("#teamBtn").on({
    mouseenter: function(){
      $(this).addClass("active orange");
    },
    mouseleave: function(){
      $(this).removeClass("active orange");
    },
    click: function(){
      $('html,body').animate({scrollTop:$('#teamZone').offset().top},600);
    }
  });

  

  // 個人資訊 _ PC
  $("#persional_btn").on({
    mouseenter: function(){
      $(this).addClass("active blue");
    },
    mouseleave: function(){
      $(this).removeClass("active blue");
    },
  });

  // sign in _ PC
  $("#sign_in_btn").on({
    mouseenter: function(){
      $(this).addClass("active teal");
    },
    mouseleave: function(){
      $(this).removeClass("active teal");
    },
    
  });

  // show signin modal
  $(".signinClass").on({
    click: function(){
      $('#login_modal')
        .modal('setting', 'transition', 'vertical flip')
        .modal('show')
      ;
    }
  });


  // 加入會員 _ PC
  $("#add_member_btn").on({
    mouseenter: function(){
      $(this).addClass("active blue");
    },
    mouseleave: function(){
      $(this).removeClass("active blue");
    }
  });

  // show signup modal
  $(".signupClass").on({
    click: function(){
      $('#signup_modal')
        // .modal('setting', 'closable', false)
        .modal({allowMultiple: true})
        // .modal('setting', 'transition', 'vertical flip')
        .modal('setting', {
          closable: false,
          transition: 'vertical flip'
        })
        .modal('show')
      ;
    }
  });

  // 登出 _ PC
  $("#signout_btn").on({
    mouseenter: function(){
      $(this).addClass("active blue");
    },
    mouseleave: function(){
      $(this).removeClass("active blue");
    },
  });

  //control scroll back to top button
  $("#gotopbutton").on({
    mouseenter: function(){
      $(this).addClass('animated shake');
    },
    mouseleave: function(){
      $(this).removeClass('animated shake');
    },
    click: function(){
      $('html,body').animate({scrollTop:$('#top').offset().top},600);
    }
  });

  //control logoPC
  $("#logoPc").on({
    mouseenter: function(){
      $(this).addClass('animated rubberBand');
    },
    mouseleave: function(){
      $(this).removeClass('animated rubberBand');
    }
  });

  // logoPc popup
  $('#logoPc').popup({
      position : 'bottom center',
      target   : '#logoPc',
      title    : '點我回首頁',
  });


  /*-------------------------------會員註冊----------------------------------*/
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
  // 處理會員註冊
  $('#signupSubmit').click(function(){
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
        $("#signUpForm").addClass("loading");
      },
      success:function(msg){
        // do nothing
      },
      error:function(xhr, ajaxOptions, thrownError){
        console.log('error_status: ' + xhr.status);
        console.log('error_status: ' + thrownError);
      },
      complete:function(){
        alert("註冊成功!請至email收取確認信");
      }
    });
  });

  /*-------------------------------會員登入----------------------------------*/
  $('#loginBtn').click(function(){
    var email = $("#emailEntry").val();
    var password = $("#passwordEntry").val();
    var sendData = "email="+email+"&passwd="+password;
    // console.log(sendData);
    $.ajax({
      url:'login.php',
      data:sendData,//參數,若有需要可傳給PHP
      type:"POST",
      success: function(msg){
        if( msg ){
          alert(msg + '歡迎回來');
        } else {
          alert("帳號密碼錯誤");
        }
      }, //如果取得成功則執行此函數
      error: function(xhr, ajaxOptions, thrownError){
        console.log('error_status: ' + xhr.status);
        console.log('error_status: ' + thrownError);
      },
      complete: function() {
        // location.reload();
        window.location.href = 'http://140.120.15.251/YourName_System/index2.php';
      }
    });
  });

  // youtube video
  $('.ui.embed').embed();

  // add new item modal
  $("#newItemBtn").on({
    click: function(){
      $('#newItem_modal')
        // .modal('setting', 'closable', false)
        .modal({allowMultiple: true})
        // .modal('setting', 'transition', 'vertical flip')
        .modal('setting', {
          closable: false,
          transition: 'vertical flip'
        })
        .modal('show')
      ;
    }
  });

  $("#f1Btn").click(function(){
    $('#f1_modal')
      // .modal('setting', 'closable', false)
      .modal({allowMultiple: true})
      // .modal('setting', 'transition', 'vertical flip')
      .modal('setting', {
        closable: false,
        transition: 'vertical flip'
      })
      .modal('show')
    ;
  });

  $("#viewVideoBtn").click(function(){
    window.open(' http://mylinkit.local:8080/?action=stream ', 'Yahoo', config='height=500,width=500');
  });


});
