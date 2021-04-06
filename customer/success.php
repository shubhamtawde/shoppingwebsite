<?php
include_once("includes/config.php");?>
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
$email=$_COOKIE["email"];
$c_id=$_COOKIE["id"];
$sel="SELECT * FROM user_info WHERE email='$email'";
$exec=$conn->query($sel);
$n=$exec->num_rows;
$row = mysqli_fetch_assoc($exec);
$fname=$row["fname"];
                  $num=$_COOKIE['no_c'];
                  if($num>0)
                  {
                     $arrayName = $_COOKIE['c'];
                     $arr=0;
                     foreach ($_COOKIE['c'] as $key => $value)
                     {
                        # code...
                        $details[$arr++]=$value;
                     }
                     $s=0;
                     foreach ($details as $value) {
                        # code...
                        $img="";
                        $sql[$s]="SELECT * FROM posts_info WHERE id='$value'";
                        $exec=$conn->query($sql[$s]);
                        $n=$exec->num_rows;
                        while($row = mysqli_fetch_assoc($exec))
                        {
                          $id=$row["id"];
                          $v_id=$row["v_id"];
                          $name=$row["p_name"];
                          $price=$row["p_price"];
                          $cat=$row["category"];
                        }
                        $ins[$s]="INSERT INTO order_info(v_id, p_id, c_id, c_name, p_name, p_price, quantity, status) VALUES ('$v_id', $id, $c_id, '$fname','$name', $price, 1,'Pending')";
                        $exe=$conn->query($ins[$s++]);
                     }
                     $setPref=$_COOKIE["setPref"];
                     if(isset($_COOKIE["Pref1"]))
                     $Pref1=$_COOKIE["Pref1"];
                   if(isset($_COOKIE["Pref2"]))
                     $Pref2=$_COOKIE["Pref2"];
                   if(isset($_COOKIE["Pref3"]))
                     $Pref3=$_COOKIE["Pref3"];
                   if(isset($_COOKIE["Pref4"]))
                     $Pref4=$_COOKIE["Pref4"];
                   if(isset($_COOKIE["Pref5"]))
                     $Pref5=$_COOKIE["Pref5"];
                   $no_c=0;
                     $isLoggedIn=$_COOKIE["isLoggedIn"];
                     $email=$_COOKIE["email"];
                     $id=$_COOKIE["id"];
                     //unsetting
                     if (isset($_SERVER['HTTP_COOKIE'])) {
                        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                        foreach($cookies as $cookie) {
                            $parts = explode('=', $cookie);
                            $name = trim($parts[0]);
                            setcookie($name, '', time()-1000);
                            setcookie($name, '', time()-1000, '/');
                        }
                    }
                    setcookie("setPref", $setPref, time() + (86400 * 30), "/"); // 86400 = 1 day
                    if(!empty($Pref1))
                    setcookie("Pref1", $Pref1, time() + (86400 * 30), "/"); // 86400 = 1 day
                  if(!empty($Pref2))
                    setcookie("Pref2", $Pref2, time() + (86400 * 30), "/"); // 86400 = 1 day
                  if(!empty($Pref3))
                    setcookie("Pref3", $Pref3, time() + (86400 * 30), "/"); // 86400 = 1 day
                  if(!empty($Pref4))
                    setcookie("Pref4", $Pref4, time() + (86400 * 30), "/"); // 86400 = 1 day
                  if(!empty($Pref5))
                    setcookie("Pref5", $Pref5, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("no_c", $no_c, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("isLoggedIn", $isLoggedIn, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("id", $id, time() + (86400 * 30), "/"); // 86400 = 1 day
                  }
                  header('Location: ./orders.php');?>
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>

      <form action="detail.php">
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