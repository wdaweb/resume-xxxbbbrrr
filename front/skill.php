<div style="width:1000px;">
    <h1 class="cent">SKILL</h1>
    <hr>
</div>
       
<div class="block">   
<?php
    //取出所有顯示設為1的資料
    $rows=all("skill",["sh"=>1]);

    //用迴圈來顯示資料，並在每個字串後加上一些空白做為分隔
    foreach($rows as $r){
?>

<div class="three"> 
    <div ><h2><?=$r['ski'];?></h2></div>
    <div><h3><?=$r['con'];?></h3></div>
    <div><?=$r['note'];?></div>
    <br>
</div>
<?php
}
?>
</div>  
<hr>