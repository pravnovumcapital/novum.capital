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
      <li><a href="#about">关于我们</a></li>
      <li><a href="#features">特点</a></li>
      <li><a href="#token">代币销售</a></li>
      <li><a href="#media">媒体</a></li>
      <li><a href="#roadmap">路径图</a></li>
	  <li><a href="#partner">策略伙伴</a></li>
      <li><a href="#team">团队</a></li>
      <li><a href="#advisers">顾问</a></li>
      <li><a href="#contact">联系方式</a></li>
    </ul>
    <div class="lng-container">
      <div class="dropdown">
          <a href="">语言 &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="index.php">English</a></p>
            <p><a href="index-kr.php">韩语</a></p>
          </div>
      </div> 
      <!--<a href="#" class="lng lng-active">EN</a> &nbsp;<a href="index-kr.php" class="lng">KR</a>-->
    </div>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#about" onclick="closeSidebar(this)">关于我们</a>
      <a href="#features" onclick="closeSidebar(this)">特点</a>
      <a href="#token" onclick="closeSidebar(this)">代币销售</a>
      <a href="#media" onclick="closeSidebar(this)">媒体</a>
      <a href="#roadmap" onclick="closeSidebar(this)">路径图</a>
	  <a href="#partner" onclick="closeSidebar(this)">策略伙伴</a>
      <a href="#team" onclick="closeSidebar(this)">团队</a>
      <a href="#advisers" onclick="closeSidebar(this)">顾问</a>
      <a href="#contact" onclick="closeSidebar(this)">联系方式</a>
      <div class="lng-mobile">
        <a href="index.php">EN</a>  &nbsp;<a href="index-kr.php">韩语</a>
      </div>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------> 

<!------------ Home banner start ------------>
<div id="home">
  <div class="home-container">
    <h1>加入<span style="color:#87b44c;">W GREEN PAY</span> 的 HOOXI 活动！</h1>
    <h4>最具创新性的社会碳信用平台即将推出</h4>
    <br><br>
    <table>
      <tr> 
        <td style="text-align:right;"><h4>私人发售</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">第一阶段已售完。</span></h4></td>
      </tr>
      <tr> 
        <td></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">第二阶段正在进行中</span></h4></td>
      </tr> 
      <tr> 
        <td style="text-align:right;"><h4>公开发售</h4></td>
        <td style="text-align:left;"><h4 style="color:#87b44c;">2018年十月一日至十四日</span></h4></td>
      </tr>  
    </table>
    <br>
    <!--
    <div id="token_sale"></div>
    <br>
    <ul class="countdown">
      <li class="days small-font">
        日
      </li>
      <li class="hrs small-font">
        时
      </li>
      <li class="mins small-font">
        分
      </li>
      <li class="sec small-font">
        秒
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
      <li><a href="#participateform" class="open-popup-link btn">参与</a></li>
      <li><a href="WPay-whitepaper-CN.pdf" target="_blank" class="btn">白皮书</a></li>
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
        <h1>关于我们</h1>
        <div class="h-line"></div>
        <h1>W <span style="color:#87b44c;">Green Pay</span></h1>
        <br>
        <h4>W Green Pay（“WGP”）是符合Stellar标准，可以在Stellar区块链上使用的一种代币。 W Green Pay致力于提升公众对GHG（温室气体）减排的参与度。 W Green Pay将通过多种方式激励公众减少温室气体排放。</h4>
        <br>
        <h4>用户完成温室气体减排任务后，可通过HOOXI应用程序获得奖励。</h4>
        <br>
        <br>
        <h2 style="text-transform:none; color:#87b44c;">任务</h2>
        <br>
        <p>继2009年韩国政府加入《哥本哈根协议》，作出减排承诺后，韩国计划到2030年将温室气体排放量减少37％。</p>
        <br>
        <p>韩国政府选择了W-Foundation领导“全国减少温室气体排放公共运动（Nation-wide Public Movement to Reduce GHG Emission， 即HOOXI运动）”。</p>
        <br>
        <p>为支持政府的温室气体减排工作，W-Foundation将推出一个名为HOOXI的移动应用程序，用于监控并奖励公众与个人为减少温室气体排放作出的努力。</p>
      </div>
    </div>
    <br>
    <h2>解决方案</h2>
    <br>
    <p>最具创新性的社会碳信用平台即将推出。</p>
    <br>
    <p>韩国政府支持的温室气体（GHG）减排活动HOOXI的区块链W Green Pay（WGP），将用于奖励普通民众在韩国KETS（Korea's Emissions Trading Scheme，韩国碳排放交易体系）市场下为减少温室气体排放所做的贡献。</p>
    <br>
    <h4 style="font-weight:700;">WGP是通过令人期待的HOOXI应用程序对温室气体减排行为进行奖励的方法。用户将能够：</h4>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-1.png" alt="">
          <br><br>
          <h4>根据完成的环境任务奖励的任务点获得WGP</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-2.png" alt="">
          <br>
          <h4>在HOOXI购物中心和合作的线上/线下商店花费W Green Pay（即通过Zeex，包括Amazon，Starbucks等450多个品牌的商店）</h4>
        </div>
      </div>
      <div class="col-md-4 v-pad">
        <div class="features-icon">
          <img src="img/feature-icon-3.png" alt="">
          <br>
          <h4>发行“W Green Pay Crypto Card” - 在全球任何地方使用WGP作为付款方式</h4>
        </div>
      </div>
    </div>
    <br>
    <br>
    <h2>W-Foundation</h2>
    <br>
    <p>成立于2012年，是一家国际非营利组织，也是由韩国战略与金融部授权的指定捐赠组织。W-Foundation是HOOXI活动的慈善基金会。使用令人期待的HOOXI移动应用程序，个人就可以执行温室气体减排任务以积攒任务点数，进而交换WGP。</p>
    <br>
    <h2><span style="color:#ggg;">HOOXI</span> 应用</h2>
    <br>
    <p>移动应用HOOXI将跟踪、汇总个人的温室气体减排数据，根据该数据，W-Foundation将分配国家排放许可证（韩国碳补偿额度），即在韩国市场交易的碳排放单位。通过HOOXI活动，基于韩国碳补偿额度的碳交易的经济奖励将不再是公司和机构的独有的市场，而是将向个人开放的领域。</p>
    <br>
    <h2>W Exchange</h2>
    <br>
    <p>经韩国电力公司（KEPCO）批准，W Exchange将于2019年3月启动。预计W Exchange将成为符合KETS资格的商业实体。预计HOOXI应用分配的韩国碳补偿额度将使用W Exchange以代币KRX进行交易，</p>
  </div>
