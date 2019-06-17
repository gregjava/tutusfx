<template>
  <v-app style="background: #004300; color: #ffffff; background: -webkit-linear-gradient(to right, #004300, #7B43FF, #004300); background: -moz-linear-gradient(to right, #004300, #7B43FF, #004300); background: -o-linear-gradient(to right, #004300, #7B43FF, #004300); background: linear-gradient(to right, #004300, #7B43FF, #004300); display: inline-block; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin: 0; padding: 0.1%; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; -o-font-smoothing: grayscale;">
    <v-subheader class="ratebar">
      <marquee
        scrolldelay="1s"
        scrollamount="3"
      >
        <v-flex>
          <span 
            v-for="item in currencyRateData" 
            :key="item.id"
          > {{ item.name }}:
            <span
              v-if="item.trend==='positiverate'"
              class="positiverate"
            > {{ item.rate }} </span>
            <span 
              v-else-if="item.trend==='negativerate'" 
              class="negativerate"
            > {{ item.rate }} </span>
            <span 
              v-else 
              class="neutralrate"
            > {{ item.rate }} </span> &nbsp; &nbsp;
          </span>
        </v-flex>
      </marquee>
    </v-subheader>

    <div class="row">
      <v-navigation-drawer
        style="z-index: 1000; background:#004300" 
        fixed 
        v-model="drawer" 
        right 
        dark
        floating
        persistent
        mobile-break-point="991"
        width="260"
        app
      >
        <v-list>
          <v-list-group
            v-for="item in subitems"
            :key="item.name"
            v-model="item.active"
            :prepend-icon="item.icon"
            no-action
          >
            <template v-slot:activator>
              <v-list-tile>
                <v-list-tile-content>
                  <v-list-tile-title style="background:none;">
                    {{ item.name }}
                  </v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>
            </template>

            <v-list-tile
              v-for="subItem in item.subitems"
              :key="subItem.name"
              @click=""
            >
              <v-list-tile-content>
                <v-list-tile-title> {{ subItem.name }} </v-list-tile-title>
              </v-list-tile-content>

              <v-list-tile-action>
                <v-icon medium>
                  {{ subItem.icon }}
                </v-icon>
              </v-list-tile-action>
            </v-list-tile>
          </v-list-group>
        </v-list>
      </v-navigation-drawer>
      <v-toolbar
        color="#004300" 
        dark 
        fixed
        scroll-off-screen="true"
        app
      >
        <v-spacer />
        <v-toolbar-items 
          v-for="(item, index) in subitems"
          :key="index"
          class="hidden-sm-and-down"
        >
          <v-menu offset-y>
            <v-btn
              slot="activator"
              dark
              flat
              style="font-weight: bolder;"
            >
              {{ item.name }}
            </v-btn>
            <v-list style="background: #004300; color: #ffffff;">
              <v-list-tile
                v-for="(subItem, index) in item.subitems"
                :key="index"
                @click=""
              >
                <v-list-tile-content>
                  <v-list-tile-title>{{ subItem.name }}</v-list-tile-title>
                </v-list-tile-content>

                <v-list-tile-action>
                  <v-icon medium>
                    {{ subItem.icon }}
                  </v-icon>
                </v-list-tile-action>
              </v-list-tile>
            </v-list>
          </v-menu>
        </v-toolbar-items>
        <v-toolbar-title>Tutusfx</v-toolbar-title>
        <v-toolbar-side-icon @click.stop="drawer = !drawer" />
      </v-toolbar>
    </div>
		
    <div class="footer">
      <div class="upper-footer">
        <a href="">Sponsorship</a><a href="">Fund Safety &amp; Security</a><a href="sitemap-eu/index.html">Sitemap</a><a href="">Networks</a><a href="contact-us-eu/">Contact Us</a>
      </div>
      <div class="card clearnav">
        <div class="footerCard">
          <h6>QUICK LINKS</h6>
          <a href="">DEVELOPERS</a><br>
          <a href="">MARKETPLACE</a><br>
          <a href="">BUY TT</a><br>
          <a href="">EVENTS</a><br>
          <a href="">NETWORKS</a><br>
          <a href="">NEWS</a><br>
          <a href="">PODCAST</a><br>
          <a href="">APPSTORE</a><br>
          <a href="">GETTING STARTED</a><br>
          <a href="">PROMOTIONAL MATERIAL</a><br>
          <a href="contact-us-eu/">CONTACT US</a><br>
          <a href="">WALLETS</a><br>
          <a href="">GUIDE</a><br>
          <a href="faqs/index.html">FAQ</a><br>
          <a href="../redirects/trade/tradingview/index.html">CHARTS</a><br>
          <a href="">DEVELOPER DISCORD</a><br>
          <a href="">ADVERTISE</a><br>
          <a href="">LEGAL</a><br>
          <a href="">PRIVACY</a><br>
          <a href="about-us-eu/index.html">ABOUT US</a><br>
          <a href="">PARTNERS</a><br>
          <a href="">WIDGETS</a><br>
        </div>
        <div class="footerCard">
          <h6>CHOOSE LANGUAGE</h6>
          <a href="">TUTUSFX.COM INTERNATIONAL</a><br>
          <a href="../de/index.html">TUTUSFX.COM DEUTSCHE</a><br>
          <a href="../it/index.html">TUTUSFX.COM ITALIANO</a><br>
          <a href="../fr/index.html">TUTUSFX.COM FRANCAISE</a><br>
          <a href="../es/index.html">TUTUSFX.COM ESPAÑOL</a><br>
          <a href="../zh-tw/index.html">TUTUSFX.COM 中文</a><br>
          <a href="../hi-in/index.html">TUTUSFX.COM HINDI</a><br>
          <a href="../ar-ar/index.html">TUTUSFX.COM ARABIC</a><br>
          <a href="../us/index.html">TUTUSFX.COM AMERICAN</a><br>
          <a href="../ru-ru/index.html">TUTUSFX.COM RUSSIAN</a><br>
          <a href="../ms/index.html">TUTUSFX.COM MALAY</a><br>
          <a href="../pt-pt/index.html">TUTUSFX.COM PORTUGUESE (EU)</a><br>
          <!-- OTHER LANGUAGE VERSIONS -->
        </div>
        <div class="footerCard">
          <h6>RELATED SITES</h6>
          <a href="https://www.bitcoin.com">BITCOIN</a><br>
          <a href="https://www.steemit.com">STEEMIT</a><br>
          <a href="https://www.eos.com">EOS</a><br>
          <a href="https://www.litecoin.com">LITECOIN</a><br>
          <a href="https://www.dodgecoin.com">DODGECOIN</a><br>
          <a href="https://www.alpari.com">ALPARI</a><br>
          <a href="https://www.exnesslab.com">EXNESS OFFICIAL</a><br>
          <a href="https://www.ig.com/en">IG</a><br>
          <a href="https://www.etoro.com">ETORO</a><br>
          <a href="https://en.swissquote.com">SWISSQUOTE</a><br>
          <a href="https://www.cmcmarkets.com/en">CMC MARKETS</a><br>
          <a href="https://www.fxpro.com">FXPRO</a><br>
          <a href="https://www.forevalue.com">FOREX.COM</a><br>
          <a href="https://www.dukascopy.com/land/trading/eu/forex">DUKASCOPY</a><br>
        </div>
        <div class="footerCard warning">
          <h6><strong>GENERAL RISK WARNING</strong></h6>
          <span>TRADING IN CRYPTOCURRENCIES, FOREX &amp; CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS. IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
        </div>
        <div class="footerDiv">
          <h6 class="footerDivHeader">
            GENERAL RISK WARNING
          </h6>
          <button class="close glyphicon glyphicon-arrow-up btn badge"> 
            x 
          </button>
          <br>
          <br>
          <span class="footerDivTexts">TRADING IN CRYPTOCURRENCIES, FOREX &amp; CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS. IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a>.</span>
        </div>
      </div>
    </div>
  </v-app>
