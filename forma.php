<html>
	<head>
	<meta charset="utf-8">
	<title>Сайт web-студії "Web-DECO"</title>
	<script src="js/clock1.js"></script>
	<script>
	window.onload =function()
	{setInterval(clockPainting,1000);
	}
	</script>
	<script type="text/javascript">
	function send()
{	var valid =true;
	var elems = document.forms[0].elements;
	for(var i =0;i<document.forms[0].length;i++)
	{
		if(elems[i].getAttribute('type') == "text"||
		elems[i].getAttribute('type') == "password"||
		elems[i].getAttribute('type') == "email"|){
		
		if()(elems[i].value ==''){style.border ='2px solid red';
		valid= false;
		}}}
	if(!valid)
	{alert('Заповніть всі поля !!!');
	return false;}
}
	</script>
<style>
 .shadowtext{text-shadow: 1px 3px 2px white, 0 0 1em red;
 color:#210042;
 font-size:2 em;
 }
 </style>
 </head>
<body background = "images/bg.jpg">
	<table border='1' align ='center' cellpadding ="10" >
<tr>
<td background="images/bg-3.jpg" colspan ="2" height ="150" align = "right" hspace="5">
<font size ="5" color="Maroon"  >
<h1 class="shadowtext">Сайт web-студії  Web-DECO.COM <h2></font>
</td>
</tr>
<tr>
<td colspan ="2" height ="150" align = "right">
 <font size ='4'><b>
<a href ='#'>Наші послуги </a>&nbsp;&nbsp;
<a href ="#">Про нас </a>&nbsp;&nbsp;
<a href ='#'>Інформація </a>&nbsp;&nbsp;
<a href ="#">Галерея робіт</a>&nbsp;&nbsp;
</b></font>
</td>
</tr>
<tr>
<td width ="30%" valign="top">
<center><canvas id="canvas" height="120" width ="120"></canvas></center>
<font size ='5' color = 'navy'><h2>Новини</h2></font>
  <font size ='5'>
 <ul>
  <li><a href = "#">Сайт будівельної компанії</a></li>
  <li><a href = "#">Сайт ТМ "Нова школа"</a></li>
  <li><a href = "#">Редизайн сайту classno.com.ua</a></li>
  <li><a href = "#">Розробка СMS для Metro Cash&Carry</a></li>
  <li><a href = "#">Сайт-візитка дизайнера інтерфейсів</a></li>
  <p align = "right"><a href = "#">інші...</a></p>
  </ul>
 </font>
 <hr>
 <H1 align = "center"><font color = "green">Реєстрація</font><H1>
  <fotm action = "forma.php" method="post" onsubmit="return send();">
   <TABLE align ="center" bgcolor= "#ccc">
    <TR>
     <TD> <font color = "green">Прізвище</font>:</TD>
     <TD><input type="text" size="10" maxlength="20" name="name2"></TD>
     </TR>
    <TR>
     <TD> <font color = "green">Ім'я</font>:</TD>
     <TD><input type="text" size="10" maxlength="20" name="name1"></TD>
     </TR>
    <TR>
     <TD> <font color = "green">E-Mail</font>:</TD>
     <TD><input type="text" size="10" maxlength="20" name="email"></TD>
     </TR>
    <TR>
     <TD> <font color = "green">Пароль</font>:</TD>
     <TD><input type="text" size="10" maxlength="20" name="password"></TD>
     </TR>
    </TABLE>
   <p align ="cenret">
   <input type="submit" value="Зареєструватись">  
   <input type="reser" value="Очистити"> 
   </p>
   </form>
 <hr>
</td>
<td width ="70%" valign='top'>
<h1 align="center">Дякуємо за реєстрацію!</h1>
<?php
$st =$_POST['name2'].";".$_POST['name1'].";".$_POST['nic1'].";".$_POST['email'].";".$_POST['password']."\n";
$fp =fopen("baza.txt","a");
$test=fwrite($fp,$st);
echo "<h2 align='center' >Ви ввели :".$_POST['name2'].",".$_POST['name1'].",".$_POST['nic1'].",".$_POST['email'].",".$_POST['password']."</h2>";
?>
</hl>

</td>
</tr>
<tr>
<td background ="images/bg-3.jpg"colspan ="2" height ="90" valign = "middle">
 <font size ='4'>Сайт розробив Веремчук Тарас</font>
 </td>
</tr>
</table>
</body>
</html>