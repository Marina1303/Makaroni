<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Makaroni</title>
<link href="slider/css/style2.css" rel="stylesheet" type="text/css">
<link href="css/tabl.css" rel="stylesheet" type="text/css">
<link href="css.css" rel="stylesheet" />


</head>

<body>
<?
    /*$host="localhost";
    $user="makaroni";
    $pass="1234554321"; //установленный вами пароль
    $db_name="makaroni";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);*/
?>

<div class="conteiner">
<div class="elementy-saita" id="header">
  <div class="logotype">
         <div class="OblLogo">
         <h2 class="h2">ОАО "Makaroni"</h2>
         <p class="p"><br><i>Макароны - это искусство</i></p>
         </div>
  </div>
  </div>
<div class="box_content" >
<div class="elementy-saita" id="content">
     <div class="bar-nav">
 <a href="index.php" class="url-nav"  id="main-str" >Главная</a>
  <a href="kontacti.php" class="url-nav" id="contact-str" >Контакты</a>
   <a href="o_kompanii.php" class="url-nav" id="compani-str" >О компании</a>
    <a href="opros.php" class="url-nav" id="compani-str" >Мнение о компании</a>
     
     </div> 
     
 <div class="mini-bloc" >
    
 <div class="min-bloc-center">
    
 <div class="box-contener" id="main" >

<style type="text/css">
	th{
		font-size: 18px;
		text-align: -webkit-center;
	}
</style>
<?php/*
    $sql = mysql_query("SELECT  `IDOrder`,`CustName`,`Phone`,`Address`,`NameProd`,`Quantity`,`SumOrder`,`DateOrder` FROM `mak_order`", $link);
   
    if($sql)
{
  // Определяем таблицу и заголовок
  echo "<table class=tOrder>";
  echo "<tr><th>Код</th><th>ФИО</th><th>Телефон</th><th>Адрес</th><th>Товар</th><th>Количество</th><th>Стоймость</th><th>Дата заказа</th></tr>";
  // Так как запрос возвращает несколько строк, применяем цикл
  while($result = mysql_fetch_array($sql))
  {
    echo "<tr><td>".$result['IDOrder']."&nbsp;</td><td>".$result['CustName']."&nbsp </td><td>".$result['Phone']."&nbsp;</td><td>".$result['Address']."&nbsp;</td><td>".$result['NameProd']."&nbsp;</td><td>".$result['Quantity']."&nbsp;</td><td>".$result['SumOrder']."&nbsp;</td><td>".$result['DateOrder']."&nbsp;</td></tr>";
  }
  echo "</table>";
}

*/?>
<?php
    $connect=odbc_connect("makaroni", "","")
    or die("Не удалось подключиться");
    $query="SELECT IDOrder, CustName, Phone, Address, NameProd, Quantity, SumOrder, DateOrder FROM mak_order";
    $result=odbc_prepare($connect, $query);
    odbc_execute($result);
    odbc_result_all($result,"class=tOrder");
    odbc_free_result($result);
    odbc_close($connect);
?>


  </div>
    
    </div>   
  
 

</div>   
         
</div>
<div class="elementy-saita" id="footer">
<div class="move_top" style="cursor:pointer">Наверх</div>
<div id="FooterText">&copy;2015. Сайт находится под защитой закона об  авторских правах.<br />
    Любое копирывание материала без согласия автора будет являтся нарушением данного закона.<br />
   </div>
<div class="speed-url" >
<a href="index.php" class="url-min" >Главная</a><br>
<a href="kontakti.php" class="url-min" >Контакты</a><br>
<a href="o_kompanii.php" class="url-min" >О нас</a><br>
</div>

</div>

 </div>


 <script type="text/javascript" src="slider/js/jquery.cslider.js"></script>
    <script type="text/javascript">
      $(function() {
      
        $('#da-slider').cslider({
          autoplay  : true,
          bgincrement  : 50,
           interval    : 30000
        });
      
      });
    </script>  



</body>
</html>
