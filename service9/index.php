<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);


// app
if (!defined('DA_APP')) {
    define('DA_APP',true);
}



// static dirs
define('DA_DIR', __DIR__.'/');
define('DA_DIR_SITES', DA_DIR.'sites/');


if (!defined('DA_APP_TEST')) {
    spl_autoload_register(function ($class_name) {
        $file_name = $class_name . '.php';
        $file_name = str_replace("\\", "/", $file_name);
        if (file_exists($file_name)) {

            require_once(DA_DIR.$file_name);

        } else {
            throw new \Exception('Class '.$class_name.' not found');
        }
    });

}

use lib\APP;
use lib\Mobile_Detect;

require_once DA_DIR.'lib/functions.php';

$mobile_detect = new Mobile_Detect();
$is_mobile = $mobile_detect->isMobile();


if (!isset($lp_params)) {
    $lp_params = array();
}


APP::init($lp_params);

$da_config = APP::getConfig();

// session start

da_session()->setId('da'.substr(md5($da_config['product']['code'].$da_config['lang']),0,5));


da_session()->start();

$current_url = $_SERVER['REQUEST_URI'];

if (empty($da_config['original_url']) && strpos($current_url, 'index.php')!==false) {
    $current_url = str_replace('/index.php', '', $current_url);
    da_redirect($current_url);
}


// do test?
if($da_config['mode']!='production'){
    require_once DA_DIR.'lib/test.php';
    $DA_test = new DA_test();
    $DA_test->run();
}



// init customs
init_customs($da_config['customs']);

// default site
$current_site = $da_config['routing_path'][0];


// find active sites
$sites=array();
$res = scandir(DA_DIR_SITES);
if(!empty($res)){
    foreach($res as $k=>$v){
        if($v == '.' || $v == '..' || !is_dir(DA_DIR_SITES.$v)){
            continue;
        }
        $sites[]=$v;
    }
}

// change site 
if(!empty($_GET['site']) && in_array($_GET['site'], $sites)){
    $current_site=$_GET['site'];
}

// load site
$current_site_path = DA_DIR_SITES.$current_site.'/';

APP::init(array('current_site'=>$current_site));


// path to controller.php
$controller_path = $current_site_path;

// change path to template.php for mobile
if($is_mobile && in_array($current_site, $da_config['mobile_sites'])) {
    $current_site_path .= 'mobile/';
}

if(file_exists($controller_path.'controller.php')){
    ob_start();
    include($controller_path.'controller.php');
    $template_str = ob_get_contents();
    ob_end_clean();
    echo parse_template($template_str);
}else{
    include(DA_DIR_SITES.'404/template.php');
}
