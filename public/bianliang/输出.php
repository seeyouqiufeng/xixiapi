<?php
if(strpos($run_blcl[2],'array(')!==false or strpos($run_blcl[2],'$_GET["')!==false or strpos($run_blcl[2],'$_POST["')!==false or strpos($run_blcl[2],'$_REQUEST["')!==false){
$txt_sc .= 'echo '.$run_blcl[2].';'."\n";
}else{
$txt_sc .= 'echo "'.$run_blcl[2].'";'."\n";
}