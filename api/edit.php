<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//利用迴圈來判斷資料要刪除還是更新內容
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
    }else{

        //先取出該筆資料
        $data=find($table,$id);

        //依據不同的資料表來做不同的動作
        switch($table){
            case "personal":
                //將欄位內容更新成表單傳遞過來的內容
                $data['text']=$_POST['text'][$key];
                $data['tel']=$_POST['tel'][$key];
                $data['email']=$_POST['email'][$key];
                $data['note']=$_POST['note'][$key];
                $data['sh']=($id==$_POST['sh'])?1:0;
            break;
            case "edu":
                //將欄位內容更新成表單傳遞過來的內容
                $data['uni']=$_POST['uni'][$key];
                $data['dep']=$_POST['dep'][$key];
                $data['timer']=$_POST['timer'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "work":
                //將欄位內容更新成表單傳遞過來的內容
                $data['co']=$_POST['co'][$key];
                $data['job']=$_POST['job'][$key];
                $data['timer']=$_POST['timer'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "skill":
                //將欄位內容更新成表單傳遞過來的內容
                $data['ski']=$_POST['ski'][$key];
                $data['con']=$_POST['con'][$key];
                $data['note']=$_POST['note'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "portfolio":
                //將欄位內容更新成表單傳遞過來的內容
                $data['text']=$_POST['text'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "admin":
                $data['acc']=$_POST['acc'][$key];
                $data['pw']=$_POST['pw'][$key];                
            break;
            case "menu":
                $data['text']=$_POST['text'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                  
            break;
            default:
                //將欄位內容更新成表單傳遞過來的內容
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
        }


        //利用save()函式將該筆資料寫回資料表
        save($table,$data);
    }
}

//返回功能頁面
to("../admin.php?do=$table");

?>