</section>
<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-md-4 v-pad">
       <h1>Hooxi 活动<span style="color:#87b44c;">赞助商</span></h1>
       <br>
       <p>YG娱乐（ YG Entertainment）, Hotel Lotte DFS Co., Ltd., 乐天网购（Lotte Homeshopping）, Philip Morris Korea Ltd., 韩国能率协会（Korea Management Association）, 北京物美商业集团股份有限公司（中国)(Wumart Stores, Inc. China), 韩松化学(Hansol Chemical), 韩松橡树谷度假村(Hansol Oak Valley), Borim CS, FnGuide Inc., Sungdo Engineering & Construction, Korea Business News Co., Ltd., YJM Games Co., Ltd., Cleantopia, NET TV Co., Ltd.</p>
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
    <h1>形象 <span style="color:#87b44c;">大使</span></h1>
    <br>
    <h4>包括韩国流行艺人在内的300多位韩国名人将支持HOOXI活动，并出任W-Foundation的形象大使。</h4>
    <br>
    <p>Infinite组合，高宝璟，李艺真，张赫，金泰宇，I.O.I，朴素珍，沈亨倬，沈昌珉，崔始源，李东海，金裕貞和Alberto是其中几位主要形象大使。此外，还有很多韩国名人担任W-Foundation的形象大使。</p>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/INFINITE.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>INFINITE组合</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/IOI.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>I.O.I</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/The-One.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>郑淳元</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lydia-Ko.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>高宝璟</h3>
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
            <h3>沈昌珉 (东方神起)</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Choi-Siwon-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>崔始源</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Donghae-(Super-Junior).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李东海</h3>
            <h4>(Super Junior)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jinho-(SBS-Producer-of-'Law-of-the-Jungle').jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金镇浩</h3>
            <h4>（SBS电视台《丛林法则》制片人）</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kim,-Jongguk.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金钟局</h3>
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
            <h3>金亨俊</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Eddy-Kim.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>金正焕</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Baek,-Seonghyeon.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>白成铉</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Gangnam.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>朴载相</h3>
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
            <h3>呂珍九</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Tiffany-(Girl's-Generation).jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>黄美英</h3>
            <h4>少女时代</h4>
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
            <h3>金知元</h3>
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
            <h3>李路</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Yoo,-Inyeong.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>柳仁英</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Lee,-Eungyeol.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>李恩杰</h3>
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
            <h3>李艺真</h3>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Ambassadors/Kwon,-Hyeoksu.jpg" alt=""></div>
          <br>
          <div class="celeb-title">
            <h3>权赫秀</h3>
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
            <h3>张赫</h3>
          </div>
        </div>
      </div> 
  </div>
</section>
<section style="background:#001a3d;" class="emission">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad">
        <h2>KETS <span style="color:#87b44c;">(Korea’s Emissions Trading Scheme, 韩国碳排放交易体系)</span></h2>
        <br>
        <p>2009年，韩国加入《哥本哈根协议》，承诺参与温室气体减排这一全球运动。韩国政府的目标是到2030年将温室气体排放量在目前基础上减少37％。 2015年，韩国推出了碳排放交易体系（Korea's Emissions Trading Scheme，即KETS），该体系是欧盟减排交易机制之后的第二大碳排放交易制度。</p>
    <br>
    <p>韩国的总量管制与交易（Cap-and-Trade）系统通过市场机制减少温室气体排放。该系统适用于约600家公司，这些公司的碳排放量占韩国温室气体排放量的68％以上（Korea Carbon，2018年）。确定公司最高排放量上限由政府规定。当公司排放量超过上限时，公司必须以市场价额外购买国家排放许可证（韩国碳补偿额度），或向政府支付罚款。</p>
    <br>
    <p>不遵守碳排放交易体系（KETS）的罚款为：每单位的tCO2e需支付平均市场价的三倍罚金。最高罚款上限为每吨二氧化碳100,000韩元（约合93美元/吨二氧化碳当量）。</p>
        <br>
        <p>Source: <a href="https://ieta.wildapricot.org/resources/Resources/Case_Studies_Worlds_Carbon_Markets/re publicofkorea_case%20study_june_2015.pdf" target="_blank" style="color:#87b44c;">资料来源：国际排放交易协会（IETA），2015年[The International Emissions Trading Association (IETA), 2015]</a></p>
        <br>
        <br>
        <img src="img/emission.png" alt="">
      </div>
      <div class="col-md-6 v-pad">
        <h2>韩国碳补偿额度</h2>
        <br>
        <h4 style="font-weight:700;">（国家排放许可证）验证</h4>
        <br>
        <p>韩国的韩国碳补偿额度（国家排放许可证）由环境部验证，并以现行市场价格进行交易。尽管市场对韩国碳补偿额度的需求不断增长，但环境部对韩国碳补偿额度的配额依然有限。截至2018年4月14日，韩国碳补偿额度的价格高达约每吨22,000韩元（20美元），这高于欧盟的CER（核证减排量）。截至2017年4月16日，欧盟的CER价格约为每吨13.84欧元（约合每吨17,700韩元）。</p>
        <br><br>
        <img src="img/graph-nep.png" alt="">
        <br>
        <br>
        <br>
        <br>
        <h4 style="font-weight:700;">韩国碳补偿额度（国家排放许可证）市场规模</h4>
        <br>
        <p>目前约有600家公司参与韩国的碳排放交易。韩国碳补偿额度市场规模从2015年的573亿韩元基线迅速增长；2016年，KETS高达1946亿韩元，2017年则达到4385亿韩元（取自于2017年1月至10月的有效数据）（韩国战略与金融部，2017年）。据韩国政府预计，未来几年内韩国碳补偿额度市场将持续增长。</p>
        
      </div> 
    </div>
  </div>
</section>
<!------------ About end ------------>

<!------------ Features start ------------>
<section id="features">
  <div class="container">
    <h1>特点</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div style="text-align:center;">
      <h2>WGP生态系统</h2>
      <br>
      <p>个人可以在HOOXI应用程序上轻松开设帐户。作为该应用程序的用户，大家可以选择许多简单的预定义任务，例如乘坐公共交通工具，减少用电量或购买已识别的环境友好型产品。</p>
      <br>
      <br>
      <br>
      <img src="img/feature.jpg" alt="">
      <br>
      <br>
      <br>
      <h4 style="font-weight:700;">如何收集WGP作为收益回报？示例如下：</h4>
      <br>
      <div style="max-width:555px; display:inline-block;"><img src="img/card.jpg" alt=""></div>
      <br>
      <div class="row">
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>在W Green Pay 购买环保产品合作伙伴门店消费</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>购买已确定的生态产品</h4>
        </div>
        <div class="col-md-4 col-sm-4 v-pad">
          <div style="max-width:36px; display:inline-block;"><img src="img/check.png" alt=""></div>
          <br><br>
          <h4>乘坐公共交通工具</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Features end ------------>

<!------------ Token sale start ------------>
<section id="token">
  <div class="container">
    <h1>代币发售</h1>
    <div class="h-line"></div>
      <div class="col-md-4 token-graph">
        <img src="img/chart-tokensale.png" alt="">
        <br>
        <br>
        <p>W Green Pay的发行总数将保持不变，为1亿代币。</p>
        <br>
        <p>本次ICO仅发售10亿总量中的2亿个WGP，未售出的8亿WGP具有以下用途：</p>
        <ul>
          <li>2亿（20%）：WGP发行人持有（自本次ICO公开发售结束日期起6个月内限售）</li>
          <li>2亿（2 0%）：分配给H O O X I应用软件，为HOOXI运动的参与者提供奖励（当奖励持有量耗尽时，通过在市场上购买WGP来维持奖励系统运作）</li>
          <li>4亿（40%）：保留待售（自本次ICO公开发售结束日期起6个月内限售）</li>
        </ul>
      </div>
      <div class="col-md-8 token-table">
        <table>
            <tr valign="top">
              <td class="left-table" style="padding-top:40px;">代币名称</td>
              <td style="padding-top:40px;">W Green Pay</td>
            </tr>
            <tr valign="top">
              <td class="left-table">货币符号</td>
              <td>WGP</td>
            </tr>
            <tr valign="top">
              <td class="left-table">运行平台</td>
              <td>Stellar</td>
            </tr>
            <tr valign="top">
              <td class="left-table">代币供应量</td>
              <td>固定供应10亿个，对外发售2亿个</td>
            </tr>
            <tr valign="top">
              <td class="left-table">交易货币</td>
              <td>恒星币 / 以太币 / 比特币 / 美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">代币价格</td>
              <td>每币2美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">私人发售日期</td>
              <td>2018年5月至9月</td>
            </tr>
            <tr valign="top">
              <td class="left-table">公开发售日期</td>
              <td>2018年10月1日至14日</td>
            </tr>
            <tr valign="top">
              <td class="left-table">软上限</td>
              <td>2500万美元</td>
            </tr>
            <tr valign="top">
              <td class="left-table">硬上限</td>
              <td>WGP 2亿个</td>
            </tr>
            <tr valign="top">
              <td class="left-table" style="padding-bottom:40px;">禁售期</td>
              <td style="padding-bottom:40px;">从公开发售结束当天(2018年10月14日)起6个月限售由发行人所 持有的WGP</td>
            </tr>
        </table>
      </div>
  </div>
</section>
<!------------ Token sale end ------------>

<!------------ Media start ------------>
<section id="media">
  <div class="container">
    <h1>媒体</h1>
    <div class="h-line" style="background:#001a3d;"></div>
    <div class="row">
      <div class="flex-container">
        <div class="media-slider">
          <ul class="slides" style="text-align:center;">
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=VB2oOM2MlcQ" class="video-pop-up"><img src="img/video-thumb-1.jpg" alt=""></a>
                <br><br>
                <h4>国民温室气体减排运动（HOOXI运动）发布仪式</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=QXNmaJxk0Nc" class="video-pop-up"><img src="img/video-thumb-2.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Beautiful World </h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=0KNCErbpYvc" class="video-pop-up"><img src="img/video-thumb-3.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Talk about Love</h4>
              </div>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=j47MC3V9qMM" class="video-pop-up"><img src="img/video-thumb-4.jpg" alt=""></a>
                <br><br>
                <h4>W-Foundation呈现歌曲，Together As One</h4>
              </div>
            </li>
            <li>
              <div class="col-md-6 col-sm-6 v-pad">
                <a href="https://www.youtube.com/watch?v=SxTATUzroa0" class="video-pop-up"><img src="img/video-thumb-5.jpg" alt=""></a>
                <br><br>
                <h4>国民温室气体减排运动（HOOXI运动)委员会建队仪式</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div style="background:#00bc7b; width:100%; height:1px; margin:60px 0;"></div>
    <h2>文章</h2>
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
                  <h4>W Green Pay（WGP） -  温室气体全球减排解决方案</h4>
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
    <h1>路径图</h1>
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
                <h3 class="timeline-title">2017年12月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI运动宣言</h4></li>
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
                <h3 class="timeline-title">2018年4月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI竞选委员会 就职典礼</h4></li>
                  <li><h4>W Green Pay 证书在新加坡</h4></li>
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
                <h3 class="timeline-title">2018年5月-9月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay 私人发售</h4></li>
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
                <h3 class="timeline-title">2018年7月27日至29日</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI露营节</h4></li>
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
                <h3 class="timeline-title">2018年十月1日至14日</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Green Pay 公开发售</h4></li>
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
                <h3 class="timeline-title">2018年10月4日</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI APP 在应用商店可下载</h4></li>
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
                <h3 class="timeline-title">2018年10月10日至12日</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>韩国碳论坛</h4></li>
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
                <h3 class="timeline-title">2018年11月2日至4日</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>HOOXI应用软件发布会</h4></li>
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
                <h3 class="timeline-title">2019年3月</h3>
                <br>
                <ul class="roadmap">
                  <li><h4>W Exchange启动</h4></li>
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
	<h1>策略伙伴</h1>
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
    <h1>团队</h1>
    <div class="h-line"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#wooklee" class="open-popup-link"><div class="team-img"><img src="img/team-wook-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>李旭 (WOOK LEE)</h3>
          <h4>W-Foundation主席</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#youreelee" class="open-popup-link"><div class="team-img"><img src="img/team-youree-lee.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>YOUREE LEE博士</h3>
          <h4>W-Foundation的联合创始人兼首席执行官 (汉阳大学商学院客座教授)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#keon" class="open-popup-link"><div class="team-img"><img src="img/team-keon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>沈健浩(KEON HO SHIM)</h3>
          <h4>W-Foundation首席财务官</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#bruno" class="open-popup-link"><div class="team-img"><img src="img/team-bruno-wu.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>吴征(BRUNO WU)</h3>
          <h4>W-Foundation策划管理顾问</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chris" class="open-popup-link"><div class="team-img"><img src="img/team-chris.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chris Low</h3>
          <h4>首席技术官</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#jeremy" class="open-popup-link"><div class="team-img"><img src="img/team-jeremy.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Jeremy Khoo</h3>
          <h4>区块链技术和投资顾问与专家</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#stas" class="open-popup-link"><div class="team-img"><img src="img/team-stas.jpeg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Stas Oskin</h3>
          <h4>技术，研究与开发顾问 (Wings的联合创始人)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sebastian" class="open-popup-link"><div class="team-img"><img src="img/team-sebastian.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SEBASTIAN STUPURAC</h3>
          <h4>区块链产品顾问(Wings的联合创始人)</h4>
        </div>
      </div>
    </div>
    <div class="row">
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#seonik" class="open-popup-link"><div class="team-img"><img src="img/team-seonik-jeon.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SEONIK JEON</h3>
          <h4>社区建设与营销顾问 (Factblock&Blockpost首席执行官，财经新闻首席战略官)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sonic" class="open-popup-link"><div class="team-img"><img src="img/team-sonic-zhang.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>SONIC ZHANG</h3>
          <h4>加密投资，代币经济专家/技术顾问 (Ledger Z Capital创始人兼董事总经理)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#irwin" class="open-popup-link"><div class="team-img"><img src="img/team-irwin.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Irwin Chee</h3>
          <h4>加密顾问</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#guy" class="open-popup-link"><div class="team-img"><img src="img/team-melamed.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Guy Melamed</h3>
          <h4>战略业务顾问(Zeex联合创始人兼首席执行官)</h4>
        </div>
      </div>
	</div>
    <div class="row">
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#sangjin" class="open-popup-link"><div class="team-img"><img src="img/team-sang-jin-hong.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Sangjin Hong</h3>
          <h4>区块链投资顾问(Chain Cabinet联合创始人兼首席执行官)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#chen" class="open-popup-link"><div class="team-img"><img src="img/team-chen-shun-teng.jpg" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Chen Shun Teng</h3>
          <h4>商业顾问(WWRC Holding Pte.Ltd，即“WWRC集团”集 团战略与公司事务经理)</h4>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 v-pad">
        <a href="#satoshi" class="open-popup-link"><div class="team-img"><img src="img/team-profile.png" alt=""></div></a>
        <br>
        <div class="team-title">
          <h3>Satoshi D.</h3>
          <h4>区块链专家，顾问(Dfital联合创始人，Dcapital创始人)</h4>
        </div>
      </div>
    </div>
    <div style="width:100%; background:rgba(255,255,255,0.2); height:1px; margin-top:60px;"></div>
    <section id="advisers" style="padding-bottom:60px;">
      <h1>顾问 (W-Foundation, HOOXI活动)</h1>
      <div class="h-line"></div>
      <h2>政府</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-im.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Im, Jongseong</h3>
            <h4>M韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-kwansuk.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Kwansuk</h3>
            <h4>韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Beongwook--National-Assembly-.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Beongwook</h3>
            <h4>韩国国会议员</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/MOCT--Oh,-Jangsup.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Oh, Jangsup</h3>
            <h4>前建设与运输部部长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Sanghui.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Sanghui</h3>
            <h4>前科技部部长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ma-Changhwan--MOCIT.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ma, Changwan</h3>
            <h4>科学与信息通信技术部规划与协调部（Planning and Coordination）副部长</h4>
          </div>
        </div>
      </div>
      <h2>法律专业领域及金融机构</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Ko,-Eunseok--Prosecutor.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Ko, Eunseok</h3>
            <h4>仁川地方检察厅富川支厅部长检察官</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Chadong---Hanyang-Univ.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Chadong</h3>
            <h4>汉阳大学法学系教授，首尔高等法院前法官</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/hong-kyeong-keun.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Kyung Keun</h3>
            <h4>TRUBEN投资集团董事长</h4>
          </div>
        </div>
      </div>
      <h2>媒体与娱乐</h2>
      <br>
      <div class="row" style="margin-bottom:60px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Song,-Jaejo---Korea-Economy-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Song, Jaejo</h3>
            <h4>韩国经济TV社长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-dongyul-seok.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Dongyul Seok</h3>
            <h4>公共关系顾问（《东亚日报》副主任）)</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Min,-Yongjae--YJM-Games.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Min, Yongjae</h3>
            <h4>YJM游戏董事长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Junhee--inet-TV.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Junhee</h3>
            <h4>Inet TV 会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-yoon-Ilsang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Yoon, Ilsang</h3>
            <h4>作曲家</h4>
          </div>
        </div>
      </div>
      <h2>公司和组织</h2>
      <br>
      <div class="row" style="margin-bottom:30px;">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim-Jongryang---Hanyang-Univ-Chairman.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Jongryang</h3>
            <h4>汉阳大学理事长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/team-cho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>CHO, DONGHYUK</h3>
            <h4>韩松化学会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi Jonggu - Easter Jet.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Jonggu</h3>
            <h4>易斯达航空社长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Peter-Kim--JIOS.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Peter</h3>
            <h4>JIOS Aerogel会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kwon,-Ryan---Jimei.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kwon, Ryan</h3>
            <h4>JIMEI韩国代表理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Park,-Jonghwa---KR-Industry.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Park, Jonghwa</h3>
            <h4>(株) KR 产业代表</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Moon,-Gyeonghwan---SCGO.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Moon, Gyeonghwan</h3>
            <h4>SCGO代表</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Lee,-Bonggyu---Hanyang.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Lee, Bonggyu</h3>
            <h4>(株) 汉阳专务理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Kim,-Dongman---Khan.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Kim, Dongman</h3>
            <h4>K-Khane会长</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Choi,-Youngeun---Mantoss-Power.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Choi, Youngeun</h3>
            <h4>Mantoss代表</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Hong,Nanggi---Kumho.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Hong, Nanggi</h3>
            <h4>锦湖建设常务理事</h4>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
          <div class="team-img adviser-img"><img src="img/Advisors/Chun,-Jonggi---Seegene-Medical-Foundation.jpg" alt=""></div>
          <br>
          <div class="team-title ">
            <h3>Chun, Jonggi</h3>
            <h4>Seegene医疗基金会理事长</h4>
          </div>
        </div>
      </div>
    </section>	  
    <div class="team-advisor">
	  <div class="row">
	  <div class="col-md-9 col-sm-9 col-xs-7 v-pad">
      <h3>请点击以下链接以了解更多有关160多位领导者和具有影响力人物为W-Foundation和HOOXI活动提供的建议和资讯</h3>
 	    <br>
 	    <h4>韩语: <a href="http://www.gcrfund.org/honorary_advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/honorary_advisors/</a></h4>
       <h4>英语: <a href="http://www.gcrfund.org/en/honorary-advisors/" style="color:#87b44c;" target="_blank">http://www.gcrfund.org/en/honorary-advisors/</a></h4>
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
    <h1>联系方式</h1>
    <div class="h-line"></div>
    <div style="text-align:center;">
      <h3 style="text-transform:none;">有关咨询事宜：请发送邮件至</h3>
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
      <div class="col-md-6 v-pad" style="text-align:center; padding-top:30px;"><h3 style="text-transform:none;">不要错过最新消息与更新。</h3></div>
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
    <span class="small-font" style="color:#333;">@ 2018 W GLOBAL INVESTMENT PTE. LTD. <br>版权所有</span>
    <br><br>
    <div style="color:#87b44c; font-weight:400;"><a href="#terms_service" class="open-popup-link">服务条款</a> &nbsp;&nbsp;I&nbsp;&nbsp; <a href="#policy" class="open-popup-link">隐私政策y</a></div>
