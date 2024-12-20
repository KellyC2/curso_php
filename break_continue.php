<?php
$c=1;
while($c<=20){
    echo $c. "<br>";
    if($c==10){
        break;
    }
    $c++;
};

$pc=["SO", "GPU", "RAM", "CPU"];
foreach ($pc as $component){   
    echo  $component. "<br>";
    if($component=="GPU"){
        break;
    }
}

$pc = ["SO", "GPU", "RAM", "CPU"];
foreach ($pc as $component) {
    
    if ($component == "GPU") {
        continue;
    }
    echo  $component . "<br>";
}


?>