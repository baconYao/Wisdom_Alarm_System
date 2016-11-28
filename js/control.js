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

  // 推薦餐廳_PC
  $("#store_upload_btn").on({
    mouseenter: function(){
      $(this).addClass("active orange");
    },
    mouseleave: function(){
      $(this).removeClass("active orange");
    },
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
  // sign in show popup
  // $('#sign_in_btn').popup({
  //     position : 'bottom left',
  //     target   : '#sign_in_btn',
  //     title    : 'Coming soon',
  //     content  : '此功能建製中',
  // });


  // 加入會員 _ PC
  $("#add_member_btn").on({
    mouseenter: function(){
      $(this).addClass("active blue");
    },
    mouseleave: function(){
      $(this).removeClass("active blue");
    },
  });

  // 加入會員 show popup
  // $('#add_member_btn').popup({
  //     position : 'bottom left',
  //     target   : '#add_member_btn',
  //     title    : 'Coming soon',
  //     content  : '此功能建製中',
  // });

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



//******************************************************************
// signup.php
  // $('.signup_input').popup({
  //   on: 'focus'
  // });

  

// *****************************************************************




});
