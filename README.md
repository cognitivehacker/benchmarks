# Benchmarks

This project have some tests implamentations.

## Odd Numbers

### Golang

| Range        | Time Elapsed     | Found | Go Version           | File       |
|--------------|------------------|-------|----------------------|------------|
| 2 to 10^6    | 9m               | 78497 | go1.10.1 linux/amd64 | single.go |
| 2 to 10^6    | 14m              | 78497 | go1.10.1 linux/amd64 | bitwise.go |

### PHP7

| Range        | Time Elapsed     | Found | PHP Version          | File       |
|--------------|------------------|-------|----------------------|------------|
| 2 to 10^6    | 25m              | 78498 | PHP 7.2.8 (cli)      | single.php |
| 2 to 10^6    | 36m              | 78498 | PHP 7.2.8 (cli)      | bitwise.php|

### NodeJS

| Range        | Time Elapsed     | Found | Node Version         | File       |
|--------------|------------------|-------|----------------------|------------|
| 2 to 10^6    | 6m               | 78497 | v10.9.0              | single.js  |
