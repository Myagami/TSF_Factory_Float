#!/usr/bin/php
<?php
$csv = file("TSF_Goods_Index.csv") ;
$Index = array_shift($csv) ;
//print_r($csv) ;
foreach($csv as $dat){
	$dat = explode(",",$dat) ;
	print_r($Index) ;
	print_r($dat) ;
}
?>