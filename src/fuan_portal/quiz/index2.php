<?php
require "data.php";
foreach($questions as $i => $question){
     echo "問題：". $question["q"]."<br>";
    foreach($question["choices"] as $num =>$choice){
           echo "　"."選択肢：".($num+1)."　". $choice . "<br>";
        }
        echo "<br>";
    }


