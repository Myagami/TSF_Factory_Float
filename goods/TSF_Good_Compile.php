#!/usr/bin/php
<?php
   //ファイル読み込み
$csv = file("TSF_Goods_Index.csv") ;

//Index
$Index = array_shift($csv) ;
$Index = explode(",",$Index) ;
//print_r($csv) ;

//出力
foreach($csv as $dat){
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	print_r($C_dat) ;
}
?>