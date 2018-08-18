<?php

function oddNumbers($l, $r) {

    $tot = 0;

    echo "runing:" . PHP_EOL;
    for( $n = $l ; $n <= $r ; $n++ ){

        $isOdd = true;
        echo "\t$n" . PHP_EOL;

        for ( $i = 3; $i < $n; $i++ ) { // test only inpar numbers
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
