<?php include("includes/init.php"); ?>

<?php
if (!$session->is_signed_in()){

    redirect("login.php");
}
?>

<?php

if (empty($GET['photo_id'])) {
    redirect("photos.php");
}

$photo = Photo::find_user_by_id($_GET['photo_id']);

if ($photo) {
    $photo->delete_photo();
} else {
    redirect("photos.php");
}
?>
