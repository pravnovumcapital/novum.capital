<!doctype html>
<html>
<head>
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
      <li><a href="#about">About</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#token">Tokensale</a></li>
      <li><a href="#media">Media</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
	  <li><a href="#partner">Partner</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#advisers">Advisers</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="lng-container">
      <div class="dropdown">
          <a href="">Language &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="index-kr.php">Korean</a></p>
            <p><a href="index-zh.php">Chinese</a></p>
          </div>
      </div> 
      <!--<a href="#" class="lng lng-active">EN</a> &nbsp;<a href="index-kr.php" class="lng">KR</a>-->
    </div>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#about" onclick="closeSidebar(this)">About</a>
      <a href="#features" onclick="closeSidebar(this)">Features</a>
      <a href="#token" onclick="closeSidebar(this)">Tokensale</a>
      <a href="#media" onclick="closeSidebar(this)">Media</a>
      <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
	  <a href="#partner" onclick="closeSidebar(this)">Partner</a>
      <a href="#team" onclick="closeSidebar(this)">Team</a>
      <a href="#advisers" onclick="closeSidebar(this)">Advisers</a>
      <a href="#contact" onclick="closeSidebar(this)">Contact</a>
      <div class="lng-mobile">
        <a href="index-kr.php">KR</a> &nbsp; <a href="index-zh.php">CN</a> 
      </div>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>
<div id="home">
  <div class="home-container">
    <h1>JOIN <span style="color:#87b44c;">W GREEN PAY</span> HOOXI CAMPAIGN</h1>
    <h4>The most innovative social carbon credit platform to be launched.</h4>
    <br><br>
    <table>
      <tr valign="top"> 
        <td style="text-align:right;"><h4>PRIVATE SALE</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">1st Tier SOLD OUT</span></h4></td>
      </tr>
      <tr valign="top"> 
        <td></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2nd Tier ON-GOING</span></h4></td>
      </tr> 
      <tr valign="top"> 
        <td style="text-align:right;"><h4>PUBLIC SALE</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">1st ~ 14th October 2018</h4></td>
      </tr>  
    </table>
    <br>
    <!--
    <div id="token_sale"></div>
    <br>
    <ul class="countdown">
      <li class="days small-font">
        DAYS
      </li>
      <li class="hrs small-font">
        HRS
      </li>
      <li class="mins small-font">
        MIN
      </li>
      <li class="sec small-font">
        SEC
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
      <div class="publicsale">60.000.000 WPAY</div>
    </div>-->
    <br>
    <br>
    <br>
    <ul class="home-btn">
      <li><a href="#participateform" class="open-popup-link btn">Participate</a></li>
      <li><a href="WGreenPay-whitepaper-v2.0.pdf" target="_blank" class="btn">Whitepaper</a></li>
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
        <h1>About</h1>
        <div class="h-line"></div>
        <h1>W <span style="color:#87b44c;">Green Pay</span></h1>
        <br>
        <h4>W Green Pay ("WGP") is a Stellar-compliant token that operates on the Stellar blockchain. The aim of W Green Pay is to increase the public’s participation in GHG (Greenhouse Gas) reduction. W Green Pay will provide the means of incentivizing the public for their GHG reduction efforts.</h4>
        <br>
        <h4>The HOOXI App will serve as the platform for users to be rewarded by completing GHG reduction tasks.</h4>
        <br>
        <br>
        <h2 style="text-transform:none; color:#87b44c;">Mission</h2>
        <br>
        <p>Following the Korean government’s pledge made at Copenhagen Accord in 2009, the country aims to reduce GHG emission by 37% by 2030.</p>
        <br>
        <p>The Korean government selected W-Foundation to lead the “Nation-wide Public Movement to Reduce GHG Emission (HOOXI Campaign)”.</p>
        <br>
        <p>To support the government’s GHG emission reduction efforts, W-Foundation will launch a mobile application called HOOXI App that monitors and rewards the effort of individuals and the public to reduce GHG emissions.</p>
      </div>
    </div>
    <br>
    <h2>Solution</h2>
    <br>
    <p>The most innovative social carbon credit platform to be launched.</p>
    <br>
    <p>W Green Pay (WGP), the blockchain from HOOXI, Korea's government-backed Greenhouse Gas (GHG) reduction campaign, is issued to reward general public's contribution to reducing GHG emissions under Korea's KETS (Korea's Emissions Trading Scheme) market.</p>
    <br>
    <h4 style="font-weight:700;">WGP is a reward method to GHG reduction efforts on the anticipated HOOXI app. Users will be able to:</h4>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-1.png" alt="">
          <br><br>
          <h4>Receive WGP based on their mission points gained from completed environmental tasks</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-2.png" alt="">
          <br>
          <h4>Spend W Green Pay at HOOXI Mall and partnered on/offline shops (ie. through Zeex, shop at more than 450 brands including Amazon, Starbucks, etc)</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-3.png" alt="">
          <br>
          <h4>Issue "W Green Pay Cryoto Card" to use WGP as payment at anywhere worldwide</h4>
        </div>
      </div>
    </div>
    <br>
    <br>
    <h2>W-Foundation</h2>
    <br>
    <p>An international non-profit organization established in 2012 and a designated donation organization entitled by the Ministry of Strategy and Finance of Korea, is the philanthropic foundation behind the HOOXI campaign. Using the anticipated HOOXI mobile application, individuals can perform GHG reduction missions to collect mission points, which can be exchanged for WGP.</p>
    <br>
    <h2><span style="color:#fff;">HOOXI</span> Application</h2>
    <br>
    <p>HOOXI App will track and aggregate individuals’ GHG reduction data, based on which W-Foundation will be allocated KOC (Korean Offset Credit) - carbon emission units traded in the Korean market. Through HOOXI campaign, financial incentives of KOC-based carbon trading will no longer remain as the sole domain of corporations and institutions and will be open to individuals.</p>
    <br>
    <h2>W Exchange</h2>
    <br>
    <p>W Exchange, under the Korea Electric Power Corporation (KEPCO) approval, will be launched in March 2019. W Exchange is expected to be a KETS-eligible business entity. The allocated KOCs of HOOXI App are expected to trade at KRX using W Exchange.</p>
  </div>
