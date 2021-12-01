
lis = []


while True:
    num = float(input())
    if num == 0:
        break
    lis.append(num**2)

print(lis)
print(sum(lis))