<?php
header("Content-Type:text/html;charset=UTF-8");
ini_set('max_execution_time', 10);
$info_bycl = $_GET["code"];
$name_bycl = $_GET["name"];
if($info_bycl==null){
    echo 'API内容不可为空！参数(code)';
    exit();
}
if ($name_bycl==null) {
    echo '请输入应用名！参数(name)';
    exit();
    }
#处理简单文本替换类变量
$wb_do5ef = [
    '[年]' => 'Y',
    '[月]' => 'm',
    '[日]' => 'd',
    '[时]' => 'h',
    '[分]' => 'i',
    '[秒]' => 's',
    '[星期]' => 'l',
    '[完整时间]' => '[当前时间;Y年m月d日h时i分s秒]',
    '[换行]' => "\n",
];
$wb_do5ef2 = [
    '[endif]' => "}\n",
    '[else]' => "} else {\n",
    '[default]' => "default:\n",
    '[endswitch]' => "}\n",
    '[endfor]' => "}\n",
];
$info_bycl =str_replace(array_keys($wb_do5ef),array_values($wb_do5ef),$info_bycl);
for ($xh_cl=0; true; $xh_cl++) {
    $bj_jg = $info_bycl;
    $nc_info_bycl = preg_match('#\[[^\[\]]+\]#',$info_bycl,$run_byz[$xh_cl]);
    $run_byz[$xh_cl]=implode($run_byz[$xh_cl]);
    $info_bycl = preg_replace ('#\[[^\[\]]+\]#','$run_byz!1A'.$xh_cl.'!2A',$info_bycl,1);
    $run_byz[$xh_cl-1] = str_replace('!1A','[',$run_byz[$xh_cl-1]);
    $run_byz[$xh_cl-1] = str_replace('!2A',']',$run_byz[$xh_cl-1]);
    if($info_bycl==$bj_jg)
        break;
        
} 
$info_bycl = str_replace('!1A','[',$info_bycl);
$info_bycl = str_replace('!2A',']',$info_bycl);
$run_byz = array_filter($run_byz);
for ($xh_cl=0; true; $xh_cl++) {
    if(preg_match("#\[(.*?);(.*)\]#",$run_byz[$xh_cl],$run_blcl)){
        if($run_blcl[1]==null){
            break;
        }
        include "bianliang/$run_blcl[1].php";
    }else{
        if($run_byz[$xh_cl]==null){
            break;
        }
        $txt_sc .= str_replace(array_keys($wb_do5ef2),array_values($wb_do5ef2),$run_byz[$xh_cl]);
    }
}
$txt_sc = $txt_sc.'echo "'.$info_bycl.'";';
fwrite(fopen("$name_bycl.php", "w"),"<?php \n".'header("Content-Type:text/html;charset=UTF-8");'."\n".$txt_sc);