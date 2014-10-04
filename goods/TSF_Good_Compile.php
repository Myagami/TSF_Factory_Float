#!/usr/bin/php
<?php
$csv = file("TSF_Goods_Index.csv") ;
$Index = explode(array_shift($csv)) ;
//print_r($csv) ;
foreach($csv as $dat){
	$dat = explode(",",$dat) ;
	$C_dat = array_compile($Index,$dat) ;
	print_r($C_dat) ;
}
?>