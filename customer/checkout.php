<?php
include_once("includes/config.php");
if(!isset($_COOKIE["isLoggedIn"]))
header('Location: ./login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>
<?php
$total = $_COOKIE["total"];
?>
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>

      <form action="success.php">
      <div class="payment-method">
        <label for="card" class="method card">
          <div class="card-logos">
            <img src="img/visa_logo.png"/>
            <img src="img/mastercard_logo.png"/>
          </div>


          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay ₹ <?php echo $total; ?> with credit/debit card
          </div>
        </label>

        <label for="paytm" class="method paypal">
          <img src="img/paytm_logo.png"/>
          <div class="radio-input">
            <input id="paytm" type="radio" name="payment">
            Pay ₹ <?php echo $total; ?> with PayTM
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" id="cardholder" required />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" id="date" placeholder="MM / YY" required />
            </div>

            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" id="verification" required />
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" id="cardnumber" required />

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
        </div>
      </div>

    </div>


    <div class="panel-footer">
      <button class="btn back-btn" onclick="location.href='./detail.php'">Back</button>
      <button class="btn next-btn">Next Step</button>
    </div>
  </div>
  </form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>