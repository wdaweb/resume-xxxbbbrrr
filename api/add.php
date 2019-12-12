<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//判斷是否有成功上傳檔案，進行取得檔名及搬移檔案的動作
if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
}

//依據資料表來做不同的處理
switch($table){
  case "personal":
    //將欄位內容更新成表單傳遞過來的內容
    $data['text']=$_POST['text'];
    $data['tel']=$_POST['tel'];
    $data['email']=$_POST['email'];
    $data['note']=$_POST['note'];
    $data['sh']=($id==$_POST['sh'])?1:0;
  case "edu":
    if(!empty($_POST['uni'])){
      $data['uni']=$_POST['uni'];
      $data['dep']=$_POST['dep'];
      $data['timer']=$_POST['timer'];
      $data['sh']=($id==$_POST['sh'])?1:0;
    }
  case "work":
    if(!empty($_POST['co'])){
      $data['co']=$_POST['co'];
      $data['job']=$_POST['job'];
      $data['timer']=$_POST['timer'];
      $data['sh']=($id==$_POST['sh'])?1:0;
    }
  case "skill":
    if(!empty($_POST['ski'])){
      $data['ski']=$_POST['ski'];
      $data['con']=$_POST['con'];
      $data['note']=$_POST['note'];
      $data['sh']=($id==$_POST['sh'])?1:0;
    }
  case "portfolio":
    if(!empty($_POST['text'])){
      $data['text']=$_POST['text'];
      $data['href']=$_POST['href'];
      $data['sh']=($id==$_POST['sh'])?1:0;
    }              
  case "admin":
    if(!empty($_POST['acc']) && !empty($_POST['pw'])){
        $data["acc"]=$_POST['acc'];
        $data["pw"]=$_POST['pw'];
    }
  break;
  case "menu":
    if(!empty($_POST['text']) && !empty($_POST['href'])){
        $data["text"]=$_POST['text'];
        $data["href"]=$_POST['href'];
    }
  break;
  default:
    //判斷是否有傳遞text欄位的資料，有的話就進行資料的取得
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }  
}

  //利用save()函式將存在$data陣列中的資料寫入資料表中
  save($table,$data);  

to("../admin.php?do=$table");

?>