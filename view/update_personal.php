<h3 class="cent">更新大頭照</h3>
<hr>
<form action="./api/update_img.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>大頭照：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </td>
        <td></td>
    </tr>
</table>
</form>