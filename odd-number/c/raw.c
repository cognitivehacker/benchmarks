#include <stdio.h>
#include <time.h>

const int START = 2;
const int END = 1000000;

int oddNumbers(int l, int r) {

  int tot = 0;
  int n, i, isOdd;

	for ( n = l ; n <= r ; n++ ) {

		isOdd = 1;
		printf("\t%d\n",n);

		for (i = 3; i < n; i++) { // test only inpar numbers

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
  printf("Found:%d\n", oddNumbers(START, END));
  time(&end_t);
  printf("Elapsed:%f\n", difftime(end_t, start_t));
  return 0;
}
