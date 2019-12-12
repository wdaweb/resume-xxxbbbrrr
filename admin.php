<?php
include_once "base.php";
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
  <div id="main">
    <?php include "./front/personal.php";?>
    <div id="ms">
      <div id="lf" style="float:left;">
        <div style="margin:3px; width:90%; height:18%; line-height:90px;">
          <span class="t"><button onclick="location.replace('./api/logout.php')" style="width:99%; margin-right:2px; height:80px; background-color:pink;">管理登出</button></span>
        </div>
        <div id="menuput" class="dbor">
          <!--主選單放此-->
          
          <span class="t botli"><h3>後台管理選單</h3></span>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=personal">
            <div class="mainmu">
            個人基本資料管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=edu">
            <div class="mainmu">
            學歷資料管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=work">
            <div class="mainmu">
            工作經驗管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=skill">
            <div class="mainmu">
            技能專長管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=autobiography">
            <div class="mainmu">
              個人自傳管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
            <div class="mainmu">
              圖片資料管理 </div>
          </a>
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=portfolio">
            <div class="mainmu">
              作品集管理 </div>
          </a>
          
          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
            <div class="mainmu">
              管理者帳號管理 </div>
          </a>

        </div>
        
      </div>
      <div class="di"
        style="height:660px; border:#999 1px solid; width:78%; margin:2px 0px 0px 0px; float:left; position:relative;">
        <!--正中央-->
        <table width="100%">
          <tbody>
            <tr>
              <td style="width:70%;font-weight:800;height:50px; border:#333 1px solid; border-radius:3px;" class="cent"><a
                  href="?do=admin" style="color:#000; text-decoration:none;"><h2>後台管理區</h2></a></td>
                  <!--可以將按鈕內容改成loaction.href='index.php?do=login'來做到跳到管理登入畫面的功能-->
                  <!--這裹我們示範利用session來記錄登入狀態，所以我們建立一個logout的檔案來處理登出-->
              <!-- <td><button onclick="location.replace('./api/logout.php')"
                  style="width:99%; margin-right:2px; height:50px;">管理登出</button></td> -->
            </tr>
          </tbody>
        </table>
        <?php

              //利用網址傳值的方式來取得$_GET['do']的值，這個值代表我們要include進來的檔案
              $do=(!empty($_GET['do']))?$_GET['do']:"personal";

              //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
              $path="./admin/" . $do . ".php";

              //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
              if(file_exists($path)){
                include $path;
              }else{
                include "./admin/personal.php";
              }
             
        ?>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
</body>

</html>