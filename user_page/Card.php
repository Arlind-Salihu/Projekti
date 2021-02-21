
<?php include('../includes/nav_top.php') ?>
<body>
<?php include('../includes/nav_bar.php') ?>

    <head>
        <title>Card</title>
        <link rel="icon" href="../foto/logo2.jpg" type = "image/x-icon">
        <link rel="stylesheet" href="../stilicss/styleCard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <br><br><br>
    <body>
    
        <div class="row">
            <div class="col-75">
              <div class="container">
              
                <form>
                
                  <div class="row">
                    <div class="col-50">
                      <h3>Pjesa e të Dhënave për Pagesë</h3>
                      <label for="emri2"><i class="fa fa-user"></i> Emri</label>
                      <input type="text" id="emri2" name="emri2" placeholder="Emri" required>
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="E-mail" required>
                      <label for="adr"><i class="fa fa-address-card-o"></i> Adresa</label>
                      <input type="text" id="adr" name="adresa" placeholder="Adresa"required>
                      <label for="qyteti"><i class="fa fa-institution"></i> Qyteti</label>
                      <input type="text" id="qyteti" name="qyteti" placeholder="Qyteti"required>
          
                      <div class="row">
                        <div class="col-50">
                          <label for="shteti">Shteti</label>
                          <input type="text" id="shteti" name="shteti" placeholder="Shteti" required>
                        </div>
                        <div class="col-50">
                          <label for="zip">Zip Kodi</label>
                          <input type="text" id="zip" name="zip" placeholder="Zip Kodi" required>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-50">
                      <h3>Pagesa</h3>
                      <label for="emri2">Kartelat Bankare të Pranuara</label>
                      <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                      </div>
                      <label for="emrik">Emri i Mbajtësit të Kartës</label>
                      <input type="text" id="kemri" name="kemri" placeholder="Pronari i Kartës" required>
                      <label for="nrk">Numri i Kartës</label>
                      <input type="number" id="ccnum" name="cardnumber" placeholder="Numri i Kartës" required>
                      <label for="smuaji">Muaji i Skadimit</label>
                      <input type="number" id="smuaji" name="smuaji" placeholder="Muaji i Skadimit" required>
                      <div class="row">
                        <div class="col-50">
                          <label for="vskadimi">Viti i Skadimit</label>
                          <input type="number" id="vskadimi" name="vskadimi" placeholder="Viti i Skadimit" required>
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input type="number" id="cvv" name="cvv" placeholder="CVV" required>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <label>
                    <input type="checkbox" checked="checked" name="adresaNjejte"> Dërgimi i produktit me shënimet e adresës
                  </label>
                  <input type="submit" value="Paguaj" class="btn" formaction="../user_page/CheckoutCard.php">
                  <a href="../user_page/Produktet.php"><input type="button" value="Kthehu në faqen paraprake" class="btn"></a>
                </form>
              </div>
            </div>
           
              </div>
            </div>
          </div>
    </body>
</html>