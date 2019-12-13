<?php

//取得顯示設定為1的資料
$ti=find("personal",["sh"=>1]);

?>
<!--連結中的href要改成index.php，將資料中的text欄位寫入到a標籤的title屬性中-->
<a title="<?=$ti['text'];?>" href="index.php">
<div class="one">
    <!--設定大頭照路徑為./img/，然後將資料中的file欄位寫入到對應的位置去-->
    <div class="ti" style="background:url(&#39;./img/<?=$ti['file'];?>&#39;);"></div>
    <div><?=$ti['text'];?></div>
    <div><?=$ti['tel'];?></div>
    <div><?=$ti['email'];?></div>
    <div><?=$ti['note'];?></div>
</div>
</a>
