<?php
  function fizzBuzz($number) {
    switch (true) {
        case $number % 3 === 0 && $number %5 ===0:
            return 'FizzBuzz';
            break;
        
        case $number % 3 ===0:
            return 'Fizz';
            break;

        case $number % 5 ===0:
            return 'Buzz';
            break;

        default:
            return $number;
            break;
    }
}
for ($i = 1;$i<=100; $i++) {
    echo fizzBuzz($i).' ';
}
echo '<br><br>';

for ($i=1; $i<=10000;$i++) {
    $number = 0;

    for ($j = 1; $j <= $i;$j++) {
        if($i%$j ==0) {
            $number += 1;
        }
    }

    if($number == 2) {
        echo $i. "\n";
    }
}
echo '<br><br>';


$framework = [
  ['PHP','laravel','Cake PHP','Fuel PHP','Slim','Symfony'],
  ['JavaScript','React','Vue','Angular','jQuery','Backbone'],
  ['Ruby','Rails','Sinatra','Cuba','HANAMI','Ramaze']
];

foreach($framework as $values){
    echo $values[0]. 'のフレームワーク:'.$values[1]. ','.$values[2]. ','.$values[3]. ','.$values[4]. ','.$values[5]. '<br>';
}
?>

