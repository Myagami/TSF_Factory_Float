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
	//キーを渡す
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	print_r($C_dat) ;
}
?>