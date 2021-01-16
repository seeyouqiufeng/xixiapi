<?php
$run_blcl[2] = explode(",",$run_blcl[2]);
$yxgs_ys = count($run_blcl[2]);
if (strpos($run_blcl[2][0],'=>')!==false) {
        $run_blclD = explode("=>",$run_blcl[2][0]);
        $run_blcl[2][0] = '"'.$run_blclD[0].'"=>"'.$run_blclD[1].'"';
        $run_blclc .= $run_blcl[2][0];
    }else {
        $run_blclc .= '"'.$run_blcl[2][0].'"';
    }
for ($for_ys = 1; $for_ys < $yxgs_ys; $for_ys++) {
    if (strpos($run_blcl[2][$for_ys],'=>')!==false) {
        $run_blclD = explode("=>",$run_blcl[2][$for_ys]);
        $run_blcl[2][$for_ys] = '"'.$run_blclD[0].'"=>"'.$run_blclD[1].'"';
        $run_blclc .= ','.$run_blcl[2][$for_ys];
    }else {
        $run_blclc .= ',"'.$run_blcl[2][$for_ys].'"';
    }
}
$run_byz[($xh_cl+1)] = str_replace('$run_byz['.$xh_cl.']','array('.$run_blclc.')',$run_byz[($xh_cl+1)]);