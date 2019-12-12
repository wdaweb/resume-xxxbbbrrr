<h3 class="cent">新增工作經歷</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>公司名稱：</td>
        <td><input type="text" name="co" id="co"></td>
    </tr>
    <tr>
        <td>職務名稱：</td>
        <td><input type="text" name="job" id="job"></td>
    </tr>
    <tr>
        <td>任職時間：</td>
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