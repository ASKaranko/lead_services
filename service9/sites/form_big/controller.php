<?php if (!defined('DA_APP')) {
    exit;
}


// template file path
if (!empty($_POST)) {

    $err = array();
    $order = $_POST;
    $arr = array('name', 'phone', 'surname', 'email', 'address', 'pcode', 'city', 'country');
    foreach ($arr as $k => $v) {
        if (!isset($_POST[$v]) || mb_strlen($_POST[$v]) < 2) {
            $err[$v] = __lang('is_required');
        }
    }

    $k = 'phone';
    if (!is_numeric($_POST[$k])) {
        $err[$k] = __lang('only_numbers');
    }

    if (isset($_POST['quantity'])) {
        $order['quantity'] = $_POST['quantity'];
    }

    set_pay_on_delivery(!empty($order['pay_on_delivery']) ? true : false);


    if (empty($err)) {
        form_big($order);
        go_next_step();
        return;
    }


}


include($current_site_path . 'template.php');
