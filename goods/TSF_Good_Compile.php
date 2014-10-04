#!/usr/bin/php
<?php
   //Read
$csv = file("TSF_Goods_Index.csv") ;

//Index
$Index = array_shift($csv) ;
$Index = explode(",",$Index) ;
$Index[10] = str_replace(array("\r\n","\n","\r"), '', $Index[10]) ;
//Output
foreach($csv as $dat){
	//キーを割り振る
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	//出力判定
	if($C_dat["flug"] == 1 ){
		$fh = fopen("TSF_Goods_".$C_dat["name"].".dat","w");
		print_r($C_dat) ;
		$C_dat["name"] .= $C_dat["Pos"] ;
		unset($C_dat["Pos"]) ;
		unset($C_dat["flug"]) ;
		foreach($C_dat as $key => $val){
			fwrite($fh,"{$key}={$val}\n") ;
		}
		fclose($fh) ;
	}
}
?>