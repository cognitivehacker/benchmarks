package main

import (
	"fmt"
	"time"
	"math"
)

func oddNumbers(l int, r int) int {

	fmt.Println("Running:")

	if( l % 2 == 0 ) {
		l++
	}

	if( r % 2 == 0 ) {
		r--
	}

	tot := 0

	for n := l ; n <= r ; n += 2 {
		isOdd := true
		fmt.Println("\t",n)

		var half int
		half = n >> 2
		for i := 3; i < half; i += 2 { // test only inpar numbers
			if n % i == 0 {
					isOdd = false
			}
		}

		if isOdd {
			tot++
		}

	}

	return tot
}

func main ( ) {

	start := time.Now()
	fmt.Println("Start")
	result := oddNumbers(2, int(math.Pow(10, 6.0)))
	end := time.Now()
	fmt.Println("End")
	fmt.Println("Tot:", result)
	fmt.Println("Ele:", end.Sub(start))

}
