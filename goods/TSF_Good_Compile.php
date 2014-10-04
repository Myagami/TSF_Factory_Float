#!/usr/bin/php
<?php
$csv = file("TSF_Goods_Index.csv") ;
$Index = array_shift($csv) ;
print_r($csv) ;
foreach($csv as $dat){
	print_r(array_combine($Index,explode(",",$dat))) ;
}
?>