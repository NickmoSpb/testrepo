<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт учящегося у Пахана</title>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

        function takeAnswer () {
            var lengthPassword = document.getElementById('userAnswer').value;
            return parseInt(lengthPassword);

        }

        var arrLetterNumber = ["1", "2", "3", "4", "5", "6", "7", "8",
            "9", '0',"A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
            "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V",
            "W", "X", "Y", "Z"];



        var password = [];
        var symbol = parseInt();

        function write(text) {
            document.getElementById('info').innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = 'none';
        }

    function keyGen() {
        var newPas= '';
        var lengthPassword = takeAnswer();
        while (lengthPassword >password.length) {
          symbol = arrLetterNumber[Math.round(Math.random() * arrLetterNumber.length)];
          password.push(symbol);
          newPas = newPas+ password[password.length-1];

        }


        hide('userAnswer');
        hide('button');
        write('<b> Как вам такой пароль? =): <br>' + newPas + '</b>');


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

                <h1> Генератор паролей </h1>

                <div class="box">

                    <p id="info">Ввидите число из скольки символов вы хотите сгенерировать пароль</p>
                    <input type="text" id="userAnswer">
                    <br>
                    <a href='#' onclick='keyGen();' id="button"> Сгенерировать</a>


                </div>
            </div>
        </div>
    </div>





       <div class="footer">
           Copyright &copy;  <?php echo date('Y');?> NickMo
       </div>


 </body>
    </html>