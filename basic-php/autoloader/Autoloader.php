<?php 
// 1.名前空間をつけたクラスを作成する
// 2.1でつけた名前空間のクラスを別のファイルで呼び出す(newでインスタンス化)
// 3.呼び出す場合にはrequire_onceを行う
// 4.その際にuse文を使えば記述は簡素化される


spl_autoload_register(function($name){
	$prefix = 'App';
	if(strpos($name, $prefix) === 0){
		print_r($name);
		$class = substr($name, strlen($prefix));
		$filePath = 'lib/'.$prefix.str_replace('\\', '/', $class).'.php';
		if(file_exists($filePath)){
			require_once $filePath;
		}
	}	
	
});

?>