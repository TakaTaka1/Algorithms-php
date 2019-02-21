<?php
// CONST IMG_DIR = "./tmpDir";
CONST IMG_DIR = "./phpfiles";

$res_dir = opendir(IMG_DIR);
while (false !== ($file_list[] = readdir($res_dir)));
closedir($res_dir);
foreach($file_list as $value){
	$tmp[] = explode('_',$value);
}
foreach($tmp as $key => $val){
	if(DateTime::createFromFormat('Ymd',$val[0])){
		$required[] = $file_list[$key];
		require("./phpfiles/".$file_list[$key]);			
	}
}
foreach($required as $key => $value){
	$tmps[] = explode('_', $value);
}
foreach($tmps as $key => $val){
	foreach($val as $key => $value){
		if(!is_numeric($value) && ctype_alpha($value)){
			// print_r($value);
			$merge[] = ucfirst($val[1]).str_replace('.php','',ucfirst($val[2]));
		}
	}
}
$newTell = $merge[0]::testMethod();
print_r($newTell);







