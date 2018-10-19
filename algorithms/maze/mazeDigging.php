<html><head><style>
    .wall{background-color:black; color:gray;}
    .road{background-color:white; color:white;}
    pre{padding:12px; font-size:10px; line-height:10px;}
</style></head><body><pre>
<?php
$maze = generateMaze(55,55);
echo drawMaze($maze);

function generateMaze($width=55, $height=55){
    // 必ず奇数になるように
    $width = floor($width/2)*2+1;
    $height = floor($height/2)*2+1;
    
    //迷路を初期化
    $maze =[];
    //全てを壁で埋める
    for($y=0; $y<$height; $y++) {
        $maze[$y] = [];
        for($x=0; $x<$width; $x++){
            $maze[$y][$x] = 1;
        }
    }
    
    $dx = floor(mt_rand(1, $width-2) /2) * 2+1;
    $dy = floor(mt_rand(1, $height-2) /2) * 2+1;
    $maze[$dy][$dx] = 0;
    return digMaze($maze, $dx, $dy, $width, $height);
}

function digMaze(&$maze, $x, $y, $width, $height){
    $UDLR = [[0,-1],[0,1],[-1,0],[1,0]];
    mt_shuffle($UDLR);
    for($i=0; $i<4; $i++){
        $dir = $UDLR[$i];
        // 2マス先を調べる
        $x2 = $dir[0]*2 + $x;
        $y2 = $dir[1]*2 + $y;

        if($x2 < 0 || $y2 < 0 || 
           $x2>= $width-1 ||
           $y2 >= $height-1) continue;
        
        if($maze[$y2][$x2]==0) continue;
        $maze[$y + $dir[1]][$x + $dir[0]] = 0;
        $maze[$y2][$x2] = 0;
        
        digMaze($maze, $x2,$y2,$width,$height);
    }
    return $maze;
}

function mt_shuffle(&$a){
    $a = array_values($a);
    
    for($i=count($a)-1; $i >=1; $i--){
        $r = mt_rand(0,$i);
        list($a[$i],$a[$r]) = array($a[$r],$a[$i]);
    }
}
function drawMaze($maze){
    $pat =[];
    $pat[0] = "<span class='road'>0,</span>";
    $pat[1] = "<span class='wall'>1,</span>";
    $html = "";
    for($y=0; $y < count($maze); $y++){
        for($x=0; $x < count($maze); $x++){
            $html .= $pat[$maze[$y][$x]];
        }
        $html .= "\n";
    }
    return $html;
}

?>

<pre></body></html>



