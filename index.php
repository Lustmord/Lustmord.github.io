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
            <h3>Добро пожаловать. Снова.</h3>
		  <!--
            <h3><?= $welcome ?>, Битард. Сегодня <?= $day ?>!</h3>
            <br>
            -->
		  <hr size="1"  noshade color="#D3D3D3"/><br>
            <div class="yobaspics">
                <img class="yobaleft" alt="rusyoba" src="pics/1345762147501.png"/>                       <img alt="smileyoba" src="pics/1345761757771.png"/>
                <img class="yobaright" alt="irakyoba" src="pics/1346274672404.png"/>
                </div><br/><br/>
        </header>
        <section>
            <article>
                <table class="whatis">
                    <tr>
                        <td>
                        Два.ч - это система форумов, где можно общаться быстро и свободно, где любая точка зрения имеет право на жизнь. Здесь нет регистрации и подписываться не нужно, хотя это не избавляет вас от необходимости соблюдать правила. Все форумы (кроме /Б/реда), а их список находится снизу, имеют собственную чётко ограниченную тематику. Словом, всё, что не запрещено правилами отдельно взятого форума и относится к его тематике, на этом форуме разрешено.
                        </td>
                    </tr>
                </table><br/><br/><br/>
            </article>
			<article>
                <table class="boards">
				    <tr>
					   <td rowspan="2" class="b"><a href="b.php">/b/</a></td>
                       <td><a href="d.php">/d/</a></td>
                       <td><a href="s.php">/s/</a></td>
                       <td><a href="psy_files/psy.php">/psy/</td>
				    </tr>
				    <tr>
                       <td><a href="vg.php">/vg/</a></td>
					   <td><a href="old_files/old.php">/old/</a></td>
					   <td><a href="pr_files/pr.php">/pr/</a></td>
					   
				    </tr>
			     </table>
            </article>
        </section><br><br>
        <footer class="index">
            <p>&copy; Стародвач, 2015 &ndash; <?=$year?></p>
        </footer>
    </body>
</html>

<!--<?php
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
?>-->