<?php include_once "base.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>個人履歷網站系統</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>

<body>

<div id="cover" style="display:none; ">
  <div id="coverr">
    <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
      onclick="cl(&#39;#cover&#39;)">X</a>
    <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
  </div>
</div>

<div class="container">

	<div class="item">
		<?php include "./front/personal.php"; ?>
	</div>
	<div>
		<?php include "./front/edu.php";?>				
	</div>
	<div>
		<?php include "./front/work.php";?>				
	</div>
	<div>
		<?php include "./front/skill.php";?>				
	</div>
	<div>
		<?php include "./front/autobiography.php";?>				
	</div>
	<div>
		<?php include "./front/image.php";?>				
	</div>
	<div>
		<?php include "./front/portfolio.php";?>				
	</div>
	
</div>

</body></html>