</div>

<!---------- Participate form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h4>加入<b>W GREEN PAY</b></h4>
  <br><br>
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='https://global.us18.list-manage.com/subscribe/post?u=e1cce14547abb01d594305d38&amp;id=db0d55a049' method='post' accept-charset='UTF-8' name="mc-embedded-subscribe-form">
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type="hidden" name="type" value="participate" />
    <input type='text' class="input-style" name='FNAME' id='participate_name'  placeholder="姓名" />
    <br>
    <br>
    <input type='text' class="input-style" name='EMAIL' id='participate_email'  placeholder="邮箱" required/>
    <br>
    <br>
    <br>
    <div style="float:right;">
      <button type='submit' value='Submit' class="btn white-btn">提交</button>
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
  <h3>李旭 (WOOK LEE)</h3>
  <h4>W-Foundation主席</h4>
  <br><br><br>
  <p>W-Foundation的创始人兼主席，慈善家和企业家。建立全球网络，以实 现与政府，企业和机构的公私合作伙伴关系。与全球捐助者建立全球气 候难民基金，并将W-基金会发展成为一个有影响力的全球自然保护组织。</p>
  <br>
  <p>他毕业于汉阳大学，获得法学学士学位。</p>
</div>

<div id="youreelee" class="white-popup mfp-hide sans">
  <h3>YOUREE LEE博士</h3>
  <h4>W-Foundation的联合创始人兼首席执行官 (汉阳大学商学院客座教授)</h4>
  <br><br><br>
  <p>Youree Lee 博士是W-Foundation、W-HY R&D、Hooxi研究所的联合创 始人兼首席执行官，以及Hooxi Foundation (美国) 的首席运营官。</p>
  <br>
  <p>Lee博士是将区块链引入社会融资领域的先驱。 为了由W-Foundation和 韩国政府组织的全球自然保护运动“HOOXI”，她领导建立了区块链W Green Pay(WGP)。</p>
  <br>
  <p>Lee 博士在麦格理和三井住友银行拥有广泛的投资和企业银行业务经验， 范围涵盖基础设施和可再生能源项目融资及关系管理。 拥有梨花女子大 学国际商务博士、硕士学位及学士学位，目前在梨花女子大学和汉阳大 学教授商务、策略与金融。</p>
