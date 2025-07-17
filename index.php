<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Гостевая книга</h1>
        
        <form action="submit.php" method="post">
            <div class="form-group">
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            
            <button type="submit">Отправить</button>
        </form>
        
        <div class="messages">
            <h2>Последние сообщения</h2>
            <?php
            if (file_exists('messages.txt')) {
                $messages = file('messages.txt');
                if (!empty($messages)) {
                    echo '<ul>';
                    foreach (array_reverse($messages) as $message) {
                        $parts = explode('|', $message);
                        if (count($parts) >= 3) {
                            echo '<li>';
                            echo '<strong>' . htmlspecialchars($parts[0]) . '</strong>';
                            echo '<span class="date">' . htmlspecialchars($parts[1]) . '</span>';
                            echo '<p>' . htmlspecialchars($parts[2]) . '</p>';
                            echo '</li>';
                        }
                    }
                    echo '</ul>';
                } else {
                    echo '<p>Пока нет сообщений.</p>';
                }
            } else {
                echo '<p>Пока нет сообщений.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
