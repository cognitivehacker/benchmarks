<?php

function oddNumbers($l, $r) {

    $tot = 0;

    if($l % 2 === 0 )
      $l++;

    if($r % 2 === 0)
      $r--;

    echo "runing:" . PHP_EOL;
    for( $n = $l ; $n <= $r ; $n += 2 ){

        $isOdd = true;
        echo "\t$n" . PHP_EOL;
        $control = $n >> 1;

        for ( $i = 3; $i < $control; $i += 2 ) { // test only inpar numbers
            if ( $n % $i === 0 )
                $isOdd = false;
        }

        if($isOdd)
            $tot++;

    }

    return $tot;

}

$start = strtotime('now');
echo 'start: ' . date('Y-m-d H:i:s') . PHP_EOL;
$oddsCount = oddNumbers(1, 10 ** 6 );
echo 'end  : ' . date('Y-m-d H:i:s') . PHP_EOL;
echo 'total: ' . $oddsCount . PHP_EOL;
echo 'time : ' . round(((strtotime('now') - $start)/60) . 'm') . PHP_EOL;
