<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx0f4b5c6374498be4", "3367276c61d76dbf2fe7a9a8e1c1c535");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
  <title>INVITATION</title>
  <style>
  body {
    text-align: center;
  }
  </style>

  <link rel="stylesheet" type="text/css" href="./js/fullPage/jquery.fullPage.css" />
  <script src="./js/jquery.min.js"></script>
  <script src="./js/fullPage/vendors/jquery.easings.min.js"></script>
  <script type="text/javascript" src="./js/fullPage/jquery.fullPage.js"></script>
  <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <script type="text/javascript" src="./js/weixin.js"></script>

  <link rel="stylesheet" type="text/css" href="css/share.css" />
  <link rel="stylesheet" type="text/css" href="./css/page_fng.css" />
  <script>
  function loaded() {
    document.getElementById("load_div").style.visibility = 'visible';
    window.onload = function () {
      //$("#load_div").style.visibility = 'visible';
      document.getElementById("load_div").style.visibility = 'hidden';
      var audio1 = document.getElementById("audio1");
      if (audio1 !== null) {
        audio1.play();
      }
    };
  }
  $(document).ready(function () {
    $('#fullpage').fullpage({
		afterLoad: function(anchorLink, index){
			if(index == 2){
        $('.cn_div2').delay(100).animate({
          top: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
        $('.en_div2').delay(100).animate({
            top: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');

            $('.cn_div2_01').delay(200).animate({
              top: '0',
              opacity: '1'
    				}, 2000, 'easeOutExpo');
            $('.en_div2_01').delay(200).animate({
                top: '0',
                opacity: '1'
      				}, 2000, 'easeOutExpo');

			}
			if(index == 3){
        $('.cn_div3').delay(100).animate({
          left: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
       $('.en_div3').delay(100).animate({
         left: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');
            $('.cn_div3_01').delay(200).animate({
              left: '0',
              opacity: '1'
    				}, 2000, 'easeOutExpo');
           $('.en_div3_01').delay(200).animate({
             left: '0',
                opacity: '1'
      				}, 2000, 'easeOutExpo');
			}
			if(index == 4){
        $('.cn_div4').delay(100).animate({
					top: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
        $('.en_div4').delay(100).animate({
            top: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');
			}
			if(index == 5){
        $('.cn_div5').delay(100).animate({
					top: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
        $('.en_div5').delay(100).animate({
            top: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');
			}
			if(index == 6){
        $('.cn_div6').delay(100).animate({
					top: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
        $('.en_div6').delay(100).animate({
            top: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');
			}
			if(index == 7){
        $('.cn_div7').delay(100).animate({
          left: '0',
          opacity: '1'
				}, 2000, 'easeOutExpo');
        $('.en_div7').delay(100).animate({
          left: '0',
            opacity: '1'
  				}, 2000, 'easeOutExpo');
			}
		},
		onLeave: function(index, direction){
      if(index == 2){
        $('.cn_div2').delay(100).animate({
          top: '-10',
          opacity: '0'
				}, 1500, 'easeOutExpo');
        $('.en_div2').delay(100).animate({
            top: '-10',
            opacity: '0'
  				}, 1500, 'easeOutExpo');
                      $('.cn_div2_01').delay(200).animate({
                        top: '1000',
                        opacity: '0'
              				}, 1500, 'easeOutExpo');
                      $('.en_div2_01').delay(200).animate({
                          top: '1000',
                          opacity: '0'
                				}, 1500, 'easeOutExpo');

			}
			if(index == 3){
        $('.cn_div3').delay(100).animate({
          left: '-10',
          opacity: '0'
				}, 1500, 'easeOutExpo');
       $('.en_div3').delay(100).animate({
         left: '-10',
            opacity: '0'
  				}, 1500, 'easeOutExpo');

            $('.cn_div3_01').delay(200).animate({
              left: '10',
              opacity: '0'
    				}, 1500, 'easeOutExpo');
           $('.en_div3_01').delay(200).animate({
             left: '10',
                opacity: '0'
      				}, 1500, 'easeOutExpo');
			}
			if(index == 4){
        $('.cn_div4').delay(100).animate({
					top: '1000',
          opacity: '0'
				}, 1500, 'easeOutExpo');
        $('.en_div4').delay(100).animate({
            top: '1000',
            opacity: '0'
  				}, 1500, 'easeOutExpo');
			}
			if(index == 5){
        $('.cn_div5').delay(100).animate({
					top: '10',
          opacity: '0'
				}, 1500, 'easeOutExpo');
        $('.en_div5').delay(100).animate({
            top: '10',
            opacity: '0'
  				}, 1500, 'easeOutExpo');
			}
			if(index == 6){
        $('.cn_div6').delay(100).animate({
					top: '1000',
          opacity: '0'
				}, 1500, 'easeOutExpo');
        $('.en_div6').delay(100).animate({
            top: '1000',
            opacity: '0'
  				}, 1500, 'easeOutExpo');
			}
			if(index == 7){
        $('.cn_div7').delay(100).animate({
					left: '10',
          opacity: '0'
				}, 1500, 'easeOutExpo');
        $('.en_div7').delay(100).animate({
          left: '10',
            opacity: '0'
  				}, 1500, 'easeOutExpo');
			}
		}
	});
  }
);

document.addEventListener('DOMContentLoaded', loaded, false);
function en(){
  //alert("原本的方法");
  $.fn.fullpage.moveTo(2, 1);
  $(".cn_div").addClass("hides");
  $(".en_div").removeClass("hides");

};
function cn()
{
  //alert("原本的方法");
  $.fn.fullpage.moveTo(2, 1);
  $(".en_div").addClass("hides");
  $(".cn_div").removeClass("hides");
};
function sound()
{
  //alert("原本的方法");
  $(".sound_div").addClass("hides");
  $(".nosound_div").removeClass("hides");
      var audio1 = document.getElementById("audio1");
      if (audio1 !== null) {
        audio1.play();
      }
};
function nosound()
{
  //alert("原本的方法");
  $(".nosound_div").addClass("hides");
  $(".sound_div").removeClass("hides");
      var audio1 = document.getElementById("audio1");
      if (audio1 !== null) {
        audio1.pause();
      }
};
function jump_map()
{
  //location.href="http://j.map.baidu.com/9TGM0";
    location.href="http://t.m.haosou.com/t/jecr7";
};
</script>
<!--  <script type="text/javascript"  src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<script type="text/javascript" src="js/weixin.js"> </script>-->
<script type="text/javascript">
wx.config({
debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
jsApiList: [
'checkJsApi',
'onMenuShareTimeline',
'onMenuShareAppMessage',
'onMenuShareQQ',
'onMenuShareWeibo',
'hideMenuItems',
'showMenuItems',
'hideAllNonBaseMenuItem',
'showAllNonBaseMenuItem',
'translateVoice',
'startRecord',
'stopRecord',
'onRecordEnd',
'playVoice',
'pauseVoice',
'stopVoice',
'uploadVoice',
'downloadVoice',
'chooseImage',
'previewImage',
'uploadImage',
'downloadImage',
'getNetworkType',
'openLocation',
'getLocation',
'hideOptionMenu',
'showOptionMenu',
'closeWindow',
'scanQRCode',
'chooseWXPay',
'openProductSpecificView',
'addCard',
'chooseCard',
'openCard'
]
});
</script>

<script type="text/javascript" src="./js/weixin.js"></script>
</head>
<body>
  <audio id="audio1" src="music/bng.mp3" loop=loop>
    HTML5 audio not supported
  </audio>

  <div id="fullpage">
    <div class="section" style=" background: #FFFFFF; ">
      <img src="./img/begin.jpg" style="width: 100%;height: 100%;"/>

      <div class="sound_div hides" style="z-index: 0; position: absolute; top: 5%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/no_sound.png" style="padding-left:60%; left: 0%; height: 3%;" onclick="sound()"/>
      </div>
      <div class="nosound_div" style="z-index: 0; position: absolute; top: 5%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/sound.png" style="padding-left:60%; left: 0%; height: 3%;" onclick="nosound()"/>
      </div>
      <div style="z-index: 0; position: absolute; top: 93%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/cn_btn.png" style="padding-left:40%; left: 0%; height: 2%;" onclick="cn()"/>
        <img src="./img/en_btn.png" style="left: 54%; height: 2%;" onclick="en()"/>
      </div>
      <div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/arrow_01.png" style="height: 20px;" />
      </div>
      <!--window.location.href='#page1'-->
      <!--<a href="#page1"><img src="./img/black.png" style="z-index: 0; position: absolute; top: 93%; left: 50%; height: 7%;width: 50%;"/></a>
    -->
  </div>

  <div class="section" style=" background: #FFFFFF; ">

    <div class="cn_div" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/cn_bng_02.jpg" style="width: 100%;height: 100%;" />
    </div>
    <div class="en_div hides" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/en_bng_02.jpg" style="width: 100%;height: 100%;" />
    </div>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_00.png" style="height: 20px;" />
    </div>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_01.png" style="height: 20px;" />
    </div>
  </div>

    <div class="section" style=" background: #FFFFFF; ">

          <div class="cn_div" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
            <img src="./img/cn_bng_03.jpg" style="width: 100%;height: 100%;" />
          </div>
          <div class="en_div hides" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
            <img src="./img/en_bng_03.jpg" style="width: 100%;height: 100%;" />
          </div>
      <div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/arrow_00.png" style="height: 20px;" />
      </div>
      <div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
        <img src="./img/arrow_01.png" style="height: 20px;" />
      </div>
    </div>
  <div class="section" style=" background: #FFFFFF; ">

        <div class="cn_div" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
          <img src="./img/cn_bng_05.jpg" style="width: 100%;height: 100%;" />
        </div>
        <div class="en_div hides" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
          <img src="./img/en_bng_05.jpg" style="width: 100%;height: 100%;" />
        </div>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_00.png" style="height: 20px;" />
    </div>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_01.png" style="height: 20px;" />
    </div>
  </div>

  <div class="section" style=" background: #FFFFFF; ">
    <img class="cn_div" src="./img/cn_bng_06.jpg" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;"/>
    <img class="en_div hides" src="./img/en_bng_06.jpg" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;"/>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_00.png" style="height: 20px;" />
    </div>
    <div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/arrow_01.png" style="height: 20px;" />
    </div>
  </div>

  <div class="section" style=" background: #FFFFFF; ">

    <div class="cn_div" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/cn_bng_07.jpg" style="width: 100%;height: 100%;" />
    </div>
    <div class="en_div hides" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
      <img src="./img/en_bng_07.jpg" style="width: 100%;height: 100%;" />
    </div>
<div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
  <img src="./img/arrow_00.png" style="height: 20px;" />
</div>
<div class="down-icon spring" style="z-index: 0; position: absolute; top: 96%; left: 0%; width: 100%; height: 100%;">
  <img src="./img/arrow_01.png" style="height: 20px;" />
</div>
  </div>
  <div class="section" style=" background: #FFFFFF; ">

                    <div class="cn_div" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
                      <img src="./img/cn_bng_04.jpg" style="width: 100%;height: 100%;" />
                    </div>
                    <div class="en_div hides" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
                      <img src="./img/en_bng_04.jpg" style="width: 100%;height: 100%;" />
                    </div>

        <div class="down-icon spring" style="z-index: 0; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;">
          <img src="./img/arrow_00.png" style="height: 20px;" />
        </div>
        <div style="z-index: 0; position: absolute; top: 0%; left: 0%; margin-left: auto;margin-right: auto; width: 100%; height: 100%;">
        <img class="flash_view"  src="./img/cn_black_04.png" style="width:100%;height: 100%;" onclick="jump_map()"/>
        </div>
  </div>
  <div id="load_div" style="z-index: 1; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%; background: #000; visibility: visible;">
    <div style="text-align: center; ">
      <div class=" loading" id="loading"></div>
      <span style="color:#000;">页面加载中，请稍候……</span>
    </div>
  </div>
</div>
</body>
</html>
