<h3 class="cent">新增個人自傳</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:65%;margin:auto">
<table>
    <tr>
        <td>個人自傳內容：</td>
        <td><textarea name="text" id="text" style="width:300px;height:100px"></textarea></td>
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