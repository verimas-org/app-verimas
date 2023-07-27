<?php
//////////////////////////////////////////////////////////access counter
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function file_http(
    $url,
    $params = null,    //パラメータがあれば配列で渡す
    $method = 'GET',    //GET or POST
    &$status = null,    //参照渡しでレスポンスのHTTP Status Codeを返す
    &$http_response_header = null,    //参照渡しでレスポンスのHTTP Headerの配列を返す
    $request_header = array()    //追加したいリクエストのHTTP Headerがあれば
) {

    $opt = array(
        'method' => $method,
        'header' => (array)$request_header,    //PHP 5.2.10 / 5.3.0 以降は配列でもOK
        'ignore_errors' => true,    //PHP 5.2.10 / 5.3.0 以降で有効
    );

    if ($params) {
        $query_string = http_build_query($params);

        if ($method === 'GET') {
            $url .= '?' . $query_string;
        } else {    //POSTの場合
            $opt['header'][] = 'Content-type: application/x-www-form-urlencoded';
            $opt['content'] = $query_string;
        }
    }

    $res = file_get_contents($url, false, stream_context_create(array('http' => $opt)));

    //レスポンスのHTTP Headerは$http_response_headerにセットされている
    if (is_array($http_response_header)) {
        preg_match('@^HTTP/1\\.. ([0-9]{3}) @i', $http_response_header[0], $matches);
        $status = $matches[1];
    }

    return $res;
}

$result = file_http(
    'https://qscf0r9c64.execute-api.ap-northeast-1.amazonaws.com/prod-verimas/verimas/access-counter',
    array(
        'accesspage' => $_SERVER['REQUEST_URI'],
        'clientip' => getUserIP(),
        'clientagent' => $_SERVER['HTTP_USER_AGENT']
    ),
    'GET',
    $status,
    $responseHeaders,
    array('x-api-key: doPa4IKgOY66QfiGYqR5M9j7B3z4JNkj7ugJvkN9')
);
//echo $result;

$pageaccess_counter= 0;
if (substr($result, 0, 8) == "HTTP200-")
{
    $pageaccess_counter = substr($result, 8);
}

//////////////////////////////////////////////////////////access counter
?>
