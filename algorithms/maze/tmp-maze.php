<html><head><style>
    .wall{background-color:black; color:gray;}
    .road{background-color:white; color:white;}
    pre{padding:12px; font-size:10px; line-height:10px;}
</style></head><body><pre>
<?php
$maze = generateMaze(55,55);
echo drawMaze($maze);

function generateMaze($width=55, $height=55){
    
    $width= floor($width/2)*2+1;
    $height= floor($height/2)*2+1;
    $maze =[];
    
    for($y=0; $y<$height; $y++){
        $maze[$y] = [];
        for($x=0; $x<$width; $x++){
            $maze[$y][$x] = 0;
            if($x==0 || ($x==($width-1)) || $y==0 || ($y==($height-1))){
                $maze[$y][$x] = 1;
            }
        }
    }

    $UDLR = [[0,-1],[0,1],[-1,0],[1,0]];
    for($y=2; $y<$height-2; $y +=2){
        for($x=2; $x<$width-2; $x +=2){
            $maze[$x][$y] = 1;
            $r = $UDLR[mt_rand(0,3)];
            $y2 = $y + $r[0];
            $x2 = $x + $r[1];
            $maze[$y2][$x2] = 1;
        }
    }
    return $maze;
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
