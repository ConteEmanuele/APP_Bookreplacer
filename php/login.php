<?php

session_start();

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $url = 'http://127.0.0.1:8000/api/en/auth/login';
    $data = '{"username": "' . $username . '","password": "' . $password . '"}';

    $response = http_post( $url, $data );
    $response = json_decode($response,true);

    if ( isset($response["errors"][0]["title"]) ){ 
        header("Location:../login.php?message=" . $response["errors"][0]["title"] );
        exit(); 
    }

    $_SESSION['username'] = $username;

    echo "
    
    <meta http-equiv=\"refresh\" content=\"0.001;url=../dashboard.php\" />
    
    <script>

        localStorage.clear();   
        localStorage.setItem('token', '" . $response['data']['token'] . "');

    </script>";

}

function http_post($url, $data_string) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-AjaxPro-Method:ShowList',
        'Content-Type: application/json; charset=utf-8',
        'Content-Length: ' . strlen($data_string))
    );
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    if( curl_exec($ch) ){
        $data = curl_exec($ch);
    curl_close($ch);
    return $data;
    }

}

?>