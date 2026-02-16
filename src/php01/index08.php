<?php
$blogs = [
  ["title" => "不安ちゃんと朝ごはん", "likes" => 120, "pv" => 300],
  ["title" => "舞台で泣いた日", "likes" => 80, "pv" => 200],
  ["title" => "カフェで考えたこと", "likes" => 45, "pv" => 150],
  ["title" => "今日も生きてる", "likes" => 200, "pv" => 500],
  ["title" => "弱くて強い私", "likes" => 95, "pv" => 250]
];

$popular = [];

foreach($blogs as $blog){

  if($blog["pv"] >= 300 && $blog["likes"]>=100){
    $popular[] = $blog;
    echo $blog["title"]."(いいね：".$blog["likes"]." PV：".$blog["pv"].")<br>";
  }

}


        


  
    





