<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт учящегося у Пахана</title>

    <link rel="stylesheet" href="style.css">


    </head>
 <body>
    <div class="content">
        <?php
         include 'menu.php';
        ?>

    <div class="contentWrap">
        <div class="content">
            <div class="center">

                <h1> Игра в загадки </h1>

                <div class="box">

                    <?php
                        if(isset($_GET['userAnswer1'])&&($_GET['userAnswer2'])&&($_GET['userAnswer3'])) {
                            $userAnswer = $_GET["userAnswer1"];
                            $score = 0;

                            if ($userAnswer == 'Дятел' || $userAnswer == 'дятел') {
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer2"];

                            if ($userAnswer == 'Ножницы' || $userAnswer == 'ножницы') {
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer3"];

                            if ($userAnswer == 'Замок' || $userAnswer == 'замок') {
                                $score++;
                            }

	                        if ($userAnswer == 'Лук' || $userAnswer == 'лук') {
		                        $score++;
	                        }
                            echo 'Вы угадали ' . $score . ' загадок';
                        }
                    ?>

                    <form method="GET">

                    <p> Красная головка, работает ловко?</p>
                        <input type="text" name="userAnswer1">
                    <p> Два кольца, два конца и по середине гвоздик?</p>
                        <input type="text" name="userAnswer2">
                    <p>Не лает, не кусает, но в дом не пускает?</p>
                        <input type="text" name="userAnswer3">
                    <p>Сидит дед во сто шуб одет, кто его раздевает тот слезы проливает.</p>
                        <input type="text" name="userAnswer3">

                        <br>
                     <input type="submit" value="Ответить" name="">
                    </form>


                </div>
            </div>
        </div>
    </div>





       <div class="footer">
           Copyright &copy;  <?php echo date('Y');?> NickMo
       </div>


 </body>
    </html>