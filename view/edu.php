<h3 class="cent">新增學歷資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:40%;margin:auto">
<table>
    <tr>
        <td>就讀學校：</td>
        <td><input type="text" name="uni" id="uni"></td>
    </tr>
    <tr>
        <td>就讀科系：</td>
        <td><input type="text" name="dep" id="dep"></td>
    </tr>
    <tr>
        <td>就讀時間：</td>
        <td><input type="text" name="timer" id="timer"></td>
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