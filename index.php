<?php
$data = json_decode(file_get_contents('data.json'));
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='css/main.css' />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-126218-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<h2>Current Galaxy Nexus Info</h2>

<div id='phone'>
 <img src='screenshot.png' />
</div>
<div id='data'>
 <p><h5>Owner:</h5>
  <a href='<?=$data->owner->url?>'><?=$data->owner->name?></a>
 <p><h5>Phone:</h5>
  <?=$data->model->common?><br>
  <?=$data->network->name?> Network
 <p><h5>ROM:</h5>
  <a href='<?=$data->rom->url?>'><?=$data->rom->name?></a>
 </p>
 <p><h5>Android Version:</h5>
  <?=$data->rom->android_version?>
 </p>
 <p><h5>Kernel:</h5>
  <a href='<?=$data->kernel->url?>'><?=$data->kernel->name?></a><br>
 </p>
 <p><h5>Recovery:</h5>
  <a href='<?=$data->recovery->url?>'><?=$data->recovery->name?></a>
 </p>
 <p><h5>CPU:</h5>
  <?=$data->governor->name?> CPU governor
 </p>
</div>
</body>
</html>
