<?php
$run_byz[$xh_cl] = preg_replace ('#\[变量;(.*?)\]#','$'.$run_blcl[2],$run_byz[($xh_cl)],1);
for($sd_x=$xh_cl;$sd_x<=10;$sd_x++){
        $run_byz[$sd_x] = str_replace('$run_byz['.$xh_cl.']','$'.$run_blcl[2],$run_byz[$sd_x]);
    } 