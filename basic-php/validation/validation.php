<?php
class Validation
{
	private $error = [];
	/**
	 * chkLength 
	 */
	public function chkLength($value, $length=0, $type=null){
		if(!empty($value)){
			//foreach($posts as $key => $value){
				if(strlen($value) < $length) {
				    $this->error[$type] = "Too short, you need more than {$length}";
					return $this->error;
				}
				$this->error[] = null;
				return $this->error;
			//}
		}
	}
	public function getError(){
		return $this->error;
	}	
}

$test = new Validation();
$tmp = ['name'=>'test1','password'=>1234];
$test->chkLength($tmp['name'], 6, 'name');
//var_dump($test->chkLength($tmp['password'], 3));
var_dump($test->getError());


?>
