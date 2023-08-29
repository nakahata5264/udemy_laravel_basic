<?php 

// $members = [
//     'name' => '本田',
//     'height' => 170 . 'cm'
// ];

// foreach($members as $member){
//     echo $member;
// }
// echo '<br>';


// foreach($members as $key => $value){
//     echo $key . 'は' . $value . 'です';
// }

for($i = 0; $i < 10; $i++ ){
    if($i === 5){
        // break;
        continue;
    }
    echo $i;
}
echo '<br>';

$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}
echo '<br>';

do{echo $j;}
while($j < 5);


?>



