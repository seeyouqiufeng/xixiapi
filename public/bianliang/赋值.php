<?php
preg_match('#(.*);(.*)#',$run_blcl[2],$run_tscl);
if(strpos($run_tscl[2],'array(')!==false or strpos($run_tscl[2],'$_GET["')!==false or strpos($run_tscl[2],'$_POST["')!==false or strpos($run_tscl[2],'$_REQUEST["')!==false){
$txt_sc .= $run_tscl[1].'='.$run_tscl[2].";\n";
}else{
$txt_sc .= $run_tscl[1].'="'.$run_tscl[2].'"'.";\n";
}