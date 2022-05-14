
<html>

<head>
    <title>
        CW - Crypto Workshop
    </title>
    <link rel="stylesheet" href="cryptostyle.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
</head>

<body>
    <div id="main-div">


        <div id="header">
            <div id='mainlogo'><img src='images/CW v2.png' height='127'></div>
            <div id="btc" class='top-cur-block'>
                <div class='logo'><img src="images/btclogo.webp"></div>
                <div class='price'>
                    <p class='price' id='btcprice'>-----</p>
                </div>
            </div>
            <div id="eth" class='top-cur-block'>
                <div class='logo'><img src="images/eth.webp"></div>
                <div class='price'>
                    <p class='price' id='ethprice'>----</p>
                </div>
            </div>
            <div id="xmr" class='top-cur-block'>
                <div class='logo'><img src="images/monero.webp"></div>
                <div class='price'>
                    <p class='price' id='xmrprice'>--- </p>
                </div>
            </div>


        </div>
        <div id="main-section">
            <div id="left">
                <div id="video-card-select">

                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">A2000</button>
                        </span>
                        </div>
                        
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3070</button>
                        </span>
                        </div>
                        
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">A3080TI</button>
                        </span>
                        </div>
                        <br>
                        
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3060</button>
                        </span>
                        </div>
                        
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3070TI</button>
                        </span>
                        </div>
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3090</button>
                        </span>
                        </div>
                        <br>
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3060TI</button>
                        </span>
                        </div>
                        <div class="adapter">
                        <span>
                            <input type="text" placeholder="0" class="adapter-qty">
                        </span>
                        <span>
                            <button class="adapter-btn">3080</button>
                        </span> </div>
                        <div id="provider-div">
                        <select id="provider" name="Provider" id="Provider">                
  <option value="pro">Energo-Pro</option>
  <option value="evn">EVN</option>
  <option value="cez">CEZ</option>

</select> 
<input type="text" id="price">
</div>
                       
                   
            </div>

            <div id="profit-monitor"></div>





        </div>
    </div>

    <!-- <script type="text/javascript" src="minerStats.js"></script> -->
    <script type="text/javascript" src="marketStats.js"></script>
</body>

</html>