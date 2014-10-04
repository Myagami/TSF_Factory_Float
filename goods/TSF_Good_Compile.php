#!/usr/bin/php
<?php
   //Read
$csv = file("TSF_Goods_Index.csv") ;

//Index
$Index = array_shift($csv) ;
$Index = explode(",",$Index) ;
$Index[9] = str_replace(array("\r\n","\n","\r"), '', $Index[9]) ;
//Output
foreach($csv as $dat){
	//キーを割り振る
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	//出力判定
	if($C_dat == "1"){
		print_r($C_dat) ;
	}
}
?>