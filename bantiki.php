<?
	if(isset($_POST['phone']) && $_POST['phone']!=''){
		$nameProd = trim(htmlspecialchars($_POST['namePro']));
		$name =  trim(htmlspecialchars($_POST['name']));
		$phone = trim(htmlspecialchars($_POST['phone']));
		$count = trim(htmlspecialchars($_POST['count']));
		$addr = trim(htmlspecialchars($_POST['address']));

		
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
<title>Makaroni</title>
<link href="slider/css/style2.css" rel="stylesheet" type="text/css">
<link href="css/tabl.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jQuery/jquery.js"></script>
<script type="text/javascript" src="slider/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="slider/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery.livequery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

<script language="JavaScript">
function che(input) {     //метод, проверяющий значение поля input
   var resultint="";   //здесь сохранит итоговый результат
   var accept = "1234567890";   //допустимые символы, в данном случае числа
  
   for (var t = 0; t < input.length; t++) {   //проходим циклом по введенному в поле значению
  
   var symbol=""; //текущий символ
      for (var g = 0; g < accept.length; g++){   //вложенный цикл, проверяем каждый символ поля на допустимость
         if(input.charAt(t)==accept.charAt(g)) {    //если символ разрешен
            symbol=input.charAt(t);
            resultint+=symbol;   //добавляем его к resultint, таким образом, формируя его
         }
      }
   }
   document.getElementById('count').value = resultint;
}
</script>
<script>
$(document).ready(function(){
	var nameProd = $(".nameProd").text();
	$(".nameP").val(nameProd);
	$(".nameProdtitle").text(nameProd);
	function schetPrice(){
		var prices = parseFloat($(".priceCol").text());
		var countDet = parseFloat($(".priseBox").val());
			if(/[^[0-9]/.test(countDet)){alert('не число');};
		var lastPrice = prices*countDet;
		$(".priceCount").text(lastPrice);
		if (countDet >= 50) {
			var reduction = 10;
			salePrice = 0.9*prices*countDet;
		}
		else
			{
				if (countDet >= 15)
				{
					var reduction = 5;
					var salePrice = 0.95*prices*countDet;
				}
				else
				{
					var reduction = 0;
					var salePrice = lastPrice;
				};
			};

		$(".prodSaleLP").text(reduction);
		$(".productSLP").text(salePrice);
	}
	$(".buttonSend").click(function(){
		$(".windSend").css({"display":"block"})
		$(".formSEnd").css({"display":"block"})
	});

	$(".windSend").click(function(){
		$(".windSend").css({"display":"none"})
		$(".formSEnd").css({"display":"none"})
	});

	$( ".priseBox" ).change(function() {
 		schetPrice();
	});
	 schetPrice();

});
</script>
<script language="JavaScript">
function check1(input) {     //метод, проверяющий значение поля input
   var resultint="";   //здесь сохранит итоговый результат
   var accept = "1234567890";   //допустимые символы, в данном случае числа
  
   for (var i = 0; i < input.length; i++) {   //проходим циклом по введенному в поле значению
  
   var symbol=""; //текущий символ
      for (var j = 0; j < accept.length; j++){   //вложенный цикл, проверяем каждый символ поля на допустимость
         if(input.charAt(i)==accept.charAt(j)) {    //если символ разрешен
            symbol=input.charAt(i);
            resultint+=symbol;   //добавляем его к resultint, таким образом, формируя его
         }
      }
   }
   document.getElementById('phone').value = resultint;
}
</script>

</head>

<body>
<div class="windSend"></div>
	<div class="formSEnd">
		<form action="bantiki.php" method="POST">
			<div class="nameProdtitle"></div>
			<input type="hidden" value="" class="nameP" name="namePro">
			<input type="text" placeholder="Имя" name="name" class="inputSend">
			<input type="text" placeholder="Телефон" name="phone" class="inputSend" id="phone" onblur="check1(this.form.phone.value)">
			<input type="text" placeholder="Количество" name="count" class="inputSend priseBox" value="1" id="count" onblur="che(this.form.count.value)">
			<input type="text" placeholder="Адрес" name="address" class="inputSend">
			<input type="submit" value="Заказать" class="orderSubmit">

			<div class="countsum">Цена: <div class="priceCount"></div>р</div>
			<div class="countsum">Скидка: <div class="prodSaleLP" ></div>%</div>
			<div class="countsum">Цена с учетом скидки: <div class="productSLP" ></div>р</div>
		</form>
	</div>


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
  <div class="img_prod">
       <img src="image/Макароны/Бантики.jpg" >
       </div>
     <div >Описание</div>
		<p id="p">  
Макароны Бантики являются энергетически ценным пищевым продуктом. Изготовленные из высококачественной муки грубого помола, макаронные бантики имеют привлекательную цельную форму и обладают гармоничным и насыщенным вкусом. Подавать со сливочным, грибным или томатным соусом и сыром.<br>
<b>Состав:</b><br>
Мука из твердых сортов пшеницы, вода, соль. Витамины В1, В 2, РР, клетчатку, клейковину, макро и микроэлементы.<br>
Пищевая ценность на 100г продукта: белки 11г, жиры 1,1г, углеводы 71,5г.<br>
Энергетическая ценность на 100г продукта: 344ккал.</p>

	<table>
	<tr>
		<td id="strong">Цена</td>
		<td class="priceCol", id="strong"> 110р </td>
	</tr>	
</table>

<div>Цена указана за упаковку массой 500г</div>
	<div class="buttonSend">Заказать</div>


	
</div>

 
  </div>
    
    </div> 

</div>   
         
</div>
<div class="elementy-saita" id="footer">
<div class="move_top" style="cursor:pointer">Наверх</div>
 <div id="FooterText">&copy;2016. Сайт находится под защитой закона об  авторских правах.<br />
    
   </div>
</div>

 </div>
</body>
</html>
