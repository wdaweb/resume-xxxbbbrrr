<?php

 $useTable="edu";

?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">學歷資料管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="40%">學校</td>
          <td width="20%">科系</td>
          <td width="20%">就讀時間</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
        </tr>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          <td>
            <input type="text" name="uni[]" value="<?=$r['uni'];?>" style="width:90%">
          </td>
          <td>
            <input type="text" name="dep[]" value="<?=$r['dep'];?>" style="width:90%">
          </td>
          <td>
            <input type="text" name="timer[]" value="<?=$r['timer'];?>" style="width:90%">
          </td>
          <td>
            <!--checkbox是多選的機制，因此name的屬性需要使用陣列的型式-->
            <input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <td width="200px">
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增學歷資料">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>