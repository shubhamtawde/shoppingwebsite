<?php
include_once("includes/config.php");
if(isset($_COOKIE["isLoggedIn"]))
header('Location: ./index.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v1/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>User Registration</title>
<script type="text/javascript">
   function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v1/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/util.css">
	<link rel="stylesheet" type="text/css" href="./Contact V1_files/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt="">
				<img src="./Contact V1_files/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<span class="contact1-form-title">
					New User Registration
				</span>

				<div class="wrap-input1 validate-input" data-validate="Name is required">
					<input class="input1" type="text" name="fname" placeholder="First Name" required>
					<span class="shadow-input1"></span>
				</div>

            <div class="wrap-input1 validate-input" data-validate="Name is required">
               <input class="input1" type="text" name="lname" placeholder="Last Name" required>
               <span class="shadow-input1"></span>
            </div>

				<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Contact number is required">
					<input class="input1" type="text" name="contact_no" placeholder="Contact Number" required>
					<span class="shadow-input1"></span>
				</div>


				<div class="wrap-input1 validate-input" data-validate="Password is required">
					<input class="input1" type="password" name="password" placeholder="Password" id="pass1" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="password" name="cpassword" placeholder="Confirm Password" id="pass2"onkeyup="checkPass(); return false;" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Register
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script type="text/javascript" async="" src="./Contact V1_files/analytics.js.download"></script><script src="./Contact V1_files/jquery-3.2.1.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Contact V1_files/popper.js.download"></script>
	<script src="./Contact V1_files/bootstrap.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Contact V1_files/select2.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Contact V1_files/tilt.jquery.min.js.download"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./Contact V1_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="./Contact V1_files/main.js.download"></script>




</body></html>