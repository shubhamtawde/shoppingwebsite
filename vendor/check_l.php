<?php
include_once("includes/config.php");
if(isset($_COOKIE["isLoggedIn"]))
{
    if($_COOKIE["isLoggedIn"]==1)
    header('Location: ./index.php');
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie89 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Login</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form" style="margin-top: 30%;">
                    <div class="form-group">

<?php
$email=$_POST["email"];
$pass=$_POST["pass"];
$sql="SELECT * FROM vendor_info WHERE email='$email' AND pass='$pass'";
    //execute query
    $exec=$conn->query($sql);
        $n=$exec->num_rows;
    if($n > 0)
    {
        while($row = $exec->fetch_assoc()) {
        $id=$row["v_id"];
        }
        $cookie_name = "isLoggedIn";
        $cookie_value = "1";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("pass", $pass, time() + (86400 * 30), "/");
        setcookie("id", $id, time() + (86400 * 30), "/");
        header('Location: ./index.php');
    }
    else
    {
        echo "Error: Invalid Credentials";
    }
?>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
