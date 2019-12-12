<div style="width:1000px;">
    <h1 class="cent">IMAGES</h1>
    <hr>
</div>


<div class="block">

<?php
	$rows=all("image",["sh"=>1]);
	foreach($rows as $k => $r){
		echo "<div class='im' id='ssaa$k'>";
		echo "<img src='./img/".$r['file']."'>";
		echo "</div>";
	}
?>
</div>
<hr>
