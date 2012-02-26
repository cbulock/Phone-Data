<?php
$password = trim(file_get_contents('.pwd'));
if (($_COOKIE['pass'] == $password) OR ($_POST['pass'] == $password)) {
 setcookie('pass', $password, time()+60*60*24*90);
 $imagedata = $_FILES['image'];
 $tmp = $_FILES['image']['tmp_name'];
 move_uploaded_file($tmp,'tmp_image.png');
 exec('convert tmp_image.png -scale 50% ../screenshot.png');
 echo '<a href="/">Success</a>';
}
else {
 echo 'Bad password';
}
?>
