<?php
// date_default_timezone_set('Asia/Taipei');
require $_SERVER['DOCUMENT_ROOT'] . '/libs/Smarty.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/Common.php';

define("MARJORIE_URL", 'https://www.marjorie.co');

$tpl = new Smarty();
// $tpl->debugging = true;
// $tpl->caching = true;
// $tpl->cache_lifetime = 120;
$gTplCompileDir = $_SERVER['DOCUMENT_ROOT'] . '/tpl_c';
$gTplTemplateDir = $_SERVER['DOCUMENT_ROOT'] . '/tpl';

//替換讀取tpl目錄
function smartyDisplay(&$tpl, $html)
{
    global $gTplCompileDir;
    global $gTplTemplateDir;
    
    $tpl->compile_dir = $gTplCompileDir;
    $tpl->template_dir = $gTplTemplateDir;
    $filename = "../tpl" . $html;
    $tpl->display($filename);
}