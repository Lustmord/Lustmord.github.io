<?php
    $shop = "0";
    $bKiosk = "open";
    if ($shop == "open") {
        echo "Иду в магазин ";
        echo "Покупаю хлеб ";
    } elseif ($bKiosk == "opn") {
        echo "Иду в ближний киоск ";
    } else { echo "Иду в дальний киоск ";
    } 
        echo "Иду домой";

        

echo "\n";


// Тернарный оператор
$check = false;
echo ($check) ? "good " : "bad ";


/* Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23 */
$hour = (int) strftime('%H');
// Инициализируем переменную для приветствия
$welcome = '';

 if ($hour > 0 and $hour < 6) {
     $welcome = "Доброй ночи";
 } elseif ($hour >= 6 and $hour <= 11) {
     $welcome = "Доброе утро";
 } elseif ($hour >= 12 and $hour <= 17) {
     $welcome = "Добрый день";
 } elseif ($hour >= 18 and $hour <= 23 ) {
     $welcome = "Добрый вечер";
 } else {
     echo "Доброй ночи";
 }
?>

<h1><?= $welcome ?>, Двачер!</h1>