<!DOCTYPE HTML>
<html>
	<head>
		<title>Два.ч — Cвободное общение</title>
		<link href="style.css" rel="stylesheet">
        <meta charset="utf-8"/>
	</head>
	<body class="bg">
		<header>
            <h1>Два.ч</h1>
		  <!--<h3><?= $welcome ?>, Битард. Сегодня <?= $day ?>!</h3><br>-->
		  <hr size="1"  noshade color="#D3D3D3"/><br>
            <table class="yobas">
			 <tr>
				<td><img src="pics/1345762147501.png" width="90" height="90"></td>
                <td><img src="pics/1345761757771.png" width="90" height="90"></td>
                <td><img src="pics/1346274672404.png" width="90" height="90"></td>
             </tr>
		  </table>
        </header>
        <table class="whatis">
                <tr>
                    <td>
                        <p class="whatis">Два.ч - это система форумов, где можно общаться быстро и свободно, где любая точка зрения имеет право на жизнь. Здесь нет регистрации и подписываться не нужно, хотя это не избавляет вас от необходимости соблюдать правила. Все форумы (кроме /Б/реда), а их список находится снизу, имеют собственную чётко ограниченную тематику. Словом, всё, что не запрещено правилами отдельно взятого форума и относится к его тематике, на этом форуме разрешено.
                        </p>
                    </td>
                </tr>
            </table>
			<table>
				<tr>
					<td><a href="a.php">/a/</a></font></td>
					<td><a href="b.php">/b/</a></font></td>
					<td><a >/d/</td>
					<td ><a >/s/</td>
				</tr>
				<tr>
					<td><a>/vg/</td>
					<td><a href="old_files/old.php">/old/</a></td>
					<td><a href="pr_files/pr.php">/pr/</a></td>
					<td><a href="psy_files/psy.php">/psy/</td>
				</tr>
			</table>
		</div><br><br>
        <p class="end">&copy; Стародвач, 2015 &ndash; <?=$year?></p>
    </body>
</html>

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
        case 0: $day = "понедельник"; 
        case 1: $day = "вторник";
        case 2: $day = "среда";
        case 3: $day = "четверг";
        case 4: $day = "пятница";
        case 5: $day = "суббота";
        case 6: $day = "воскресенье";
        default: $day = "небытие";
    }
?>