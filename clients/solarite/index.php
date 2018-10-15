<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Solarite</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="animate.css" rel="stylesheet" type="text/css" />
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

<style>

.white-popup {
	position: relative;
	background: #fff;
	width: auto;
	max-width: 555px;
	margin: 25px auto;
	padding: 25px;
}

#participateform {
	max-width: 420px !important;
	background:#222222;
}

#participateform h3 {font-size:18px; font-weight:700;}

#participateform .btn {
	width: 100% !important;
}

.mfp-bg {
	background: #333;
}
.mfp-close-btn-in .mfp-close {
	color: #333;
}
.mfp-close {
	font-size: 36px;
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

<!------------ Navigation start ------------>
<div id="header">
  <div class="container"><a href="#home">
    <div id="logo"></div>
    </a>
    <ul id="menu">
      <li><a href="#problem">Problems</a></li>
      <li><a href="#solarite">Solarite</a></li>
      <li><a href="#power">Proof of Power</a></li>
      <li><a href="#ecosystem">Token Ecosystem</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
      <li><a href="#team">Team</a></li>
	  <li><a href="#partners">Partners</a></li>
      <li><a href="#tokensale">Token Sale</a></li>
      <li><a href="#funds">Use of Funds</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#problem" onclick="closeSidebar(this)">Problem</a>
      <a href="#solarite" onclick="closeSidebar(this)">Solarite</a>
      <a href="#power" onclick="closeSidebar(this)">Proof of Power</a>
      <a href="#ecosystem" onclick="closeSidebar(this)">Token Ecosystem</a>
      <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
      <a href="#team" onclick="closeSidebar(this)">Team</a>
	  <a href="#partners" onclick="closeSidebar(this)">Partners</a>
      <a href="#tokensale" onclick="closeSidebar(this)">Token Sale</a>
      <a href="#funds" onclick="closeSidebar(this)">Use of Funds</a>
      <a href="#contact" onclick="closeSidebar(this)">Contact</a>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>
<div id="home">
  <div class="background-wrap">
    <video id="video-bg-elem" preload="auto" autoplay loop muted>
      <source src="img/main-720.mov" type="video/mp4">
      Video not supported </video>
  </div>
  <div class="content">
    <div class="home-container">
      <h1 class="wow fadeInUp">The First Truly Green,<br>Proof-of-Power Cryptocurrency</h1>
      <br>
      <br>
      <ul class="home-btn">
        <li class="wow fadeInLeft" data-wow-delay="0.9s"><a href="https://www.youtube.com/watch?v=akndVE8kH6Y&t=3s" class="btn video-pop-up">Watch Video</a></li>
        <!--<li class="wow fadeInRight" data-wow-delay="0.9s"><a href="#" target="_blank" class="btn white-btn">Whitepaper</a></li>-->
      </ul>
    </div>
  </div>
</div>
<!------------ Home banner end ------------>

<!------------ Participate start ------------>
<div class="part-col part-img wow fadeInLeft"></div>
<div class="part-col" data-wow-delay="0.3s">
  <h1 class="wow fadeInDown">PARTICIPATE IN THE TOKEN SALE NOW</h1>
  <br>
  <h2 class="wow fadeInDown">Fill in your information below to participate in our tokensale.</h2>
  <br>
  <div class="form-container wow fadeInUp">
	  <div class="participate-messages"></div>
	  <form id='participate' class="ajax-participate" action='mailer.php' method='post' accept-charset='UTF-8'>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
        <input type="hidden" name="type" value="participate" />
        <input type='text' class="input-style" name='name' id='participate_name'  placeholder="YOUR NAME" /><br><br>
        <input type='text' class="input-style" name='email' id='participate_email'  placeholder="EMAIL" /><br><br><br>
	    <button type='submit' value='Submit' class="btn" style="width:100%;">Buy Now</button>
	  </form>
  </div>
</div>
<div style="clear:both;"></div>
<!------------ Participate end ------------>

<!------------ Problems start ------------>
<section id="problem">
  <div class="container">
    <div class="row">
    <div class="col-md-4 col-sm-12 v-pad wow fadeInLeft">
      <div class="sec-title ">
        <h1>World's First<br><span style="font-weight:700;">Truly Green <br>Proof of Power </span><br>Cryptocurrency</h1>
      </div>
    </div>
	<div class="col-md-8 col-sm-12 v-pad wow fadeInUp" data-wow-delay="0.3s">
      <p>Solarite Technologies Pte. Ltd. is a company incorporated in the Republic of Singapore. The company is currently exploring a new blockchain concept: Proof of Power (PoP). Solarite Coins awarded to coin holders are incentivised to stake on a node of solar panels, generating both power and performing transactions on the Solarite Blockchain. Solarite will build solar farms, coupled with Solarite’s patented technology that enhances solar cell conversion efficiency to 28% efficiency. Solarite solar farms will be built in regions with at least 2000 hrs of sunshine, and equipped with nodes that power the Solarite Blockchain. Given the high electricity consumption of Proof of Work (PoW) by cryptocurrencies, such as Bitcoin, which has already overtaken electricity consumption in countries such as Ireland*, it is not viable as a sustainable model for our environment. Solarite aims to be the first truly green cryptocurrency that also generates sustainable renewable energy, rather than consuming energy resources.</p>
	  <br>
	  <p>Solarite Technologies Group is formed to address two exciting challenges facing the renewable energy industry in particularly the Solar Industry.</p>
	  <ul>
		<li>The low conversion efficiency and low reliability of conventional solar panels</li>
		<li>The inefficiency and opportunities cost in centralised power distribution</li>
	  </ul>
	  <br>
	  <p>Addressing the low conversion efficiency and low reliability of conventional solar panels, Solarite Technologies Group filed a patent on 24th May, 2017 under patent no.GB1708275-1. This Solarite Technology converts solar energy to electricity more efficiently than conventional solar panels by using concentration technologies as well as high efficiency solar cell. While higher temperature reduces conversion efficiency of solar cell, the company patents a set of innovative solutions to overcome the extreme heat that reduces conversion efficiency. These solutions includes deploying deep technologies in the solar cell level, a vacuum that acts as a heat buffer and an specially engineered Infrared Reflective coating that lowers the effect of harmful IR Radiation. Solarite has the advantages of lower capital expenditure cost and shorter return on investment.</p>
	  <br>
	  <p>With regards to inefficiency and opportunities cost in centralised power distribution, we are aware that as more countries liberalise their energy markets, consumers still consume power from centralised grids managed by corporate grid operators. Centralisation means higher cost for consumers and a lag in innovation and opportunities cost to consumers. Solarite Technologies Group’s PoP blockchain concept enables the decentralisation of power production and bring forth the power of choice to consumers. Solarite Coins given to coin holders are incentivised to stake on a node of solar panels, generating both power and performing transactions on the Solarite Blockchain. Solarite will look to build solar farms in collaboration with venture partners. These Solarite solar farms will be built along the sun belt region with the most sunshine (high isolation). These farms will be equipped with nodes that power the Solarite Blockchain.</p>
	  <br>
	  <p>The proof of power concept combines the advantages of proof of work and proof of stake models to form a unique hybrid model, generating both value and efficiencies for stakeholders. The algorithm rewards participants who solve cryptographic puzzles in order to validate transactions and create new blocks (i.e. mining).</p>
	  <br>
	  <p>Solarite proof of power concept is the first truly green cryptocurrency that generates sustainable energy and opportunitiesfor stakeholders.</p>
	</div>
    </div>
  <!--<div class="row">
	<div class="col-md-4 col-sm-12 v-pad wow fadeInUp" data-wow-delay="0.3s"></div>
    <div class="col-md-4 col-sm-12 v-pad wow fadeInUp" data-wow-delay="0.3s">
      <table>
        <tr>
        <td><div class="problem-num">1</div></td>
        <td style="padding-left:15px;"><h2>High temperatures cause low efficiency</h2></td>
        </tr>
      </table>
      <br><br>
      <ul>
        <li><p>By using concentrated sunlight, it produces high temperature on the solar module.</p></li>
        <li><p>Eg, LCPV: Temperature could reach as high as 150* celsius, which results in solar cell conversion efficiency to reduce tremendously. 1 degree raise in temperature on the solar cell reduces conversion efficiency by 0.5%.</p></li>
        <li><p>Increased effectiveness but low efficiency.</p></li>
      </ul>
    </div>
    <div class="col-md-4 col-sm-12 v-pad wow fadeInUp" data-wow-delay="0.6s">
      <table>
        <tr>
        <td><div class="problem-num">2</div></td>
        <td style="padding-left:15px;"><h2>Low efficiency results in long breakeven period
</h2></td>
        </tr>
      </table>
      <br><br>
      <ul>
        <li><p>Solar panels have long breakeven period of 4 to 10 years, with efficiency in the range of 8 to 17 percent (comparatively low).</p></li>
        <li><p>Solar panels have low reliability in harsh environment, hence shortening usable lifespan of solar module.</p></li>
        <li><p>Less reliable solar module produces negative net clean energy, resulting in more harm than good for the environment.</p></li>
      </ul>
    </div>
    </div>-->
	
  </div>
</section>
<!------------ Problems end ------------>

<!------------ Solarite start ------------>
<section id="solarite">
  <div class="container">
    <h1>What is <b>Solarite</b></h1>
    <div style="width:60px; height:3px; background:#333; margin-top:20px; margin-bottom:45px;"></div>
	<img src="img/graphic-solarite.png" alt="">
  </div>
</section>
<div class="solution-img wow fadeInRight"></div>
<div class="solarite-l">
  <h1 class="wow fadeInUp"><b>Solarite</b> Concentrated Solar patent solutions.</h1>
  <br>
  <h2 class="wow fadeInUp">Solar energy solution that achieves the high efficiency despite high temperatures.</h2>
  <br>
  <ul class="wow fadeInUp">
    <li><p>Increases solar to electricity conversion efficiency by between 25% to 32%.</p></li>
    <li><p>Enables a shorter investment breakeven period of 3 years.</p></li>
    <li><p>Low Concentrated Photovoltaic (LCPV) concentrates sunlight at a lower concentration ratio of less than 100x using single or dual axis solar tracker with c-silicon or other solar cell.</p></li>
    <li><p>Patented Solution: filed patent for Solarite – High efficiency Solar Module – Patent No. GB1708275.1, on 24th May 2017.</p></li>
  </ul>
  <br><br>
  <h3 class="wow fadeInUp">CONVENTIONAL SOLAR PANELS VS SOLARITE</h3>
  <br><br><br>
  <table style="width:100%;" class="wow fadeInUp" data-wow-delay="0.3s">
    <tr>
      <th></th>
      <th>Conventional PV</th>
      <th>Solarite</th>
    </tr>
    <tr>
      <td>Conversion Efficiency</td>
      <td style="color:#999;">8-17%</td>
      <td style="color:#999;">25 - 32%</td>
    </tr>
    <tr>
      <td>Innestment break even period</td>
      <td style="color:#999;">4-10 Years</td>
      <td style="color:#999;">3.5 Years</td>
    </tr>
    <tr>
      <td>Short life span</td>
      <td style="color:#999;">7-15 years</td>
      <td style="color:#999;">20 - 25 years</td>
    </tr>
  </table>
</div>
<div style="clear:both;"></div>
<!------------ Solarite end ------------>

<!------------ Proof of Power start ------------>
<section id="power">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 v-pad wow fadeInUp" >
		  <div class="sec-title"><h1>Solarite Blockchain:<br><b>Proof-of-Power</b> (PoP)</h1></div>
        <br><br>
		<div style="padding-left:15px;">
        <h2>Solarite blockchain employs the new Proof-of-Power (PoP) concept: Rewarding people who produce energy!</h2>
	    <br><br>
		<h3 style="text-transform: uppercase;">1 Solarite Masternode = 8 Solarite Panels</h3>
        <br><br>
		<p><b>PROCESS:</b></p>
		<br><br>
		<ol>
		  <li><p>Solarite Masternodes perform transactions and their verifications</p></li>	
		  <li><p>Stakeholders stake coins on Solarite Masternodes</p></li>	
		  <li><p>The higher the stake, the higher the authority the stakeholder has in winning a transaction’s verification</p></li>	
		  <li><p>Algorithm of difficulty increases in positive correlation to the amount of electricity generated</p></li>	
		</ol>
		<br>
        <p>The first solar farm built by Solarite Technologies will be the basis for the Solarite Blockchain. Subsequent solar farms and installations built by Solarite Technologies will leverage on the blockchain for transaction verifications, which will result in a massive use case for its Solarite tokens. Private solar farms will be able to leverage on the Solarite blockchain to participate in its solar energy ecosystem.</p>
        <br>
        <p>This Proof-of-Power (PoP) concept uses less electricity to mine Solarite coins in comparison to mining bitcoins. The excess electricity generated by Solarite’s solar farm will be sold back to the grid and generate value for token holders.</p>
		</div>
      </div>
      <div class="col-md-6 col-sm-6 v-pad" style="text-align: center;"><img src="img/graphic-pop.png" class="wow fadeInRight" alt=""></div>
    </div>
  </div>
</section>
<!------------ Proof of Power end ------------>

<!------------ Token ecosystem start ------------>
<div id="ecosystem" class="wow fadeIn" data-wow-delay="0.6s">
  <img src="img/graphic-ecosystem.png" alt="" class="wow fadeIn" data-wow-delay="1.2s">
</div>
<div class="ecosystem-col wow fadeInLeft" data-wow-delay="0.3s">
  <img src="img/graphic-solarite-marketplace.png" alt="">
  <br><br><br>
  <h3>SOLARITE MARKETPLACE</h3>
  <br>
  <p>Solar farms built and managed by Solarite Technologies will be supplying electricity transmission directly or through a network of retailers in exchange for the receipt of Solarite coins. Facilitating trading liquidity on exchanges with the support of other cryptocurrencies.</p>
</div>
<div class="ecosystem-col wow fadeInLeft" style="background:#fff;">
  <img src="img/graphic-solarite-coin-holders.png" alt="">
  <br><br><br>
  <h3>SOLARITE COIN HOLDERS</h3>
  <br>
  <p>Crypto-savvy consumers who stake their Solarite coins with Solarite
</p>
</div>
<div class="ecosystem-col wow fadeInRight">
  <img src="img/graphic-consumers.png" alt="">
  <br><br><br>
  <h3>CONSUMERS</h3>
  <br>
  <p>Day-to-day electricity consumers who wish to purchase the electricity generated by Solarite’s solar farms and attain cost savings in the electricity bills through its breakthrough solar energy solutions.</p>
</div>
<div class="ecosystem-col wow fadeInRight" data-wow-delay="0.3s" style="background:#fff;">
  <img src="img/graphic-resellers.png" alt="">
  <br><br><br>
  <h3>RESELLERS</h3>
  <br>
  <p>Third party resellers of Solarite’s electricity supply who can bypass potential transmission hurdles between Solarite and end consumers due to geographical or regulatory factors. This includes private solar farm owners leveraging on the Solarite Proof-of-Power Blockchain.</p>
</div>
<div style="clear:both;"></div>
<!------------ Token ecosystem end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
  <div class="container">
    <h1 class="wow fadeInUp">Roadmap</h1>
    <br><br><br><br><br>
    <div class="flex-container wow fadeInUp" data-wow-delay="0.3s">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="roadmap-col">
              <h2><b>2018</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2018</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
				  <li>Equity Fund Raising Events (Round 1)</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2018</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
				  <li>Token Sale</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2018</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Research and Development on PoP</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
          <li>
            <div class="roadmap-col">
              <h2><b>2019</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Research and Development on PoP</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2019</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Testing</li>
				  <li>Mass Production of Solarite Panels</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2019</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Mass Production of Solarite Panels</li>
				  <li>Building of First Solar Farm</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2019</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of First Solar Farm</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
		  <li>
            <div class="roadmap-col">
              <h2><b>2020</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2020</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2020</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2020</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
		  <li>
            <div class="roadmap-col">
              <h2><b>2021</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2021</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2021</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col">
              <h2><b>2021</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Fund Raising</p>
			  <ul>
				  <li>Equity Fund Raising Events (Round 2)</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="flex-container2 wow fadeInUp">
      <div class="mobile-slider">
        <ul class="slides">
          <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2018</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2018</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
				  <li>Equity Fund Raising Events (Round 1)</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
          </li>
          <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2018</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Fund Raising</p>
			  <ul>
				  <li>Private Placements</li>
				  <li>Token Sale</li>
			  </ul>
			  <br><br>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Tokens Issued</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2018</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Research and Development on PoP</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
          <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2019</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Development</li>
				  <li>Prototype Testing</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Research and Development on PoP</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2019</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Prototype Testing</li>
				  <li>Mass Production of Solarite Panels</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
			  </ul>
            </div>
			<div style="clear:both;"></div>
          </li>
          <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2019</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Mass Production of Solarite Panels</li>
				  <li>Building of First Solar Farm</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2019</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
              <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of First Solar Farm</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Integration of PoP with Solarite</li>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
	      <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2020</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2020</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
		  <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2020</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2020</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
		  <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2021</b> Q1</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2021</b> Q2</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
		  <li>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2021</b> Q3</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Solarite Business Development</p>
			  <ul>
				  <li>Building of Subsequent Solar Farms</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div class="roadmap-col roadmap-mobile">
              <h2><b>2021</b> Q4</h2>
              <div class="roadmap-dot"></div>
              <div class="roadmap-line"></div>
			  <p>Fund Raising</p>
			  <ul>
				  <li>Equity Fund Raising Events (Round 2)</li>
			  </ul>
			  <br><br>
			  <p>Blockchain Capabilities</p>
			  <ul>
				  <li>Token Swap and PoP rollout</li>
			  </ul>
            </div>
            <div style="clear:both;"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!------------ Roadmap end ------------>

<!------------ Team start ------------>
<section id="team" style="background:#f5f5f5;">
  <div class="container">
    <div class="sec-title"><h1>The Solarite <b>Team</b></h1></div>   
    <br><br><br>
    <div class="row wow fadeInUp" style="text-align:center;">
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#terrence" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-terence.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">TERRENCE ONG</p>
        <p>CEO, Founder</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
		<a href="#julie" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-julie.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">JULIE ONG</p>
        <p>Finance/HR, Co-founder</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#andy" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-andy.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">ANDY ANG</p>
        <p>BD and Technical Director</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#haryanto" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">HARYANTO SOEMITO</p>
        <p>CEO Solarite Investment Capital</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#chau" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-chautran.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">CHAU TRAN</p>
        <p>Head of Advance Automation and Robotics</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#avishek" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-avishek.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">Dr. AVISHEK KUMAR</p>
        <p>CEO, Sunkonnect Pte. Ltd</p>
      </div>
    </div>
    <div class="row wow fadeInUp" style="text-align:center;">
      <div class="col-md-2 vol-sm-4 team-blank">
      </div>
      <div class="col-md-2 vol-sm-4 team-blank">
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#jovan" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-joven.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">JOVAN CHIEW</p>
        <p>Head of Security Software Technology</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#calvin" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-calvin.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">CALVIN ONG</p>
        <p>Business Development Manager</p>
      </div>
    </div>
	<br><br><br>
	<div class="sec-title"><h1>Top Tier <b>Advisors</b></h1></div>   
    <br><br><br>
	<div class="row wow fadeInUp" style="text-align:center;">
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#peter" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">PETER LIM</p>
        <p>Advisor</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#chris" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-chrislow.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">CHRIS LOW</p>
        <p>Advisor</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#kineret" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-kineret.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">KINERET KARIN</p>
        <p>Advisor</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#yoav" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-yoav.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">YOAV ELGRICHI</p>
        <p>Advisor</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#vijay" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team-vijay.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">MR. VIJAY SIRSE</p>
        <p>Advisor</p>
      </div>
      <div class="col-md-2 vol-sm-4 col-xs-6 v-pad">
        <a href="#thomason" class="open-popup-link"><div class="team-circle"><div class="team-img"><img src="img/team.jpg" alt=""></div></div></a>
        <br>
        <p style="color:#666666; font-weight:700;">THOMASON CHAN</p>
        <p>Advisor</p>
      </div>
    </div>
  </div>
</section>
<!------------ Team end ------------>
	
<!------------ Partners start ------------>
<section id="partners" style="border-bottom: 1px solid #eeeeee;">
  <div class="container">
	<div class="sec-title"><h1><b>PARTNERS</b> & ACCELERATORS PROGRAM</h1></div>   
    <br><br><br>
	<div class="row">
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		<a href="#shell" class="open-popup-link"><img src="img/partner-shell.jpg" alt=""></a>
	  </div>
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		  <a href="#astar" class="open-popup-link"><img src="img/partner-astar.jpg" alt=""></a>
	  </div>
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		  <a href="#reddot" class="open-popup-link"><img src="img/partner-reddotpower.jpg" alt=""></a>
	  </div>
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		  <a href="#impactech" class="open-popup-link"><img src="img/partner-impactech.jpg" alt=""></a>
	  </div>
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		  <a href="#startupo" class="open-popup-link"><img src="img/partner-startupo.jpg" alt=""></a>
	  </div>
	  <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
		  <a href="#enrupt" class="open-popup-link"><img src="img/partner-enrupt.jpg" alt=""></a>
	  </div>
	</div>
  </div>
</section>
<!------------ Partners end ------------>

<!------------ Tokensale start ------------>
<div id="tokensale" class="wow fadeInUp">
  <h1>Token <b>Sale</b></h1>
  <div style="width:60px; height:3px; background:#333; margin-top:20px; margin-bottom:45px;"></div>
  <p>To incentivise the team, Solarite will be keeping 40% of all Solarite Tokens generated, or a maximum of 224,000,000 Solarite Tokens, whichever is lower, generated at the end of the Token Generation Event (TGE).</p>
  <br>
  <p>Tokens not sold in the sale pool will be burnt. The total supply will be capped at 560,000,000 Solarite Tokens after the token sale. Solarite tokens will not be minable until the proof of power private blockchain is live, of which we will be perform a token swap for all Solarite Token holders.</p>
  <br>
  <p>Participation in the Public Sale shall be limited to natural persons, and each wallet which has been cleared pursuant to Know-Your-Customer (KYC) checks. KYC checks include proof of identity and residence.</p>
</div>
<div class="token-table">
  <table style="width:100%;" class="wow fadeInUp">
    <tr>
      <td class="token-title">Token Name</td>
      <td class="token-info">SOLARITE TOKENS</td>
    </tr>
    <tr>
      <td class="token-title">TOKEN TYPE</td>
      <td class="token-info">ERC20</td>
    </tr>
    <tr>
      <td class="token-title">TOKEN SUPPLY</td>
      <td class="token-info">500,000,000</td>
    </tr>
    <tr>
      <td class="token-title">TOKEN FOR SALE</td>
      <td class="token-info">300,000,000</td>
    </tr>
    <tr>
      <td class="token-title">CURRENCY ACCEPTED</td>
      <td class="token-info">ETH / BTC / USD</td>
    </tr>
	<tr>
      <td class="token-title">SOLARITE PRICE</td>
      <td class="token-info">1 SOLARITE COIN = USD$0.10</td>
    </tr>
    <tr>
      <td class="token-title">PRIVATE SALES PERIOD</td>
      <td class="token-info">Q2 2018</td>
    </tr>
    <tr>
      <td class="token-title">PUBLIC SALES PERIOD</td>
      <td class="token-info">Q3 2018</td>
    </tr>
  </table>
</div>
<div style="clear:both;"></div>
<!------------ Tokensale end ------------>

<!------------ Usage of Funds start ------------>
<div id="funds" class="wow fadeInRight">
  <h1><b>Usage</b> of Funds</h1>
  <div style="width:60px; height:3px; background:#333; margin-top:20px; margin-bottom:45px;"></div>
  <p>Majority of the proceeds will be used for the building of a utility scale solar farm for the proof of power concept. Equipped with smart meters and micro grid infrastructure leveraging on blockchain technology.</p>
  <br>
  <p>Solarite proprietary Proof of Power blockchain will be developed as we raise the funds from this TGE, once this private blockchain is live, we will be conducting a token swap for all Solarite Token holders to convert their ERC20 token to the Proof of Power blockchain.</p>
</div>
<div class="funds-img wow fadeInLeft"><img src="img/graphic-usage-of-funds.png" alt=""></div>
<!------------ Usage of Funds end ------------>

<!------------ Contact start ------------>
<div id="contact">
  <h1 class="wow fadeInUp"><b>Contact</b> Us</h1>
  <div class="wow fadeInUp" style="width:60px; height:3px; background:#000; margin-top:20px; margin-bottom:45px; display: inline-block;"></div>
  <h2 class="wow fadeInUp" style="text-transform: uppercase; color:#999;">3 Gambar Prescent<br>Nordcom One, #08-01,<br>Singapore 757088</h2>
  <p class="wow fadeInUp"><a href="https://www.google.com/maps/place/Nordcom+I/@1.444324,103.8120114,17z/data=!3m1!4b1!4m5!3m4!1s0x31da137bc6f2d4fb:0x7ad5a0bc610fae91!8m2!3d1.4443186!4d103.8142054" target="_blank" style="color:#fff;">View on Google Maps</a></p>
  <br>
  <h2 class="wow fadeInUp"><a href="mailto:investors@solarite-technology.com" style="color:#fff;" target="_blank">investors@solarite-technology.com</a></h2>
</div>
<div class="contact-form ">
  <div class="form-container wow fadeInUp">
	  <div class="contact-messages"></div>
	  <form id='contactus' class="ajax-contact" action='mailer.php' method='post' accept-charset='UTF-8'>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
        <input type="hidden" name="type" value="contact" />
        <input type='text' class="input-style" name='name' id='contact_name' placeholder="YOUR NAME" /><br><br>
        <input type='text' class="input-style" name='email' id='contact_email' placeholder="EMAIL" /><br><br>
        <input type='text' class="input-style" name='phone' id='contact_phone' placeholder="CONTACT NUMBER" /><br><br>
        <textarea class="input-style" name='message' id='contact_message' placeholder="MESSAGE"></textarea><br><br><br>
	  <button type='submit' value='Submit' class="btn blk-btn" style="width:100%;">Send Message</button>
	  </form>
  </div>
</div>
<div style="clear:both;"></div>
<!------------ Contact end ------------>

<section style="background:#007eff; padding:60px 0;">
  <div class="container">
    <ul class="social">
        <li><a href="https://www.facebook.com/solarite.singapore.50" target="_blank"><div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
        <li><a href="https://www.instagram.com/solaritesg/" target="_blank"><div class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
        <li><a href="https://twitter.com/SolariteSG" target="_blank"><div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
        <li><a href="https://t.me/solariteSG" target="_blank"><div class="social-icon"><i class="fa fa-telegram" aria-hidden="true"></i></div></a></li>
        <li><a href="https://medium.com/@solaritesingapore" target="_blank"><div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div></a></li>
    </ul>
    <div class="copyright">© 2018 Solarite. ALl Rights Reserved.</div>
    <div style="clear: both;"></div>
  </div>
</section>
	
<!---------- Team popup start------------>

<div id="terrence" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Terrence</b> Ong</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> CEO, Founder</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Inventor, Serial Entrepreneur, Founder of 7 Corporation PL, Laser Logic International PL, Alpha Digital (Holdings) PL, Solarite (Holdings) Pte. Ltd. & Solarite Ltd.</p>  
  <br>
  <p>Diploma in Mechanical & Manufacturing Technology</p>
  <p>Diploma in Business Administration</p>
  </div>
</div>	
	
<div id="julie" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Julie</b> Ong</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Finance/HR, Co-founder</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Her background is business management , Julie has many years of experience in production planning in the semiconductor and disk drive industry.</p>  
  <br>
  <p>A serial entrepreneur for more than 15 years . Her expertise is in the area of chemical and ultra violet related products mainly in the optical media industry.
</p>
  <br>
  <p>She also co-founded 7 Corporation Pte Ltd , Alpha Digital Holdings , Laser Logic (International) PL & Solarite Ltd.</p>
  </div>
</div>
	
<div id="andy" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Andy</b> Ang</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> BD and Technical Director</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>20 years of industry experience in Solar PV, Solar powered products</p>  
  <br>
  <p>On grid /off grid systems and Design, calculation, integration, engineering, commissioning and maintenance of PV systems.</p>
  </div>
</div>

<div id="jovan" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Jovan</b> Chiew</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Head of Security Software Technology</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>CTO - Triumph-Secure Singapore Pte. Ltd.</p>  
  <p>20 year IT/Security Expertise</p>
  </div>
</div>

<div id="chau" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Chau</b> Tran</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Head of Advance Automation and Robotics</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Over 25 years in semiconductor industry and High Tech related.</p>
  <p>Positions in the industry:</p>
  <p>VP of Service at Global equipment services</p>  
  <p>President at Vector Fab</p>
  <p>GM-Vietnam at AG</p>
  <p>VP of Business Development.</p>
  </div>
</div>
	
<div id="avishek" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1>Dr. <b>Avishek</b> Kumar</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> CEO, Sunkonnect Pte. Ltd</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Dr Avishek holds an MS degree in Microelectronics from Technical University of Munich, Germany and a doctorate degree (PhD) in Electrical and Computer Engineering from National University of Singapore with specialization in different solar cell technologies. He has more than 10 years of work experience in the field of solar process and manufacturing. He has worked extensively with leading solar research institutes of the world and tier one module manufacturing companies. He has completed several high technology transfer projects and brings with him a vast knowledge of diverse solar technologies. Dr Kumar has a track record of leading diverse team and handling complex projects. Dr Kumar has co-authored more than 30 research papers in top tier journals and conferences.His key research interests include advanced manufacturing, state of art PV system design and battery storage technologies.</p>
  </div>
</div>
	
<div id="calvin" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Calvin</b> Ong</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Business Development Manager</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Co-Founder - 7 Corporation Pte. Ltd.</p>
  <p>15 years in Industrial Sales & 12 years in Civil Engineering</p>
  <p>Diploma In Civil Engineering</p>  
  </div>
</div>
	
<div id="halbame" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Hal</b> Bame</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Advisor</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Hal has over 15 yrs of games and digital experience, having lived and worked across the globe.  Hal is a co-founder with iProdoos and SmartChain Media, a new Blockchain-based streaming video platform and advises several US & Asia-based companies incorporating Blockchain technology.  He previously held senior management roles for Sony (PlayStation), expanding / managing the business in Eastern Europe and Codemasters, overseeing international / emerging markets, managing and expanding game franchises such as Formula One. Hal also worked with ESL (the world’s leading esports company), as Managing Director for Southeast Asia, Hong Kong, Taiwan and Macau, as well as co-founder for Nemesis, a casual games esports platform, focusing on Southeast Asia and other emerging markets.</p>
  </div>
</div>
	
<div id="chris" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Chris</b> Low</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Advisor</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>A seasoned technoprenuer. Was successful in Pendulab his first start-up of a web based collaboration solution, that became part of acquisition of a leading private equity firm in US. Had built incredible sales enterprise garnering worldwide customers, many being clientele in the Fortune 500. Founder of Viwawa, a SE Asia largest multiplayer game platform and SoftPay Mobile the largest Mobile Point of Sales company in Vietnam. Currently , serving as Global Head of Sales and Business Dev. Director of MC Payment , SE Asia leading fintech company.</p>
  </div>
</div>
	
<div id="kineret" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Kineret</b> Karin</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Advisor</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>She is a serial entrepreneur who successfully founded, managed and sold a company to Rocket Internet. She has over 20 years of business and leadership experience in database analysis, market research and big data. She is a reputable global thought leader in the social tech domain and holds an MA in Statistics.</p>
  </div>
</div>
	
	
<div id="yoav" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Yoav</b> Elgrichi</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Advisor</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>He is a serial entrepreneur that successfully built and sold several companies, among his achievements, selling his startup  to Rocket Internet and plays a key role in listing a company in the SGX. A mentor  at  the Singapore  Management University,  inventor of patents in the NFC and wearable devices domains.  Yoav holds an MBA.</p>
  </div>
</div>
	
<div id="vijay" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1>Mr. <b>Vijay </b>Sirse</h1>
    <h2><i class="fa fa-linkedin-square" aria-hidden="true"></i> Advisor</h2>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Mr. Vijay Sirse is not only an entrepreneur, innovator and investor, he also wears the demanding hat as Founder, Chairman and CEO of vTrium Energy Group (www.vtriumenergy.com), an Integrated Electricity Management Solutions specialist. The first company in Singapore to implement innovative Organic Photovoltaic solar projects in a tropical urban environment, Mr. Sirse surmised - “In all that we do, we embrace our core values of Integrity, Honesty and Innovation, for they are a daily reminder that placing customers first is something that is non-negotiable”</p>
  </div>
</div>


<!---------- Team popup end------------>
	
<!---------- Partners popup start------------>

<div id="shell" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Shell</b></h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Shell is looking to mentor energy start-ups that have actionable ideas, technologies and innovations. Shell #IdeaRefinery, a programme by Shell, ImpacTech and NUS Enterprise, is a 20-week accelerator programme focused on developing early stage energy-related startups into full-fledged startups that can raise capital and scale into successful businesses.</p>
  </div>
</div>

<div id="astar" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>A*STAR's Institute of Materials Research and Engineering (IMRE)</b></h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>A*STAR's Institute of Materials Research and Engineering (IMRE) is a research institute with a
unique combination of R&D capabilities, commercial partnerships and strategic alliances. Comprehensive materials-related solutions for global and local partners are developed here at IMRE. IMRE has the expertise in materials research and engineering, ranging from consultancy and testing services to joint research and development programmes, to serve the diverse needs
of industry.
</p>
  </div>
</div>
	
<div id="reddot" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Red Dot Power Pte Ltd (RDP)</b></h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Red Dot Power Pte Ltd (RDP) is a homegrown Singapore energy solutions provider. A pioneer and leading player in the National Electricity Market of Singapore (NEMS), Red Dot Power has been at the forefront of the electricity retail scene since the entry of independent electricity retailers. Primarily offering electricity retail services, we also offer Demand Management and Interruptible Load solutions, efficient grid and off-grid options, storage applications, urban
energy solutions and solar projects.
</p>
  </div>
</div>
	
<div id="impactech" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	  <h1><b>ImpacTech</b></h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>ImpacTech is a business consulting company that empowers impact driven technology companies and startups by offering customized acceleration programs and unique practical workshops. The company’s HQ is in Singapore and is operating in Thailand and Japan. In 2018 ImpacTech will expand to other countries in Asia.
</p>
  </div>
</div>
	
<div id="startupo" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	<h1><b>Startup-O</b</h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>Startup-O is a Singapore-based platform that curates promising startups from any location and provides them with Strategic Seed Capital & connects with Global Experts fast. The platform is created by entrepreneurs for entrepreneurs who believe in going the extra mile. Startup-O works in collaboration with Javelin Wealth Management & IP Bridge. Solarite is selected into the cohort among 660 startups submission from 32 countries in Startup-O ‘Fasttrack’ Season 5.</p>
  </div>
</div>
	
<div id="enrupt" class="white-popup team-popup mfp-hide sans">
  <div class="popup-title">
	  <h1><b>EnRupt</b></h1>
  </div>
  <br><br>
  <div style="padding-left:25px;">
  <p>EnRupt is an energy innovation company with the vision to build energy companies of the future based on clean, decentralised and digital solutions. Enrupt is on the mission to create partnerships between startups and corporations where new ideas thrive and get executed.</p>
  </div>
</div>
	
<!---------- Partners popup end------------>

<!-- Add animated text -->
<script src="js/wow.js"></script>

<script>
new WOW().init();
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
    $("ul#menu")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a:hover")[addRemClass]('bgChange');
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
            animation: 'slide',
            controlsContainer: '.flexslider',
			slideshowSpeed: 5000
        });
    });
	
	$(document).ready(function () {
        $('.mobile-slider').flexslider({
            animation: 'slide',
            controlsContainer: '.mobile-slider',
			slideshowSpeed: 5000
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
                    $(notifyMessages).text("Thank you for signing up for the Solarite token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
                    $('#participate_name').val('');
                    $('#participate_email').val('');
                });
        });

        // Contact Us
        var contactForm = $('.ajax-contact');

        // Get the messages div.
        var contactMessages = $('.contact-messages');

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
                    $('#contact_name').val('');
                    $('#contact_email').val('');                    
                    $('#contact_message').val('');
					$('#contact_position').val('');
                })
                .fail(function(data) {
                    // Make sure that the contactMessages div has the 'error' class.
                    $(contactMessages).removeClass('alert alert-info');
                    $(contactMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(contactMessages).text(data.responseText);
                    } else {
                        $(contactMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });
    });
</script>

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>

</body>
</html>