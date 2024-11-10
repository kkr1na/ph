<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    
    // Обробка даних (збереження в базу даних, відправка на електронну пошту тощо)
    echo "Ваш рейтинг: " . $rating . "<br>";
    echo "Ваші коментарі: " . $feedback;
}
?>
