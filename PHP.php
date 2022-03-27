<?php
//EX1
class car{
    function helmet(){
        $helmet = "no need";
        echo $helmet;
    }

    function speed(){
        $speed = "fast";
        echo $speed;
    }
    function easy_to_move(){
        $easy_to_move = "easy";
        echo $easy_to_move;
    }

    function safe(){
        $safe = "safer";
        echo $safe;
    }

    function seat_belt(){
        $seat_belt = "yes";
        echo $seat_belt;
    }
  
}
class moto extends car{
    function helmet(){
        $helmet = "need";
        echo $helmet;
    }

    function speed(){
        $speed = "slower than car";
        echo $speed;
    }

    function safe(){
        $safe = "not safe enough";
        echo $safe;
    }

    function seat_belt(){
        $seat_belt = "no";
        echo $seat_belt;
    }
    
}
$car = new car();
echo "EX1<br>About car:<br>";
echo "helmet: ";
$car -> helmet();
echo "<br>speed: ";
$car -> speed();
echo "<br>easy to move: ";
$car -> easy_to_move();
echo "<br>safe: ";
$car -> safe();
echo "<br>seat belt: ";
$car -> seat_belt();

$moto = new moto();
echo "<br><br>About motocycle:<br>";
echo "helmet: ";
$moto -> helmet();
echo "<br>speed: ";
$moto -> speed();
echo "<br>easy to move: ";
$moto -> easy_to_move();
echo "<br>safe: ";
$moto -> safe();
echo "<br>seat belt: ";
$moto -> seat_belt();


//EX2-1
$str = "人易科技:上 機 測 驗 - 演算法";

$dbc = array('：'); //全形
$sbc = array(':'); //半形
$str = str_replace( $sbc, $dbc, $str );
echo "<br>EX2-1:<br>" . $str . "<br>"; 

//EX2-2
$a = explode(" " , $str , 4); //根據空格切
$b = implode($a);
echo "<br>EX2-2<br>" . $b . "<br>";

//EX2-3
$c = mb_substr($b , 5 , 4 , "utf-8");
echo "<br>EX2-3<br>" . $c . "<br>";

//EX3
echo "<br>EX3-1<br>";
$a_array = array(0,1,2,3,4,5,6,7,8,9);
//print_r($a_array);
$odd = array();
$even = array();

$odd_total = 0;
$even_total = 0;
for($i = 0 ; $i < count($a_array) ; $i++){
    //echo $i;
    if ($a_array[$i] %2 == 0){
        array_push($odd,$a_array[$i]);
        //echo ($a_array[$i] %2);
        $odd_total += $a_array[$i];
    }
    else{
        array_push($even,$a_array[$i]);
        //echo ($a_array[$i] %2);
        $even_total += $a_array[$i];
    }
}

//echo "Even total: " . $even_total;
//echo "<br>Odd total: " . $odd_total;
$ans = $even_total - $odd_total;
echo "Even total - Odd total = " . $ans . "<br>"; 

echo "<br>EX3-2";
echo "<br>Even array: ";
print_r($even);
echo "<br>Odd array: ";
print_r($odd);


//EX4
echo "<br><br>EX4<br>";
$sort = array(77,5,5,22,13,55,97,4,796,1,0,9);

for ($i = 0 ; $i < count($sort) ; $i++){
    for($j = $i+1 ; $j < count($sort) ; $j++){
        if ($sort[$j] <= $sort[$i]){
            //$min_index = $j; 
            $temp = $sort[$i];
            $sort[$i] = $sort[$j];
            $sort[$j] = $temp;
        }
    }
}

echo "After sorted by Algorithm: ";
print_r($sort);

//EX5
echo "<br><br>EX5<br>";
$array_a = array(77,5,5,22,13,55,97,4,796,1,0,9);
$array_b = array(0,1,2,3,4,5,6,7,8,9);

echo "1、陣列a交集陣列b: ";
$array_c = array_intersect($array_a , $array_b);
print_r($array_c);
echo "<br>";

echo "2、陣列a差集陣列b: ";
$array_e = array_diff($array_a , $array_b);
print_r($array_e);
echo "<br>";

echo "3、陣列a聯集陣列b: ";
$array_d = array_merge($array_a , $array_b);
print_r($array_d);
echo "<br>";

//EX6
echo "<br><br>EX6<br>";
function twoSum($num, $target){
    $two_num = array();
    for ($i = 0 ; $i < count($num) ; $i++){
        for ($j = $i+1 ; $j < count($num) ; $j++){
            $total = $num[$i] + $num[$j];
            if ($total == $target){
                array_push($two_num , $num[$i] , $num[$j]);
            }
        }
    }
    return $two_num;
}

$num =[2,4,5,8,12];
$target = 9;

echo "Number array: ";
print_r($num);
echo "<br>Target: " . $target . "<br>";
print_r(twoSum($num, $target));
?>