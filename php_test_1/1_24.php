<?php 

// switchの場合は、==が使われている
$data = 1;

switch($data){
    case $data === 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    case 3:
        echo '3です';
        break;
    default:
        echo 'no';
        break;
}
echo '<br>';

if($data === 1){
    echo 1;
}
else if($data === 2){
    echo '2';
}
echo '<br>';
echo '<br>';



function test(){
    echo 'test';
}

test();
echo '<br>';


$comment = 'comment';
function getComment($string){
    echo $string;
}

getComment($comment);
echo '<br>';


function getNumberComment(){
    return 5;
}

$commentNumber = getNumberComment();
echo $commentNumber;
echo '<br>';


function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}
$total = sumPrice(3, 5);
echo $total;


?>