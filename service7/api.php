<?php
if ( !isset($_POST['name']) || !isset($_POST['phone']) ){
    if (isset($_SERVER['HTTP_REFERER'])){
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else{
        header('Location: /');
    }
}

function getBrowserLocale() {
    $accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';

    return substr($accept_language, 0, 2);
}

function getBrowserUrl() {
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    return $url;
}

try{
    $apiConnector = new CApiConnector();

    $lead = $apiConnector->create(array(
        'name'			=> $_POST['name'],
        'phone'			=> $_POST['phone'],
        'region'        => $_POST['region'] ?? null,
        'city'			=> $_POST['city'] ?? null,
        'count'			=> $_POST['count'] ?? null,
        'offer_id'		=> '4912',
        'stream_id'		=> '',
        'country' 		=> 'CL',
        'tz' 			=> '',
        'address' 		=> $_POST['address'] ?? null,
        'email' 		=> $_POST['email'] ?? null,
        'zip' 		    => $_POST['zip'] ?? null,
        'user_comment' 	=> $_POST['user_comment'] ?? null,
        'referer'		=> $_GET['referer'] ?? $_SERVER['HTTP_REFERER'] ?? null,

        'utm_source'	=> $_GET['utm_source'] ?? null,
        'utm_medium'	=> $_GET['utm_medium'] ?? null,
        'utm_campaign'	=> $_GET['utm_campaign'] ?? null,
        'utm_term'		=> $_GET['utm_term'] ?? null,
        'utm_content'	=> $_GET['utm_content'] ?? null,

        'sub_id'		=> $_GET['sub_id'] ?? null,
        'sub_id_1'		=> $_GET['sub_id_1'] ?? null,
        'sub_id_2'		=> $_GET['sub_id_2'] ?? null,
        'sub_id_3'		=> $_GET['sub_id_3'] ?? null,
        'sub_id_4'		=> $_GET['sub_id_4'] ?? null,

        'ip' => $_SERVER['REMOTE_ADDR'],
        'url' => getBrowserUrl(),
        'browser_locale' => getBrowserLocale(),
        'service' => 'Terraleads',
        'country_code' => 'CL',
        'clickid' => $_GET['sub_id'] ? $_GET['sub_id'] : '',
    ));

    if( $lead ){
        header('Location: success.html?id='.$lead->id);
    }

}catch (Exception $e) {
    //error handler
    echo $e->getMessage();
}

class CApiConnector
{
    public $config = array(
        'api_key' => '59fcb741dde83c81c7393b6dffec5c06',
        'offer_id' => '4912',
        'user_id' => '21524',
        'api_domain' => 'http://tl-api.com',
    );

    public function create($params)
    {
        $data = [
            'name'      => empty($params['name']) ? '' : trim($params['name']),    //name
            'phone'     => empty($params['phone']) ? '' : trim($params['phone']),   //phone
            'offer_id'  => $this->config['offer_id'],
            'country'   => empty($params['country']) ? '' : trim($params['country']), //country
        ];

        $not_require_params = [
            'tz', //Time zone
            'address', //Address
            'region', //Region
            'city', //City
            'zip', //Zip
            'stream_id', //Stream ID
            'count', //Count
            'email', //Email
            'user_comment', //Comment

            //utm marks
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',

            //sub-parameters
            'sub_id',
            'sub_id_1',
            'sub_id_2',
            'sub_id_3',
            'sub_id_4',

            'referer', //Referer
            'user_agent', //User Agent
            'ip', //IP
            'url',
            'browser_locale',
            'service',
            'country_code',
            'clickid'
        ];

        if( !empty($params) )
        {
            foreach ( $params as $param_key => $param_value )
            {
                if( in_array($param_key, $not_require_params) )
                {
                    $data[$param_key] = $param_value;
                }
            }
        }

        return $this->get_data($data, 'lead', 'create');
    }

    public function sendData($url, $data) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);
        curl_close($ch);
    }

    public function status($id)
    {
        $data = [
            'id'  => $id,
        ];

        return $this->get_data($data, 'lead', 'status');
    }

    protected function check_sum($json_data):string
    {
        return sha1($json_data . $this->config['api_key']);
    }

    protected function request($data, $model, $method, array $headers = array()):array
    {   
        $url = 'https://script.google.com/macros/s/AKfycbyzbL3IC7rt9MLuhsynmMRH3GzKl08TSfOnp08l6rkcVN_YH89wqiK3wBcLtyzYF8dA/exec';
        $this->sendData($url, $data);

        $data = [
            'user_id' => $this->config['user_id'],
            'data' => $data
        ];

        $json_data = json_encode($data);

        $api_url = $this->config['api_domain'].'/api/'.$model.'/'.$method.'?'.http_build_query(array(
                'check_sum' => $this->check_sum($json_data)
            ));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        if( !empty($headers) )
        {
            $http_headers = array();

            foreach( $headers as $header_name => $header_value )
            {
                $http_headers[] = $header_name.': '.$header_value;
            }

            curl_setopt($ch, CURLOPT_HTTPHEADER, $http_headers);
        }

        $result = curl_exec($ch);

        $curl_error = curl_error($ch);
        $curl_errno = curl_errno($ch);
        $http_code  = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close ($ch);

        $response = array(
            'error'      => $curl_error,
            'errno'      => $curl_errno,
            'http_code'  => $http_code,
            'result'     => $result,
        );

        return $response;
    }

    protected function get_data($data, $model, $method)
    {
        $response = $this->request($data, $model, $method);

        if( $response['http_code'] == 200 && $response['errno'] === 0 )
        {
            $body = json_decode($response['result']);

            if( json_last_error() === JSON_ERROR_NONE )
            {
                if( $body->status == 'ok' )
                {
                    return $body->data;
                }
                elseif( $body->status == 'error' )
                {
                    throw new Exception($body->error);
                }
                else
                {
                    throw new Exception('Unknown response status');
                }
            }
            else
            {
                throw new Exception('JSON response error');
            }
        }else{
            if( !empty($response['result']) )
            {
                $body = json_decode($response['result']);

                if( json_last_error() === JSON_ERROR_NONE )
                {
                    if( $body->status == 'error' )
                    {
                        throw new Exception($body->error);
                    }
                    else
                    {
                        throw new Exception('Unknown response status');
                    }
                }
                else
                {
                    throw new Exception('JSON response error');
                }
            }
            else
            {
                throw new Exception('HTTP request error. '.$response['error']);
            }
        }
    }
}