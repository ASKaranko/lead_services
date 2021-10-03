<?php
	if (empty( $_POST )) die("Bad request");
	$data = $_POST;
	$data["offer"] = 77;
	$data["flow"] = 2477;
	$data["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] );
	$data["ua"] = $_SERVER["HTTP_USER_AGENT"];

	//additional data parameters
	$data["country_code"] = $data["country"];
	$data["url"] = getBrowserUrl();
	$data["browser_locale"] = getBrowserLocale();
	$data["service"] = "profitpay";
	// end of additional parameters

	if (isset( $data["phonecc"] )) $data["phone"] = $data["phonecc"].$data["phone"];
	$data = http_build_query( $data );
	$curl = curl_init( "https://my.profitpay.one/api/wm/push.json?id=2894-a9929dd8bf4c323bedd66d19462a336b" );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
	curl_setopt( $curl, CURLOPT_POST, 1 );
	curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
	$result = json_decode( curl_exec( $curl ), true );
	curl_close( $curl );
	if ( $result["url"] ) {
	header( "Location: " . $result["url"] );
	} else header( "Location: success.php?" . http_build_query($result) );

	// google apps start
	$chGS = curl_init('https://script.google.com/macros/s/AKfycbwAKD-dnjGLSGsw9kvExLbrzG0K8JpPQrQWIlW4pIr0v4QY8eNa1sWtQKQW1XLRSwaB/exec');

	curl_setopt( $chGS, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $chGS, CURLOPT_TIMEOUT, 30 );
	curl_setopt( $chGS, CURLOPT_POST, 1 );
	curl_setopt( $chGS, CURLOPT_POSTFIELDS, $data );

	curl_exec($chGS);
	curl_close($chGS);
	die();

	// google apps end

	function getBrowserUrl()
    {
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];

        return $url;
    }

	function getBrowserLocale()
    {
        $accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
        return substr($accept_language, 0, 2);
    }
?>