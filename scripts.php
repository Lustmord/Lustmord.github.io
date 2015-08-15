<?php
    // Установка локали и даты
    setlocale(LC_ALL, "russian");
    $day = strftime('%d');
    $day = iconv('windows-1251', 'utf-8', $day);
    $month = strftime('%B');
    $month = iconv('windows-1251', 'utf-8', $month);
    $year = strftime('%Y');
?>

<?php
    $hour = (int) strftime('%H');
    $welcome = '';
    if ($hour > 0 and $hour < 6):
     $welcome = "Доброй ночи";
  elseif ($hour >= 6 and $hour < 11):
     $welcome = "Доброе утро";
  elseif ($hour >= 12 and $hour < 17):
     $welcome = "Добрый день";
  elseif ($hour >= 18 and $hour < 23 ):
     $welcome = "Добрый вечер";
  else: $welcome = "Доброй ночи";
 endif;
?>

<?php
    $i = (int) strftime('%u');
    $day = '';
    switch ($i) { 
        case 1: $day = "понедельник"; 
        case 2: $day = "вторник";
        case 3: $day = "среда";
        case 4: $day = "четверг";
        case 5: $day = "пятница";
        case 6: $day = "суббота";
        case 7: $day = "воскресенье";
        default: $day = "небытие";
    }
?>