<!-- <form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?php
	if (!empty($_GET)) {
		echo $_GET['test1'] + $_GET['test2'];
	}
?> -->

<!-- <?php
	if (empty($_GET)) {
?>
	<form action="" method="GET">
		<input name="test1">
		<input name="test2">
		<input type="submit">
	</form>
<?php
	} else {
		echo $_GET['test1'] + $_GET['test2'];
	}
?> -->

<!-- <?php
	if (empty($_post)) {

        echo '<form action="" method="GET">
        <input name="test">
        <input type="submit">
    </form>';

	} else {
		echo $_GET['test'] ;
	}
?> -->

<!-- <form action="" method="GET">
	<input name="test" value="<?php 
		echo $_GET['test'] ?>"> 
	<input type="submit">
</form> -->


<!-- <form action="" method="GET">
	<input
		name="test"
		value="<?php if (isset($_GET['test12'])) 
			echo $_GET['test12'] ?>" 
	>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input
		name="test124"
		value="<?php if (isset($_GET['test124'])) 
			echo $_GET['test124'] ?>" 
	>
	<input
		name="test123"
		value="<?php if (isset($_GET['test123'])) 
			echo $_GET['test123'] ?>" 
	>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input
		name="test"
		value="<?php
			if (isset($_GET['test']))
				echo $_GET['test'];
			else echo 'default' 
		?>"
	>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input
		name="test1"
		value="<?php
			if (isset($_GET['test1']))
				echo $_GET['test1'];
			else echo '20' . date('y'); 
		?>"
	>
	<input type="submit">
</form> -->
<!-- 
<form action="" method="GET">
	<input
		name="test"
		value="<?php
			echo isset($_GET['test']) ? $_GET['test'] : 'default' 
		?>"
	>
	<input type="submit">
</form> -->
<!-- 
<form action="" method="GET">
	<input name="day" value="<?= 
		$_GET['day'] ?? date('d') ?>"> 
	<input name="month" value="<?= 
		$_GET['month'] ?? date('m') ?>"> 
	<input name="year" value="<?= 
		$_GET['year'] ?? '20'.date('y') ?>"> 
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<textarea name="test"></textarea>
    <?= $_GET['test'] ?>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<textarea name="test"><?= $_GET['test'] 
		?? '' ?></textarea> 
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input type="checkbox" name="flag">
	<input name="text">
	<input type="submit">
</form>

<?php
	if (!empty($_GET)) { // если 
		if (isset($_GET['flag'])) { // если флажок отмечен
			echo 'есть 18 лет';
		} else {
			echo 'нет 18 лет';
		}
	} 
?>  -->

<!-- <?php
	if (!empty($_GET)) {
		if ($_GET['flag'] === '1') {
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?> -->

<!-- <form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input
		type="checkbox"
		name="flag" <?php
			if (isset($_GET['flag']) and $_GET['flag'] === '1')
				echo 'checked';
			?>
		>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input
		type="checkbox"
		name="flag"
		value="1"
		<?php if (!empty($_GET['flag'])) echo 'checked' ?>
	>
	<input
		type="checkbox"
		name="flag1"
		value="1"
		<?php if (!empty($_GET['flag1'])) echo 'checked' ?>
	>
	<input
		type="checkbox"
		name="flag2"
		value="1"
		<?php if (!empty($_GET['flag2'])) echo 'checked' ?>
	>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input type="radio" name="radio" value="1">
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form> -->
<!-- <form action="" method="GET">
	<input type="radio" name="radio" 
		value="1" checked> 
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form> -->
<!-- 
<form action="" method="GET">
	<input type="radio" name="radio" value="1" <?php
		if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio" value="2" <?php
		if (!empty($_GET['radio']) and $_GET['radio'] === '2') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio" value="3" <?php
		if (!empty($_GET['radio']) and $_GET['radio'] === '3') {
			echo 'checked';
		}
	?>>
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<select name="test">
		<option>item1</option>
		<option>item2</option>
		<option>item3</option>
	</select>
	<input type="submit">
</form> -->
<form action="" method="GET">
	<select name="test">
		<option value="1" <?php
			if (!empty($_GET['test']) and $_GET['test'] === '1') {
				echo 'selected';
			}
		?>>item1</option>
		<option value="2" <?php
			if (!empty($_GET['test']) and $_GET['test'] === '2') {
				echo 'selected';
			}
		?>>item2</option>
		<option value="3" <?php
			if (!empty($_GET['test']) and $_GET['test'] === '3') {
				echo 'selected';
			}
		?>>item3</option>
	</select>
	<input type="submit">
</form>