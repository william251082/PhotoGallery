<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

if(isset($_POST['submit'])){

    echo "it works";
    header("Location: test.php");

}