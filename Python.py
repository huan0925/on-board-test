#ex1
print('EX1:')
class car:
    def helmet(self):
        helmet = 'no need'
        print(helmet)
        
    def speed(self):
        speed = 'fast'
        print(speed)
        
    def seat_belt(self):
        seat_belt = 'yes'
        print(seat_belt)
        
    def safe(self):
        safe = 'safer'
        print(safe)
        
    def easy_to_move(self):
        easy_to_move = 'easy'
        print(easy_to_move)
        
class moto(car):
    def helmet(self):
        helmet = 'need'
        print(helmet)
        
    def speed(self):
        speed = 'slower than car'
        print(speed)
        
    def seat_belt(self):
        seat_belt = 'no'
        print(seat_belt)
        
    def safe(self):
        safe = 'not safe enough'
        print(safe)

print('About car:')
car = car()
print('helmet:',end=' ')
car.helmet()
print('speed:',end=' ')
car.speed()
print('seat_belt:',end=' ')
car.seat_belt()
print('safe:',end=' ')
car.safe()
print('easy_to_move:',end=' ')
car.easy_to_move()

print('\n')
print('About motocycle:')
moto = moto()
print('helmet:',end=' ')
moto.helmet()
print('speed:',end=' ')
moto.speed()
print('seat_belt:',end=' ')
moto.seat_belt()
print('safe:',end=' ')
moto.safe()
print('easy_to_move:',end=' ')
moto.easy_to_move()

#ex2
print('\n')
print('EX2:')
string = "人易科技:上 機 測 驗 - 演算法"
def strQ2B(ustring):
    ss = []
    for s in ustring:
        rstring = ""
        for uchar in s:
            inside_code = ord(uchar)
            if (inside_code == 58):
                inside_code += 65248
            rstring += chr(inside_code)
        ss.append(rstring)
    return ''.join(ss)
print('Original String: ', string)
string = strQ2B(string)
print(string)

string = string.replace(" ", "" , 3)
print(string)

print(string[5:-6])

#ex3
print('\n')
print('EX3:')
a_array = [0,1,2,3,4,5,6,7,8,9]
odd = []
even = []

odd_total = 0
even_total = 0

for i in range(len(a_array)):
    if a_array[i] %2 == 0:
        odd.append(a_array[i])
        odd_total += a_array[i]
    else:
        even.append(a_array[i])
        even_total += a_array[i]

print('Even total - Odd total = ' , even_total - odd_total)
print ('Odd array: ' , odd)
print ('Even array: ' , even)

#ex4
print('\n')
print('EX4:')
sort = [77,5,5,22,13,55,97,4,796,1,0,9]
for i in range(len(sort)-1):
    for j in range(i+1,len(sort)):
        if sort[j] <= sort[i]:
            temp = sort[i]
            sort[i] = sort[j]
            sort[j] = temp
print('After sorted by Algorithm: ' , sort)

#5
print('\n')
print('EX5:')
array_a = set([77,5,5,22,13,55,97,4,796,1,0,9])
array_b = set([0,1,2,3,4,5,6,7,8,9])

print('1.The intersection of array_a and array_b: ' , array_a.intersection(array_b))
print('2.The difference of array_a and array_b: ' , array_a.difference(array_b))
print('3.The union of array_a and array_b: ' , array_a.union(array_b))

#ex6
print('\n')
print('EX6:')
def twoSum(num , target):
    two_num = []
    for i in range(len(num)):
        for j in range(i+1,len(num)):
            total = num[i] + num[j]
            if (total == target):
                two_num.extend([num[i] , num[j]])

    return two_num
num = [2,4,5,8,12]
target = 20
print('num: ', num)
print('target: ', target)
print(twoSum(num , target))



