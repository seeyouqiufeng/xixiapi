<?php
preg_match('#(.*);(.*);(.*)#',$run_blcl[2],$run_tscl);
$txt_sc .= 'for('.$run_tscl[1].';'.$run_tscl[2].';'.$run_tscl[3].'){'."\n";