</template>
<script>
  export default {
    data: () => ({
      TrendingPosts: [
        {
          title: 'Blockchain Post 3',
          desc: 'Title description',
          date: 'Dec 10, 2018',
          img: 'Image',
          txt1: 'Some text from Post 3...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '258',
          interactions: '14',
          comments: '5'
        },
        {
          title: 'Blockchain Post 2',
          desc: 'Title description',
          date: 'Nov 22, 2018',
          img: 'Image',
          txt1: 'Some text from Post 2...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '629',
          interactions: '73',
          comments: '18'
        }
      ],
      AllPosts: [
        {
          title: 'Blockchain Post 3',
          desc: 'Title description',
          date: 'Dec 10, 2018',
          img: 'Image',
          txt1: 'Some text from Post 3...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '258',
          interactions: '14',
          comments: '5'
        },
        {
          title: 'Blockchain Post 2',
          desc: 'Title description',
          date: 'Nov 22, 2018',
          img: 'Image',
          txt1: 'Some text from Post 2...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '629',
          interactions: '73',
          comments: '18'
        },
        {
          title: 'Blockchain Post 1',
          desc: 'Title description',
          date: 'Nov 15, 2018',
          img: 'Image',
          txt1: 'Some text from Post 1...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '192',
          interactions: '9',
          comments: '4'
        }
      ],
      Trades: [
        {
          currency: 'USD/AUD',
          profit: '+$309.82',
          margin: '+31.01',
          volume: '$10.00',
          charge: '$2.8',
          namehash: 'guest#609325cwq98'
        },
        {
          currency: 'USD/GBP',
          profit: '+$287.10',
          margin: '+42.35',
          volume: '$7.00',
          charge: '$9.35',
          namehash: 'guest#302q25%eo4j'
        },
        {
          currency: 'USD/CAD',
          profit: '+$684.37',
          margin: '+13.70',
          volume: '$50.00',
          charge: '$0.63',
          namehash: 'guest#48557310~u2'
        }
      ], drawer: false,
      tradeData: [
        { id: '1', name: '@kutygee' },
        { id: '2', name: '@thegenius' },
        { id: '3', name: '@kutygee' },
        { id: '4', name: '@thegenius' },
        { id: '5', name: '@kutygee' },
        { id: '6', name: '@thegenius' },
        { id: '7', name: '@kutygee' },
        { id: '8', name: '@thegenius' },
        { id: '9', name: '@kutygee' },
        { id: '10', name: '@darkspot' }
      ],
      currencyRateData: [
        { id: '0', rate: '000:0000', name: 'USD/CAD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'USD/JPY', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'USD/CHF', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'EUR/CHF', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'GBP/USD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'AUD/USD', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'EUR/USD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'GBP/CAD', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'GBP/AUD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'GBP/JPY', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'EUR/GBP', trend: 'positiverate' },
        { id: '2', rate: '000:0000', name: 'GBP/CHF', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'AUD/CAD', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'CAD/JPY', trend: 'positiverate' },
        { id: '2', rate: '000:0000', name: 'EUR/CAD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'CAD/CHF', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'AUD/JPY', trend: 'positiverate' },
        { id: '2', rate: '000:0000', name: 'EUR/AUD', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'AUD/CHF', trend: '' },
        { id: '2', rate: '000:0000', name: 'EUR/JPY', trend: 'positiverate' },
        { id: '2', rate: '000:0000', name: 'CHF/JPY', trend: 'positiverate' },
        { id: '1', rate: '000:0000', name: 'USD/SGD', trend: 'negativerate' },
        { id: '2', rate: '000:0000', name: 'USD/NGN', trend: 'positiverate' }
      ],
      subitems: [
        {
          icon: 'mdi-eye-off',
          name: 'Visibility',
          subitems: [
            { name: 'Trade Bar', icon: 'home' },
            { name: 'Footer', icon: 'home' },
            { name: 'Header Texts', icon: 'home' },
            { name: 'Attendant', icon: 'home' }
          ]
        },
        {
          icon: 'mdi-image-search',
          name: 'Themes',
          active: true,
          subitems: [
            { name: 'Nature', icon: 'contact_mail' },
            { name: 'Night', icon: 'home' },
            { name: 'Sunny', icon: 'home' },
            { name: 'Cloudy', icon: 'home' },
            { name: 'Romance', icon: 'home' },
            { name: 'Royal', icon: 'home' },
            { name: 'Aqua', icon: 'home' },
            { name: 'Teal', icon: 'home' },
            { name: 'Deep Royal', icon: 'home' },
            { name: 'Silver', icon: 'home' }
          ]
        },
        {
          icon: 'mdi-script-text',
          name: 'Legal',
          subitems: [
            { name: 'About Tutusfx', icon: 'contact_mail' },
            { name: 'Tutusfx Whitepaper', icon: 'contact_mail' },
            { name: 'Privacy Policy', icon: 'contact_mail' },
            { icon: 'contact_mail', name: 'Client Categorisation Policy' },
            { icon: 'contact_mail', name: 'Bonuses' },
            { icon: 'contact_mail', name: 'Company Information' },
            { icon: 'contact_mail', name: 'Complaints Procedure for Clients' },
            { icon: 'contact_mail', name: 'Conflicts of Interest Policy' },
            { icon: 'contact_mail', name: 'General Fees' },
            { icon: 'contact_mail', name: 'Investor Compensation Fund' },
            { icon: 'contact_mail', name: 'Customer Support Disclosures' },
            { icon: 'contact_mail', name: 'Risk Disclosure' },
            { icon: 'contact_mail', name: 'Terms of Use' },
            { icon: 'contact_mail', name: 'Best Interest and Order Execution Policy' }
          ]
        },
        {
          icon: 'mdi-directions',
          name: 'Guide',
          subitems: [
            { icon: 'contact_mail', name: 'Sitemap' },
            { icon: 'contact_mail', name: 'Frequently Asked Questions' }
          ]
        },
        {
          icon: 'mdi-wrench',
          name: 'Menu',
          subitems: [
            { icon: 'contact_mail', name: 'App Store' },
            { icon: 'contact_mail', name: 'Third-Party Exchanges' },
            { icon: 'contact_mail', name: 'Currency Markets' },
            { icon: 'contact_mail', name: 'Chat' },
            { icon: 'contact_mail', name: 'Vote for Witness' },
            { icon: 'contact_mail', name: 'Reset Password' }
          ]
        }
      ]
    })
  }
</script>

<style>
  img{ position: relative; top: 0; left: 0; width: 100%; height: 100%; float: left top; border-radius: 1.5px; }
	textarea{ min-height: 300px; min-width: 100%; height: 80%; width: 100%; top: 0; left: 0; text-align: justify; float: center; border-radius: 5px; padding: 16px 4px; }
	.header{ text-shadow: -8px 8px 16px #B2D4B2; height: 450px; background: none; color: #ffffff; }
	.headertitle{ z-index: -1000; font-family: Garamond; font-weight: bolder; font-stretch: expanded; font-size: 90px; }
	.headercontent{ font-style: italic; font-family: Garamond; font-stretch: condensed; font-size: 40px; }
	.collapse{ height: 100%; width: auto; text-align: justify; }
	.segment{ padding: 0.5% 5%; text-shadow: -1px 1px 1px #010; box-shadow: -5px 5px 3px #aba; }
	.fakeimg{ width: 100%; padding: 2%; margin: 20px 0; border-radius: 2px; box-shadow: -3px 3px 2px #aba; background-color: #bbfebb; }
  h3{ font-weight: bolder; color: #fefefe; } 
  .rightAlign{ float: right; } marquee{color: inherit; width: 98%; }
  .justify{ text-align: justify; }
  .ratebar{ background-color: #004300; position: relative; top: -2px; left: 0; z-index: 0; margin-bottom: 40px; }
	.negativerate{ color: #ff0000; font-family: Courier New, Times New Roman, Arial; font-size: 100%; font-weight: lighter; font-stretch: condensed; text-decoration: blink; }
	.positiverate{ color: #00ff00; font-family: Courier New, Times New Roman, Arial; font-size: 100%; font-weight: lighter; font-stretch: condensed; text-decoration: blink; }
	.neutralrate{ color: #ffffff; font-family: Courier New, Times New Roman, Arial; font-size: 100%; font-weight: lighter; font-stretch: condensed; text-decoration: blink; }
	select{ background-color: #eeeeee; }
	.trendingtradeusername{ background: none; color: #B2D4B2; }
	.upper-footer{ padding: 1%; }
  .upper-footer a{ background: none; color: #ffffff; }
	.trendingtrades{ padding: 1%; margin-top: 0.5%; color: #ffffff; }
	.returner{ float: right; font-weight: bolder; font-stretch: condensed; padding: 2.5%; margin-top: 1%; border-radius: 25px; box-shadow: -5px 5px 3px #aba; }
	input{ z-index: 300; }
	.tradeview{ height: 650px; }
	.card{ width: 95%; margin: 2.5%; border-radius: 3px; background-color: none; color:#ffffff; }
	.card a{ display: inline-flex; }
	.card a:hover{ color: #B2D4B2; }
	.card p{ text-align: justify; }
	.assistant{ margin: 50px 0px; padding: 0; display: inline-block; background: URL('https://www.tutusfx.com/assets/images/open.gif'); background-size: cover; height: 250px; width: 250px; border-radius: 40%; }
	.close{ display: block; background-color: white; }
  .hidden-sm-and-down{ z-index: 1000; background: #004300; color: #ffffff; }
  a{ text-decoration: none; transition: all 0.5s ease-in; -webkit-transition: all 0.5s ease-in; -moz-transition: all 0.5s ease-in; -o-transition: all 0.5s ease-in; }
  a:hover{ transition: all 0.3s ease-out; -webkit-transition: all 0.3s ease-out; -moz-transition: all 0.3s ease-out; -o-transition: all 0.3s ease-out; }
  * { box-sizing: border-box; top: 0; left: 0; text-align: center; }
  input[type="search"] { height: 38px; margin: 6px 0; border-radius: 19px; }

  /* Create three unequal columns that floats next to each other */
  .leftColumn { float: left; width: 30%; padding: 1%; } 
  .mainColumn { float: left; width: 40%; padding: 1%; } 
  .rightColumn { float: left; width: 30%; padding: 1%; }
  .pix { height: 100px; } .largepicture { height: 200px; }

  /* Set sticky properties */
  .sticky { position: fixed; top: 50px; left: 0; width: 99%; height: 50px; margin: 0% 0.5%; padding: 0; }
  .sticky + .row { padding-top: 100px; }

  /* Set returner and row properties */
  .returner:hover { background: #004300; color: #ffffff; color: #ffffff; }
  .row { margin: 0.5%; width: 99%; }

  /* Set footer properties */
  .footer a { padding: 0; margin: 0% 1%; color: #a1a1a1; text-align: justify;  }
  .footer a:hover { margin: 0% 1.1%; color: #B2D4B2; }
	.footer{ height: 600px; z-index: 500; border-radius: 5px 5px 0px 0px; margin-top: 100px; padding: 0; font-stretch: condensed; font-weight: lighter; background: #004300; color: #ffffff; }
  .footerDiv { display: none; z-index: 1000; }
	.footerDivHeader{ color: white; font-weight: bold; font-size: 100%; }
	.footerDivTexts{ color: white; text-align: justify; float: center; font-size: 99%; }
  .footerCard { float: left; text-align: justify; padding: 0% 2%; font-size: 90%; width: 25%; height: 547px; }
  /* Clear floats after the columns */
  .footer:after { content: ""; display: table; clear: both; }
  .clearnav { box-shadow: none; text-shadow: none; margin: 0; padding: 0; left: 0; top: 0; content: ""; display: table; clear: both; } /* reset frequently used settings */

  /* Responsive layout - when the screen is less than 1200px wide, make the two leftmost columns stack side by side and on top of the third */
  @media screen and (max-width: 1200px) {
    /* Left column */
    .leftColumn { float: left; width: 65%; padding: 0.5%; }
    
    /* Main column */
    .mainColumn { float: left; width: 35%; padding: 0.5%; }

    /* Right column */
    .rightColumn { float: left; width: 100%; padding: 0.5%; }
    
    .footerCard { font-size: 90%; width: 25%; height: 547px; font-size: 90%; }
    
    .row, .container { width: 99%; margin: 0.5%; }
    
    .footer a { margin: 0.5% 1.6%; }
  }

  /* Responsive layout - when the screen is less than 800px wide, make the three columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) { 
    .footerDivTexts { color: white; text-align: justify; float: justify;  font-size: 99%; } 
    
    .footerDiv { display: block; position: fixed; top: 70%; left: 0; width: 100%; height: 30%; margin: 0; padding: 5%; background-color: #004300; color: white; font-size: 60%; z-index: 1000; }
    
    .footerDivHeader { font-size: 100%; } .close { display: block; color: #004300; border-radius: 10px; float: right; }
    
    .leftColumn, .mainColumn, .rightColumn {  width: 100%; padding: 0.5%; }
    
    .footerCard { font-size: 80%; width: 25%; height: 547px; font-size: 80%; }
    
    .row, .container { width: 99%; margin: 0.5%; }
    
    .footer a { margin: 0.5% 1.2%; }
  }

  /* Responsive layout - when the screen is less than 480px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 480px) { 
    
    .footerDivTexts { float: center; font-size: 98%; }
    
    .footerCard { width: 33%; height: 547px;  }
    
    .row, .container { width: 99%; margin: 0.5%; }
    
    .footer a { margin: 0.5% 0.8%; font-size: 80%; }
    
    .warning { display: none; }
  }

  /* Responsive layout - when the screen is less than 480px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 345px) { 
    
    .footerDivTexts { float: center; font-size: 98%; }
    
    .footerCard { width: 33%; height: 527px; }
    
    .row, .container { width: 99%; margin: 0.5%; }
    
    .footer a { margin: 0.5% 1.2%; font-size: 80%; }
    
    .warning { display: none; }
  }

  @-webkit-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover;}
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover;}
  }
  
  @-moz-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover;}
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -moz-background-size: cover;background-size: cover;}
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover;}
  }
  
  @-o-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover;}
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -o-background-size: cover; background-size: cover;}
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover;}
  }
  
  @keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; background-size: cover;}
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; background-size: cover;}
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; background-size: cover;}
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; background-size: cover;}
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; background-size: cover;}
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; background-size: cover;}
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; background-size: cover;}
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; background-size: cover;}
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; background-size: cover;}
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; background-size: cover;}
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; background-size: cover;}
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; background-size: cover;}
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; background-size: cover;}
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; background-size: cover;}
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; background-size: cover;}
  }
  
  .animatePix{ 
    width: 100%; -webkit-animation: pixAnimation 30s infinite; -moz-animation: pixAnimation 30s infinite;
    -o-animation: pixAnimation 30s infinite; animation: pixAnimation 30s infinite; font-weight: bolder;
  }
</style>
