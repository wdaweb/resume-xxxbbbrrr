<h3 class="cent">新增技能專長資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:40%;margin:auto">
<table>
    <tr>
        <td>技能項目：</td>
        <td><input type="text" name="ski" id="ski"></td>
    </tr>
    <tr>
        <td>技能內容：</td>
        <td><input type="text" name="con" id="con"></td>
    </tr>
    <tr>
        <td>備註：</td>
        <td><input type="text" name="note" id="note"></td>
    </tr>
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>