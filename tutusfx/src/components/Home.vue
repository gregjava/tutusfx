<template>
  <v-app id="app">
    <v-container fluid class="row">
      <v-subheader class="ratebar">
        <v-flex>
          <marquee
            scrolldelay="1s"
            scrollamount="3"
          >
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
          </marquee>
        </v-flex>
      </v-subheader>
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
          class="navDrawer"
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
      <v-layout leftColumn>
        <v-flex class="card">
          <v-card class="segment"><br/>
            <h3>Top Trades</h3><hr><br>
            <span
              v-for="item in Trades"
              :key="item.id"
            >
              <div class="imgholder trendingtrades">
                <p class="trendingtradeusername">
                  {{ item.currency }};
                </p>
                <p>Current Profit: {{ item.profit }}; Profit Margin: {{ item.margin }};</p>
                <p>Trade Volume: {{ item.volume }}; Token Charges: {{ item.charge }};</p>
                <p><a href="../@item.namehash">{{ item.namehash }};</a></p>
              </div><hr><br></span>
          </v-card>
          <v-card class="segment"><br/>
            <h3>Vote a Witness</h3><hr>
            <h4 class="leftAlign"><em>List of top witnesses</em></h4><br/>
            <p 
              v-for="item in witnessData" 
              :key="item.id"
            >
              {{ item.id }} {{ item.name }}
            </p>
            <p class="rightAlign">
              <a href="">More...</a>
            </p><br><br><hr><br>
          </v-card>
          <v-card class="segment"><br/>
            <h3>About Tutusfx</h3><hr>
            <img 
              class="imgholder picture" 
              src="../assets/images/logo_bar.png" 
              width="100%" 
              height="100%" 
              alt="Tutusfx logo"
            >
            <p>The threshold to create and operate a Marketing Network is quite high! Therefore, a one-stop solution is provided by the Tutusfx Community for anyone to create a unique Network without any thresholds.</p>
            <p 
              class="rightAlign"
            >
              <a href="about-us-eu/index.html">More...</a>
            </p><br><br><hr><br>
          </v-card>
        </v-flex>
      </v-layout>
      <v-layout mainColumn>
        <v-flex class="card">
          <v-card class="tradeview animatePix segment">
            <span class="header"> <h1 class="headertitle"> Tutusfx </h1> <span class="headercontent"> An incentivized trade network built on blockchain technology </span> </span>
          </v-card>
          <v-card class="segment">
            <br>
            <h3>Trending Posts</h3><hr>
            <span
              v-for="item in TrendingPosts" 
              :key="item.id" 
            ><br>
              <h5><b> {{ item.desc }}</b></h5><br/><h6 class="rightAlign">{{ item.date }}</h6>
              <div class="imgholder largepicture">
                {{ item.img }}
              </div><hr>
              <p>{{ item.txt1 }}</p>
              <p>{{ item.txt2 }}</p><hr><br>
            </span>
          </v-card>
        </v-flex>
      </v-layout>
      <v-layout rightColumn>
        <v-flex class="card">
          <v-card 
            v-for="item in AllPosts" 
            :key="item.id" 
            class="segment"
          >
            <br>
            <h3>{{ item.title }}</h3><hr>
            <h5><b> {{ item.desc }}</b></h5><br/><h6 class="rightAlign">{{ item.date }}</h6>
            <div class="imgholder largepicture">
              {{ item.img }}
            </div><hr>
            <p>{{ item.txt1 }}</p>
            <p>{{ item.txt2 }}</p><hr><br>
          </v-card>
          <span class="returner">
            <a href="#"> Return to top </a>
          </span>
        </v-flex>
      </v-layout>
    </v-container>
		
    <div class="footer">
      <div class="upperFooter">
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
        <div class="footerCard responsiveFooter">
          <h6><strong>GENERAL RISK WARNING</strong></h6>
          <span>TRADING IN CRYPTOCURRENCIES, FOREX &amp; CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS. IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
        </div>
        <div class="warningTextDiv">
          <h6 class="warningTextHeader">
            GENERAL RISK WARNING
          </h6>
             <v-icon class="close">mdi-close</v-icon>
          <br>
          <br>
          <span class="warningTexts">TRADING IN CRYPTOCURRENCIES, FOREX &amp; CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS.IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a>.</span>
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
          title: 'Blockchain Post 1',
          desc: 'Title description',
          date: 'Nov 15, 2018',
          img: 'Image',
          txt1: 'Some text from Post 1...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '192',
          interactions: '9',
          comments: '4'
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
          title: 'Blockchain Post 3',
          desc: 'Title description',
          date: 'Dec 10, 2018',
          img: 'Image',
          txt1: 'Some text from Post 3...',
          txt2: 'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
          views: '258',
          interactions: '14',
          comments: '5'
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
      witnessData: [
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
  * { box-sizing: border-box; top: 0; left: 0; text-align: center; }
  img{ position: relative; top: 0; left: 0; width: 100%; height: 100%; float: left top; border-radius: 1.5px; } 
  marquee{color: inherit; width: 98.5%; }
  h3{ font-size: 30px; font-weight: bolder; color: #003200; } h4{ font-size: 24px; font-weight: bold; color: #004300; } h5{ font-size: 18px; color: #005400; } h6{ font-size: 12px; color: #006500; }
  a{ text-decoration: none; transition: all 0.5s ease-in; -webkit-transition: all 0.5s ease-in; -moz-transition: all 0.5s ease-in; -o-transition: all 0.5s ease-in; }
  a:hover{ transition: all 0.3s ease-out; -webkit-transition: all 0.3s ease-out; -moz-transition: all 0.3s ease-out; -o-transition: all 0.3s ease-out; }
	.header{ text-shadow: -8px 8px 16px #B2D4B2; height: 450px; background: none; color: #fefefe; }
	.headertitle{ font-family: Garamond; font-stretch: expanded; font-size: 90px; }
	.headercontent{ font-style: italic; font-family: Garamond; font-stretch: condensed; font-size: 40px; }
	.segment{ margin-top: 50px; padding: 0.5% 5%; text-shadow: -1px 1px 1px #010; box-shadow: -5px 5px 3px #aba; }
	.imgholder{ width: 100%; padding: 2%; margin: 20px 0; border-radius: 2px; box-shadow: -3px 3px 2px #aba; background-color: #bbfebb; transition: all 0.3s ease-in; -webkit-transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in; -o-transition: all 0.3s ease-in; transition-delay: 0.05s; }
  .imgholder:hover{ border-radius: 3px; box-shadow: -2px 2px 1px #aba; background-color: #ccfecc; cursor: pointer; transition: all 0.5s ease-out; -webkit-transition: all 0.5s ease-out; -moz-transition: all 0.5s ease-out; -o-transition: all 0.5s ease-out; }
  .leftAlign{ text-align: left; } .rightAlign{ float: right; }
  .ratebar{ position: relative; top: 37px; left: 0; z-index: 0; font-family: Courier New, Times New Roman, Arial; font-weight: lighter; font-stretch: condensed; text-decoration: blink; background-color: #004300; }
	.negativerate{ color: #ff0000; }
	.positiverate{ color: #00ff00; }
	.neutralrate{ color: #ffffff; }
	.trendingtradeusername{ background: none; color: #B2D4B2; }
	.trendingtrades{ padding: 1%; margin-top: 0.5%; color: #ffffff; }
	.tradeview{ height: 650px; }
	.card{ width: 95%; margin: 2.5%; border-radius: 3px; background-color: none; color:#ffffff; }
	.card a{ display: inline-flex; }
	.card a:hover{ color: #B2D4B2; }
	.card p{ text-align: justify; }
	.close{ float:right; display:block; background-color: white; cursor: pointer; width: 20px; height: 20px; border-radius: 10px; }
  .close:hover{ background-color: #005400; }
  .navDrawer{ z-index: 1000; background: #004300; color: #ffffff; }
  .pix { height: 100px; } .largepicture { height: 200px; }

  /* Create three unequal columns that floats next to each other */
  .leftColumn { float: left; width: 30%; padding: 1%; } 
  .mainColumn { float: left; width: 40%; padding: 1%; } 
  .rightColumn { float: left; width: 30%; padding: 1%; }

  /* Set returner and row properties */
	.returner{ float: right; font-weight: bolder; font-stretch: condensed; padding: 2.5%; margin-top: 1%; border-radius: 25px; box-shadow: -5px 5px 3px #aba; background: #fefefe; }
  .returner a{ background: none; color: #004300; }
  .returner:hover { box-shadow: -3px 3px 2px #aba; background: #004300; color: #fefefe; }
  .row { margin: 0.5%; width: 99%; }

  /* Set footer properties */
	.upperFooter{ padding: 1%; }
  .upperFooter a{ background: none; color: #ffffff; }
	.footer{ height: 600px; z-index: 500; border-radius: 5px 5px 0px 0px; margin-top: 100px; padding: 0; font-stretch: condensed; font-weight: lighter; background: #004300; color: #ffffff; }
  .footer:after { content: ""; display: table; clear: both; }
  .footer a { padding: 0; margin: 0% 1%; color: #a1a1a1; text-align: justify;  }
  .footer a:hover { margin: 0% 1.1%; color: #B2D4B2; }
  .warningTextDiv { display: none; z-index: 1000; }
	.warningTextHeader{ color: white; font-weight: bold; font-size: 100%; }
	.warningTexts{ color: white; text-align: justify; float: center; font-size: 99%; }
  .footerCard { float: left; text-align: justify; padding: 0% 2%; font-size: 90%; width: 25%; height: 547px; }

  /* Clear float after columns */
  .clearnav { box-shadow: none; text-shadow: none; margin: 0; padding: 0; left: 0; top: 0; content: ""; display: table; clear: both; }

  /* Responsive layout - when the screen is less than 1200px wide, make the two leftmost columns stack side by side and on top of the third */
  @media screen and (max-width: 1200px) {
    /* Left column */
    .leftColumn { float: left; width: 65%; padding: 0.5%; }
    /* Main column */
    .mainColumn { float: left; width: 35%; padding: 0.5%; }
    /* Right column */
    .rightColumn { float: left; width: 100%; padding: 0.5%; }
    .ratebar{ top: 38px; }
    .headertitle { font-size: 65px; }
    .headercontent { font-size: 35px; }
    .row { width: 99%; margin: 0.5%; }
    .footer a { margin: 0.5% 1.6%; }
    .footerCard { font-size: 90%; width: 25%; height: 547px; }
  }

  /* Responsive layout - when the screen is less than 800px wide, make the three columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 880px) {
    .leftColumn, .mainColumn, .rightColumn {  width: 100%; padding: 0.5%; }
    .ratebar{ top: 38px; }
    .headertitle { font-size: 40px; }
    .headercontent { font-size: 30px; }
    .row { width: 99%; margin: 0.5%; }
    .footer a { margin: 0.5% 1.2%; }
    .warningTextDiv { display: block; position: fixed; top: 70%; left: 0; width: 100%; height: 30%; margin: 0; padding: 5%; background-color: #004300; color: white; font-size: 60%; z-index: 1000; }
    .warningTextHeader { font-size: 100%; } 
    .warningTexts { color: white; text-align: justify; float: justify;  font-size: 99%; }
    .footerCard { font-size: 80%; width: 25%; height: 547px; }
  }

  /* Responsive layout - when the screen is less than 480px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 480px) { 
    .headertitle { font-size: 27.5px; }
    .headercontent { font-size: 25px; }
    .row { width: 99%; margin: 0.5%; }
    .footer a { margin: 0.5% 0.8%; font-size: 80%; }
    .responsiveFooter { display: none; }
    .warningTexts { float: center; font-size: 98%; }
    .footerCard { width: 33%; height: 547px;  }
  }

  /* Responsive layout - when the screen is less than 480px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 345px) { 
    .row { width: 99%; margin: 0.5%; }
    .footer a { margin: 0.5% 1.2%; font-size: 80%; }
    .responsiveFooter { display: none; }
    .warningTexts { float: center; font-size: 98%; }
    .footerCard { width: 33%; height: 527px; }
  }

  @-webkit-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover; -webkit-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
  }
  
  @-moz-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -moz-background-size: cover; background-size: cover;  -moz-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -moz-background-size: cover;background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover; -moz-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
  }
  
  @-o-keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; -o-background-size: cover; background-size: cover;  -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; -o-background-size: cover; background-size: cover;  -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; -o-background-size: cover; background-size: cover;  -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover; -o-transition: all 1s ease-in-out; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
  }
  
  @keyframes pixAnimation {
    0%   {left:0px; top:0px; background:url("../assets/images/forex_trading_10.png") no-repeat center; background-size: cover;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    7%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_8.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    14%  {left:0px; top:0px; background:url("../assets/images/forex_trading_9.png") no-repeat center; background-size: cover;transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    21%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_10.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    28% {left:0px; top:0px; background:url("../assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    35%   {left:0px; top:0px; background:url("../assets/images/blockchain_technology_9.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    42%  {left:0px; top:0px; background:url("../assets/images/forex_trading_13.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    50%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_11.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    57%  {left:0px; top:0px; background:url("../assets/images/forex_trading_12.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    64% {left:0px; top:0px; background:url("../assets/images/blockchain_technology_13.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    71%   {left:0px; top:0px; background:url("../assets/images/forex_trading_16.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    78%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_12.png") no-repeat center; background-size: cover;  transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    85%  {left:0px; top:0px; background:url("../assets/images/forex_trading_14.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    92%  {left:0px; top:0px; background:url("../assets/images/blockchain_technology_14.png") no-repeat center; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
    100% {left:0px; top:0px; background:url("../assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; background-size: cover; transition: all 1s ease-in-out;  transition-delay: 0.05s; }
  }
  
  .animatePix{ 
    width: 100%; -webkit-animation: pixAnimation 120s infinite; -moz-animation: pixAnimation 120s infinite;
    -o-animation: pixAnimation 120s infinite; animation: pixAnimation 120s infinite; font-weight: bolder; -webkit-transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in; -o-transition: all 0.3s ease-in; transition: all 0.3s ease-in; transition-delay: 0.05s; border-radius: 3px; box-shadow: -3px 3px 2px #aba;
  }

  .animatePix:hover{ cursor: pointer;-webkit-transition: all 0.5s ease-out; -moz-transition: all 0.5s ease-out; -o-transition: all 0.5s ease-out;  transition: all 0.5s ease-out; border-radius: 2px; box-shadow: -2px 2px 1px #aba; }
</style>
