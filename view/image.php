<h3 class="cent">新增圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:40%;margin:auto">
<table>
    <tr>
        <td>圖片：</td>
        <td><input type="file" name="file" id="file"></td>
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