<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>W Green Pay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />
<link href="magnific-popup.css" rel="stylesheet">
<link href="sidemenu.css" rel="stylesheet">
<link href="flexslider.css" rel="stylesheet" type="text/css" />
<link href="media-queries.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5X2FMMG');</script>
<!-- End Google Tag Manager -->

<style>

.flexslider .slides img {
width:100%;
display: inline-block;
    max-width:350px;
}

.flexslider .flex-control-nav {
bottom: -20px;
left:40%;
}

.flex-control-paging li a {
width:10px;
height:10px;
margin:0 5px;
    background-color:#fff;
}

.flex-control-paging li a.flex-active {
    background-color:#7fae50;
}

.white-popup {
position: relative;
background: #00727b;
    border-top:6px solid #9bd433;
width: auto;
    max-width: 750px;
margin: 25px auto;
padding: 50px 25px;
}

#participateform {
max-width: 555px !important;
}

.mfp-bg {
background: #000;
}
.mfp-close-btn-in .mfp-close {
color: #9bd433;
}
.mfp-close {
    font-size: 36px;
}
.mfp-content h3 {
    font-size:24px;
}

</style>

<!-- Add sidemenu -->
<script>
(function($){
 // Menu Functions
 $(document).ready(function(){
                   $('#menuToggle').click(function(e){
                                          var $parent = $(this).parent('nav');
                                          $parent.toggleClass("open");
                                          var navState = $parent.hasClass('open') ? "hide" : "show";
                                          $(this).attr("title", navState + " navigation");
                                          // Set the timeout to the animation length in the CSS.
                                          setTimeout(function(){
                                                     console.log("timeout set");
                                                     $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                                                     }, 200);
                                          e.preventDefault();
                                          });
                   });
 })(jQuery);

</script>

<script>

function closeSidebar(e) {
    var obj = event.target;
    var $parent = $('nav');
    $parent.toggleClass("open");
    var navState = $parent.hasClass('open') ? "hide" : "show";
    $(obj).attr("title", navState + " navigation");
    setTimeout(function () {
               $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
               }, 200);
}

</script>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X2FMMG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------ Navigation start ------------>
<div id="header">
<div class="blue-line"></div>
<div class="container" style="position:relative;"><a href="#home">
<div id="logo"></div>
</a>
<ul id="menu">
<li><a href="#about">소개</a></li>
<li><a href="#features">특징</a></li>
<li><a href="#token">토큰정보</a></li>
<li><a href="#media">미디어</a></li>
<li><a href="#roadmap">로드맵</a></li>
<li><a href="#partner">파트너</a></li>
<li><a href="#team">팀</a></li>
<li><a href="#advisers">명예고문</a></li>
<li><a href="#contact">연락처</a></li>
</ul>
<div class="lng-container">
      <div class="dropdown">
          <a href="">언어 &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="index.php">English</a></p>
            <p><a href="index-zh.php">중국말</a></p>
          </div>
      </div> 
      <!--<a href="#" class="lng lng-active">EN</a> &nbsp;<a href="index-kr.php" class="lng">KR</a>-->
    </div>
<nav>
<a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a>
<a href="#about" onClick="closeSidebar(this)">소개</a>
<a href="#features" onClick="closeSidebar(this)">특징</a>
<a href="#token" onClick="closeSidebar(this)">토큰정보</a>
<a href="#media" onClick="closeSidebar(this)">미디어</a>
<a href="#roadmap" onClick="closeSidebar(this)">로드맵</a>
<a href="#partner" onClick="closeSidebar(this)">팀</a>
<a href="#team" onClick="closeSidebar(this)">팀</a>
<a href="#advisers" onClick="closeSidebar(this)">명예고문</a>
<a href="#contact" onClick="closeSidebar(this)">연락처</a>
<div class="lng-mobile">
<a href="index.php">EN</a> &nbsp; <a href="index-zh.php">중국말</a> 
</div>
</nav>
</div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>
<div id="home">
<div class="home-container">
<h1><span style="color:#87b44c;">W Green Pay</span><br><br>HOOXI 캠페인에 참여하세요!</h1>
<br>  
<h4>가장 혁신적인 온실가스 감축 플랫폼이 출시됩니다.</h4>
<br><br>
<table>
      <tr> 
        <td style="text-align:right;"><h4>비공개판매</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">1차분 마감!</span></h4></td>
      </tr>
      <tr> 
        <td></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2차분 진행중</span></h4></td>
      </tr> 
      <tr> 
        <td style="text-align:right;"><h4>공개판매</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2018년 10월 1일~14일</span></h4></td>
      </tr>  
    </table>
    <br>
<!--<div id="token_sale"></div>
<br>
<ul class="countdown">
<li class="days small-font">
일
</li>
<li class="hrs small-font">
시간
</li>
<li class="mins small-font">
분
</li>
<li class="sec small-font">
초
</li>
</ul>
<!--
<br>
<br>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
Private Sale
</div>
</div>
<div class="sale-container">
<div class="privatesale">Soft Cap</div>
<div class="publicsale">60.000.000 WGP</div>
</div>-->
<br>
<br>
<br>
<ul class="home-btn">
<li><a href="#participateform" class="open-popup-link btn">참여하기</a></li>
<li><a href="WPay-whitepaper-KR-v2.0.pdf" target="_blank" class="btn">백서</a></li>
</ul>
</div>
</div>
<!------------ Home banner end ------------>

