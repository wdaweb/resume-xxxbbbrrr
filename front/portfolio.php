<div style="width:1000px;">
    <h1 class="cent">PORTFOLIO</h1>
    <hr>
</div>

<div class="block">   
    <?php
    	$rows=all("portfolio",["sh"=>1]);
    	foreach($rows as $r){
    ?>    

        <div class='im'>
            <?php    
                echo "<img src='./img/".$r['file']."'>";
            ?>
            <a href="<?=$r['href'];?>">
                <h3><?=$r['text'];?></h3>
            </a>
        </div>
        
    <?php
    	}
    ?>  
</div> 
<hr>

