#!/usr/bin/php
<?php
   //Read
$csv = file("TSF_Goods_Index.csv") ;

//Index
$Index = array_shift($csv) ;
$Index = explode(",",$Index) ;

//Output
foreach($csv as $dat){
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	print_r($C_dat) ;
}
?>