<?php
    // $str = 'ahb acb aeb aeeb adcb axeb';

    // echo preg_replace('#a#', 'b', $str);

    // $str = 'ahb acb aeb aeeb adcb axeb';
    // echo preg_replace('/a.{2}b/', '***', $str);
    // $str = 'ahb acb aeb aeeb adcb axeb';
	// preg_match_all('/a.{2}b/', $str, $matches);
	// print_r($matches[0]);

    // $str = 'aa aba abba abbba abca abea';
    // echo preg_replace('#ab+a#','!', $str);


    // $str = 'aa aba abba abbba abca abea';    
    // echo preg_replace('#ab*a#','!', $str);

    // $str = 'aa aba abba abbba abca abea';    
    // echo preg_replace('#ab?a#','!', $str);

    // $str = 'aa aba abba abbba abca abea';
    // echo preg_replace('/a+b+a/', '!', $str);

	// $str = 'xabx xababx xaabbx';
	// $res = preg_replace('/x(ab)+x/', '!', $str);
    
    // echo $res;

    // $str = 'ab abab abab abababab abea';
    // $res = preg_replace('/ab*/', '!', $str);

    // echo $res;


//////////////////////[{}]\\\\\\\\\\\\\\\\\\\\\\

    // $str = 'aaa';
    // echo "xxx $str yyy";

    // $name = 'user';
	// echo 'hello, ' . $name . '!';

    // $arr = ['a', 'b', 'c'];
	// echo "xxx $arr[2] yyy";

    // $arr = ['1', '2', '3'];
	// echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1];

    // $arr = ['a'=>1, 'b'=>2, 'c'=>3];
	// echo "xxx {$arr['a']} yyy";

    // $arr = ['a', 'b', 'c'];
	// $elem = $arr[0];
	
	// echo "xxx $elem yyy";

    // $arr = ['a' => 1, 'b' => 2, 'c' => 3];
	// echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text';
    
    
    // for ($i = 1; $i <= 5; $i++) {
	// 	echo "xxx $i yyy";
	// }

    // for ($i = 1; $i <= 10; $i++) {
	// 	for ($j = 1; $j <= 10; $j++) {
	// 		echo 'nums: ' . $i . ' ' . $j . '<br>';
	// 	}
	// }
	// $arr = [1, 2, 3, 4, 5];
	
	// foreach ($arr as $elem) {
	// 	echo "xxx $elem yyy";
	// }

    // $arr = ['a' => 1, 'b' => 2, 'c' => 3];

	// foreach ($arr as $key => $elem) {
	// 	echo 'pair: ' . $elem . ' ' . $key . '<br>';
	// }

    // $users = [
	// 	[
	// 		'name' => 'user1',
	// 		'age'  => 30,
	// 	],
	// 	[
	// 		'name' => 'user2',
	// 		'age'  => 31,
	// 	],
	// 	[
	// 		'name' => 'user3',
	// 		'age'  => 32,
	// 	],
	// ];

    // foreach ($users as $user) {
	// 	echo $user['name'] . ': ' . $user['age'] . '<br>';
	// }


    // $arr = ['aaa','bbb','ccc'];

    // foreach($arr as $i) {
    //     echo "<p>$i</p>";
    // }

    // $text = 'link';
	// $href = 'index.html';

    // echo '<a href="' . $href . '">' 
	// 	. $text . '</a>'; 


    // $arr = ['1.png','2.png','3.png'];

    // foreach ($arr as $i) {
    //     echo "<img src='$i'>";
    // }


    // for ($i = 1; $i <= 5; $i++) {
	// 	echo '<p>' . $i . '</p>';
	// }


    // for ($i=1; $i <= 5 ; $i++) { 
    //     echo "<li>$i</li>";
    // }


    // $arr = [1, 2, 3, 4, 5];
	
	// foreach ($arr as $elem) {
	// 	echo '<p>' . $elem . '</p>';
	// }
    // foreach ($arr as $elem) {
	// 	echo "<p>$elem</p>";
	// }


    // $arr = ['text1', 'text2', 'text3'];

    // foreach ($arr as $key) {
    //     echo "<option>$key</option>";
    // }

    // $arr = [
	// 	['href'=>'1.html', 'text'=>'link1'],
	// 	['href'=>'2.html', 'text'=>'link2'],
	// 	['href'=>'3.html', 'text'=>'link3'],
	// ];

    // foreach ($arr as $elem) {
	// 	echo "<a href=\"{$elem['href']}\">{$elem['text']}</a><br>";
	// }


    // $arr = [
	// 	['href'=>'page1.html', 'text'=>'text1'],
	// 	['href'=>'page2.html', 'text'=>'text2'],
	// 	['href'=>'page3.html', 'text'=>'text3'],
	// ];

    // foreach ($arr as $elem) {
    //     echo "<li><a href=\"{$elem['href']}\">{$elem['text']}</a></li>";
    // }


    // $arr = [
	// 	['value' => '1', 'text' => 'text1'],
	// 	['value' => '2', 'text' => 'text2'],
	// 	['value' => '3', 'text' => 'text3'],
	// ];

    // foreach ($arr as $elem) {
    //     echo "<option value=\"{$elem['value']}\">{$elem['text']}</option>";
    // }


    // $arr = [
	// 	['name' => 'user1', 'age' => 30, 'salary' => 500], 
	// 	['name' => 'user2', 'age' => 31, 'salary' => 600], 
	// 	['name' => 'user3', 'age' => 32, 'salary' => 700], 
	// ];


    // foreach ($arr as $elem) {
    //     echo "
    //          <table>
    //             <tr>
    //                 <td>
    //                 {$elem['name']}
    //                 </td>
    //                 <td>
    //                 {$elem['age']}
    //                 </td>
    //                 <td>
    //                 {$elem['salary']}
    //                 </td>
    //             </tr>
    //         </table>";
    // }



    // echo '<table>';
	// foreach ($arr as $user) {
	// 	echo '<tr>';
		
	// 	echo "<td>{$user['name']}</td>";
	// 	echo "<td>{$user['age']}</td>";
	// 	echo "<td>{$user['salary']}</td>";
		
	// 	echo '</tr>';
	// }
	// echo '</table>';


    // echo '<table>';
	// foreach ($arr as $user) {
	// 	echo '<tr>';
		
	// 	echo "<td>{$user['name']}</td>";
	// 	echo "<td>{$user['age']} years</td>";
	// 	echo "<td>{$user['salary']} dollars</td>";
		
	// 	echo '</tr>';
	// }
	// echo '</table>';



    // echo '<table>';
	// foreach ($arr as $row) {
	// 	echo '<tr>';
	// 	foreach ($row as $cell) {
	// 		echo "<td>$cell</td>";
	// 	}
	// 	echo '</tr>';
	// }
	// echo '</table>';

    // echo '<table>';
	// foreach ($arr as $row) {
	// 	echo '<tr>';
	// 	foreach ($row as $key => $cell) {
	// 		if ($key === 'salary') {
	// 			echo "<td>$cell dollars</td>";
	// 		} else {
	// 			echo "<td>$cell</td>";
	// 		}
	// 	}
	// 	echo '</tr>';
	// }
	// echo '</table>';

    // echo '<table>';
	// foreach ($arr as $row) {
	// 	echo '<tr>';
	// 	foreach ($row as $key => $cell) {
	// 		if ($key === 'salary') {
	// 			$cell .= ' dollars';
	// 		}
			
	// 		echo "<td>$cell</td>";
	// 	}
	// 	echo '</tr>';
	// }
	// echo '</table>';

    // $products = [
	// 	[
	// 		'name'   => 'product1',
	// 		'price'  => 100,
	// 		'amount' => 5,
	// 	],
	// 	[
	// 		'name'   => 'product2',
	// 		'price'  => 200,
	// 		'amount' => 6,
	// 	],
	// 	[
	// 		'name'   => 'product3',
	// 		'price'  => 300,
	// 		'amount' => 7,
	// 	],
	// ];

    // echo '<table>';
	// foreach ($products as $row) {
	// 	echo '<tr>';
	// 	foreach ($row as $key => $cell) {
	// 		if ($key === 'salary') {
	// 			$cell .= ' dollars';
	// 		}
	// 		echo "<td>$cell</td>";
	// 	}
	// 	echo '</tr>';
	// }
	// echo '</table>';





    // $arr = ['text1','text2','text3'];
    // $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    // $test = true;
    $show = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p><?php echo "hello world"; ?></p> -->
    <!-- <p><?= date('w'); ?></p> -->

    <!-- <p><?= $str ?></p> -->

    <!-- <?php 
        foreach($arr as $elem){
            echo "<p> $elem </p>";
        }
    ?> -->


    <?php 
        // foreach($arr as $key => $value){
        //     echo "<p> $value </p>";
        // }
        // if ($test) {
        //     echo '<p>text</p>';
        // }

    ?>

    <!-- <?php if ($test) { ?>
        <p>text</p>
    <?php } ?> -->

    <!-- <?php if ($test): ?>
	    <p>text</p>
    <?php endif; ?> -->


    <!-- <?php if ($show): ?>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    <?php endif; ?> -->

    <!-- <?php if ($show): ?>
        <div>
            <p>text+</p>
            <p>text+</p>
            <p>text+</p>
        </div>
    <?php endif; ?>
    <?php if (!$show): ?>
        <div>
            <p>text-</p>
            <p>text-</p>
            <p>text-</p>
        </div>
    <?php endif; ?> -->
    


</body>
</html>