<!------------ About start ------------>
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12 v-pad">
<div class="flex-container">
<div class="flexslider">
<ul class="slides">
<li><img src="img/screenshot1.png" alt=""></li>
<li><img src="img/screenshot2.png" alt=""></li>
<li><img src="img/screenshot3.png" alt=""></li>
<li><img src="img/screenshot4.png" alt=""></li>
<li><img src="img/screenshot5.png" alt=""></li>
<li><img src="img/screenshot6.png" alt=""></li>
<li><img src="img/screenshot7.png" alt=""></li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12 v-pad" style="padding-top:40px;">
<h1>소개</h1>
<div class="h-line"></div>
<h1><span style="color:#87b44c;">W Green Pay </span></h1>
<br>
<h4>W Green Pay ("WGP")는 스텔라 블록체인 기반 토큰으로 스텔라 블록체인에서 구동된다. W Green Pay는 대국민 온실가스 감축노력을 증진시키고자, 온실가스 배출 감축 노력에 참여하는 대중에게 제공하는 리워드 시스템으로 활용된다. </h4>
<br>
<h4>HOOXI 앱은 개개인의 온실가스 배출 감축 노력을 미션으로 제공하고 미션 성공시 유저에게 리워드를 지급하는 플랫폼입니다.</h4>
<br>
<br>
<h2 style="text-transform:none; color:#87b44c;">목표</h2>
<br>
<p>2009년 코펜하겐 협정에서 발표한 정부의 공약에 따라 한국은 2030년까지 온실가스 배출량을 37% 감소하고자 합니다.</p>
<br>
<p>한국 정부는 지난 2017년 W재단을 선정, 대국민 온실가스 감축운동 (HOOXI 캠페인)을 주도하도록 하였습니다.</p>
<br>
<p>W재단은 한국 정부의 온실가스 감축 목표 달성에 협력하기위해 HOOXI 앱을 출시하여 환경 이슈에 관한 대중의 인식을 고취하고, 대중의 온실가스 감축 참여를 높일 계획입니다. HOOXI 앱을 통해 온실가스 감축 노력에 참여하는 이들에게는 W Green Pay를 통해 리워드가 제공됩니다.</p>
</div>
</div>
<br>
<h2>솔루션</h2>
<br>
<p>가장 혁신적인 온실가스 감축 플랫폼이 출시됩니다.</p>
<br>
<p>한국 정부와 W재단의 대국민 온실가스 감축운동(HOOXI 캠페인)을 위한 블록체인, W Green Pay(WGP)는 온실가스 감축노력에 참여하는 대중에게 제공될 보상수단으로 사용됩니다.</p>
<br>
<h4 style="font-weight:700;">W Green Pay(WGP)의 사용처는 다음과 같이 다양합니다:</h4>
<br>
<br>
<div class="row">
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-1.png" alt="">
<br><br>
<h4>HOOXI 앱 미션 수행 후 WGP 획득</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-2.png" alt="">
<br>
<h4>후시몰 등 국내외 파트너사
온/오프라인 쇼핑몰에서 W Green Pay로 결제 (예: Zeex 와의 파트너쉽 통해 해외 스타벅스, 아마존 등 450개 글로벌 브랜드에서 WGP사용)</h4>
</div>
</div>
<div class="col-md-4 v-pad">
<div class="features-icon">
<img src="img/feature-icon-3.png" alt="">
<br>
<h4>W Green Pay 크립토카트" 를 발급받아 전세계 카드결제가 가능한 곳 어디서든 결제수단으로 사용</h4>
</div>
</div>
</div>
<br>
<br>
<h2>W재단</h2>
<br>
<p>2012년에 설립된 세계자연보전기관 W재단은 기획재정부가 지정한 지정기부금단체로 HOOXI 캠페인을 리드하는 국제구호기구입니다. HOOXI 모바일 앱을 활용하여 온실가스 감축 미션을 수행하면 W Green Pay를 리워드로 받을 수 있습니다.</p>
<br>
<h2><span style="color:#fff;">HOOXI</span> 앱</h2>
<br>
<p>HOOXI 앱은 개인의 온실가스 감축량을 데이터를 통합, 해당 데이터를 환경부로부터 인증받아 탄소배출권을 할당받습니다. HOOXI 앱을 통해 연간 온실가스 천만 톤을 줄일 수 있을 것으로 예측, 탄소배출권 거래를 통해 연간 약 2억 달러의 매출을 올릴 것으로 예상합니다.</p>
<br>
<h2>W Exchange</h2>
<br>
<p>W Exchange는 한국전력의 승인하에 2019년 3월에 출시예정이다. W Exchange는 한국 탄소배출권 거래제 대상 사업체로써, HOOXI 앱 온실가스 감축데이터에 할당된 탄소배출권을 한국거래소에서 거래할 예정입니다. W Exchange는 W Green Pay 를 현금으로 교환할 수 있는 거래소로도 활용될 예정입니다.</p>
</div>
</section>
<section class="sponsors">
<div class="container">
<div class="row">
<div class="col-md-4 v-pad">
<h1>HOOXI <span style="color:#87b44c;">캠페인 후원사</span></h1>
<br>
<p>YG엔터테인먼트, 롯데면세점, 롯데홈쇼핑, 필립모리스, KMA한국능률협회, 중국 우메이그룹, 한솔케미칼, 한솔오크밸리, ㈜보림씨에스, 에프엔가이드, 성도이엔지, 한국경제TV, YJM게임즈, 크린토피아, 아이넷TV</p>
</div>
<div class="col-md-8 v-pad" style="position:relative;">
<div class="leaf-r"><img src="img/leaf-1.png" alt=""></div>
<img src="img/sponsors.png" alt="">
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<h1><span style="color:#87b44c;">홍보대사</span></h1>
<br>
<h4>K-pop 스타를 비롯한 한국 유명인사 300여명이 W재단의 HOOXI 캠페인 홍보대사로 참여하고 있습니다.</h4>
<br>
<p>윤일상 작곡가, 에일리, 김유정, 정글의 법칙 김진호PD, 인피니트, 강남, 에디킴, 김태우, 최강창민(동방신기), 시원, 동해(슈퍼주니어), 백성현, 권혁수, 울랄라세션, 심형탁, 서문탁, 이루, 유인영, 조PD, 아이오아이(I.O.I.), 한고은, 장혁, 스테파니, 알베르토 몬디, 리디아 고 등 많은 유명인사들이 HOOXI 캠페인과 함께합니다.</p>
<br>
<br>
<div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/INFINITE.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>인피니트</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/IOI.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>아이오아이 (IOI)</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/The-One.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>더원</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lydia-Ko.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>리디아 고</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang-Wookhyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>장우혁</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Changmin-(TVXQ).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>동방신기 최강창민</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Choi-Siwon-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>슈퍼주니어 시원</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Donghae-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>슈퍼주니어 동해</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jinho-(SBS-Producer-of-'Law-of-the-Jungle').jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>김진호PD</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jongguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>김종국</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Alberto-Mondi.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>알베르토 몬디</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Hyungjun.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>김형준</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eddy-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>에디킴</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Baek,-Seonghyeon.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>백성현</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Gangnam.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>강남</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Yujung.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>김유정</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yeo,-Jingu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>여진구</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Tiffany-(Girl's-Generation).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>소녀시대 티파니</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Seo,-Muntak.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>서문탁</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Bobby-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>바비킴</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ZoPD.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>조PD</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eru.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>이루</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yoo,-Inyeong.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>유인영</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lee,-Eungyeol.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>이은결</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/JK-Kim-Donguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>JK김동욱</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Cheon,-Hyeonmu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>전현무</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Ailee.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>에일리</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kwon,-Hyeoksu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>권혁수</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ULALA-SESSION.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>울랄라세션</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang,-Hyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>장혁</h3>
          </div>
        </div>
      </div>
</div>
</section>
<section style="background:#001a3d;" class="emission">
<div class="container">
<div class="row">
<div class="col-md-6 v-pad">
<h2><span style="color:#87b44c;">한국 탄소배출권 거래제</span></h2>
<br>
<p>2009년에 한국은 코펜하겐 협정에서 온실가스 감축을 위한 글로벌 이니셔티브에 참여하겠다고 선언했습니다. 2015냔 도입된 한국 탄소배출권 거래제는 유럽 연합 탄소배출권 거래제 다음, 세계 2위 규모의 탄소배출권 거래제입니다.</p>
<br>
<p>한국의 탄소배출권 거래제 시스템은 한국의 온실가스 배출량의 68% 이상을 차지하는 약 600개의 기업에 적용됩니다 (출처: Korea Carbon, 2018년). 할당 기업당 탄소배출량에 대한 캡(한도)은 정부가 결정하고, 기업 당 배출량이 캡을 초과하는 경우 추가로 시장에서 시장 가격으로 탄소배출권을 구매해야 하고, 구매하지 못한 경우에는 정부에 벌금을 지불해야 합니다.</p>
<br>
<p>한국 탄소배출 거래제 미준수 시 부과되는 벌금은 탄소배출권 평균 시장 거래가의 3배로 최대 톤 당 10만원까지 벌금이 부과됩니다.</p>
<br>
<p>출처: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">The International Emissions Trading Association (IETA), 2015</a></p>
<br>
<br>
<img src="img/emission.png" alt="">
</div>
<div class="col-md-6 v-pad">
<h2><span style="color:#87b44c;">탄소배출권 거래가</span></h2>
<br>
<h4 style="font-weight:700;"></h4>
<br>
<p>환경부는 탄소배출권을 인증하고 할당합니다. 국내 탄소배출권의 수요는 증가하는 추세이지만, 환경부가 할당하는 탄소배출권의 수량은 제한적입니다. 톤 당 탄소배출권 가격은 2018년 4월 14일 기준 약 22,000원으로 2018년 4월 16일 기준 유럽 시장의 탄소배출권 (약 17,700원)보다 높습니다. </p>
<br><br>
<img src="img/graph-nep.png" alt="">
<br>
<br>
<br>
<br>
<h4 style="font-weight:700;">탄소배출권 시장규모</h4>
<br>
<p>한국에는 약 600개 기업이 탄소배출권 거래에 참여하고 있습니다. 탄소배출권 시장의 규모는 거래제 출범년도인 2015년이래 573억원에서 급격히 증가하는 추세이며, 2016년 1,946억원 그리고 2017년 1월~10월 동안 약 4,385억원 규모의 탄소배출권이 거래되었습니다 (출처: 기획재정부, 2017년). 한국 정부에 따르면 국내 탄소배출권 시장은 앞으로도 계속 성장 할 것입니다.</p>

</div>
</div>
</div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
<div class="container">
<h1>특징</h1>
<div class="h-line" style="background:#001a3d;"></div>
<div style="text-align:center;">
<h2>W Green Pay (WGP) 활용방법</h2>
<br>
<p>HOOXI 앱의 계정은 누구나 쉽게 개설할 수 있습니다 (영어버전 출시 예정). 앱 유저는 대중 교통 이용하기, 전기 사용 줄이기, 친환경 제품 구매하기 등 다양한 환경 미션을 선택, 미션을 성공함에 따라 WGP를 리워드로 받습니다. HOOXI 앱은 유저의 WGP잔액을 보여주는 토큰 지갑 역할을 하여 유저가 WGP를 사용하거나 수취할 수 있도록 유저의 편의를 제공할 것입니다.</p>
<br>
<br>
<br>
<img src="img/feature.jpg" alt="">
<br>
<br>
<br>
<h4 style="font-weight:700;">W Green Pay (WGP)를 신용카드 사용 캐시백 받을 수 있는 방법</h4>
<br>
<div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
<br>
<div class="row">
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>WGP 파트너사에서 쇼핑</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>친환경 제품 구매</h4>
</div>
<div class="col-md-4 col-sm-4 v-pad">
<div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
<br><br>
<h4>대중 교통 이용</h4>
</div>
</div>
</div>
</div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
<div class="container">
<h1>토큰정보</h1>
<div class="h-line"></div>
<div class="col-md-4 token-graph">
<img src="img/chart-tokensale.png" alt="">
<br>
<br>
<p>W Green Pay 발행량은 총 10억 개로 제한된다.</p>
<br>
<p>이번 ICO에는 10억개의 전체 물량 중 2억개의 WGP만 판매된다. 판매되지 않는 8억개 WGP의 용도는 다음과 같다: </p>
<ul>
          <li>2억개 (20%): WGP 발행자 보유분 (이번 ICO 공개판매 종료일자 부터 6개월동안 판매 제한)</li>
          <li>2억개 (20%): HOOXI 캠페인 참가자에 대한 리워드 제공을 위해 HOOXI 앱에 할당 (리워드 보유물량 소진시, 시장에서 WGP를 구매하여 리워드 시스템 유지)</li>
          <li>4억개 (40%): 판매 유보분 (이번 ICO 공개판매 종료일자 부터 6개월동안 판매 제한)</li>
        </ul>
</div>
<div class="col-md-8 token-table">
<table>
<tr valign="top">
<td class="left-table" style="padding-top:40px;">토큰 이름</td>
<td style="padding-top:40px;">W Green Pay</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 Symbol</td>
<td>WGP</td>
</tr>
<tr valign="top">
<td class="left-table">플랫폼</td>
<td>스텔라 (Stellar)</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 유효 소수점 자리수</td>
<td>18</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 공급량</td>
<td>고정 공급량 10억 개, 판매용 2억 개</td>
</tr>
<tr valign="top">
<td class="left-table">허용되는 화폐</td>
<td>XLM / ETH / BTC / USD</td>
</tr>
<tr valign="top">
<td class="left-table">토큰 가격</td>
<td>토큰 당 2달러</td>
</tr>
<tr valign="top">
<td class="left-table">비공개 판매일정</td>
<td>2018년 5월-9월</td>
</tr>
<tr valign="top">
<td class="left-table">공개 판매일정</td>
<td>2018년 10월 1일 ~ 14일</td>
</tr>
<tr valign="top">
<td class="left-table">소프트 캡</td>
<td>US$25 million</td>
</tr>
<tr valign="top">
<td class="left-table">하드 캡</td>
<td>WGP 2억개</td>
</tr>
<tr valign="top">
<td class="left-table" style="padding-bottom:40px;">매각 제한 기간</td>
<td style="padding-bottom:40px;">발행자가 보유한 WGP 및 판매가 유보된 WGP는 공개 판매 종료 일자인 2018년 10월 14일부터 6개월 동안 매각이 제한된다.</td>
</tr>
</table>
</div>
</div>
</section>
<!------------ Token sale end ------------>

<!------------ Media start ------------>
<section id="media">
  <div class="container">
    <h1>미디어</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div class="row">
      <div class="flex-container">
        <div class="media-slider">
          <ul class="slides" style="text-align:center;">
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=VB2oOM2MlcQ" class="video-pop-up"><img src="img/video-thumb-1.jpg" alt=""></a>
                <br><br>
                <h4>대국민온실가스감축운동 선포식</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=QXNmaJxk0Nc" class="video-pop-up"><img src="img/video-thumb-2.jpg" alt=""></a>
                <br><br>
                <h4>Beautiful World by W-Foundation</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=0KNCErbpYvc" class="video-pop-up"><img src="img/video-thumb-3.jpg" alt=""></a>
                <br><br>
                <h4>Talk about Love by W-Foundation</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=j47MC3V9qMM" class="video-pop-up"><img src="img/video-thumb-4.jpg" alt=""></a>
                <br><br>
                <h4>Together As One by W-Foundation</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=SxTATUzroa0" class="video-pop-up"><img src="img/video-thumb-5.jpg" alt=""></a>
                <br><br>
                <h4>대국민온실가스감축운동 위원회 발대식</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div style="background:#00bc7b; width:100%; height:1px; margin:60px 0;"></div>
    <h2>Articles</h2>
    <br>
    <br>
    <div class="row">
      <div class="flex-container">
        <div class="articles-slider">
          <ul class="slides">
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-jtbc.png" alt="">
                  <br><br>
                  <p>JTBC</p>
                  <br>
                  <h4>더블유재단 "대국민 온실가스 감축 운동 확산 위해 'W Green Pay' 론칭"</h4>
                  <br>
                  <a href="http://news.jtbc.joins.com/article/article.aspx?news_id=NB11637236" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-joongang.png" alt="">
                  <br><br>
                  <p>JOONGANG ILBO</p>
                  <br>
                  <h4>더블유재단 ”대국민 온실가스 감축 운동 확산 위해 ‘W Green Pay’ 론칭”</h4>
                  <br>
                  <a href="http://mnews.joins.com/article/22636110#home" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-sbscnbc.png" alt="">
                  <br><br>
                  <p>SBSCNBC</p>
                  <br>
                  <h4>더블유재단, 온실가스 감축 위한 세계 최초 블록체인 기반 W Green Pay 런칭</h4>
                  <br>
                  <a href="http://sbscnbc.sbs.co.kr/read.jsp?pmArticleId=10000902320&pc_searchclick=all_news_cont_00_02" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-seoulnewspaper.png" alt="">
                  <br><br>
                  <p>SEOUL NEWSPAPER</p>
                  <br>
                  <h4>온실가스 감축 위한 HOOXI 캠페인 보상 ‘ W Green pay’</h4>
                  <br>
                  <a href="http://m.seoul.co.kr/news/newsView.php?cp=seoul&id=20180529500100" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-chosun.png" alt="">
                  <br><br>
                  <p>CHOSUN</p>
                  <br>
                  <h4>W재단-한경BP, 대국민 온실가스 감축운동 'HOOXI캠페인' 파트너쉽 체결</h4>
                  <br>
                  <a href="http://brandplus.chosun.com/site/data/html_dir/2018/06/26/2018062601299.html" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-blockmedia.png" alt="">
                  <br><br>
                  <p>BLOCKMEDIA</p>
                  <br>
                  <h4>W재단, "온실가스 감축 운동 확산 위해 'W Green Pay' 론칭"</h4>
                  <br>
                  <a href="https://www.blockmedia.co.kr/news/article_view/?gCode=AB100&idx=1632" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-hankyung.png" alt="">
                  <br><br>
                  <p>HANKYUNG</p>
                  <br>
                  <h4>W재단, 세계 최초 블록체인 기반 온실가스 감축노력 리워드 시스템 ‘W Green Pay’ 런칭</h4>
                  <br>
                  <a href="http://news.hankyung.com/article/201805189484a" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-heraldcorporation-.png" alt="">
                  <br><br>
                  <p>HERALD CORPORATION</p>
                  <br>
                  <h4>W재단, 세계 최초 블록체인 기반 온실가스 감축 'WGP' 런칭</h4>
                  <br>
                  <a href="http://news.heraldcorp.com/view.php?ud=20180521000217 " target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-donga.png" alt="">
                  <br><br>
                  <p>DONG-A ILBO</p>
                  <br>
                  <h4>더블유재단, 블록체인 기반 국민 리워드 시스템 ‘W Green Pay’ 선보인다</h4>
                  <br>
                  <a href="http://bizn.donga.com/3/all/20180521/90175484/2" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-moneytoday-.png" alt="">
                  <br><br>
                  <p>MONEY TODAY</p>
                  <br>
                  <h4>W재단, 세계 최초 온실가스 리워드 시스템 'W Green pay' 론칭</h4>
                  <br>
                  <a href="http://news.mt.co.kr/mtview.php?no=2018052310511272827" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-kr-naver.png" alt="">
                  <br><br>
                  <p>NAVER</p>
                  <br>
                  <h4>온실 가스 감축을 위한 글로벌 솔루션 'W Green Pay(WGP)'</h4>
                  <br>
                  <a href="http://m.news.naver.com/read.nhn?mode=LSD&mid=sec&sid1=101&oid=015&aid=0003950033" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="articles-viewall"><a href="media-kr.html" target="_blank" class="btn white-btn articles-btn">View All</a></div>
        </div>
      </div>
    </div>
    
    <div class="row" style="margin-top:80px;">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
		<a href="https://icobench.com/ico/w-green-pay" target="_blank"><img src="img/media-logos/ICObench.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.icoalert.com/?q=w%20green%20pay&is_v=1" target="_blank"><img src="img/media-logos/icoalert2.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.coinhills.com/ico/view/w-green-pay/" target="_blank"><img src="img/media-logos/coinhills.png"></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <a href="https://www.trackico.io/ico/w-green-pay/" target="_blank"><img src="img/media-logos/TrackICO.png"></a>
      </div>
    </div>
  </div>
</section>
<!------------ Media end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
<div class="container">
<h1>로드맵</h1>
<div class="h-line"></div>
<div class="example-centered">
<div class="col-xs-10 col-xs-offset-1 col-sm-12">
<ul class="timeline timeline-left">
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker tokensale"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2017년 12월</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 캠페인 선포식</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker tokensale"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:100px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 4월</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 캠페인 위원회 발대식</h4></li>
<li><h4>싱가포르에서 W Green Pay 런칭</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 5월-9월</h3>
<br>
<ul class="roadmap">
<li><h4>W Green Pay 비공개 판매</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년7월27일~29일</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 캠핑페스티벌</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker timeline-inactive"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 10월 1일~14일</h3>
<br>
<ul class="roadmap">
<li><h4>W Green Pay 공개 판매</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker timeline-inactive"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 10월 4일</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 앱 출시</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker timeline-inactive"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 10월 10일~12일</h3>
<br>
<ul class="roadmap">
<li><h4>대한민국탄소포럼 (평창포럼)</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker timeline-inactive"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2018년 11월 2일~4일</h3>
<br>
<ul class="roadmap">
<li><h4>HOOXI 앱, HOOXI 캠페인 페스티벌</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
<li class="timeline-item">
<div class="timeline-info"> </div>
<div class="timeline-marker timeline-inactive"></div>
<div class="timeline-content">
<div class="timeline-icon" style="height:70px;"><img src="img/tree.png" alt=""></div>
<div class="timeline-detail">
<h3 class="timeline-title">2019년 3월</h3>
<br>
<ul class="roadmap">
<li><h4>W Exchange 출범</h4></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</li>
</ul>
</div>
</div>
</div>
</section>
<!------------ Roadmap end ------------>

<!------------ Partner start ------------>
<section id="partner">
  <div class="container">
	<h1>파트너</h1>
    <div class="h-line"></div>
	<div class="row">
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-lightyear.jpg" alt=""></div> 
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-yg.jpg" alt=""></div> 
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-icon.jpg" alt=""></div> 
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-factblock.jpg" alt=""></div> 
	</div>
	<div class="row">
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-kona.jpg" alt=""></div> 
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-zeex.jpg" alt=""></div> 
	  <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-emusic.jpg" alt=""></div> 
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad"><img src="img/partner-daehyun.jpg" alt=""></div> 
	</div>
  </div>
</section>
<!------------ Partner end ------------>

<!------------ Team start ------------>
<section id="team">
<div class="container">
<h1>TEAM</h1>
<div class="h-line"></div>
<div class="row">
<div class="col-md-3 col-sm-6 v-pad">
<a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이욱 (Wook Lee)</h3>
<h4>W재단 이사장</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>이유리 박사 (Dr. YOUREE LEE)</h3>
<h4>W재단 Co-Founder/CEO (한양대 경영대학 파이낸스금융학과 겸임교수)</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>심건호 (KEON HO SHIM)</h3>
<h4>W재단 CFO</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#bruno" class="open-popup-link"><div class="team-img"><img src="img/team-bruno-wu.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Bruno Wu</h3>
<h4>W재단 전략경영 자문</h4>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 v-pad">
<a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Chris Low</h3>
<h4>CTO</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#jeremy" class="open-popup-link"><div class="team-img"><img src="img/team-jeremy.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Jeremy Khoo</h3>
<h4>Technology and Investments Adviser</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#stas" class="open-popup-link"><div class="team-img"><img src="img/team-stas.jpeg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Stas Okin</h3>
<h4>Technology, R&D Adviser (Co-Founder of Wings)</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#sebastian" class="open-popup-link"><div class="team-img"><img src="img/team-sebastian.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Sebastian Stupurac</h3>
<h4>Blockchain Product Adviser (Co-Founder of Wings)</h4>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 v-pad">
<a href="#seonik" class="open-popup-link"><div class="team-img"><img src="img/team-seonik-jeon.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>전성익 (SEONIK JEON)</h3>
<h4>Community Building and Marketing Adviser (CEO of Factblock & Blockpost, CSO of Financial News)</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#sonic" class="open-popup-link"><div class="team-img"><img src="img/team-sonic-zhang.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>SONIC ZHANG</h3>
<h4>Crypto Investment, Tokenomics Specialist / Technology Adviser (Founder & Managing Director of Ledger Z Capital)</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#irwin" class="open-popup-link"><div class="team-img"><img src="img/team-irwin.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Irwin Chee</h3>
<h4>Crypto Adviser</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#guy" class="open-popup-link"><div class="team-img"><img src="img/team-melamed.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Guy Melamed</h3>
<h4>Strategic Business Adviser (Co-Founder, CEO of Zeex)</h4>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 v-pad">
<a href="#sangjin" class="open-popup-link"><div class="team-img"><img src="img/team-sang-jin-hong.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Sangjin Hong</h3>
<h4>Blockchain Investments Adviser (Co-Founder, CEO of Chain Cabinet)</h4>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>Chen Shun Teng</h3>
<h4>Business Adviser</h4>
<p>(Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</p>
</div>
</div>
<div class="col-md-3 col-sm-6 v-pad">
<a href="#satoshi" class="open-popup-link"><div class="team-img"><img src="img/team-profile.png" alt=""></div></a>
<br>
<div class="team-title">
<h3>Satoshi D.</h3>
<h4>Blockchain Industry Expert, Adviser (Co-Founder of Dfund, Founder of Dcapital)</h4>
</div>
</div>
</div>
<div style="width:100%; background:rgba(255,255,255,0.2); height:1px; margin-top:60px;"></div>
<section id="advisers" style="padding-bottom:60px;">
      <h1>명예고문 (W재단, HOOXI 캠페인)</h1>
      <div class="h-line"></div>
      <h2>Government</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-im.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>임종성</h3>
            <h4>국회의원</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-kwansuk.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>윤관석</h3>
            <h4>국회의원</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Beongwook--National-Assembly-.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김병욱 </h3>
            <h4>국회의원</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/MOCT--Oh,-Jangsup.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>오장섭</h3>
            <h4>전 건설교통부 장관</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Sanghui.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>이상희 </h3>
            <h4>과학기술부 전 장관</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ma-Changhwan--MOCIT.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>마창환 </h3>
            <h4>과학기술정보통신부 기획조정실장</h4>
          </div>
        </div>
      </div>
      <h2>Legal Profession & Financial Institutions</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ko,-Eunseok--Prosecutor.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>고은석 </h3>
            <h4>대전지방검찰청서산지청장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Chadong---Hanyang-Univ.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김차동</h3>
            <h4>한양대학교 법학과 교수 & 전 서울고등법원 판사</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/hong-kyeong-keun.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>홍경근</h3>
            <h4>트루벤인베스트먼트그룹회장</h4>
          </div>
        </div>
      </div>
      <h2>Media & Entertainment</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Song,-Jaejo---Korea-Economy-TV.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>송재조</h3>
            <h4>한국경제TV 사장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
<a href="#dongyul" class="open-popup-link"><div class="team-img"><img src="img/team-dongyul-seok.jpg" alt=""></div></a>
<br>
<div class="team-title">
<h3>석동률 (DONGYUL SEOK)</h3>
<h4>W재단 Public Relations Adviser</h4>
<p>(동아일보 부국장)</p>
</div>
</div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongsik---Kweather.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김동식</h3>
            <h4>케이웨더㈜ 대표이사</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Min,-Yongjae--YJM-Games.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>민용재</h3>
            <h4>YJM게임즈 대표이사</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Junhee--inet-TV.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>박준희</h3>
            <h4>Inet TV 회장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-Ilsang.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>윤일상</h3>
            <h4>작곡가</h4>
          </div>
        </div>
      </div>
      <h2>Corporations & Organizations</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim-Jongryang---Hanyang-Univ-Chairman.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김종량</h3>
            <h4>한양대학교 이사장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-cho.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>조동혁</h3>
            <h4>한솔케미칼 회장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi Jonggu - Easter Jet.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>최종구</h3>
            <h4>이스타항공 사장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Peter-Kim--JIOS.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김종효</h3>
            <h4>지오스 에어로젤 회장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kwon,-Ryan---Jimei.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>권혁진</h3>
            <h4>지메이코리아 대표이사</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Jonghwa---KR-Industry.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>박종화</h3>
            <h4>박종화 ㈜케이알산업 대표</h4>
          </div>
        </div>
      </div>
      <div class="row">  
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Moon,-Gyeonghwan---SCGO.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>문경환</h3>
            <h4>에스시지오 대표</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Bonggyu---Hanyang.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>이봉규</h3>
            <h4>이봉규 ㈜한양 전무</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongman---Khan.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>김동만</h3>
            <h4>김동만 케이칸 회장</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Youngeun---Mantoss-Power.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>최영은</h3>
            <h4>최영은 맨토스파워 대표</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Hong,Nanggi---Kumho.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>홍낭기</h3>
            <h4>홍낭기 금호건설 상무</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Chun,-Jonggi---Seegene-Medical-Foundation.jpg" alt=""></div>
          <br>
          <div class=" kr-adviser">
            <h3>천종기</h3>
            <h4>씨젠의료재단 이사장</h4>
          </div>
        </div>
      </div>
    </section>
<div class="team-advisor">
<div class="row">
<div class="col-md-9 col-sm-9 col-xs-7 v-pad">
<h4>W재단 HOOXI 캠페인에 자문과 조언을 주시는 160여명의 사회저명인사에 대한 자세한 정보를 보시려면 다음을 클릭하세요:</h4>
<br>
<h4>한국어: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4>
<h4>영어: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
</div>
<div class="col-md-3 col-sm-3 col-xs-5 v-pad" style="text-align: center;">
<img src="img/leaf-big.png" alt="">
</div>
</div>
</div>
	</section>	  
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
<div class="container">
<h1>연락처</h1>
<div class="h-line"></div>
<div style="text-align:center;">
<h3 style="text-transform:none;">문의사항은 하기 이메일로 연락바랍니다:</h3>
<h2 style="text-transform:none;"><a href="mailto:hello@wpay.sg" style="color:#87b44c;">hello@wpay.sg</a></h2>
<ul class="social">
<li><a href="https://www.facebook.com/wgreenpay/" target="_blank"><div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
<!-- <li><a href="#" target="_blank"><div class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li> -->
<!-- <li><a href="#" target="_blank"><div class="social-icon"><i class="fa fa-bitcoin" aria-hidden="true"></i></div></a></li> -->
<li><a href="https://twitter.com/WGreenPay" target="_blank"><div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
<li><a href="https://t.me/wgreenpay" target="_blank"><div class="social-icon"><i class="fa fa-telegram" aria-hidden="true"></i></div></a></li>
<li><a href="https://medium.com/@wgreenpay" target="_blank"><div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div></a></li>
<!-- <li><a href="" target="_blank"><div class="social-icon"><i class="fa fa-github" aria-hidden="true"></i></div></a></li>        -->
</ul>
</div>
</div>
</section>
<div class="subscription">
<div class="container">
<div class="row">
<div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">최신 뉴스와 업데이트를 놓치지 마세요</h3></div>
<div class="col-md-6 v-pad">
<div class="subscription-messages"></div>
<form id='subscription' class="ajax-subscription" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type="hidden" name="type" value="subscription" />
<div class="subscription-container">
<input type='text' class="input-style input-box" name='EMAIL' id='subscription_email'  placeholder="이메일" required/>
<button type='submit' value='Submit' class="submit-box"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
<div style="clear:both;"></div>
</div>
</form>
</div>
</div>
</div>
</div>
<!------------ Contact end ------------>

<div class="footer">
<div class="footer-container">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 v-pad hooxi">
    <a href="http://www.gcrfund.org/"><img src="img/logo-hooxi.jpg" alt=""></a>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
    <a href="http://www.gcrfund.org/"><img src="img/logo-wfoundation.jpg" alt=""></a>
</div>
</div>
</div>
<br>
<span class="small-font" style="color:#333;"> @ 2018년 W Global Investment 저작권 보유.</span>
<br><br>
<div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">Privacy Policy</a></div>
</div>

<!---------- Participate form ------------>

<div id="participateform" class="white-popup mfp-hide sans">
<h4><b>W Green Pay </b>에 참여하세요</h4>
<br><br>
<div class="participate-messages"></div>
<form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type="hidden" name="type" value="participate" />
<input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="성명 " />
<br>
<br>
<input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="이메일" required/>
<br>
<br>
<br>
<div style="float:right;">
<button type='submit' value='Submit' class="btn white-btn">제출하기</button>
</div>
<div style="clear:both;"></div>
</form>
</div>

<!---------- Participate form ------------>

<!---------- Private Policy -------------->
<div id="policy" class="white-popup mfp-hide sans"> 
  <?php include "htmls/policy.html";?>
</div>
<!---------- End Private Policy -------------->

<!---------- Terms Service -------------->
<div id="terms_service" class="white-popup mfp-hide sans"> 
  <?php include "htmls/terms_service.html";?>
</div>
<!---------- End Terms Service -------------->

<!---------- Team popup content start------------>

<div id="wooklee" class="white-popup mfp-hide sans">
<h3>이욱(WOOK LEE)</h3>
<h4>W재단 이사장</h4>
<br><br><br>
<p>W재단 설립자, 자선가, 기업가. 정부, 기업, 기관과의 공공-개인 파트너십을 가능케 하는 글로벌 네트워크를 구축했다. 글로벌 기부자와 함께 글로벌 기후 난민 기금을 설립, W재단을 영향력 있는 글로벌 자연 보전 기구로 발전시켰다. 한양대학교 법과 대학에서 학사 학위를 취득했다.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
<h3>이유리 박사(YOUREE LEE PH.D.)</h3>
<h4>W재단 Co-Founder/CEO (한양대 경영대학 파이낸스금융학과 겸임교수)</h4>
<br><br><br>
<p>W재단 공동창립자이자 CEO인 이유리 교수는 자선사업가이자 기업가로서 사회적금융에 블록체인을 도입한 개척자이다.  현재 W-HY 연구소, HOOXI 연구소의 CEO, HOOXI 재단(미국)의 COO로도 역임하고 있다.</p>
<br>
<p>이유리 교수는 한국정부와 W재단이 추진하는 세계자연보전 캠페인, HOOXI 프로젝트를 위해 블록체인 W Green Pay(WGP)의 런칭을 주도했다. 이유리 교수의 주요 연구분야에는 사회적 금융, 거버넌스, 기업의 사회적 책임 등이있다.</p>
<br>
<p>맥쿼리, 미쓰이스미토모은행 등 금융기관에서 인프라스트럭처, 신재생에너지사업 등에 대한 투자자문 및 기업금융을 담당했으며 현재 이화여자대학교와 한양대학교에서 경영전략, 금융시장 및 재무관리에 대한 강의를 하고있다.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
<h3>심건호 (KEON HO SHIM)</h3>
<h4>W재단 CFO</h4>
<br><br><br>
<p>최근까지 뱅크오브아메리카 메릴린치 Transaction Banking division의 Head of Corporate Sales로 근무했으며, 시티은행, 올리버 와이만, 삼성물산 등 은행, 컨설팅, 신사업 개발 분야에서 23년 이상의 경험을 쌓았다.</p>
<br>
<p>뉴욕대 Stern MBA 및 조지 워싱턴 대학교 경영학 학사 학위를 취득했다.</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
<h3>석동률 (DONGYUL SEOK)</h3>
<h4>W재단 Public Relations Adviser (동아일보 부국장)</h4>
<br><br><br>
<p>영향력 있는 언론인, 국제언론인협회 부회장, 한국언론사진협회 회장으로서 25년의 경험 보유. 한양 대학교 미디어, 커뮤니케이션 학과의 겸임 교수로도 활동.</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
<h3>유승규 교수 (SEONGGU RYU PH.D.)</h3>
<h4>W재단 Adviser/Chief Relationship Officer (서경대학교 교수)</h4>
<br><br><br>
<p>삼성그룹의 전략기획, 경영컨설팅, 마케팅 관련 25년 경험 보유. 최근에는 삼성전자 마케팅전략그룹 상무로 근무. 현재 서경대학교 경영 대학 교수.</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
<h3>김철준(Chuljun Kim M.D.)</h3>
<h4>W재단 Adviser/Chief Technology Officer (대전 웰니스 요양병원 병원장)</h4>
<br><br><br>
<p>의사, 기업가, 투자자로서 20년 경험 보유. 대형 병원 CEO로서 의료 분야에서 세간의 이목을 끄는 인수합병과 투자를 성공함. 현재는 의료 분야에서 블록 체인 기술을 통하여 의료 기록을 안전하게 보호하는 기술 개발에 참여. 충남대학교 재활 의학과 조교수.</p>
</div>

<div id="bruno" class="white-popup mfp-hide sans">
<h3>BRUNO WU</h3>
<h4>W재단 전략경영 자문</h4>
<br><br><br>
<p>Mr. Wu는 중국의 50대 부호로 잘 알려져있다. 중국의 최대 미디어 회사인 Sun Seven Stars Entertainment & Media Group Limited의 창립자, 회장, 그리고 CEO이다.</p>
<br>
<p>미국 SEC(증권위원회)가 허가한 유일한 블록체인 기반 거래소, DBOT (Delaware Board of Trade Holdings Inc.)의 최대주주이기도 하며 Sun Media Group의 전 회장이자 Shanda Group의 전 이사이다. </p>
<br>
<p>Bruno와 그의 아내 (양란, 중국 톱스타)은 2016년 포브스지가 선정한 중국 최대 부호 리스트에  오르기도 했다.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
<h3>CHEN SHUN TENG</h3>
<h4>W재단 Business Adviser (Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
<br><br><br>
<p>16개 아시아 국가에서 주요 화학제품 유통사로 자리 매김해 온 WWRC 그룹에서 해외 진출, JV/파트너십, 인수합병을 통한 미래전략 기획 업무 담당. WWRC 그룹 근무 이전에 시티은행, OCBC은행에서 근무함. 난양기술대학교 재료공학과를 학사 학위를 취득함 (우등 졸업).</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
<h3>CHRIS LOW</h3>
<h4>CTO</h4>
<br><br><br>
<p>Mr. Low는 20 년 경력의 기술 전문 기업가, 성공적인 창업가이다. 설립한 Pendulab이라는 첫 번째 벤처 기업은 웹 기반 협업 솔루션을 제공하는 SaaS (Software-as-a-Service)로 운영되었으며 Pendulab은 이후 미국의 주요 사모 투자 회사에 인수되었다. 또 동남 아시아에 설립한 에서 대형 소셜 게임 플랫폼 Viwawa는 동남아에서 가장 활발한 사이트 톱100랭킹을 기록하고있다. Mr. Low가 설립한 또다른 벤처 기업인 SoftPay Mobile은 베트남에서 가장 큰 Mobile Point of Sale 회사이기도 하며 인도네시아에서 가장 큰 은행 인 Bank Mandiri와 파트너쉽 체계를 구축하고있다.</p>
<br>
<p>Mr. Low는 싱가포르 국립 대학 (National University of Singapore)의 컴퓨터 공학 (Merit in Computing)을 전공했다. </p>
</div>

<div id="jeremy" class="white-popup mfp-hide sans">
<h3>JEREMY KHOO</h3>
<h4>Technology and Investments Adviser</h4>
<br><br><br>
<p>블록체인 전문가이자 성공적인 글로벌 사업가. VC가 투자한 3개의 벤처기업을 성공적으로 엑시트(EXIT)하였다. Mr. Khoo는 iFashion그룹의 CEO로서 iFashion 및 자회사들의 여러 VC투자, Series B까지 성공적으로 이끌었다. 현재 iFashion은 MC Payments가 23백만달러에 인수했으며 최근 Mr. Khoo는 MC Payment의 SGX (싱가폴거래소) 상장을 리드하고 있다.</p>
<br>
<p>Mr. Khoo는 블록체인 자문사 Novum Capital 및 Enblockr의 파트너 및 수석 컨설턴트이며, 블록 체인에 투자하는 크립토 펀드 CRC Capital의 Managing Partner이다.</p>
<br>
<p>더하여 Mr. Khoo는 블록 체인 MegaX와 가상화폐의 대중화 (mass adoption)을 리드하는 Crypto-E-Commerce 스토어 Megaxstore를 공동 창립했다. 싱가포르의 난양 기술 대학에서 기계 공학 학사를 받았다.</p>
</div>
	
<div id="stas" class="white-popup mfp-hide sans">
<h3>STAS OKIN</h3>
<h4>Technology, R&D Adviser (Co-Founder of Wings)</h4>
<br><br><br>
<p>IT 엔지니어링, 엔터프라이즈 제품 개발 및 관리 분야에서 15 년 이상의 경력을 쌓은 Mr. Oskin은 성공적인 커뮤니티 참여 및 스마트 계약 촉진 플랫폼과 함께 이더리움 블록 체인에서 작동하는 몇 가지 DAPPS 중 하나를 공동 창업했다. Mr. Oskin은 아이캠, NeoCam 및 NeoVSP의 CTO이기도하다. Mr. Oskin은 웹 기반 플랫폼, 스트리밍 미디어, 분산 형 스토리지, 클러스터 형 솔루션 및 네트워크에 대한 광범위한 전문 지식을 제공한다.</p>
<br>
<p>과거 Mr. Oskin은 BeeCom Israel의 CTO로서 오픈 소스 / Linux 기반 플랫폼으로의 전략적 전환을 이끌었다. 또한 BeeContact, Dead Sea Labs 및 국방부와 같은 조직에 자문위원으로 일하며 여러 이스라엘 프로필 프로젝트에 참여했다. Mr. Oskin은 이스라엘 최초의 온라인 소셜 네트워크 인 Comoona의 공동 창립자이기도 하다.</p>
</div>
	
<div id="sebastian" class="white-popup mfp-hide sans">
<h3>SEBASTIAN STUPURAC</h3>
<h4>Blockchain Product Adviser (Co-Founder of Wings)</h4>
<br><br><br>
<p>Mr. Stupurac은 이더리움 블록체인에서 작동되는 소수의 성공적인 DAPP중 하나인 WINGS를 공동 창립했다. WINGS는 스마트 계약 체결 및 커뮤니티 관리 플랫폼이다. Mr. Stupurac은 2013년부터 분산 솔루션 및 블록체인 기술에 대한 폭 넓은 경험을 쌓아왔다.
</p>
<br>
<p>Mr. Stupurac은 또한 eyecam의 ChainLab, CIO 및 Product & Project Manager의 CEO였다. Mr. Stupurac은 The Academic College of Tel-Aviv, Yaffo에서 정보 시스템 관리 학사 학위를 받았다.</p>
</div>
	
<div id="seonik" class="white-popup mfp-hide sans">
<h3>SEONIK JEON</h3>
<h4>Community Building and Marketing Adviser (CEO of Factblock & Blockpost, CSO of Financial News)</h4>
<br><br><br>
<p>팩트블록 (블록체인 자문사)의 CEO, 공동창립자, 블록포스트(블록체인 전문 미디어)의 CEO, 파이낸셜뉴스의 CSO, 일본 파이낸셜뉴스의 도쿄 지국장이다. 그리고 파이낸셜뉴스의 LA 특파원으로 근무하였으며 前 Mpio 부사장으로 역임했다. 고려대학교 경영대학원의 최고경영자 과정 및 캘리포니아 주립대학교 롱비치 캠퍼스에서 경영학 및 경영정보시스템을 전공했다.</p>
</div>
	
<div id="sonic" class="white-popup mfp-hide sans">
<h3>SONIC ZHANG</h3>
<h4>Crypto Investment, Tokenomics Specialist / Technology Adviser (Founder & Managing Director of Ledger Z Capital)</h4>
<br><br><br>
<p>Mr. Zhang은 기업가이자 투자자이다. 블록체인 스타트업, security token offerings (STO) 및 암호화쳬에 대한 투자에 중점을 둔 LedgerZ Capital (ledgerz.capital) 및 ValueNet Capital (valuenet.capital)의 창립자며, 투자 포트폴리오에는 OmiseGo, Binance, PowerLedger, WAX, CoinPoker, Lympo, Bankorus, RobotCache, Celsius Network, tZERO, Tenzorum 등이 있습니다. 그는 전세계의 블록 체인 및 암호화폐 커뮤니티를 연결하는 데 초점을 둔 국제 NGO 인 B20의 20 개 국가 연합 리그 (B20)의 공동 창립자 겸 글로벌 디렉터이다. 암호화폐 거래소의 글로벌 네트워크 (Cointobe.com), 암호화폐 지갑 (Coinwall.io / Coinwallpro.com) 및 ICO관련 서비스를 제공하는 ValueBank Group 의 공동 창업자이다. Murint, 테크 및 엔터테인먼트 산업에 투자하는 VC 펀드 의 공동창업자이며, 해외 마케팅 서비스 제공 플랫폼 인 SoRelax의 창립자이다. Mr. Zhang은 시드니 대학교에서 메카트로닉스(mechatronics) MPM 및 BE를 수료했다.</p>
</div>

<div id="irwin" class="white-popup mfp-hide sans">
<h3>IRWIN CHEE</h3>
<h4>Crypto Adviser</h4>
<br><br><br>
<p>Mr. Chee는 제품 개발 및 마케팅 분야에서 경력을 쌓으며 보안 기술 회사 인 i-Sprint Innovations에서 근무했다. 그는 Rimu Group의 공동 창립자였으며, SEI 전역에 투자하고 Wavemaker Partners, Ardent Capital, SMDV, SPH, Fenox 및 DeNA와 같은 다른 VC와 공동 투자했습니다. 4 건의 인수 및 2 건의 포트폴리오 포트폴리오를 보유한 그는 싱가포르의 비디오 제작 회사 인 Rockstagvid의 사업 개발 및 운영을 총괄하는 총책임자였다.</p>
<br>
<p>Mr. Chee는 ICO의 초기 투자자로서 NXT, AntShares (현재 NEO), Stratis and Status 등 유명 프로젝트에 투자했다. Irwin은 현재 블록체인 자문사 Novum Capital의 경영 컨설턴트이자 www.cryptofinn.net (ICO검토 및 가상화폐 의견공유 채널)에 Writer이다.</p>
</div>

<div id="guy" class="white-popup mfp-hide sans">
<h3>GUY MELAMED</h3>
<h4>Strategic Business Adviser (Co-Founder, CEO of Zeex)</h4>
<br><br><br>
<p>Mr. Melamed는 성공적인 창업가이자 전략가. 스타트업 GreenRoad (Commercial Fleet 및 커넥티드 카(Connected car) 시장 선두주자)의 CPO, 전략파트너쉽담당 Head로서 회사의 성공에 기여하였다. 또한 에니메이션 메신저 Toontok을 창립, CEO로 역임했다. 디지털 교육 학습자료 제공업체인 Ginger Software 및 Time To Know에서 VP로서 제품 및 솔루션 설계를 담당했다. Mr. Melamed는 암스테르담 대학교에서 커뮤니케이션 석사 학위를 취득했다.</p>
</div>
	
<div id="sangjin" class="white-popup mfp-hide sans">
<h3>SANGJIN HONG</h3>
<h4>Blockchain Investments Adviser (Co-Founder, CEO of Chain Cabinet)</h4>
<br><br><br>
<p>경험이 풍부한 사업가, 투자자로, 서울과 싱가포르에 본사를 둔 블록체인 투자 회사 인 Chain Cabinet의 공동 창립자 겸 CEO로 다양한 ICO 프로젝트에 투자를하고 있다. 50 개 이상의 스타트업 엑셀레이터를 한 Kstartup의 파트너이기도 하다. Microsoft에서 Microsoft Office 제품 관리자 및 Monitor Group의 경영 컨설턴트로서도 경험을 쌓았으며 20 년 이상의 기술 및 경영의 경험을 보유하고 있다.</p>
</div>

<div id="kyung" class="white-popup mfp-hide sans">
  <h3>홍경근 (KYUNG KEUN HONG)</h3>
  <h4>W재단 총재 (HOOXI Global 및 트루벤인베스트먼트 그룹 회장)</h4>
  <br><br><br>
  <p>W재단 총재. HOOXI Global 및 트루벤인베스트먼트 그룹의 회장. 트루벤인베스트먼트는 한국의 최대 규모 펀드 중 하나로서 국내외의 인프라자산 및 장기보유자산에 투자한다. 트루벤인베스트먼트 그룹의자회사 중 하나는 한국정부와 독점 라이센스 계약하에 운영되는 복권 발행, 판매업체 (주)케이토토이다. 케이토토의 연간 판매액은 약 5조원이다.</p>
</div>

<div id="alex" class="white-popup mfp-hide sans">
  <h3>홍성혁 (ALEX Sung-Hyeok HONG, Msci, MSc.)</h3>
  <h4>W재단 Director (HOOXI Global 이사, AZworth Trust 대표)</h4>
  <br><br><br>
  <p>사모 펀드 및 과학/기술 전문 전략컨설팅에서 10 년의 경력을 쌓았다. 런던 Imperial College에서 이론 물리학 석사 학위, UCL에서 자연과학 철학 및 역사학 석사 학위를 취득. 현재 Truben Investment의 모회사이자 HOOXI Global의 주주인 AZworth Trust의 CEO로서 다양한 포트폴리오와 비즈니스를 관리하고 있다.</p>
</div>

<!---------- Team popup content end------------

<!-- Add countdown -->

<script>
jQuery(function($){
       //var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
       $('#token_sale').flipcountdown({
                                      size:'md',
                                      beforeDateTime:'7/27/2018 00:00:01'
                                      /*tick:function(){
                                       var nol = function(h){
                                       return h>9?h:'0'+h;
                                       }
                                       var    range      = NY-Math.round((new Date()).getTime()/1000),
                                       secday = 86400, sechour = 3600,
                                       days     = parseInt(range/secday),
                                       hours    = parseInt((range%secday)/sechour),
                                       min        = parseInt(((range%secday)%sechour)/60),
                                       sec        = ((range%secday)%sechour)%60;
                                       return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);
                                       }*/
                                      });
       });

</script>

<script>
$(window).scroll(function() {
                 var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
                 $("#header")[addRemClass]('bgChange');
                 });

$(window).scroll(function() {
                 var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
                 $("#logo")[addRemClass]('bgChange');
                 });

$(window).scroll(function() {
                 var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
                 $("ul#menu li a")[addRemClass]('bgChange');
                 });

$(window).scroll(function() {
                 var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
                 $("ul#menu li a:hover")[addRemClass]('bgChange');
                 });

$(window).scroll(function() {
                 var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
                 $("nav #menuToggle span")[addRemClass]('black');
                 });

</script>

<!-- Add smooth transition menu -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
                                      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                                                                    var target = $(this.hash);
                                                                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                                                                    if (target.length) {
                                                                    $('html,body').animate({
                                                                                           scrollTop: target.offset().top
                                                                                           }, 1000);
                                                                    return false;
                                                                    }
                                                                    }
                                                                    });
                                          });
                                      </script>
                                      
 <!-- Add flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider',
			slideshowSpeed: 3500
        });
    });
	
	$(document).ready(function () {
        $('.media-slider').flexslider({
            animation: 'slide',
            controlsContainer: '.media-slider',
			slideshowSpeed: 6000
        });
    });
	
	$(document).ready(function () {
        $('.articles-slider').flexslider({
            animation: 'none',
            controlsContainer: '.articles-slider',
        });
    });
	
