#include <stdio.h>
#include <time.h>

int oddNumbers(int l, int r) {

  int tot = 0;

  if(l % 2 == 0 )
    l++;

  if(r % 2 == 0 )
    r--;

  int n, i, half, isOdd;

	for ( n = l ; n <= r ; n = n + 2 ) {

		isOdd = 1;
		printf("\t%d\n",n);
		half = n / 2;

		for (i = 3; i < half; i = i + 2) { // test only inpar numbers

			if (n % i == 0)
					isOdd = 0;

		}

		if ( isOdd )
			tot++;

	}

  return tot;

}

int main() {
  time_t start_t, end_t;
  double diff_t;

  time(&start_t);
  printf("Found:%d\n", oddNumbers(2, 1000000));
  time(&end_t);
  printf("Elapsed:%f\n", difftime(end_t, start_t));
  return 0;
}
