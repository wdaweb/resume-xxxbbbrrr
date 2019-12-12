<div style="width:1000px;">
    <!--[可不做]依據session的有無來決定要顯示的按鈕文字及行為-->
    <div>
        <?php
            if(empty($_SESSION['login'])){
        ?>
            <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px; background-color:pink; font-size:24px;" onclick="lo(&#39;login.php&#39;)">管理登入</button>
        <?php
            }else{
        ?>
            <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px; background-color:pink; font-size:24px;" onclick="lo(&#39;admin.php&#39;)">回到管理</button>
        <?php
            }
        ?>
    </div>

    <h1 class="cent">EDUCATION</h1>
    <hr>
</div>

<div class="block">   
<?php
    //取出所有顯示設為1的資料
    $rows=all("edu",["sh"=>1]);

    //用迴圈來顯示資料，並在每個字串後加上一些空白做為分隔
    foreach($rows as $r){
?>

<div class="two"> 
    <div ><h2><?=$r['uni'];?></h2></div>
    <div><h3><?=$r['dep'];?></h3></div>
    <div><?=$r['timer'];?></div>
    <br>
</div>
<?php
}
?>
</div>  
<hr>