<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the posted username and password from the client
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace this with your actual database or authentication logic
    if (verifyLogin($username, $password)) {
        // If login is successful, generate an authentication token (JWT, session, or any other method)
        $randomBytes = random_bytes(5);
        $randomString = bin2hex($randomBytes);

        $sessionid = $randomString;
       
        $payload = [
            "session" => $sessionid,
            "exp" => time() + 3600,  
            "username" => $username,
            "alg"=> "HS256"
        ];

        $token = generateToken($payload);

        setcookie('token', $token, time() + 3600, '/', '', true, true);

        $jwtToken = $_COOKIE['token'];

        $decodejwt = base64_decode($jwtToken);

        $jsondata=json_decode($decodejwt, true);

        $d1=$jsondata['session'];

        echo $jsondata['session'];

        if ($jsondata['session']==$jsondata['session'] && $jsondata['username']==$username) {
            
            header("Location: ../../home/"); 
            exit;
        }
        echo json_encode(array('success' => true, 'message' => 'Login successful', 'token' => $token));
    } else {
        // Return an error response
        echo json_encode(array('success' => false, 'message' => 'Invalid credentials'));
    }
} else {
    // Handle invalid HTTP method
    http_response_code(405);
    echo json_encode(array('success' => false, 'message' => 'Method not allowed'));
}

// Replace this function with your actual login verification logic
function verifyLogin($username, $password) {
    // For demonstration purposes, accept any username and password
    return true;
}

// Replace this function with your actual token generation logic
function generateToken($payload) {
    // For demonstration purposes, generate a simple token
    return base64_encode(json_encode($payload));
}
?>
