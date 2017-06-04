<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>
  <!-- index主內容 -->
  <div id="index2_Container">
    <div id="item_zone">
      <br>
      <br>
      <br>

      <div class="ui container">
        <div id="newItemBtn" class="ui labeled button">
          <div class="ui green button">
            <i class="plus icon"></i> New Item
          </div>
        </div>
      </div>
      <br>

      <div class="ui container red segment">
        <div class="ui stackable three column grid">
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey alarm outline icon"></i>
              <div class="content">
                一樓左側窗戶
              </div>
              <button id="f1Btn" class="ui grey button">詳細資訊</button>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey record icon"></i>
              <div class="content">
                大門
              </div>
              <button class="ui grey button">詳細資訊</button>
              <button id="viewVideoBtn" class="ui grey button">觀看影像</button>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey alarm outline icon"></i>
              <div class="content">
                二樓右側窗戶
              </div>
              <button class="ui grey button">詳細資訊</button>
            </h2>
          </div>
        </div>

        <div class="ui stackable three column grid">
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey alarm outline icon"></i>
              <div class="content">
                一樓右側窗戶
              </div>
              <button class="ui grey button">詳細資訊</button>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey record icon"></i>
              <div class="content">
                車庫
              </div>
              <button class="ui grey button">詳細資訊</button>
              <button class="ui grey button">觀看影像</button>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive grey record icon"></i>
              <div class="content">
                頂樓小門
              </div>
              <button class="ui grey button">詳細資訊</button>
              <button class="ui grey button">觀看影像</button>
            </h2>
          </div>
        </div>
      </div>
      

    </div>
  </div>

  <div id="newItem_modal" class="ui basic modal">
    <i class="close icon"></i>
    <div class="header">
      <strong>新增設備</strong>
    </div>
    <div class="content">
      <form id="signUpForm" class="ui form segment" method="POST" style="background-color:#FFFFCC;">
        <div class="field">
          <label>設備</label>
          <select class="ui search dropdown">
            <option value="1">磁簧</option>
            <option value="2">攝影機</option>
          </select>
        </div>
      
        <div class="field">
          <label>設備位址</label>
          <input placeholder="例如:1F左側第一扇窗戶...等" data-variation="small">
        </div>
        <div class="field">
          <label>設備識別ID</label>
          <input placeholder="請輸入本產品的ID" type="password">
        </div>

        <input class="ui blue submit button" id="newItemSubmit" type="button" value="新增" />
        <div class="ui error message"></div>
      </form>
    </div>
  </div>

  <div id="f1_modal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        一樓左側窗戶
    </div>
    <div class="content">
      <div class="description">
        <div class="ui middle aligned animated list">
          <div class="item">
            <div class="content">
              <div class="header">狀態: 正常</div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="header">位址: xxx路aa號1F左側第二扇窗</div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="header">設備ID: c01</div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="header">建置日期: 2016/12/29</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="actions">
      <div class="ui red deny button">
        移除
      </div>
      <div class="ui blue button">
        修改
      </div>
    </div>
  </div>


<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>


