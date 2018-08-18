function oddNumbers(l, r){

  let tot = 0

  for( let n = l ; n <= r ; n++ ) {

    let isOdd = true
    console.log(n)

    for ( let i = 3; i < n; i++ ) { // test only inpar numbers
      if ( n % i === 0 )
        isOdd = false
    }

    if(isOdd)
      tot++

  }

  return tot

}

let start = Date.now()
console.log("Start", start)
console.log("Found", oddNumbers(2, 10 ** 6 ))
console.log("Elapsed", Math.floor((Date.now() - start)/1000)/60)
