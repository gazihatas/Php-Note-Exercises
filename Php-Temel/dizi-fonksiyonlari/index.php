<?php

echo "<pre>";
//shuffle()
$sayilar = range(1,20);
shuffle($sayilar);

//array_comnbine()
$meyve = ['elma','armut','muz'];
$harfler = ['a','b','c'];
//$dizi = array_combine($meyve,$harfler);

//array_count_values()
//$dizi = array_count_values($meyve);

//array_flip()
$harfler2 = ['a','b','c','d'];
$dizi_array_flip = array_flip($harfler2);

//array_key_exist()
$harfler3 = ['a','b','c','isim'=>'ahmet'];
$dizi_array_key_exist = array_key_exists('isim', $harfler3);

//array_map()
$sayilar2 = range(1,10);
function cube($sayi){
	return $sayi*$sayi*$sayi;
}
$dizi_array_map = array_map('cube', $sayilar2);

//array_filter
$sayilar4 = range(1,10);
$sayilar5 = range(1,10);

$cift = array_filter($sayilar4,function($e){
	return $e%2 == 0 ? $e : false;
});

$_3bolum = array_filter($sayilar5,function($e){
	return $e%3 == 0 ? $e : false;
});


//print_r($cift);
//print_r($_3bolum);


//array_merge
$sayilar6 = range(1,10);
$sayilar7 = range(10,20);

$sayilar8 = range(20,30);
$sayilar9 = range(30,40);
$tek = array_merge($sayilar6, $sayilar7,$sayilar8,$sayilar9);

//print_r($tek);


//array_rand()
$dizi_array_rand = ['Elma','Armut','Muz','Kivi'];
$keys = array_rand($dizi_array_rand,2);

//echo $dizi_array_rand[$keys[0]]."<br>";
//echo $dizi_array_rand[$keys[1]];

//array_reverse()
$dizi_array_reverse =['elma','Armut','Muz','Kivi'];
$arr = array_reverse($dizi_array_reverse);

//print_r($arr);

//array_search()
$dizi_array_search = ['Elma','Armut','Muz','Kivi','Armut','Muz','Kivi'];
$arr2 = array_search('Elma', $dizi_array_search);
print_r($arr2);



?>