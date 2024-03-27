<?php
	// function func() {
	// 	echo '!'."<br>";
	// };

	// function funcName() {
    //     echo 'Artem'."<br>";
	// };

	// function funcNumber() {
	// 	for ($i=1; $i < 101; $i++) { 
    //         echo $i;
    //     };
	// };

    // func();
    // funcName();
    // funcNumber();

    // function cube($number){
    //     echo $number * $number * $number;
    // }


    // cube(2);

    // function proverka($num){
    //     if ($num % 2 == 0) {
    //         echo "+++";
    //     }else{echo "---";}
    // }
    // proverka(12);

    // function calculate($num,$num1,$num2){
    //     echo $num + $num1 + $num2;
    // }

    // calculate(1,2,3)

    // function calc($num,$num1,$num2){
    //     echo $num + $num1 + $num2;
    // }

    // $param1 = 2;
	// $param2 = 3;
	// $param3 = 4;

    // calc($param1,$param2,$param3);


    // function cube($num){
    //     return $num * $num * $num; 
    // }

    // $res = cube(3);
    // echo $res;

    // function cube($num){
    //     return $num * $num * $num; 
    // }

    // $res = cube(3) + cube(2);
    // echo $res;

    // function calc($num){
    //     $iter = 0;
        

    //     while ($num>10) {
    //         $iter += 1;
    //         $num = $num/2;
    //     }
    //     return $iter;
    // }
    
    // echo calc(100);



    // function calc($arr){
    //     $flag = "true";
		
	// 	foreach ($arr as $elem) {
	// 		if ($elem % 2 == 0) {
				
	// 		}else{
    //             $flag = "false";
    //         }
	// 	}
		
	// 	echo $flag;
    // }

    // echo calc([2,2,2,3]);

    


    //PRAKTIKA

    // function arrDel($num){
    //     $arr = [];

    //     for ($i=1; $i < $num; $i++) { 
    //         if ($num % $i == 0) {
    //             array_push($arr,$i);
    //         }
    //     }
    //     print_r($arr);
    // }

    // arrDel(7);

    // function arrDel($num,$num1){
    //     $arr = [];

    //     for ($i=1; $i < $num; $i++) { 
    //         if ($num % $i == 0) {
    //             array_push($arr,$i);
    //         }
    //     }
    //     for ($i=1; $i < $num1; $i++) { 
    //         if ($num1 % $i == 0) {
    //             array_push($arr,$i);
    //         }
    //     }
    //     print_r($arr);
    // }

    // arrDel(10,6);


    // function summ($num){
    //     $sum = 0;
    //     for ($i = 1; $i < $num; $i++) {
    //         $sum += $i ;
    //     }
    //     echo $sum + $num;
    // }

    // summ(2);


    // $username = 'Ivan';
    // $userLastname = 'Ivanov';

    // $name = (object) [
    //     'name' => $username,
    //     'lastname' => $userLastname
    // ];

    // foreach ($name as $key => $value) {
    //     echo $key . ': ' . $value . '<br>';
    // }


    // function getwek() {
    //     $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг','Пятница', 'Суббота'];
    //     $day = date('w');
        
    //     echo $days[$day];
    // }
    
    // echo getwek();

    // function getwek($date) {
    //     $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг','Пятница', 'Суббота'];
    //     $dayIndex = date('w', strtotime($date)); 
    //     return $days[$dayIndex];
    // }
    
    // $date = '2024-03-23'; 
    // echo getwek($date);

    // function secondsToTime($seconds) {
    //     $dtF = new \DateTime('@0');
    //     $dtT = new \DateTime("@$seconds");
    //     return $dtF->diff($dtT)->format('%a дней');
    // }
    // echo secondsToTime(1640467);

    // function isleap($year) {
    //     if ($year[3] == 0 || $year[3] == 2 || $year[3] == 4 || $year[3] == 6 || $year[3] == 8) {
    //         echo "Это високосный год";
    //     }
    //     else {
    //         echo "Нет";
    //     }
     
    // }
    // echo isleap('2024');

    // function is_prime($number) {
    //     if ($number <= 1) {
    //         return false;
    //     }
    //     for ($i = 2; $i <= sqrt($number); $i++) {
    //         if ($number % $i == 0) {
    //             return false;
    //         }
    //     }
    //     return true;
    // }
    
    // if (is_prime(3)) {
    //     echo 'Это число простое';
    // }else{echo "Оно не простое";}
?>