</div>

<div id="keon" class="white-popup mfp-hide sans">
  <h3>沈健浩(KEON HO SHIM)</h3>
  <h4>W-Foundation首席财务官</h4>
  <br><br><br>
  <p>在担任W-Foundation首席财务官之前，他曾担任美国银行美林交易银行 部门的公司销售主管。 Shim先生在银行，咨询和新业务开发方面拥有超 过23年的经验。 Shim先生还曾在Citi，Oliver Wyman 和 Samsung Corporation工作。</p>
  <br>
  <p>Shim先生拥有Stern School of Business, New York University, 的M.B.A. 和B.A.在乔治华The George Washington University的经济学和政治学。</p>
</div>

<div id="dongyul" class="white-popup mfp-hide sans">
  <h3>DONGYUL SEOK</h3>
  <h4>W-Foundation公共关系顾问（《东亚日报》副主任）</h4>
  <br><br><br>
  <p>
Dongyul Seok先生是韩国知名记者、国际新闻工作者联合会（ International Federation of Journalists）副主席，韩国新闻摄影协会（Korea Press Photography Association）主席，他拥有25年从业经验。同时任汉阳大学媒体与传播学（Media & Communication）兼职教授。</p>
</div>

<div id="seonggu" class="white-popup mfp-hide sans">
  <h3>SEONGGU RYU 博士</h3>
  <h4>W-Foundation顾问/首席公关官（韩国西京大学教授）</h4>
  <br><br><br>
  <p>Seonggu Ryu博士曾于三星公司担任战略规划、集团管理咨询与营销相关职务，拥有25年的相关工作经验。近期出任三星电子（Samsung Electronics）营销战略集团（Marketing Strategy Group）副总裁，并任西京大学工商管理学教授。</p>
