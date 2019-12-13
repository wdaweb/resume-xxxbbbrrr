<?php include_once "../base.php";?>
  <?php

    //判斷是否需要做帳密檢查
    if(!empty($_POST['check'])){
        $acc=$_POST['acc'];
        $pw=$_POST['pw'];

        //利用nums()函式來檢查帳密是否正確
        $chk=nums("admin",["acc"=>$acc,"pw"=>$pw]);
        if($chk>=1){
          
          //帳密正確則建立一個session來紀錄
          $_SESSION['login']=$acc;

          //帳密正確則導向後台admin.php
          to("../admin.php");

        }else{

          //帳密錯誤則輸入js語法，用以產生提示訊息
          echo "<script>alert('帳號或密碼錯誤');location.href='../index.php';</script>";
    
        }
    }
  ?>


<h3 class="cent">管理員登入區</h3>
<hr>
<form action="./view/login.php" method="post" enctype="multipart/form-data" style="width:30%;margin:auto">
<table>
    <tr>
        <td>帳號：</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td>密碼：</td>
        <td><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr class="cent">
        <td colspan="2">
            <!--在submit中加上name欄位做為表單送出的識別值-->
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" name="check" value="送出" >
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>