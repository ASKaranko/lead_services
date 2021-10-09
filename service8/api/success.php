<?php

if (is_file('config.php')) {
    require_once 'config.php';
} else {
    exit('Для начала работы необходимо сконфигурировать приложение');
}

$token = defined('KMA_ACCESS_TOKEN') ? KMA_ACCESS_TOKEN : 'access token';
$channel = defined('KMA_CHANNEL') ? KMA_CHANNEL : 'channel';
$debug = defined('KMA_DEBUG') ? KMA_DEBUG : false;

function getBrowserUrl() {
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    return $url;
}

function getCountryByIp($kma) {
    require_once './sxgeo/SxGeo.php';
    $ip = $kma->getIp();
    $SxGeo = new SxGeo('./sxgeo/SxGeo.dat', SXGEO_BATCH | SXGEO_MEMORY);
    return $SxGeo->getCountry($ip);
}

if ($debug) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['order_status'])) {
    switch ($_GET['order_status']) {
        case 'success':
            include_once 'template/success.php';
            break;
        case 'error':
            include_once 'template/error.php';
            break;
        default:
            exit();
    }
    exit();
}

require_once 'KmaLead.php';

/** @var KmaLead $kma */
$kma = new KmaLead($token);

if (isset($_SERVER['HTTP_X_KMA_API']) && $_SERVER['HTTP_X_KMA_API'] === 'click') {
    echo $kma->getClick($channel);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit();
}

$data = [
    'channel' => $channel,
    'ip' => $kma->getIp(),
    'url' => getBrowserUrl(),
    'browser_locale' => $_POST['language'],
    'service' => 'KMA',
    'country_code' => getCountryByIp($kma),
    'clickid' => $_POST['d1'] ? $_POST['d1'] : ''
];

foreach (['name', 'phone', 'data1', 'data2', 'data3', 'data4', 'data5', 'fbp', 'click', 'referer', 'return_page', 'client_data', 'address', 'country'] as $item) {
    if (isset($_POST[$item]) && !empty($_POST[$item])) {
        $data[$item] = $_POST[$item];
    }
}

$kma->debug = $debug;

if (isset($_POST['return_page']) && !empty($_POST['return_page'])) {
    echo $kma->addLeadAndReturnPage($data);
    exit();
} else {
    $order = $kma->addLead($data);
    $name = $data['name'];
    $phone = $data['phone'];
}

if (empty($order)) {
    header('Location: success.php?order_status=error');
} else {
    session_start();
    $_SESSION['order'] = $order;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['language'] = isset($_POST['language']) ? $_POST['language'] : 'ru';
    header('Location: success.php?order_status=success');
}

exit();
