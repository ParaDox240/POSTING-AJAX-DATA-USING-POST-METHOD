<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $xmlData = file_get_contents("php://input");

    
    $xml = simplexml_load_string($xmlData);

    if ($xml) {
        
        $name = $xml->user->name;
        $email = $xml->user->email;
        $age = $xml->user->age;

        
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Age: $age<br>";
    } else {
        echo "Invalid XML data!";
    }
} else {
    echo "Invalid request method!";
}
?>