<?php 

echo "<strong>_POST array:</strong> <br><br>";

print_r($_POST);



if (!empty($_POST)) {

	
  $message = "Поступило пришло новое сообщение с сайта: \n " 
	. "Имя отправителя: " . $_POST['userName'] . "\n"
	. "Email отправителя: " .  $_POST['userEmail'] . "\n"
	. "Текст сообщения: \n  " . $_POST['message'];

  $headers = "From: dneprfox@gmail.com";

  $resultMail = mail("info@gmail.com", "Сообщение с сайта", $message, $headers );

if ( $resultMail ) {
		echo "Сообщение отправлено успешно!";
	} else {
		echo "Прверьте правильность заполнения формы. Письмо не было отправлено.";
	}


}






 ?>
<br><br><br><br>	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправка форм</title>
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>



<form 	action="index.php" method="post"
		    class="contact_form">
		 
		
		 
		<h2>Заполните заявку</h2>
		
		
		<div class="form__group">

			<label for="f_name">Ваше имя</label>
			<input type="text" name="userName" placeholder="Введите ваше имя">

		</div>
		
		<div class="form__group">

			<div class="form__group">

			<label for="f_email">Ваш email</label>
			<input type="email"  name="userEmail" placeholder="Введите Ваш Email">

		</div>

		<div class="form__group">

			<label for="f_message">Ваше сообщение</label>
			<textarea name="message" placeholder="Введите сообщение"   cols="30" rows="10" style="margin-bottom: 20px; width: 100%;"></textarea>

		</div>


		<input type="submit" value="Отправить сообщение">
		

	</form>


</body>
</html>