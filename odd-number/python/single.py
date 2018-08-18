from datetime import datetime

def oddNumber(l, r):

  if l % 2 == 0:
    l = l + 1

  if r % 2 == 0:
    r = r - 1

  tot = 0

  for n in range(l, r, 2):

    isOdd = 1
    print(n)
    half = int(round(n / 2))

    for i in range(3, half, 2):
      if n % i == 0:
      	isOdd = 0

    if isOdd:
      tot += 1

  return tot

start = datetime.now()
print("Found:", oddNumber(2,100))
end = datetime.now()
elapsed = end - start
print("Elapsed:", elapsed.seconds / 60, "m")
