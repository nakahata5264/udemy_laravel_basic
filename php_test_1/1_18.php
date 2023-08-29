<?php 

$height = 80;

if ($height == 90){
    echo '身長は' . $height . 'cmです';
}else{
    echo '身長は' . $height . 'cmではありません';
}
echo '<br>';

$signal = 'red';

if ($signal === 'red'){
    echo 'とまれ';
}else if ($signal === 'yellow'){
    echo '一旦停止';
}else{
    echo '進め';
}
echo '<br>';

$speed = 80;

if ($signal === 'red'){
    if ($speed >= 80){
        echo 'スピード違反';
    }
}
echo '<br>';

$test = '1';
if (!empty($test)){
    echo '変数は空ではありません';
}
echo '<br>';

$signal_1 = 'red';
$signal_2 = 'yellow';


if ($signal_1 === 'red' || $signal_2 === 'blue'){
    echo '赤です';
}
echo '<br>';

$math = 80;
$comment = $math >= 80 ? 'good' : 'not good';
echo $comment;

?>



