Поскольку GitHub не принимает язык PHP, подготовлена инструкция для запуска проекта

1. Установка необходимого ПО
Для работы PHP-проекта понадобится:

Веб-сервер с поддержкой PHP (например, XAMPP, WAMP, MAMP или OpenServer)

Git (для клонирования репозитория)

Варианты установки:
Windows: Установите XAMPP или OpenServer

macOS: Установите MAMP

Linux: Установите Apache, MySQL и PHP через пакетный менеджер

2. Клонирование репозитория
Откройте терминал/командную строку и выполните:

bash
git clone https://github.com/Elero16/guestbook.git

3. Запуск проекта
Скопируйте папку проекта в директорию веб-сервера:

Для XAMPP: C:\xampp\htdocs\

Для OpenServer: OpenServer/domains/

Для MAMP: /Applications/MAMP/htdocs/

Запустите веб-сервер (Apache в XAMPP/MAMP или OpenServer)

Откройте браузер и перейдите по адресу:

text
http://localhost/guestbook/
Альтернативный вариант (без установки сервера)
Для быстрого тестирования можно использовать встроенный PHP-сервер:

bash
php -S localhost:8000
Затем откройте http://localhost:8000 в браузере.
