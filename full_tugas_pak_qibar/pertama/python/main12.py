# for

#for (how many)

# for (start from, how many)
# for (start form, how many, step)

# end = int(input("mau angka berapa bubb?"))
# for i in range(1,end,2):
#     print(i)

while True:
    cois = int(input("1.ganjil\n2.genap\n3.keluar\n= "))

    if cois == 1:
        end = int(input("mau angka berapa bubb?"))
        for i in range(1,end,2):
            print(i)
    elif cois == 2:
        end = int(input("mau angka berapa bubb?"))
        for i in range(2,end,2):
            print(i) 