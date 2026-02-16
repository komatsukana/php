<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>不安ちゃんブログ</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>🌱 不安ちゃんブログ</h1>

  <?php
    echo "こんにちは、かなちゃん💙 <br>";
    $blogs=[
      [
        'title'=>'眠れない夜',
        'likes'=>250,
        'pv'=>400,
        'img'=>'img/1.jpg',
      ],
      [
        'title'=>'不安ちゃんと仲良くできた日',
        'likes'=>300,
        'pv'=>500,
        'img'=>'img/2.jpg',
      ],
      [
        'title'=>'お芝居と私',
        'likes'=>100,
        'pv'=>200,
        'img'=>'img/2.jpg',
      ]
    ];
usort($blogs, function($a, $b){
  return $b["pv"] - $a["pv"];
});
$rank = 1;


echo '<div class="cards">';

foreach($blogs as $blog){
  $class = ($rank == 1) ? "card first" : "card";


  echo '<div class="'.$class.'">';

  echo '<p class="rank">🥇 第'.$rank.'位</p>';

  echo '<h2 class="title">'.$blog["title"].'</h2>';

  echo '<img class="thumb" src="'.$blog["img"].'">';

  echo '<p class="info">❤️ '.$blog["likes"].' ｜ 👀 '.$blog["pv"].'</p>';

  echo '</div>';
 

  $rank++;
}

 echo '</div>';


  ?>

</body>
</html>
