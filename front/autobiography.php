<div>
    <h1 class="cent">AUTOBIOGRAPHY</h1>
    <hr>
</div>

<div>   
    <?php
        //取出所有顯示設為1的資料
        $rows=all("autobiography",["sh"=>1]);

        foreach($rows as $r){
    ?>

    <div class="area"> 
        <div><?=$r['text'];?></div>
        <br>
    </div>

    <?php
    }
    ?>
</div>
<hr>