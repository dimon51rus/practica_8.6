<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
    <style>
      #navbar {
        margin: 0;
        padding: 0;
        list-style-type: none;
        width: 200px;
      }
      #navbar li {
        border-left: 10px solid #666;
        border-bottom: 1px solid #666;
      }
      #navbar a {
        background-color: #949494;
        color: #fff;
        padding: 5px;
        text-decoration: none;
        font-weight: bold;
        border-left: 5px solid #33ADFF;
        display: block;
      }
      #navbar a:hover {
        background-color: #666;
        border-left: 5px solid #3333FF;
      }
    </style>
</head>
<body>
    <table border="0" width="100%">
	<tbody>
		<tr>
			<td rowspan="3" valign="top"><?php include 'main_menu.inc.php' ?>
            </td>
			<td><h1><?php  echo $p  ?> </h1>
            </td>
			<td rowspan="3">
                <div>
                                   
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
                                   ?> 
               
                </div>
            </td>
		</tr>
		<tr>
			<td>
                <div>
                <div>
                    <?php  echo '<img src="/img/123.gif">'; ?>                    
                </div>

                <div>
                    <p> Меня зовут <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне <?php  echo $age;   ?> лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>
        </td>
		</tr>
		<tr>
			<td>
                <div>
                <p>
                Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом.

ПОМОГИ И ТЫ
                </p>
            </div>
        </td>
		</tr>
	</tbody>
</table>
<?php include 'footer.inc.php' ?>
</body>
</html>