</div>

<div id="chuljun" class="white-popup mfp-hide sans">
  <h3>CHULJUN KIM M.D.</h3>
  <h4>W-Foundation顾问/首席技术官（大田Wellness医院主席/医生）</h4>
  <br><br><br>
  <p>Chuljun Kim 博士是医生、企业家、投资人，拥有20余年相关领域从业经验。作为一家大型医院的CEO，领导了业界瞩目的医疗行业并购及投资活动。目前致力于为医疗行业拓展区块链技术，帮助医生与患者安全地存储病例记录，同时兼任韩国忠南大学康复医学助理教授。</p>
</div>

<div id="bruno" class="white-popup mfp-hide sans">
  <h3>吴征(BRUNO WU)</h3>
  <h4>W-Foundation策划管理顾问</h4>
  <br><br><br>
  <p>Bruno Wu来自中国的知名媒体大亨。 Sun Seven Stars Entertainment&Media Group Limited的创始人，联合主席兼首席执行官，该公司是中国最大的私营媒 体和投资公司之一。</p>
  <br>
  <p>吴先生还是特拉华州贸易控股公司(DBOT)的主要股东，该公司是美国证券交 易委员会(SEC)完全许可的第一个也是唯一一个基于区块链的替代交易系统。</p>
  <br>
  <p>Bruno Wu还是Sun Media Group的前任主席和盛大集团的前董事。Bruno Wu和 他的妻子(Yang Lan，中国最受欢迎的名人之一)获得2016福布斯中国富豪榜 ，估计财富价值10亿美元。</p>
