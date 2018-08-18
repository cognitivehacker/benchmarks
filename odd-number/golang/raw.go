package main

import (
	"fmt"
	"time"
	"math"
)

func oddNumbers(l int, r int) int {

	fmt.Println("Running:")

	tot := 0

	for n := l ; n <= r ; n += 1 {
		isOdd := true
		fmt.Println("\t",n)

		for i := 2; i < n; i += 1 { // test only inpar numbers
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
