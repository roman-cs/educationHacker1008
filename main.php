<!DOCTYPE html>
<html lang="en" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice MySite</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы изучили основы языка PHP </p>
                    <p> Изучили типы данных </p>
                    <p> Научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                    <p> Логические операторы, операторы сравнения, математические операторы </p>
                    <p> Научились разворачивать локальный веб-сервер </p>
                    <p> Мы научились размещать сайт на хостинге </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> <br>

                    <?php
                        echo("Просто строка");
                    ?> <br> 
                     <?php
                        $a = $b = $c = 7;
                        echo $b;
                    ?> <br>
                    <?php 
                        echo $str = <<<EOD
                        Пример строки,
                        охватывающей несколько строк,
                        с использованием heredoc-синтаксиса.
                        EOD;
                    ?> <br>
                    <?php
                        echo gettype($number); 
                    ?> <br>
                    <?php
                        increment();
                        increment();
                        increment();
                        increment();
                    ?>
            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
