<?php
// List of VPN/Proxy/TOR keywords in hostnames
$vpn_keywords = ['vpn', 'proxy', 'tor', 'anonymous', 'data-center', 'hosting', 'shield'];

// Get visitor's hostname
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);

// Check if hostname contains suspicious keywords
foreach ($vpn_keywords as $keyword) {
    if (stripos($hostname, $keyword) !== false) {
        header("HTTP/1.1 403 Forbidden");
        die("<h1>Access Denied</h1><p>VPN/Proxy/Tor connections are blocked.</p>");
    }
}

// Optional: Block known datacenter IP ranges (e.g., AWS, Google Cloud)
$is_datacenter = false;
$ip_parts = explode('.', $ip);
if (($ip_parts[0] == '3' && $ip_parts[1] == '80') ||  // Example: AWS us-east-1
    ($ip_parts[0] == '3' && $ip_parts[1] == '0')) {   // Example: Google Cloud
    $is_datacenter = true;
}

if ($is_datacenter) {
    header("HTTP/1.1 403 Forbidden");
    die("<h1>Access Denied</h1><p>Datacenter IPs are blocked.</p>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HELLKING</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2b2b2b 100%);
            color: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .container {
            background-color: rgba(30, 30, 30, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            width: 90%;
        }
        
        h1 {
            color: #ff3333;
            text-shadow: 0 0 10px rgba(255, 51, 51, 0.5);
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        
        .telegram-links {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .panel-link {
            background-color: #444444;
            padding: 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            border: 1px solid #555555;
        }
        
        .telegram-link {
            background-color: #333333;
            padding: 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            border: 1px solid #444444;
        }
        
        .telegram-link:hover, .panel-link:hover {
            background-color: #555555;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .footer {
            margin-top: 30px;
            font-size: 0.8em;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>HELLKING</h1>
        
        <!-- MR BEN PANEL LINK -->
        <div class="telegram-links">
            <a href="https://mrbenfreepanel.x10.bz/" class="panel-link" target="_blank" rel="noopener noreferrer">
                MR BEN PANEL (OFFICIAL LINK)
            </a>
        </div>
        
        <!-- TELEGRAM LINKS -->
        <div class="telegram-links">
            <a href="https://t.me/PRIMEDDOSER" class="telegram-link" target="_blank" rel="noopener noreferrer">
                JOIN TELEGRAM CHANNEL 1 - PRIMEDDOSER
            </a>
            
            <a href="https://t.me/sketchElliot" class="telegram-link" target="_blank" rel="noopener noreferrer">
                JOIN TELEGRAM CHANNEL 2 - SKETCH ELLIOT
            </a>
            
            <a href="https://t.me/MrBenOfficialCh" class="telegram-link" target="_blank" rel="noopener noreferrer">
                JOIN TELEGRAM CHANNEL 3 - MR BEN
            </a>
        </div>
        
        <div class="footer">
            HELLKING - Secure Portal
        </div>
    </div>

    <!-- Basic Security Measures -->
    <script>
        // Prevent right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        
        // Prevent inspect element
        document.onkeydown = function(e) {
            if (e.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        };
    </script>
</body>
</html>