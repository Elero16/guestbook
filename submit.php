<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    if (!empty($name) && !empty($message)) {
        $date = date('Y-m-d H:i:s');
        $entry = $name . '|' . $date . '|' . $message . PHP_EOL;
        
        file_put_contents('messages.txt', $entry, FILE_APPEND);
    }
}

header('Location: index.php');
exit;
?>
