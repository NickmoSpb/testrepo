<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт учящегося у Пахана</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

        var answer = parseInt(Math.random()*100);
        var tryCount = 0;
        var maxTrycount =3;//вапвапв

        function readInt () {
            var number = document.getElementById('userAnswer').value;
            return parseInt(number);
            // return + document.getElementById(userAnswer).value;

        }
        function write(text) {
            document.getElementById('info').innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = 'none';
        }
        
        function guess() {
            tryCount++;
            var userAnswer = readInt();
            if (userAnswer == answer){
                write('<b>Поздравляю, вы угадали!</b>' )
                hide('userAnswer');
                hide('button');
            }else if (tryCount>=maxTrycount){
                write('Вы проиграли =(<br> Правильный ответ: ' + answer );
                hide('userAnswer');
                hide('button');
            }
            else if (userAnswer > answer) {
                write('Вы ввели слишком большое число <br> Попробуйте ещё раз!')
            }else if (userAnswer < answer) {
                write('Вы ввели слишком маленькое число <br> Попробуйте ещё раз!')
            }
        }
        
    </script>


    </head>
 <body>
    <div class="content">

<?php
 include 'menu.php';
 ?>

            <div class="contentWrap">
            <div class="content">
             <div class="center">

                <h1> Игра угадайка </h1>

                <div class="box">
                    <p id="info">Угадайте число от 0 до 100</p>
                    <input type="text" id="userAnswer">
                    <br>
                    <a href='#' onclick='guess();' id="button"> Начать</a>



                </div>
            </div>
        </div>
    </div>





       <div class="footer">
           Copyright &copy;  <?php echo date('Y');?> NickMo
       </div>


 </body>
    </html>