</div>

<div id="chen" class="white-popup mfp-hide sans">
  <h3>CHEN SHUN TENG</h3>
  <h4>商业顾问(WWRC Holding Pte.Ltd，即“WWRC集团”集 团战略与公司事务经理)</h4>
  <br><br><br>
  <p>负责通过海外扩张，合资企业或合作伙伴关系以及WWRC集团的并购 实现未来增长。WWRC集团是一家泛亚化学品分销商，业务遍及16 个亚洲城市。在加入WWRC集团之前，他曾在花旗和华侨银行工作。 CHEN SHUN TENG拥有南洋理工大学一等荣誉工程学士学位(材料 工程)</p>
</div>

<div id="chris" class="white-popup mfp-hide sans">
  <h3>CHRIS LOW</h3>
  <h4>首席技术官</h4>
  <br><br><br>
  <p>Chris Low是一位成功的连续创业者，他创办了东南亚最大的社交游戏网 站之一Viwawa，联合创立了越南最大的移动POS机公司SoftPay Mobile。 Low先生毕业于新加坡国立大学计算机科学专业并拥有理学学士学位。</p>
</div>

<div id="jeremy" class="white-popup mfp-hide sans">
  <h3>JEREMY KHOO</h3>
  <h4>区块链技术和投资顾问与专家</h4>
  <br><br><br>
  <p>Jeremy Khoo是一家国际业务运营商、企业创始人及区块链企业家，已先后在3 家风险投资公司成功任过职。他目前现任MC Payment副总裁兼iFashion集团首 席执行官。iFashion是一家领先的区域零售业推动者集团企业。在他的领导下， iFashion和它的子公司已从风险投资方处经过多轮投资后获得B轮融资。 iFashion被MC Payment以2300万美元收购，而Jeremy将共同领导联合推动企业 于2018年在新交所上市。 Jeremy还是Novum Capital和Enblockr的合伙人兼首 席顾问，这两家公司助推并投资了许多知名公司，迄今为止已售出超过1亿美元 的代币。 Jeremy还是CRC Capital的执行合伙人，该公司投资早期区块链创新企 业。 Jeremy共同创立了零售区块链MegaX以及Crypto-E-Commerce商店 Megaxstore，该商店正在促进人们大规模使用加密货币。他还花时间建议和建 立了40多个令人兴奋的区块链项目，如Consentium，Spiking，Bountie，Viola ，Vanig和W Green Pay。他拥有新加坡南洋理工大学机械工程学士学位，并在 新加坡空军共和国军官调试期间获得了著名的荣誉之剑(Sword of Honour)。</p>
