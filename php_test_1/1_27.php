<?php 

// 文字列の長さ
// マルチバイト　日本語　SJIS　UTF-8 3~6バイト
$text = 'あいうえお';
// echo strlen($text);
echo mb_strlen($text);
echo '<br>';

// 文字列の置換
$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

// 指定文字列で分割
$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';
echo '<br>';

// 正規表現
$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/', $str_3);
echo '<br>';

// 指定文字列から文字列を取得する

echo substr('abcde', 1);
echo '<br>';
echo mb_substr('あいうえお', 2);
echo '<br><br>';

// 配列に配列を追加
$array = ['リンゴ', 'みかん'];
array_push($array, 'ぶどう', '梨');
echo '<pre>';
var_dump($array);
echo '</pre>';


?>



