<!-- <p><?php echo 'text'; ?></p>
<p><?= 'text' ?></p> -->

<!-- <p><?= date('w') ?></p> -->

<!-- <?php
	$str = 'text';
?>
<p>text</p> -->
<!-- 
<?php
	$str = 'text';
?>
<p><?php echo $str; ?></p> -->

<!-- <?php
	$str = 'text';
?>
<p><?= $str ?></p> -->

<!-- <?php
	$str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
?>

<p><?= $str1 ?></p>
<p><?= $str2 ?></p>
<p><?= $str3 ?></p> -->

<!-- <?php
	$arr = [1, 2, 3, 4, 5];
?>

<p><?= $arr[0] ?></p>
<p><?= $arr[1] ?></p>
<p><?= $arr[2] ?></p>
<p><?= $arr[3] ?></p>
<p><?= $arr[4] ?></p> -->

<!-- <?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>

<?php foreach ($arr as $key ) {
    echo "<p>$key</p>";
} ?> -->

<!-- <?php
	$test = true;
?>

<?php
	if ($test) {
		echo '<p>text</p>';
	}
?>

<?php if ($test) { ?>
	<p>text</p>
<?php } ?>

<?php if ($test): ?>
	<p>text</p>
<?php endif; ?> -->

<!-- <?php
	$show = true;
?>

<?php if ($show): ?>
	<div>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    </div>
<?php endif; ?> -->


<!-- <?php if ($test) { ?>
	<p>+++</p>
<?php } else { ?>
	<p>---</p>
<?php } ?>

<?php if ($test): ?>
	<p>+++</p>
<?php else: ?>
	<p>---</p>
<?php endif; ?> -->

<!-- <?php
	$show = true;
?>

<?php if ($show): ?>
	<div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php else: ?>
	<div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?> -->

<!-- <?php if ($test === 1) { ?>
	<p>1</p>
<?php } elseif ($test === 2) { ?>
	<p>2</p>
<?php } else { ?>
	<p>?</p>
<?php } ?> -->

<!-- <?php if ($test === 1): ?>
	<p>1</p>
<?php elseif ($test === 2): ?>
	<p>2</p>
<?php else: ?>
	<p>?</p>
<?php endif; ?> -->

<!-- <?php $test = '-'; ?>

<?php if ($test === 1): ?>
	<div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
<?php elseif ($test === 2): ?>
	<div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
<?php elseif ($test === '-'): ?>
	<div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?>  -->

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

<!-- <ul>
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <li><?= $i ?></li>
    <?php endfor; ?>
</ul> -->
<!-- 
<?php
	$arr = [1, 2, 3, 4, 5];
?>

<?php
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?>

<?php foreach ($arr as $elem) { ?>
	<p><?= $elem ?></p>
<?php } ?>

<?php foreach ($arr as $elem): ?>
	<p><?= $elem ?></p>
<?php endforeach; ?> -->


<!-- <?php
	$arr = ['user1', 'user2', 'user3'];
?>


<?php foreach ($arr as $elem): ?>
    <div>
        <h2><?= $elem ?></h2>
        <p><?= 'text' ?></p>
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

<?php foreach ($arr as $elem): ?>
    <div>
        <p><?= 'name: ' . $elem['name'] ?></p>
        <p><?= 'age: ' . $elem['age'] ?></p>
    </div>
<?php endforeach; ?> -->