</script>
                                      
                                      <!-- Add magnifique popup -->
                                      
                                      <script>
                                      $(document).ready(function () {
                                                        $('.open-popup-link').magnificPopup({
                                                                                            type:'inline',
                                                                                            midClick: true,
                                                                                            mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                                                                                            
                                                                                            });
                                                        
                                                        });
                                      </script>
                                      
 <!-- Add video popup -->
<script>
    $(document).ready(function () {
        $('.video-pop-up').magnificPopup({
			type: 'iframe',
		});

		$('a.gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			image: {
				titleSrc: 'title',
				tError: 'The image could not be loaded.',
			}
		});
		
    });
</script>
                                      
                                      <script>
                                      $(document).ready(function () {
                                                        
                                                        // ajax form
                                                        // notify
                                                        var notifyForm = $('.ajax-participate');
                                                        
                                                        // Get the messages div.
                                                        var notifyMessages = $('.participate-messages');
                                                        
                                                        // Set up an event listener for the contact form.
                                                        $(notifyForm).submit(function(e) {
                                                                             // Stop the browser from submitting the form.
                                                                             e.preventDefault();
                                                                             
                                                                             // Serialize the form data.
                                                                             var formData = $(notifyForm).serialize();
                                                                             
                                                                             // Submit the form using AJAX.
                                                                             $.ajax({
                                                                                    type: 'POST',
                                                                                    url: $(notifyForm).attr('action'),
                                                                                    data: formData
                                                                                    })
                                                                             .done(function(response) {
                                                                                   // Make sure that the formMessages div has the 'success' class.
                                                                                   $(notifyMessages).removeClass('alert alert-danger');
                                                                                   $(notifyMessages).addClass('alert alert-info');
                                                                                   
                                                                                   // Set the message text.
                                                                                   $(notifyMessages).text(response);
                                                                                   
                                                                                   // Clear the form.
                                                                                   $('#participate_name').val('');
                                                                                   $('#participate_email').val('');
                                                                                   
                                                                                   
                                                                                   
                                                                                   })
                                                                             .fail(function(data) {
                                                                                   // Make sure that the notifyMessages div has the 'error' class.
                                                                                   $(notifyMessages).removeClass('alert alert-danger');
                                                                                   $(notifyMessages).addClass('alert alert-info');
                                                                                   
                                                                                   // Set the message text.
                                                                                   $(notifyMessages).text("W Green Pay에 등록해주셔서 감사합니다. 앞으로 이벤트, 프로모션 등 다양한 소식을 가장 빨리 받아보실 수 있습니다. 이메일 알람을 기다려주세요!");
                                                                                   $('#participate_name').val('');
                                                                                   $('#participate_email').val('');
                                                                                   });
                                                                             });
                                                        
                                                        // Contact Us
                                                        var contactForm = $('.ajax-subscription');
                                                        
                                                        // Get the messages div.
                                                        var contactMessages = $('.subscription-messages');
                                                        
                                                        // Set up an event listener for the contact form.
                                                        $(contactForm).submit(function(e) {
                                                                              // Stop the browser from submitting the form.
                                                                              e.preventDefault();
                                                                              
                                                                              // Serialize the form data.
                                                                              var formData = $(contactForm).serialize();
                                                                              console.log(formData);
                                                                              // Submit the form using AJAX.
                                                                              $.ajax({
                                                                                     type: 'POST',
                                                                                     url: $(contactForm).attr('action'),
                                                                                     data: formData
                                                                                     })
                                                                              .done(function(response) {
                                                                                    // Make sure that the formMessages div has the 'success' class.
                                                                                    $(contactMessages).removeClass('alert alert-danger');
                                                                                    $(contactMessages).addClass('alert alert-info');
                                                                                    
                                                                                    // Set the message text.
                                                                                    $(contactMessages).text(response);
                                                                                    
                                                                                    // Clear the form.
                                                                                    $('#subscription_email').val('');
                                                                                    
                                                                                    })
                                                                              .fail(function(data) {
                                                                                    // Make sure that the contactMessages div has the 'error' class.
                                                                                    $(contactMessages).removeClass('alert alert-danger');
                                                                                    $(contactMessages).addClass('alert alert-info');
                                                                                    
                                                                                    $(contactMessages).text("W Green Pay에 등록해주셔서 감사합니다. 앞으로 이벤트, 프로모션 등 다양한 소식을 가장 빨리 받아보실 수 있습니다. 이메일 알람을 기다려주세요!");
                                                                                    $('#subscription_email').val('');
                                                                                    });
                                                                              });
                                                        });
                                      </script>
                                      
                                      <script>
                                      (function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </body>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </html>
