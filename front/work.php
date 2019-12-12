<div style="width:1000px;">
    <h1 class="cent">WORK EXPERIENCE</h1>
    <hr>
</div>
<div class="block">    
<?php
    //取出所有顯示設為1的資料
    $rows=all("work",["sh"=>1]);

    foreach($rows as $r){
?>

<div class="three"> 
    <div ><h2><?=$r['co'];?></h2></div>
    <div><h3><?=$r['job'];?></h3></div>
    <div><?=$r['timer'];?></div>
    <br>
</div>

<?php
}
?>
</div> 
<hr>