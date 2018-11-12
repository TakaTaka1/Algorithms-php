<?php
// なんちゃってvalidation classを作成する
class Validation
{
	private $error = [];
	/**
	 * 文字数 
	 */
	public function chkLength($posts, $length=0, $type=null){
		if(!empty($posts)){
			foreach($posts as $key => $value){
				if(strlen($posts) < $length) {
				    $this->error[$key] = "{$length}以上の文字数が必要";
				    //return $this->showError($this->error);
					//return false;
				}else {
					return true;
				}
			}
		}
	}
	public function getError(){
		return $this->error;
	}		
}

$test = new Validation();
$tmp = ['name'=>'test1'];
$test->chkLength($tmp, 6, 'name');
var_dump($test->getError());

?>
