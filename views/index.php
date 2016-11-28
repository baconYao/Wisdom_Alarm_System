<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>
  <!-- index主內容 -->
  <div id="index_Container">
    
    <div id="videoZone">
      <div class="space"></div>
      <div class="ui grid container">
        <div class="eight wide column">
          <div class="ui yellow huge header">A new technology with novel ideas.</div>
        </div>
        <div class="ten wide column">
          <div class="ui olive huge header">It's like the sparkling stars in the night sky </div>
        </div>
        <div class="ten wide column">
          <div class="ui pink huge header">Secure your home peaceful and make your family safe.</div>
        </div>
      </div>
      
    </div>

    <div id="featureZone">
      
    </div>

    <div id="architectureZone">
      <div class="space canPhone"></div>
      <div class="canPc"style="height:3vh;"></div>
      <div class="ui container">
        <img class="ui fluid image segment" src="../img/arduino.jpg">
      </div>
    </div>

    <div id="teamZone">
      <div class="space"></div>
      <div class="ui stackable two column grid container">
        <!-- photo card -->
        <div id='yaoPhoto' class="column">
          <div class="ui centered card" >
            <div class="ui slide masked reveal image">
              <img src="../img/myself.jpg" class="visible content">
              <img src="../img/myself.jpg" class="hidden content">
            </div>
            <div class="content">
              <a class="header center aligned">Pei-Yao Chang</a>
            </div>
            <div class="extra content">
              <button id="showmybtn" class="ui blue button">
                Show my detail
              </button>
                <!-- show modal -->
              <div class="ui modal">
                <i class="close icon"></i>
                <div class="header">
                  My Picture
                </div>
                <div class="image content">
                  <div class="ui medium image">
                    <img src="img/icon.jpg">
                  </div>
                  <div class="description">
                    <div class="ui header">Hi,I'm PeiYao Chang :D</div>
                    <p>My School:<a href="http://www.nchu.edu.tw/index1.php">NCHU</a></p>
                    <p>My Association:<a href="http://nchuit.cc/">資訊社</a></p>
                  </div>
                </div>
                <div class="actions">
                  <a href="https://www.facebook.com/bacon735392" target="_blank">
                    <button class="ui facebook button">
                      <i class="facebook icon"></i>
                      Facebook
                    </button>
                  </a>
                  <a href="https://plus.google.com/103003372248466066456" target="_blank">
                    <button class="ui google plus button">
                      <i class="google plus icon"></i>
                      Google plus
                    </button>
                  </a>
                  <a href="https://github.com/baconYao" target="_blank">
                    <button class="ui github button">
                      <i class="github icon"></i>
                      Github
                    </button>
                  </a>
                  <a href="https://www.instagram.com/bacon735392/" target="_blank">
                    <button class="ui instagram button">
                      <i class="instagram icon"></i>
                      Instagram
                    </button>
                  </a>
                  <div class="ui positive right labeled icon button">
                    Yep, that's me
                    <i class="thumbs outline up icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div id='yaoPhoto' class="column">
          <div class="ui centered card" >
            <div class="ui slide masked reveal image">
              <img src="../img/myself.jpg" class="visible content">
              <img src="../img/myself.jpg" class="hidden content">
            </div>
            <div class="content">
              <a class="header center aligned">Pei-Yao Chang</a>
            </div>
            <div class="extra content">
              <button id="showmybtn" class="ui blue button">
                Show my detail
              </button>
                <!-- show modal -->
              <div class="ui modal">
                <i class="close icon"></i>
                <div class="header">
                  My Picture
                </div>
                <div class="image content">
                  <div class="ui medium image">
                    <img src="img/icon.jpg">
                  </div>
                  <div class="description">
                    <div class="ui header">Hi,I'm PeiYao Chang :D</div>
                    <p>My School:<a href="http://www.nchu.edu.tw/index1.php">NCHU</a></p>
                    <p>My Association:<a href="http://nchuit.cc/">資訊社</a></p>
                  </div>
                </div>
                <div class="actions">
                  <a href="https://www.facebook.com/bacon735392" target="_blank">
                    <button class="ui facebook button">
                      <i class="facebook icon"></i>
                      Facebook
                    </button>
                  </a>
                  <a href="https://plus.google.com/103003372248466066456" target="_blank">
                    <button class="ui google plus button">
                      <i class="google plus icon"></i>
                      Google plus
                    </button>
                  </a>
                  <a href="https://github.com/baconYao" target="_blank">
                    <button class="ui github button">
                      <i class="github icon"></i>
                      Github
                    </button>
                  </a>
                  <a href="https://www.instagram.com/bacon735392/" target="_blank">
                    <button class="ui instagram button">
                      <i class="instagram icon"></i>
                      Instagram
                    </button>
                  </a>
                  <div class="ui positive right labeled icon button">
                    Yep, that's me
                    <i class="thumbs outline up icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div><!-- teamZone -->
  

  </div>  <!-- index_Container -->

<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>


