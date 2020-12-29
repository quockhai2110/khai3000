def algorithm2():
    print('y > x')
    x = int(input('Nhap x: '))
    y = int(input('Nhap y: '))
    numberstep = 0

    while x < y:
        if y % 2 == 0:
            y = y / 2
        else:
            y = y + 1
        numberstep = numberstep + 1
    x = x - y
    numberstep = x + numberstep
    print(numberstep)

if __name__ == '__main__':
    algorithm2()