<!-- <?php
    $text = '-';
?>
<?php
    switch ($text) {
        case '1':
            echo '<p>text1</p>';
            break;
        case '2':
            echo '<p>text2</p>';
            break;
        case '-':
            echo '<p>text-</p>';
            break;

    }
?>
 -->
 <!-- <?php
	for ($i = 1; $i <= 9; $i++) {
		echo '<p>' . $i . '</p>';
	}
?> -->
<!-- <?php for ($i = 1; $i <= 9; $i++) { ?>
	<p><?= $i ?></p>
<?php } ?> -->
<!-- <?php for ($i = 1; $i <= 9; $i++): ?>
	<p><?= $i ?></p>
<?php endfor; ?> -->

<!-- <?php
    echo '<ul>';
        for ($i = 1; $i < 6; $i++) { 
            echo '<p>' . $i . '</p>';
        }
    echo '</ul>';
    
?> -->


<!-- <?php
	$arr = [1, 2, 3, 4, 5];
?> -->

<!-- <?php
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?> -->

<!-- <?php foreach ($arr as $elem) { ?>
	<p><?= $elem ?></p>
<?php } ?> -->

<!-- <?php foreach ($arr as $elem): ?>
	<p><?= $elem ?></p>
<?php endforeach; ?> -->


<!-- <?php
	$arr = ['user1', 'user2', 'user3'];
?>

<?php 
    foreach($arr as $elem): ?>
    <div>
        <h2><?= $elem ?></h2>
        <p>text</p>
    </div>
<?php endforeach; ?> -->

<!-- <?php
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>

<?php foreach($arr as $elem):?>
<div>
    <p>name: <?= $elem['name'] ?></p>
    <p>age: <?= $elem['age'] ?></p>
</div>
<?php endforeach; ?>  -->


<!-- Основы работы с формами PHP -->


<!-- <form action="/result.php">
	<input name="test1">
	<input name="test2">
	<input name="test2">
	<input type="submit">
</form> -->

<!-- <form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form> -->
<!-- <form action="/result.php" method="POST">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form> -->


<!-- <form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input name="test3">
	<input type="submit">
</form> -->


<!-- <form action="/result.php" method="GET">
	<input name="test1">
	<input type="submit">
</form> -->


<!-- <form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form> -->

<!-- <form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?php
	var_dump($_GET);
?> -->


<!-- <form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?php
	echo $_GET['test1'] + $_GET['test2'];
?> -->



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



<!-- <form action="" method="GET">
	<input name="f">
	<input name="i">
	<input name="o">
	<input type="submit">
</form>

<?php
    if (!empty($_GET)) {
        echo $_GET['f'] . $_GET['i'] . $_GET['o'];
    }
?> -->


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
	if (!empty($_GET)) {
?>

<form action="" method="GET">
		<input name="Name">
		<input type="submit">
</form>

<?php
	} else {
		echo $_GET['Name'];
	}
?> -->