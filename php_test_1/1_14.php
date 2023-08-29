<?php 

$array = ["aaa",2,3];

$array_2 = [
    ['a','b','c'],
    ['d','e','f']
];

// echo $array[0];
// echo '<pre>';
// var_dump($array_2[0][1]);
// echo '</pre>';

$array_member = [
    'name'   => '本田',
    'height' => 170,
    'hobby'  => 'サッカー'
];

// echo $array_member['hobby'];

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby'  => 'サッカー'
    ], 
    '香川' => [
        'height' => 165,
        'hobby'  => 'サッカー'
    ]
    ];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

?>




