<!DOCTYPE html>
<html>
 <head>
  <title>Screenshot Upload</title>
 </head>
<body>
 <h1>Screenshot Upload</h1>
 <form action='upload.php' method='post' enctype="multipart/form-data">
<?php if (!$_COOKIE['pass']) { ?>
  <label for='pass'>Password:</label><br>
  <input name='pass' id='pass'><br>
<?php } ?>
  <label for='image'>Image:</label><br>
  <input type='file' name='image' id='image'><br />
  <input type='submit' value='Upload' class ='button' />
 </form>
</body>
</html>
