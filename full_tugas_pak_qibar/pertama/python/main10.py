import os,time,random

a = random.randint(1, 5)
b = random.randint(10,99)
c = random.randint(100,999)

while True:
    os.system("clear")
    print(f"{a} + {b}")
    jawab = int(input("jawabannya? "))
    if jawab == a+b:
        os.system("clear")
        print("benar!")
        print(f"hasilnya adalah = {a+b}")
        break
    else:
        os.system("clear")
        print("jawaban anda salah!")
        print("coba lagi")
        time.sleep(2)
        continue


# import os,time,random

# a = random.randint(1,9)
# b = random.randint(10,99)
# c = random.randint(100,999)

# while True:
#     os.system("cls")
    
#     print('''Selamat datang di math QUIZ
#         1. Easy
#         2. Medium
#         3. Hard''')
#     cois = int(input("= "))
    
#     if cois == 1:
#         buat yang easy gampang dan asik
#     elif cois == 2:
#         # buat yang medium dan lumayan asik
#     elif cois == 3:
#         # buat yang susah dan bikin pusing
#     else:
#         print("pilihan engak ada sii")
#         time.sleep(2)
#         continue
    
    
#     print(f"{a} + {b}")
#     jawab = int(input("jawabnya ap hah?"))
#     if jawab == a+b:
#         os.system("cls")
#         print("kok tau sii!!")
#         print(f"jawabnya emang itu {a+b}")
#         break
#     else:
#         os.system("cls")
#         print("yahahah engak bener sii!!")
#         print(f"jawabnya bukan itu {jawab}")
#         print("coba lagi deh")
#         time.sleep(2)
#         continue

#=========

# import os,time,random

# a = random.randint(1,9)
# b = random.randint(10,99)
# c = random.randint(100,999)
# while True:
#     os.system("cls")

# print('''selamat datang di math quiz
# 1. easy
# 2. medium
# 3. hard
# pilih levelnya gan ''')


# choice = int(input("pilih levelnya gan = "))
# if choice == 1: 
#     elif choice == 2:
#     elif choice == 3:
#     else:
#         print("levelnya ga ada gan")
#         time.sleep(2)
#         continue    

#     print(f"{a} + {b}")
#     jawab = int(input("jawabannya? "))
#     if jawab == a + b:
#         os.system("cls")
#         print("benar!")
#         print(f"hasilnya adalah = {a + b}")
#         break
#     else:
#         os.system("cls")
#         print("salah!")
#         print(f"hasilnya adalah = {a + b}")
#         time.sleep(2)
    
#         continue

#============================

import os, time, random

while True:
    os.system("cls")
    
    print('''Selamat datang di math QUIZ
        1. Easy
        2. Medium
        3. Hard''')
    cois = int(input("= "))

    # generate soal sesuai level
    if cois == 1:  # EASY
        a = random.randint(1, 9)
        b = random.randint(1, 9)
        operator = random.choice(["+", "-"])
        print("Level: EASY (asik nih gampang ~)")
    
    elif cois == 2:  # MEDIUM
        a = random.randint(10, 99)
        b = random.randint(10, 99)
        operator = random.choice(["+", "-", "*"])
        print("Level: MEDIUM (lumayan mikir dikit)")
    
    elif cois == 3:  # HARD
        a = random.randint(100, 999)
        b = random.randint(10, 99)
        operator = random.choice(["+", "-", "*", "//"])
        print("Level: HARD (siap pusing dulu yuk)")
    
    else:
        print("pilihannya engak ada sii!")
        time.sleep(2)
        continue

    time.sleep(1)
    os.system("cls")

    # Buat soal sesuai operator
    if operator == "+":
        hasil = a + b
        soal = f"{a} + {b}"
    elif operator == "-":
        hasil = a - b
        soal = f"{a} - {b}"
    elif operator == "*":
        hasil = a * b
        soal = f"{a} x {b}"
    elif operator == "//":
        # biar engak ada koma
        hasil = a // b
        soal = f"{a} ÷ {b} (pembulatan bawah)"

    print("Jawab soalll yaaa!")
    print(soal)
    jawab = int(input("jawabnya ap hah? "))

    if jawab == hasil:
        os.system("cls")
        print("KOK TAU SII!!! ")
        print(f"jawabannya emang itu: {hasil}")
        break
    else:
        os.system("cls")
        print("Yahah salah sii ")
        print(f"jawabnya bukan itu, kamu jawab {jawab}")
        print(f"harusnya: {hasil}")
        print("coba lagi yaaa ~")
        time.sleep(2)