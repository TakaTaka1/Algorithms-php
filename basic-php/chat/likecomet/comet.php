<!DOCTYPE  html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<dl>
  <dt>データ<dt>
  <dd id="view">ここにデータ</dd>
</dl>

<form id="add" action="comet.php?mode=add" method="post">
  <input type="text" name="data" value="" />
  <input type="submit" value="追加" />
</form>
</body>
</html>

<?php 

define('DATA_FILE','./data.log');


function getData() {
	return file_get_contents(DATA_FILE);
}

function getUpdateData () {
	$data = getData();
	$temp = $data;
	while($data === $temp){
		$temp = getData();
		sleep(1);
	}
	return $temp;
}

function pushData($data) {
	if (!empty($data)) {
		$data = str_replace(array("\n", "\r"), '', $data)
				. ' [' . date('c') . ']' . PHP_EOL;
		file_put_contents(DATA_FILE, $data, FILE_APPEND|LOCK_EX);
	}
	return getData();
}

if(isset($_GET['mode'])) {

	switch($_GET['mode']){
		case 'view':
			$data = getData();
			break;
		case 'check':
			$data = getUpdateData();
			break;
		case 'add':
			$data = pushData($_POST['data']);
			break;
	}

	echo nl2br(htmlspecialchars($data, ENT_QUOTES));
}

?>

<script>
jQuery(function($) {
  var $view = $('#view'),
      $data = $('input[name="data"]');

//   /**
//    * データ取得
//    */
  function getData() {
    $.post('comet.php?mode=view', {}, function(data) {
      $view.html(data);
      checkUpdate();
    });
  }

//   /**
//    * 更新チェック
//    */
  function checkUpdate() {
    $.post('comet.php?mode=check', {}, function(data) {
      $view.html(data);
      checkUpdate();
    });
  }

  $('#add').submit(function(event) {
    event.preventDefault();
    $.post('comet.php?mode=add', {data: $data.val()}, function(data) {
      $data.val('');
    });
  });

  getData();
});
</script>