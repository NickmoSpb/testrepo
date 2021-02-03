<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт учящегося у Пахана</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

        var answer = parseInt(Math.random()*100);
        var playerNumber = 'один';

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

               var userAnswer = readInt();
               if (userAnswer == answer) {
                   write( '<b> Поздравляю, победил игрок номер '  + playerNumber + '</b>');
                   hide('userAnswer');
                   hide('button');

               } else if (userAnswer > answer) {
                   changePlayerNumb();
                   write('Вы ввели слишком большое число <br> Ходит игрок номер ' +
                       playerNumber + '<br> Введите число от 1 до 100')

               } else if (userAnswer < answer) {
                   changePlayerNumb();
                   write('Вы ввели слишком маленькое число <br> Ходит игрок номер ' +
                       playerNumber +'<br> Введите число от 1 до 100')

               }

            }

       function changePlayerNumb() {
            if (playerNumber== 'один'){
                playerNumber= 'два'
            }else playerNumber= 'один'

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
                    <p id="info">Угадайте число от 0 до 100 <br>
                        Введите ответ, игрок номер один.
                    </p>
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