<!-- <?php
	var_dump($_GET);
	echo $_GET['test1'] + $_GET['test2'] + $_GET['test3'];
?> -->

<!-- <?php
	var_dump($_GET);     // пустой массив
	var_dump($_POST);    // массив с ключами test1 и test2
	var_dump($_REQUEST); // массив с ключами test1 и test2
?> -->

<!-- <?php 
	var_dump($_REQUEST);
	echo $_REQUEST['test1'];
?> -->

<!-- <?php
	$pass = '12345';
	if ($_POST['pass'] == $pass) {
		echo "<p>Пороль верный</p>";
	}else{
		echo "<p>Пороль неверный!</p>";
	}
?> -->