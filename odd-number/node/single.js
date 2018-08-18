function oddNumbers(l, r){

  if(l % 2 === 0)
    l++

  if(r % 2 === 0)
    r--

    let tot = 0

    for( let n = l ; n <= r ; n += 2 ) {

        let isOdd = true
        console.log(n)
        let control = n/2

        for ( let i = 3; i < control; i += 2 ) { // test only inpar numbers
          if ( n % i === 0 )
            isOdd = false
        }

        if(isOdd)
          tot++

    }

    return tot;

}

let start = Date.now()
console.log("Start", start)
console.log("Found", oddNumbers(2, 10 ** 6 ))
console.log("Elapsed", Math.floor((Date.now() - start)/1000)/60)
