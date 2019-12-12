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
	
<!-- <iframe style="display:none;" name="back" id="back"></iframe> -->
		<!-- <div id="main">     -->
			<!-- <?php
			
                //利用網址傳值的方式來取得$_GET['do']的值，這個值代表我們要include進來的檔案
                // $do=(!empty($_GET['do']))?$_GET['do']:"login";
                //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
                // $path="./front/" . $do . ".php";
                //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
                // if(file_exists($path)){
                //   include $path;
                // }else{
                //   include "./front/home.php";
                // }
                   
            ?>     -->        
    	<!-- </div> -->
    <!-- <div style="clear:both;"></div> -->
</div>

</body></html>