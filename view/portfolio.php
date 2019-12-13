<h3 class="cent">新增作品資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>作品圖片：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>作品名稱：</td>
        <td><input type="text" name="text" id="text"></td>
    </tr>
    <tr>
        <td>作品連結網址：</td>
        <td><input type="text" name="href" id="href"></td>
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