<?php
session_start();
if (isset($_SESSION['admin_id'])){
    if($_SESSION['admin_id'] != null){
        header('Location:../Adminpanel/index.php');
    }
}

if (isset($_POST['btn'])){
require_once ('../Class/login.php');
$obj_login = new Login();
$message = $obj_login->admin_login_check($_POST);
}
?>

<link href='assets/style.css' rel='stylesheet' type='text/css'>
<div class="logo">
    <a href="../index.php"><img src="assets/logo/logo.png"></a>
</div>
<div class="login-block">
    <h1>Login</h1>
    <h3 style="color: red">
        <?php
        if(isset($message)){
            echo $message;
        }
        ?>
    </h3>
    <form class="login" action="" method="post">
        <input type="email" name="email_address" placeholder="Email Address" id="username" required />
        <input type="password" name="password" placeholder="Password" id="password" required />
        <button type="submit" name="btn">Login</button>
    </form>

</div>