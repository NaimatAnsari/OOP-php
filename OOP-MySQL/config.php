<?php
// Database configuration
$host = 'localhost';
$dbname = 'y_crud';
$user = 'root';
$password = '';

try {
    // Create PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