</div>

<div id="stas" class="white-popup mfp-hide sans">
  <h3>STAS OSKIN</h3>
  <h4>技术，研究与开发顾问 (Wings的联合创始人)</h4>
  <br><br><br>
  <p>凭借在信息技术工程，开发和管理企业产品方面超过15年的经验，Stas 共同创立了WINGS --- 一个成功的社区参与和智能合约促进平台，以及 以太网区块链中为数不多的DAPPS工作之一。</p>
  <br>
  <p>在担任现职之前，Stas担任BeeCom Israel的首席技术官，领导公司向开 源/ Linux平台的战略转变。他还参与了多个备受瞩目的软件项目，为 BeeContact，Dead Sea Labs和国防部等组织提供咨询服务，并且是以 色列第一个在线社交网络Comoona的联合创始人。</p>
</div>

<div id="sebastian" class="white-popup mfp-hide sans">
  <h3>SEBASTIAN STUPURAC</h3>
  <h4>区块链产品顾问(Wings的联合创始人)</h4>
  <br><br><br>
  <p>Sebastien共同创立了WINGS，这是一个成功的社区参与度和智能合约推 进平台，也是少数几个在以太坊区块链上运行DAPPS的公司之一。自 2013年以来，Sebastien收获了在分散式解决方案和区块链技术方面的丰 富经验。
</p>
</div>

<div id="seonik" class="white-popup mfp-hide sans">
  <h3>SEONIK JEON</h3>
  <h4>社区建设与营销顾问 (Factblock&Blockpost首席执行官，财经新闻首席战略官)</h4>
  <br><br><br>
  <p>Seonik Jeon担任区块链咨询服务平台FactBlock的首席执行官，聚焦区 块链的媒体The Blockpost的首席执行官，以及《财经新闻》的首席战略 官。曾任《财经新闻》局长，《财经新闻》洛杉矶记者，MPIO副总裁。 拥有韩国大学EMBA学位，加州州立大学长滩分校商业与信息系统学士学 位。</p>
