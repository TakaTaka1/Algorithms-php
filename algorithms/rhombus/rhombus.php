<?php
function rhombus($howMany){

    for($i=0; $i<$howMany; $i++){
        for($j=0; $j<$howMany-($i+1); $j++){
            print_r("　");
        }
        for($z=0; $z<($i+1)*2-1; $z++){
            print_r("＊");
        }
        print_r("\n");
        if($z == ($howMany*2)-1){
            $count=0;
            for($h=$howMany; $h>0; $h--){
                for($j=0; $j<$count; $j++){
                    print_r("　");
                }
                for($g=0; $g<($h)*2-1; $g++){
                    print_r("＊");
                }
                print_r("\n");
                $count++;
            }
        }
    }

}
rhombus(10);
