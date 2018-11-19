<?php
// JSON形式のテキストを生成する
$json = [
    ["name"=>"Google", "url"=>"https://www.google.co.jp/"],
    ["name"=>"Yahoo!", "url"=>"http://www.yahoo.co.jp/"]
];
 
// JSON用のヘッダを定義して出力
header("Content-Type: application/json; charset=utf-8");
echo json_encode($json);
exit();
?>
