<?php

 $useTable="portfolio";

?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">作品集管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="40%">作品圖片</td>
          <td width="10%">作品名稱</td>
          <td width="20%">作品連結網址</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
          <td>更換</td>
        </tr>
        <?php

        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable);

        // 決定每個頁面的筆數
        $div=3;

        // 計算總頁數(無條件進位法)
        $pages=ceil($sum/$div);

        // 採用網址參數的方式來取得當前頁，預設為第一頁
        $p=(!empty($_GET['p']))?$_GET['p']:1;

        // 計算資料的開始筆數((當前頁-1)*每頁筆數)
        $start=($p-1)*$div;

        // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
        $rows=all($useTable,[]," LIMIT $start,$div");

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          <td>
            <img src="./img/<?=$r['file'];?>" style="width:200px;height:95px">
          </td>
          <td>
            <input type="text" name="text[]" value="<?=$r['text'];?>">
          </td>
          <td>
            <input type="text" name="href[]" value="<?=$r['href'];?>">
          </td>
          <td>
            <!--checkbox是多選的機制，因此name的屬性需要使用陣列的型式-->
            <input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            
            <input type="button" value="更換圖片" onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>')" >

            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <!--插入一個DIV用來放置分頁及頁碼-->
    <div class="cent">
    <?php

        if(($p-1)>0){
          echo "<a href='admin.php?do=$useTable&p=".($p-1)."' style='text-decoration:none'> < </a>";
        }

        for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='admin.php?do=$useTable&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
        }

        if(($p+1)<=$pages){
          echo "<a href='admin.php?do=$useTable&p=".($p+1)."' style='text-decoration:none'> > </a>";
        }
    ?>
    </div>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <td width="200px">
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增作品資料">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>