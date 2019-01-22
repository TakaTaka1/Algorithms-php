<?php
class Maze{
    public $maze;
    public $reached;
    public $isGoal;
    const MAX_W = 9;
    const MAX_H = 11;
    
    public function __construct($meiro_arr){
        $this->maze = $meiro_arr;
        $this->reached = [];
        $this->isGoal = false;
    }
    
    public function search($row, $col){
        if($this->isGoal){
            return true;
        }
        
        if($row < 0 || self::MAX_H <= $row || $col < 0 || self::MAX_W <= $col || $this->maze[$row][$col] == "#"){
            return false;
        }
        
        if(isset($this->maze[$row][$col]) && $this->maze[$row][$col] == ' '){
            $this->maze[$row][$col] = '+';
            self::search($row, $col+1); // 右
            self::search($row, $col-1); // 左
            self::search($row+1, $col); // 上 
            self::search($row-1, $col); // 下
            
            //return false;
        }
        
        // $this->reached[$row][$col] = '+';
        
        if($this->maze[$row][$col] == 'G'){
            $this->isGoal = true;
            return true;
        }
        
        // self::search($row, $col+1); // 右
        // self::search($row, $col-1); // 左
        // self::search($row+1, $col); // 上 
        // self::search($row-1, $col); // 下
        
        if($this->isGoal){
            return $this->maze;
        }else{
            return false;
        }
    }
}

$meiro_arr = <<<EOT
## #######
#  # ### #
#    ##  #
#### ## ##
####    ##
# ## #####
#    #   #
# #### # #
#      # #
## ## ## #
########G#
EOT;
$meiro_arr = array_map(function($x){return str_split($x);},explode("\n", $meiro_arr));
$maze = new Maze($meiro_arr);
$result = $maze->search(0,2);
var_dump($result);
foreach ($result as $x) {
  print_r(implode($x)."\n");
}
?>