</section>
<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-md-4 v-pad">
       <h1>Hooxi Campaign <span style="color:#87b44c;">Sponsors</span></h1>
       <br>
       <p>YG Entertainment, Hotel Lotte DFS Co., Ltd., Lotte Homeshopping, Philip Morris Korea Ltd., Korea Management Association, Wumart Stores, Inc. (China), Hansol Chemical, Hansol Oak Valley, Borim CS, FnGuide Inc., Sungdo Engineering & Construction, Korea Business News Co., Ltd., YJM Games Co., Ltd., Cleantopia, NET TV Co., Ltd.</p>
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
    <h1>Honorary <span style="color:#87b44c;">Ambassadors</span></h1>
    <br>
    <h4>More than 300 Korean celebrities, including K-pop stars, support HOOXI Campaign as honorary ambassadors of W-Foundation.</h4>
    <br>
    <p>Infinite, Lydia Ko, Ailee, Jang Hyuk, Kim Tae-Woo, IOI, Eddy Kim, Shim Hyung-Tak, Max Changmin, Choi Si-Won, Donghae, Kim Yu Jung and Alberto are several of the major ambassadors. There are many more Korean celebrities working with W-Foundation as honorary ambassadors.</p>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/INFINITE.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>INFINITE</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/IOI.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>IOI</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/The-One.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>The One</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lydia-Ko.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Lydia Ko</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang-Wookhyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Jang, Wookhyuk</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Changmin-(TVXQ).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Changmin (TVXQ)</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Choi-Siwon-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Choi Siwon</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Donghae-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Donghae</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jinho-(SBS-Producer-of-'Law-of-the-Jungle').jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kim, Jinho</h3>
            <h4>(SBS Producer of 'Law of the Jungle')</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jongguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kim, Jongguk</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Alberto-Mondi.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Alberto Mondi</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Hyungjun.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kim, Hyungjun</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eddy-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Eddy Kim</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Baek,-Seonghyeon.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Baek, Seonghyeon</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Gangnam.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Gangnam</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Yujung.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kim, Yujung</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yeo,-Jingu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Yeo, Jingu</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Tiffany-(Girl's-Generation).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Tiffany</h3>
            <h4>(Girl's Generation)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Seo,-Muntak.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Seo, Muntak</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Bobby-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Bobby Kim</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ZoPD.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>ZoPD</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eru.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Eru</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yoo,-Inyeong.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Yoo, Inyeong</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lee,-Eungyeol.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Lee, Eungyeol</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/JK-Kim-Donguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>JK Kim Donguk</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Cheon,-Hyeonmu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Cheon, Hyeonmu</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Ailee.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Ailee</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kwon,-Hyeoksu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Kwon, Hyeoksu</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/ULALA-SESSION.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>ULALA SESSION</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Jang,-Hyuk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>Jang, Hyuk</h3>
          </div>
        </div>
      </div> 
  </div>
</section>
<section style="background:#001a3d;" class="emission">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad">
        <h2>KETS <span style="color:#87b44c;">(Korea’s Emissions Trading Scheme)</span></h2>
        <br>
        <p>In 2009, Korea made a pledge at the Copenhagen Accord to participate in the global movement to reduce GHG. By 2030, the Korean government aims to reduce GHG emissions by 37% from its business-as-usual scenario. In 2015, Korea launched its Emission Trading Scheme (KETS), which is the second largest in scale after the European Union Emission Trading Scheme at the point of writing.</p>
    <br>
    <p>Korea’s Cap-and-Trade system mitigates GHG emissions through market mechanisms. It applies to approximately 600 companies that account for over 68% of Korea’s GHG output (Korea Carbon, 2018). A cap that determines the maximum emission level that companies are permitted was set by the government. When a company exceeds the cap, the company has to purchase additional carbon credit from the market at market price or has to pay a penalty to the government.</p>
    <br>
    <p>The penalty for non-compliance with the KETS is three times the average market price per unit of tCO2e. The maximum penalty is capped at KRW 100,000 per tCO2e (approximately US $93/tCO2e equivalent).</p>
        <br>
        <p>Source: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">CARBON CREDIT OF KOREA</a></p>
        <br>
        <br>
        <img src="img/emission.png" alt="">
      </div>
      <div class="col-md-6 v-pad">
        <h2>CARBON CREDIT OF KOREA</h2>
        <br>
        <h4 style="font-weight:700;">Korean Carbon Credit Validation</h4>
        <br>
        <p>The Ministry of Environment validates Korea’s carbon credit, and the carbon credit (KOC, KAU, KCU) is exchanged at the prevailing market price. Despite the increasing demand for carbon credit in the market, the allocation of carbon credit by the Ministry of Environment is limited. The price of carbon credit per ton is high at approximately KRW 22,000 (US $20) as of April 14, 2018. This is higher than EU’s CER that is priced at approximately Euro 13.84 (approximately KRW 17,700) as of April 16, 2018.</p>
        <br><br>
        <img src="img/graph-nep.png" alt="">
        <br>
        <br>
        <br>
        <br>
        <h4 style="font-weight:700;">Carbon Market Size of Korea</h4>
        <br>
        <p>Approximately 600 companies participate in carbon emission trading in Korea. The market size of carbon credits rapidly increased from a baseline of KRW 57.3 billion in 2015 when KETS started to KRW 194.6 billion in 2016 and KRW 438.5 billion in 2017 (validated data from January to October, 2017) (The Ministry of Strategy and Finance of Korea, 2017). The Korean government expects the carbon credit market to continue to grow in the coming years.</p>
        
      </div> 
    </div>
  </div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
  <div class="container">
    <h1>Features</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div style="text-align:center;">
      <h2>WGP Ecosystem</h2>
      <br>
      <p>Individuals can easily set up user accounts on the HOOXI application. As application users, individuals can select among many simple predefined missions such as taking the public transport, reducing electricity usage or purchasing identified eco-products.</p>
      <br>
      <br>
      <br>
      <img src="img/feature.jpg" alt="">
      <br>
      <br>
      <br>
      <h4 style="font-weight:700;">Examples of how to collect WGP as a payback for credit card usage:</h4>
      <br>
      <div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
      <br>
      <div class="row">
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Buying from W Green Pay partnered businesses</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Purchasing identified eco-products</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>Taking public transportation</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
  <div class="container">
    <h1>Token Sales</h1>
    <div class="h-line"></div>
      <div class="col-md-4 token-graph">
        <img src="img/chart-tokensale.png" alt="">
        <br>
        <br>
        <p>The total number of W Green Pay issued will remain constant at 1 billion tokens.</p>
        <br>
        <p>Of the total 1 billion WGP, only 200 million WGP (20%) will be open for private and public sale, and 800 million (80%) WGP will remain without sale at this ICO event. The use of the 800million unsold WGP is as following:</p>
        <ul>
          <li>200 million (20%): held by the WGP issuer (lock-up for period of six (6) months from the end of public sale)</li>
          <li>200 million (20%): allocated to HOOXI App to provide as reward to HOOXI Campaign participants</li>
          <li>400 million (40%): reserved for future sale (lock-up for period of six (6) months from the end of public sale)</li>
        </ul>
      </div>
      <div class="col-md-8 token-table">
        <table>
            <tr valign="top">
              <td class="left-table" style="padding-top:40px;">Token Name</td>
              <td style="padding-top:40px;">W Green Pay</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Symbol</td>
              <td>WGP</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Platform</td>
              <td>Stellar</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Supply</td>
              <td>Fixed supply of 1 billion, 200 million for sale</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Currency Accepted</td>
              <td>XLM / ETH / BTC / USD</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Token Price</td>
              <td>US$2 per token</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Private Sale Date</td>
              <td>May to September, 2018</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Public Sale Date</td>
              <td>1st ~ 14th October 2018</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Soft Cap</td>
              <td>US$25 million</td>
            </tr>
            <tr valign="top">
              <td class="left-table">Hard Cap</td>
              <td>200 million WGP</td>
            </tr>
            <tr valign="top">
              <td class="left-table" style="padding-bottom:40px;">Lock-up Period</td>
              <td style="padding-bottom:40px;">W Green Pay held by the Team shall be subjected to a lock-up period of six (6) months from the end of public sale (14th of October, 2018)</td>
            </tr>
        </table>
      </div>
  </div>
</section>
<!------------ Token sale end ------------>

<!------------ Media start ------------>
<section id="media">
  <div class="container">
    <h1>Media</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div class="row">
      <div class="flex-container">
        <div class="media-slider">
          <ul class="slides" style="text-align:center;">
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=VB2oOM2MlcQ" class="video-pop-up"><img src="img/video-thumb-1.jpg" alt=""></a>
                <br><br>
                <h4>GHG Reduction Campaign (HOOXI Campaign) Declaration Ceremony</h4>
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
                <h4>GHG Reduction Campaign (HOOXI Campaign) Committee Inauguration Ceremony</h4>
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
                  <img src="img/media-logos/media-eng-marketsinsider.png" alt="">
                  <br><br>
                  <p>MARKETINSIDER</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://markets.businessinsider.com/news/stocks/korea-s-largest-government-backed-hooxi-campaign-ventures-into-blockchain-1024702109" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-cointelegraph.png" alt="">
                  <br><br>
                  <p>COINTELEGRAPH</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://cointelegraph.com/press-releases/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-nulltx.png" alt="">
                  <br><br>
                  <p>NULLTX</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://nulltx.com/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-yahoo.png" alt="">
                  <br><br>
                  <p>YAHOO FINANCE</p>
                  <br>
                  <h4>Korea’s Government-backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System For GHG Reduction by Individuals</h4>
                  <br>
                  <a href="https://finance.yahoo.com/news/koreas-government-backed-hooxi-campaign-130000805.html" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-bitcoinexchange.png" alt="">
                  <br><br>
                  <p>BITCOINEXCHANGEGUIDE</p>
                  <br>
                  <h4>Korean Government-backed HOOXI WPG Campaign Launches into Blockchain</h4>
                  <br>
                  <a href="https://bitcoinexchangeguide.com/korean-government-backed-hooxi-wpg-campaign-launches-into-blockchain/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-kplctv.png" alt="">
                  <br><br>
                  <p>KPLCTV</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://www.kplctv.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-abcfoxmontana.png" alt="">
                  <br><br>
                  <p>ABCFOXMANTANA</p>
                  <br>
                  <h4>Korea's Largest Government-backed HOOXI Campaign Ventures into Blockchain</h4>
                  <br>
                  <a href="http://www.abcfoxmontana.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-fox14tv.png" alt="">
                  <br><br>
                  <p>FOX14TV</p>
                  <br>
                  <h4>Korean Government-backed HOOXI WPG Campaign Launches into Blockchain</h4>
                  <br>
                  <a href="http://www.fox14tv.com/story/38203276/koreas-largest-government-backed-hooxi-campaign-ventures-into-blockchain" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-findclimateanswers.png" alt="">
                  <br><br>
                  <p>FINDCLIMATEANSWERS</p>
                  <br>
                  <h4>Korea’s Government-Backed HOOXI Campaign Issues W Green Pay (WGP), First Blockchain Enabled Reward System for GHG Reduction by Individuals</h4>
                  <br>
                  <a href="http://www.findclimateanswers.com/koreas-government-backed-hooxi-campaign-issues-w-green-pay-wgp-first-blockchain-enabled-reward-system-for-ghg-reduction-by-individuals/" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
            <li>
              <div class="col-md-4 col-sm-4 v-pad">
                <div class="media-articles">
                  <img src="img/media-logos/media-eng-afp.png" alt="">
                  <br><br>
                  <p>AFP</p>
                  <br>
                  <h4>W Green Pay (WGP) - The Global Solution to Greenhouse Gas (GHG) Reduction</h4>
                  <br>
                  <a href="https://www.afp.com/en/news/1314/w-green-pay-wgp-global-solution-greenhouse-gas-ghg-reduction-201805300056201" target="_blank" style="color:#a9f04c; letter-spacing:1px;">READ MORE</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="articles-viewall"><a href="media.html" target="_blank" class="btn white-btn articles-btn">View All</a></div>
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
    <h1>Roadmap</h1>
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
                <h3 class="timeline-title">Dec 2017</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI Campaign Declaration</h4></li>
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
                <h3 class="timeline-title">Apr 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI Campaign Committee Inauguration</h4></li>
                  <li><h4>W Green Pay Certification in Singapore</h4></li>
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
                <h3 class="timeline-title">May - Sep, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay Private Sale</h4></li>
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
                <h3 class="timeline-title">July 27-29, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI Camping Festival</h4></li>
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
                <h3 class="timeline-title">Oct 1-14, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay Public Sale</h4></li>
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
                <h3 class="timeline-title">Oct 4, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI App Launch</h4></li>
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
                <h3 class="timeline-title">Oct 10-12, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>Korea Carbon Forum (PyeongChang Forum)</h4></li>
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
                <h3 class="timeline-title">Nov 2-4, 2018</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI App Launching Festival</h4></li>
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
                <h3 class="timeline-title">Mar 2019</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Exchange Launch</h4></li>
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
	<h1>Partner</h1>
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
    <h1>Team</h1>
    <div class="h-line"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Wook Lee</h3>
          <h4>Chairman</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>DR. YOUREE LEE</h3>
          <h4>Co-Founder/CEO<br>(Adjunct Professor, Business School of Hanyang University)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>KEON HO SHIM</h3>
          <h4>CFO</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#bruno" class="open-popup-link"><div class="team-img"><img src="img/team-bruno-wu.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Bruno Wu</h3>
          <h4>Strategic Management Adviser</h4>
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
          <h3>Stas Oskin</h3>
          <h4>Technology, R&D Adviser<br>(Co-Founder of Wings)</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sebastian" class="open-popup-link"><div class="team-img"><img src="img/team-sebastian.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SEBASTIAN STUPURAC</h3>
          <h4>Blockchain Product Adviser<br>(Co-Founder of Wings)</h4>
        </div>
      </div>
    </div>
    <div class="row">
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#seonik" class="open-popup-link"><div class="team-img"><img src="img/team-seonik-jeon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SEONIK JEON</h3>
          <h4>Community Building and Marketing Adviser<br>(CEO of Factblock & Blockpost, CSO of Financial News)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sonic" class="open-popup-link"><div class="team-img"><img src="img/team-sonic-zhang.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SONIC ZHANG</h3>
          <h4>Crypto Investment, Tokenomics Specialist / Technology Adviser<br>(Founder & Managing Director of Ledger Z Capital)</h4>
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
          <h4>Strategic Business Adviser<br>(Co-Founder, CEO of Zeex)</h4>
        </div>
      </div>
    </div>
	<div class="row">
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sangjin" class="open-popup-link"><div class="team-img"><img src="img/team-sang-jin-hong.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Sangjin Hong</h3>
          <h4>Blockchain Investments Adviser<br>(Co-Founder, CEO of Chain Cabinet)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chen Shun Teng</h3>
          <h4>Business Adviser<br>(Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#satoshi" class="open-popup-link"><div class="team-img"><img src="img/team-profile.png" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Satoshi D.</h3>
          <h4>Blockchain Industry Expert, Adviser<br>(Co-Founder of Dfund, Founder of Dcapital)</h4>
        </div>
      </div>
	</div>
    <div style="width:100%; background:rgba(255,255,255,0.2); height:1px; margin-top:60px;"></div>
    <section id="advisers" style="padding-bottom:60px;">
      <h1>ADVISERS (W-Foundation, HOOXI Campaign)</h1>
      <div class="h-line"></div>
      <h2>Government</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-im.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Im, Jongseong</h3>
            <h4>Member, National Assembly of Republic of Korea</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-kwansuk.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Kwansuk</h3>
            <h4>Member, National Assembly of Republic of Korea</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Beongwook--National-Assembly-.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Beongwook</h3>
            <h4>Member, National Assembly of Republic of Korea</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/MOCT--Oh,-Jangsup.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Oh, Jangsup</h3>
            <h4>Former Minster, Ministry of Construction and Transportation</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Sanghui.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Sanghui</h3>
            <h4>Former Minster, Ministry of Science Technology</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ma-Changhwan--MOCIT.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ma, Changwan</h3>
            <h4>Vice Minister for Planning and Coordination, Ministry of Science and ICT</h4>
          </div>
        </div>
      </div>
      <h2>Legal Profession & Financial Institutions</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ko,-Eunseok--Prosecutor.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ko, Eunseok</h3>
            <h4>Chief Prosecutor of Daejeon District Supreme Prosecutor ́s Office (Seosan Branch)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Chadong---Hanyang-Univ.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Chadong</h3>
            <h4>Professor in Department of Law & Former Judge of Seoul High Court, Hanyang University</h4>
          </div>
        </div>
		<div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/hong-kyeong-keun.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Kyung Keun</h3>
            <h4>Chairman, TRUBEN Investment Group</h4>
          </div>
        </div>
		<!--
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Huiseung--Lawyer.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Huiseung</h3>
            <h4>President Lawyer & Former Chief judge of a district court, Pyeong San (Law Firm) & Suwon District Court</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Jang,-Ilsuk--NEw-Finance-Society-Institute.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Jang, Ilsuk</h3>
            <h4>Chairman, New Finance Society Institute</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Huinam--KIC.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Huinam</h3>
            <h4>President, Korea Investment Corporation (Sovereign Wealth Fund)</h4>
          </div>
        </div>-->
      </div>
      <h2>Media & Entertainment</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Song,-Jaejo---Korea-Economy-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Song, Jaejo</h3>
            <h4>President, Korea Economic TV(Broadcasting Network)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-dongyul-seok.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Dongyul Seok</h3>
            <h4>Public Relations Adviser (Deputy Director of Dong-A Daily News)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Min,-Yongjae--YJM-Games.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Min, Yongjae</h3>
            <h4>President, YJM Games(KODAQ listed IT Company)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Junhee--inet-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Junhee</h3>
            <h4>Chairman, inet-TV (Broadcasting Network)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-Ilsang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Ilsang</h3>
            <h4>Highly Recognized Musician in Korea (Songwriter, Composer)</h4>
          </div>
        </div>
      </div>
      <h2>Corporations & Organizations</h2>
      <br>
      <div class="row" style="margin-bottom:30px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim-Jongryang---Hanyang-Univ-Chairman.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Jongryang</h3>
            <h4>Chairman, Hanyang University (Major University in Korea)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-cho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>CHO, DONGHYUK</h3>
            <h4>Chairman, Hansol Chemical</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi Jonggu - Easter Jet.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Jonggu</h3>
            <h4>President, Eastar Jet (Airline)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Peter-Kim--JIOS.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Peter</h3>
            <h4>Chairman, JIOS AEROGEL (Major Corp. in Advanced New Materials)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kwon,-Ryan---Jimei.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kwon, Ryan</h3>
            <h4>President, Jimei Korea (Major Real Estate Developing Corp. in China and Korea)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Jonghwa---KR-Industry.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Jonghwa</h3>
            <h4>CEO, KR Industry (Major Construction Corp.)</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Moon,-Gyeonghwan---SCGO.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Moon, Gyeonghwan</h3>
            <h4>CEO, SCGO (Major Real Estate Developing Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Bonggyu---Hanyang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Bonggyu</h3>
            <h4>Executive Director, Hanyang (Major E&C Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongman---Khan.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Dongman</h3>
            <h4>Chairman, K-Khan (Major Construction Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Youngeun---Mantoss-Power.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Youngeun</h3>
            <h4>President, Mantoss Power (Major H&R Outsourcing Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Hong,Nanggi---Kumho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Nanggi</h3>
            <h4>Executive Director, Kumho Construction (Major E&C Corp.)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Chun,-Jonggi---Seegene-Medical-Foundation.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Chun, Jonggi</h3>
            <h4>Chairman, Seegene Medical Foundation (Global Clinical Testing Organization)</h4>
          </div>
        </div>
      </div>
    </section>	  
    <div class="team-advisor">
	  <div class="row">
	    <div class="col-md-9 col-sm-9 col-xs-7 v-pad">
          <h3>Please click on the link for more information on over 160 leaders and influential figures advising W-Foundation and HOOXI campaign:</h3>
 	      <br><br>
 	      <h4>KOR: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4><br>
          <h4>ENG: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-5 v-pad" style="text-align: center;">
		  <img src="img/leaf-big.png" alt="">
		</div>
      </div>
    </div>    
  </div>
</section>
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="h-line"></div>
    <div style="text-align:center;">
      <h3 style="text-transform:none;">For enquiries, e-mail us at</h3>
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
      <div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">Don’t miss the latest news and updates</h3></div>
      <div class="col-md-6 v-pad">
        <div class="subscription-messages"></div>
        <form id='subscription' class="ajax-subscription" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type="hidden" name="type" value="subscription" />
          <div class="subscription-container">
            <input type='text' class="input-style input-box" name='EMAIL' id='subscription_email'  placeholder="Your e-mail address " required/>
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
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-hooxi.jpg" alt=""></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 v-pad wfoundation">
        <a href="http://www.gcrfund.org/en/"><img src="img/logo-wfoundation.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <br>
    <span class="small-font" style="color:#333;">@ 2018 W GLOBAL INVESTMENT PTE. LTD. <br>All rights reserved.</span>
    <br><br>
    <div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">Terms of Service</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">Privacy Policy</a></div>
</div>

<!---------- Participate form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h4>PARTICIPATE IN <b>W GREEN PAY</b></h4>
  <br><br>
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type="hidden" name="type" value="participate" />
    <input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="name " />
    <br>
    <br>
    <input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="e-mail" required/>
    <br>
    <br>
    <br>
    <div style="float:right;">
      <button type='submit' value='Submit' class="btn white-btn">SUBMIT</button>
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
  <h3>WOOK LEE</h3>
  <h4>Chairman, W-Foundation</h4>
  <br><br><br>
  <p>Founder and Chairman of W-Foundation, philanthropist, and entrepreneur. Built global network to enable public-private partnerships with governments, corporations, and institutions. Established Global Climate Refugee Fund with global donors and grew W- Foundation into influential Global Nature Conservation Organization. Bachelor of Law from Hanyang University.</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
  <h3>YOUREE LEE PH.D.</h3>
  <h4>CCo-Founder/CEO, W-Foundation</h4>
  <h4>(Adjunct Professor, Business School of Hanyang University)</h4>
  <br><br><br>
  <p>A philanthropist and an entrepreneur, she is the CEO of W-Foundation, W-HY R&D, Hooxi Research Institute, and COO of Hooxi Foundation (USA).</p>
  <br>
  <p>Dr. Lee is a pioneer in bringing blockchain to social finance. She led the launch of the blockchain W Green Pay (WGP) for ‘HOOXI’, a global nature conservation campaign organized by W-Foundation and the Korean government.</p>
  <br>
  <p>Dr. Lee has extensive investment and corporate banking experience at Macquarie and Sumitomo Mitsui Banking Corporation, covering infrastructure and renewable energy project financing and relationship management. Received Ph.D., M.A., and B.A. in International Business from Ewha Womans University. Teaches business, strategy and finance at Ewha Womans University and Hanyang University.</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
  <h3>KEON HO SHIM</h3>
  <h4>CFO, W-Foundation</h4>
  <br><br><br>
  <p>Before taking the role of CFO at W-Foundation, he was the Head of Corporate Sales at Bank of America Merrill Lynch's Transaction Banking division in Korea. Mr. Shim has over 23 years of experience in banking, consulting, and new business development. Mr. Shim has also worked at Citi, Oliver Wyman, and Samsung Corporation.</p>
  <br>
  <p>Mr. Shim holds an M.B.A. from Stern School of Business, New York University, and a B.A. in Economics and Political Science from The George Washington University.</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
  <h3>DONGYUL SEOK</h3>
  <h4>Public Relations Adviser, W-Foundation (Deputy Director of Dong-A Daily News)</h4>
  <br><br><br>
  <p>25 years’ experience as a leading, influential journalist, Vice Chairman of the International Federation of Journalists, Chairman of Korea Press Photography Association. Adjunct Professor of Media & Communication at Hanyang University.</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
  <h3>SEONGGU RYU PH.D.</h3>
  <h4>Adviser/Chief Relationship Officer, W-Foundation (Professor, Seokyung University)</h4>
  <br><br><br>
  <p>25 years’ experience in strategic planning, group management consulting, and marketing at Samsung Group, most recently as Vice President of Marketing Strategy Group at Samsung Electronics. Professor of Business Administration at Seokyung University.</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
  <h3>CHULJUN KIM M.D.</h3>
  <h4>Adviser/Chief Technology Officer, W-Foundation (Chairman/Medical Doctor, Daejeon Wellness Hospital)</h4>
  <br><br><br>
  <p>20 years’ experience as a medical doctor, entrepreneur, and investor. As CEO of a major hospital, led high profile M&A and investments in the medical industry. Currently developing blockchain technology for the medical industry to securely store health records. Assistant Professor of Rehabilitation Medicine at Chungnam National University.</p>
</div>

<div id="bruno" class="white-popup mfp-hide sans">
  <h3>BRUNO WU</h3>
  <h4>Strategic Management Adviser, W-Foundation</h4>
  <br><br><br>
  <p>High-profile media mogul from China. The Founder, Co-Chairman and CEO of Sun Seven Stars Entertainment & Media Group Limited, one of the biggest private media and investment companies in China.</p>
  <br>
  <p>Mr. Wu is also the major shareholder of DBOT, The Delaware Board of Trade Holdings Inc., the first and only blockchain based Alternative Trading System fully licensed by the SEC.</p>
  <br>
  <p>Bruno is also the former Chairman of Sun Media Group and former Director of Shanda Group. Bruno and his wife (Yang Lan, one of the most popular celebrities in China) made the 2016 Forbes China Rich List with an estimated fortune worth $1 billion.</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
  <h3>CHEN SHUN TENG</h3>
  <h4>Business Adviser, W-Foundation (Group Strategy & Corporate Affairs Manager at WWRC Holding Pte. Ltd. “WWRC Group”)</h4>
  <br><br><br>
  <p>In charge of charting future growth through overseas expansion, JV/partnerships and M&A at WWRC Group, a Pan-Asian Chemical Distributor with the presence in 16 Asian Cities. Prior to joining WWRC Group, worked in banking with Citi and OCBC. Bachelor of Engineering (Materials Engineering) with First Class Honors Degree from Nanyang Technological University.</p>
  <br>
  <p>Mr. Teng received First Class Honors Degree from Nanyang Technological University</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
  <h3>CHRIS LOW</h3>
  <h4>CTO</h4>
  <br><br><br>
  <p>Mr. Low has been succesful technology entrepreneur for near 20 years. His first startup called Pendulab is a Software-as-a-Service offering web based collaboration solution, Pendulab was acquired by a leading US-based private equity firm.</p>
  <br>
  <p>Mr. Low founded Southeast Asia largest casual game platform, Viwawa, in 2008, SofrPay Mobile, and also SoftPay, the largest Mobile Point of Sale company in Vietnam with partnership with Indonesia’s largest bank, Bank Mandiri. Mr. Low graduated with a Merit in Computing from the National University of Singapore. Mr. Low has been passionate about blockchain technologies since 2012. He loves to read up on the latest blockchain technologies and does some coding in his spare time.</p>
</div>

<div id="jeremy" class="white-popup mfp-hide sans">
  <h3>JEREMY KHOO</h3>
  <h4>Technology and Investments Adviser</h4>
  <br><br><br>
  <p>Jeremy Khoo is an international business operator, founder and blockchain entrepreneur who has successfully exited 3 venture funded companies. He is currently VP of MC Payment and Group CEO of iFashion - a leading regional retail enabler and conglomerate, Mr. Khoo successfuly raised Series B from VC funds. Later iFashion was acquired by MC Payment for $23 million and Jeremy is co-leading the combined push for a public listing on the SGX.</p>
  <br>
  <p>Jeremy is a Partner and Principal Consultant in Novum Capital and Enblockr, the blockchain accelerator corps. Jeremy is also Managing Partner in CRC Capital, crypto fund investing in early stage blockchain innovation.Jeremy co-founded retail blockchain MegaX as well as Crypto-E-Commerce store Megaxstore which is spearheading cryptocurrency mass adoption.</p>
  <br>
  <p>Jeremy obtained his Bachelor's Degree in Mechanical Engineering from the Nanyang Technological University of Singapore.</p>
</div>

<div id="stas" class="white-popup mfp-hide sans">
  <h3>STAS OSKIN</h3>
  <h4>Technology, R&D Adviser (Co-Founder of Wings)</h4>
  <br><br><br>
  <p>With over 15 years of experience in IT engineering, development and management of enterprise products Stas co-founded WINGS, a successful community-engagement and smart-contract facilitation platform as well as one of the few working DAPPS on the Ethereum blockchain. Stas is also CTO of eyecam, NeoCam, and NeoVSP. Stas brings extensive expertise in web-based platforms, streaming media, distributed storage, clustered solutions and networks.</p>
  <br>
  <p>Prior to current positions, Stas acted as the CTO of BeeCom Israel, where he led the companyâ€TMs strategic shift to open-source/Linux based platforms. He also participated in multiple high-profile software projects, consulting such organizations such as BeeContact, Dead Sea Labs, and Ministry of Defense, and was a co-founder of Comoona, the first Israeli online social network.</p>
</div>

<div id="sebastian" class="white-popup mfp-hide sans">
  <h3>SEBASTIAN STUPURAC</h3>
  <h4>Blockchain Product Adviser (Co-Founder of Wings)</h4>
  <br><br><br>
  <p>Sebastian co-founded WINGS, a successful community-engagement and smart-contract facilitation platform as well as one of the few working DAPPS on the Ethereum blockchain. Sebastian has gained vast experience in decentralised solutions and blockchain technology since 2013.</p>
  <br>
  <p>Sebastian was also CEO of ChainLab, CIO and Product & Project Manager at eyecam. Sebastian received BA in Information Systems Management from The Academic College of Tel-Aviv, Yaffo.</p>
</div>

<div id="seonik" class="white-popup mfp-hide sans">
  <h3>SEONIK JEON</h3>
  <h4>Community Building and Marketing Adviser (CEO of Factblock & Blockpost, CSO of Financial News)</h4>
  <br><br><br>
  <p>CEO of FactBlock, blockchain advisory services platform, CEO of The Blockpost, blockchain focused media, and CSO of The Financial News. Worked also as the Bureau Chief of The Financial News, LA correspondent of The Financial News, and VP of MPIO. Received EMBA from Korea University, and BA in Business and Information Systems from California State University, Long Beach.</p>
</div>

<div id="sonic" class="white-popup mfp-hide sans">
  <h3>SONIC ZHANG</h3>
  <h4>Crypto Investment, Tokenomics Specialist / Technology Adviser (Founder & Managing Director of Ledger Z Capital)</h4>
  <br><br><br>
  <p>Sonic Zhang is an entrepreneur and investor. Founder of LedgerZ Capital (ledgerz.capital) and ValueNet Capital (valuenet.capital), focusing on investing in blockchain startup, security token offerings (STO) and cryptos， portfolio include OmiseGo, Binance, PowerLedger, WAX, CoinPoker, Lympo, Bankorus, RobotCache, Celsius Network, tZERO, Tenzorum, etc. He is the Co-founder and Global Director of 20 Nations League of Blockchain (B20), an international NGO focused on bridging blockchain and crypto communities worldwide. And the co-founder of ValueBank Group, a global network of fiat-crypto/crypto-crypto (Cointobe.com) exchanges, with a crypto wallet (Coinwall.io / Coinwallpro.com), and ICO services. Co-founder of Murint Capital, a VC Fund for tech and entertainment industries. Founder of SoRelax, a global platform for cross border marketing and services. Sonic has a MPM and a BE in Mechatronics from University of Sydney.</p>
</div>

<div id="irwin" class="white-popup mfp-hide sans">
  <h3>IRWIN CHEE</h3>
  <h4>Crypto Adviser</h4>
  <br><br><br>
  <p>Starting his career in product development and marketing, Irwin was at i-Sprint Innovations, a security tech firm. He was Co-founder at Rimu Group, a venture capital fund which invests across SEA, led rounds and co-invested along side other VCs such as Wavemaker Partners, Ardent Capital, SMDV, SPH, Fenox and DeNA. With a portfolio of 4 acquisitions and 2 exits.</p>
  <br>
  <p>Irwin was an early investor in ICOs notable ones include NXT, AntShares (now NEO), Stratis and Status. Irwin is now the Managing Consultant of Novum Capital, blockchain consultancy.</p>
  <br>
  <p>Irwin is also the Writer at www.cryptofinn.net that covers opinion pieces on cryptocurrency and reviews ICOS whenever he can.
</p>
</div>

<div id="guy" class="white-popup mfp-hide sans">
  <h3>GUY MELAMED</h3>
  <h4>Strategic Business Adviser (Co-Founder, CEO of Zeex)</h4>
  <br><br><br>
  <p>Guy is a product strategist and relentless entrepreneur. He has already contributed to the success of GreenRoad, a major player in commercial fleets and connected cars, as its CPO and Head of Strategic Partnerships. He also founded Toontok, an engaging animated-messaging startup, which he led as CEO. As VP of Product and Solutions Design at Ginger Software and Time to Know, a provider of learning materials for the digital classroom, Guy further deepened his expertise in these dynamic fields. Guy holds an MA in Communications from the University of Amsterdam.</p>
</div>

<div id="sangjin" class="white-popup mfp-hide sans">
  <h3>SANGJIN HONG</h3>
  <h4>Blockchain Investments Adviser (Co-Founder, CEO of Chain Cabinet)</h4>
  <br><br><br>
  <p>Mr. Hong is an experienced entrepreneur, investor and blockchain adviser. He is a co-founder and CEO of Chain Cabinet, a multi-dimensional blockchain company, based in Seoul and Singapore, that both builds and invests in a variety of ICO projects. Mr. Hong is also a partner at Kstartup, a startup accelerator who helped over 50 startups to build their business. As a former Microsoft Office Product Manager at Microsoft and management consultant at Monitor Group, he brings more than 20 years of technology and business management experience to the team.</p>
</div>


<div id="kyung" class="white-popup mfp-hide sans">
  <h3>KYUNG KEON HONG</h3>
  <h4>President, W-Foundation</h4>
  <br><br><br>
  <p>President of W-Foundation, Chairman of Hooxi Global and Chairman of Truben Investment Group. Truben Investment Group manages one of the biggest investment funds in Korea, with focus on infrastructure and long term capital projects. One of the businesses Truben Investment Group owns is the National Sports Lottery of Korea called K-toto, which is operated under an exclusive license agreement with the Korean government. Annual sale of the K-toto is approximately 5 billion USD.</p>
</div>

<div id="alex" class="white-popup mfp-hide sans">
  <h3>ALEX SUNG-HYEOK HONG, Msci, MSc</h3>
  <h4>Director, W-Foundation (Director of HOOXI Global and CEO of AZworth Trust)</h4>
  <br><br><br>
  <p>With 10 years experiences in private equity fund and strategic consulting specializing as a science/technology expert as well as being a famed motivational speaker. Alex holds master's degrees in theoretical physics from Imperial College London and in history and philosophy of natural sciences from UCL. Currently serves as CEO of AZworth Trust, the parent company for Truben Investment and shareholder of HOOXI Global, managing various portfolio and business.</p>
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
				var	range  	= NY-Math.round((new Date()).getTime()/1000),
					secday = 86400, sechour = 3600,
					days 	= parseInt(range/secday),
					hours	= parseInt((range%secday)/sechour),
					min		= parseInt(((range%secday)%sechour)/60),
					sec		= ((range%secday)%sechour)%60;
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
                    $(notifyMessages).text("Thank you for signing up for the W Green Pay token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
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

                    $(contactMessages).text("Thank you for signing up for the W Green Pay token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
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
