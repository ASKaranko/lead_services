<?php if (!defined('DA_APP')) {
    exit;
}


// template file path
if (!empty($_POST['action']) || !empty($_GET['action'])) {

    $ext = false;
    $price = get_price();
    if (!empty($_POST['ext']) || !empty($_GET['ext'])) {
        $ext = true;
        $price = get_price_extended();
    }
    set_extended($ext);


    $order_params = array(
        'price' => $price,
        'currency' => get_currency(),
        'extended' => $ext,
        'action'=>'extension'
    );


    if (!empty($_POST['quantity'])) {
        $order_params['quantity'] = $_POST['quantity'];
    } elseif (!empty($_GET['quantity'])) {
        $order_params['quantity'] = $_GET['quantity'];
    }


    $order = get_order();

    if (empty($order_params['quantity']) && !empty($order['quantity'])) {

        $order_params['quantity'] = $order['quantity'];

    }



    $order_params['base_price'] = $price;



    form_extension($order_params);

    go_next_step();
}


include($current_site_path . 'template.php');
