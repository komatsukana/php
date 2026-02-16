<?php
require "data.php";

$emoKey  = $_POST["emo"];
$moodKey = $_POST["mood"];

$emo  = $emos[$emoKey];
$mood = $moods[$moodKey];

$color1 = $emo[1];
$color2 = $mood[1];
?>
<div style="
width:300px;
height:150px;
border-radius:15px;
background:linear-gradient(135deg,<?= $color1 ?>,<?= $color2 ?>);
color:white;
text-align:center;
padding-top:50px;
font-size:24px;
">

<?= $emo[0] ?><br>
<?= $mood[0] ?>

</div>
<p>今日のあなたはこんな色💗</p>









