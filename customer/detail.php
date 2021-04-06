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
$id1=$_COOKIE["id"];
if(!isset($_COOKIE["total"]))
$total=$_POST["total"];
else
$total=$_COOKIE["total"];
setcookie("total", $total, time() + (86400 * 30), "/"); // 86400 = 1 day
$order="SELECT * FROM posts_info WHERE v_id='$id1'";
$exec=$conn->query($order);
$n=$exec->num_rows;
$no_p=0;
?>
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step "></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>

      <?php
      if(isset($_COOKIE["isLoggedIn"]))
      {
        $email = $_COOKIE['email'];
        $sql = "SELECT * FROM user_info WHERE email='$email'";
        $exec=$conn->query($sql);
        $n=$exec->num_rows;
        if($n>0)
        {
          while($row = mysqli_fetch_assoc($exec))
          {
            $fname=$row["fname"];
            $lname=$row["lname"];
            $email=$row["email"];
            $add=$row["address"];
            $mob=$row["mob_no"];
          }
        }
        ?>
      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Customer Name</label>
          <input type="text" id="cardholder" value="<?php echo $fname . " " . $lname;?>" />

          <label for="address" style="margin-top: 5%;">Address</label>
          <input type="text" id="address" value="<?php echo $add;?>" />


        </div>
        <div class="column-2">
          <label for="cardnumber" >Mobile Number</label>
          <input type="text" id="mobnumber" value="<?php echo $mob;?>"/>

          <label for="cardnumber" style="margin-top: 5%;">Email</label>
          <input type="text" id="mobnumber" value="<?php echo $email;?>"/>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn" onclick="location.href='./cart.php'">Back</button>
      <button class="btn next-btn" onclick="location.href='./checkout.php'">Next Step</button>
    </div>
  </div>
<?php }
else
{

echo "<h2 align='center'>Please Login first.</h2>";
}
?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>