</div>

<div id="sonic" class="white-popup mfp-hide sans">
  <h3>SONIC ZHANG</h3>
  <h4>加密投资，代币经济专家/技术顾问 (Ledger Z Capital创始人兼董事总经理)</h4>
  <br><br><br>
  <p>Sonic Zhang是一位企业家和投资者，也是 LedgerZ Capital(ledgerz.capital) 和ValueNet Capital(valuenet.capital)的创始人。Sonic聚焦投资区块链创业 企业，安全令牌产品(STO)和密码。其产品组合包括OmiseGo，Binance， PowerLedger，WAX，CoinPoker，Lympo，Bankorus， RobotCache，Celsius Network，tZERO，Tenzorum等。他是二十国区块链联盟(B20)的联合创始人 兼全球总监，该组织是一个国际非政府组织，专注于桥接全球区块链和加密社区 。 他还是ValueBank Group的联合创始人，该公司提供全球网络加密( Cointobe.com)交换，加密钱包(Coinwall.io / Coinwallpro.com)和ICO服务 。 他同时也是Murint Capital的联合创始人，主要业务是对技术和娱乐行业的风 险投资基金。 Sonic也是SoRelax的创始人，SoRelax是提供跨境营销与服务的全 球平台。 Sonic在悉尼大学拥有机电一体化的MPM和BE。</p>
</div>

<div id="irwin" class="white-popup mfp-hide sans">
  <h3>IRWIN CHEE</h3>
  <h4>加密顾问</h4>
  <br><br><br>
  <p>Irwin从事产品开发和营销工作，从事安全技术公司i-Sprint Innovations的工作。 他是Rimu Group的联合创始人，Rimu Group是一家投资于东南亚的风险投资基 金，与Wavemaker Partners，Ardent Capital，SMDV，SPH，Fenox和DeNA等 其他风险投资公司一起领导并共同投资。拥有4个收购和2个退出的投资组合。</p>
  <br>
  <p>Irwin是ICO的早期投资者，其中包括NXT，AntShares(现在的NEO)，Stratis 和Status。 Irwin现在是区块链咨询公司Novum Capital的管理顾问。 Irwin还是www.cryptofinn.net的撰稿人，负责关于加密货币的意见，并尽可能 地审查ICOS。
</p>
</div>

<div id="guy" class="white-popup mfp-hide sans">
  <h3>GUY MELAMED</h3>
  <h4>战略业务顾问(Zeex联合创始人兼首席执行官)</h4>
  <br><br><br>
  <p>Guy是一位产品策略家和不屈不挠的企业家。他作为其首席运营官和战略合作伙 伴关系负责人已经为主营商业车队和联网汽车的GreenRoad的成功做出了贡献。 他还创办并曾担任一个引人入胜的动画短信创业公司Toontok的首席执行官。作 为Ginger Software和Time to Know的产品和解决方案设计副总裁，Guy是数字 教室学习材料的提供者，他进一步深化了在这些动态领域的专业知识。 Guy还拥 有阿姆斯特丹大学通信硕士学位。</p>
</div>

<div id="sangjin" class="white-popup mfp-hide sans">
  <h3>SANGJIN HONG</h3>
  <h4>区块链投资顾问(Chain Cabinet联合创始人兼首席执行官)</h4>
  <br><br><br>
  <p>Sangjin是一位经验丰富的企业家、投资者和区块链顾问。他是Chain Cabinet的联合创始人兼首席执行官，Chain Cabinet是一家位于首尔和 新加坡的多维区块链公司，该公司设立并投资多种ICO项目。 Sangjin还 是Kstartup的合伙人，Kstartup是一家创业企业加速器，已帮助50多家 创业公司建立了自己的业务。作为前Microsoft Office产品经理和曾经的 Monitor Group管理顾问，他为团队贡献了20多年的经验技术和业务管 理经验。
</p>
</div>

<div id="kyung" class="white-popup mfp-hide sans">
  <h3>KYUNG KEON HONG</h3>
  <h4>W-Foundation总裁</h4>
  <br><br><br>
  <p>W基金会总裁、HOOXI Global和Truben Investment集团的董事长。Truben Investment是韩国规模最大的基金之一，主要投资海内外的基础设施资产和长期持有资产。Ktoto Co.，Ltd是Trueben Investment集团 旗下的子公司，是根据与韩国政府签订的独家许可协议运营的彩票发行人和分销商。Ktoto的年销售额约为5万亿韩元。</p>
</div>

<div id="alex" class="white-popup mfp-hide sans">
  <h3>ALEX SUNG-HYEOK HONG, Msci, MSc</h3>
  <h4>W-Foundation理事（HOOXI Global 董事兼 AZworth Trust首席执行官）</h4>
  <br><br><br>
  <p>在私募基金和科学、技术战略咨询方面拥有超过10年的经验。曾在伦敦帝国理工学院获得理论物理硕士学位，在伦敦大学学院获得自然科学哲学和历史硕士学位。 AZworth Trust既是Truben Investment的母公司，也是HOOXIGlobal的股东。目前，他在AZworth Trust担任首席执行官，负责管理各种投资组合和业务。</p>
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
