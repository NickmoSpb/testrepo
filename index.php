<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт учящегося у Пахана</title>
	<link rel="stylesheet" href="style.css">




</head>
<body>

<div class="content">
<?php
include 'menu.php';
?>

	<h1>Личный сайт учящегося у Пахана</h1>

	<div class="center">
	<img src="/img/photo.png">
		<div class="box_text">
			<p> <b>Привет я NickMo!!!!.</b> Мне скоро "сорокет" =).</p>

			<p>Я до сих пор не определился в жизни.И теперь пробую себя в програмировании.Пока я мало в этом шарю.
				Но уже пытаюсь сделать первый сайт.</p>
            <p>В этом мне помогает мой хороший друг <a href="https://vk.com/tochilin"><u><i>Пахан</i></u></a>>,
				за что я ему очень благодарен!!!</p>
			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:
                <a href="puzzle.php"><u>Загадки</u>,</a>
                <a href="guess.php"><u>Угадайка,</u></a>
                <a href="guessMult.php"><u>Угадайка мультиплеер.</u></a>
			</p>

            <p> Либо воспользоваться генератором поролей, хотя не факт что он работает ;) :
                <a href="keyGen.php"> <u>Генератор паролей.</u></a>

            </p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy;  <?php echo date('Y');?> NickMo
<div>


</body>
</html>