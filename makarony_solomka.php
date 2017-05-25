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
<script>
$(document).ready(function(){
	var nameProd = $(".nameProd").text();
	$(".nameP").val(nameProd);
	$(".nameProdtitle").text(nameProd);
	function schetPrice(){
		var prices = parseFloat($(".priceCol").text());
		var countDet = parseFloat($(".priseBox").val());
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


</head>

<body>
<div class="windSend"></div>
	<div class="formSEnd">
		<form action="makarony_solomka.php" method="POST">
			<div class="nameProdtitle"></div>
			<input type="hidden" value="" class="nameP" name="namePro">
			<input type="text" placeholder="Имя" name="name" class="inputSend">
			<input type="text" placeholder="Телефон" name="phone" class="inputSend">
			<input type="text" placeholder="Количество" name="count" class="inputSend priseBox" value="1">
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
       <img src="image/Макароны/Макароны соломка.jpg" >
       </div>
     <div class="H2 nameProd">Макароны соломка</div>
		<div class="p">Описание</div>
		<p id="p">      Макароны Макароны соломка созданы для тех, кто ценит безупречный вкус и экономит время. Продукт позволит приготовить сытный и вкусный ужин всего за несколько минут, не опасаясь, что гребешки разварятся. Благодаря твердым сортам пшеницы, из которых были созданы макароны MAKFA, они прекрасно сохраняют форму и свои вкусовые качества при варке. Продукт высшего сорта прекрасно подходит в качестве гарнира к мясу и отлично сочетается с сырными соусами и томатной пастой. <br>
<b>Состав:</b><br>
 Мука из твердой пшеницы для макаронных изделий высшего сорта, вода. Энергетическая ценность: 344 ккал.<br>

Пищевая ценность в 100г: белки - 10,4г, углеводы - 71,5г, жиры - 1,1г.</p>

	<table>
	<tr>
		<td id="strong">Цена</td>
		<td class="priceCol", id="strong"> 115р </td>
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
    Любое копирывание материала без согласия автора будет являтся нарушением данного закона.<br />
   </div>
</div>

 </div>
</body>
</html>
