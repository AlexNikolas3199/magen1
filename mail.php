<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Magen</title>
	<link rel="stylesheet" href="MagenForms.css">
	<link rel="stylesheet" href="Magen2.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet">
	<link rel="stylesheet" href="media-Magen.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="wow.min.js"></script>
    <script>new WOW().init(); </script>
</head>
<body>
	<nav class=" wow fadeInDown">
	 <div class="flex-space" >
	 	<h1  class="logo"  data-wow-duration="1s">magen</h1>
 </div>
    </nav>
  <div class="knopka" id="button">
    	<div class="lan " id="len1"></div>
    	<div class="lan " id="len2"></div>
    	<div class="lan " id="len3"></div>
  </div>
  <aside class="wow fadeInDown " id="move">
    <div class="overflowbox">
    	<a class="f" href="index.html">о компании</a>
    	<a class="ff" href="#">раскрытие информации</a>
    	<a class="ffff" href="#">информация</a>
      <a class="fff" href="#">новости</a>
    	<a  href="MagenForms.html">Cдача показаний</a>
  	</div>
  </aside>
  <div class="flex-container">
  	<h1 align="center" class=" wow fadeInRight">ПИСЬМО УСПЕШНО ОТПРАВЛЕНО!</h1>
  </div>
  <a href="index.html" style="text-decoration: none" class="flex-container buttonbox wow fadeInLeft">
      <button class=" butten0all">НА ГЛАВНУЮ</button>
  </a>  
	
	
<?php
$connect = mysqli_connect(localhost , root , "");
$select_db = mysqli_select_db($connect,'php1');
$select = mysqli_query($connect,'SELECT * FROM phptable');
while ($result = mysqli_fetch_array($select)){
  $a= $result[id];
};

$to = "magen.sakha@gmail.com";
$name= $_POST['name'];
$subject = "Показания номер ". $a;
$message = '
<html>
<head>
<title>HTML email</title>
</head>
<body style="background:#283593;color:#64b5f6;padding:30px ; border-radius:40px">
<h1>ФИО:  '.$name. '</h1>
<h1>Адрес:  '. $_POST['address']. '</h1>
<h1>Показания:  '. $_POST['someshet']. '</h1>
<h1>Номер телефона:  '. $_POST['phone']. '</h1>
<h1>Почта:  '. $_POST['mail']. '</h1>
</body>
</html>
';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);

$sql = "UPDATE phptable SET id = $a + 1 ";
$connect->query($sql);
$connect->close();
?>
<script>
		var f=document.querySelector(".f");
		var ff=document.querySelector(".ff");
		var fff=document.querySelector(".fff");
		var ffff=document.querySelector(".ffff");

   	var dav=document.getElementById('button');
   	var div=document.getElementById('move');
   	var lin1=document.getElementById('len1');
   	var lin2=document.getElementById('len2');
   	var lin3=document.getElementById('len3');
   
   	dav.onclick=function(){
   		if(div.classList.contains("mave")){
   			div.classList.remove("mave");
   			dav.classList.remove("up");
   			lin1.classList.remove("len1");
   			lin2.classList.remove("len2");
   			lin3.classList.remove("len3");
   		}
   		else{
   			div.classList.add("mave");
   	  dav.classList.add("up");
   	   lin1.classList.add("len1");
   	   lin2.classList.add("len2");
   	   lin3.classList.add("len3");
   		}
   	}
   
   	ff.onclick=function(){
   		div.classList.remove("mave");
   			dav.classList.remove("up");
   			lin1.classList.remove("len1");
   			lin2.classList.remove("len2");
   			lin3.classList.remove("len3");
   	}

   	f.onclick=function(){
   		div.classList.remove("mave");
   			dav.classList.remove("up");
   			lin1.classList.remove("len1");
   			lin2.classList.remove("len2");
   			lin3.classList.remove("len3");
   	}
   	fff.onclick=function(){
   		div.classList.remove("mave");
   			dav.classList.remove("up");
   			lin1.classList.remove("len1");
   			lin2.classList.remove("len2");
   			lin3.classList.remove("len3");
   	}
   	ffff.onclick=function(){
   		div.classList.remove("mave");
   			dav.classList.remove("up");
   			lin1.classList.remove("len1");
   			lin2.classList.remove("len2");
   			lin3.classList.remove("len3");
   	}
	</script>
</body>
</html>