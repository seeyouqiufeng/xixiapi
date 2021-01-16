<?php
preg_match('#(.*);(.*)#',$run_blcl[2],$run_tscl);
$txt_sc .= '$run_byz['.$xh_cl.']='.'strpos("'.$run_tscl[2].'","'.$run_tscl[1].'");'."\n";