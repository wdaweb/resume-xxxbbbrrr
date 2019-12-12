<h3 class="cent">新增大頭照</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>大頭照照片：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>姓名：</td>
        <td><input type="text" name="text" id="text"></td>
    </tr>
    <tr>
        <td>聯絡電話：</td>
        <td><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td>聯絡信箱：</td>
        <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td>備註：</td>
        <td><input type="text" name="note" id="note"></td>
    </tr>
    <!-- <tr>
        <td>標題區替代文字：</td>
        <td><input type="text" name="text" id="text"></td>
    </tr> -->
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>