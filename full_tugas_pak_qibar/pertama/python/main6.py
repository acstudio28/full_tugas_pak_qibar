# while boolean
# output
# operator assignment

# a = int(input("masukan angka awal?"))
# b = int(input("masukan angka akhir?"))

# while a <= b:
#     print(a)
#     a = a + 1


# odd even generator
# buat input ganjil / genap
# jika ganjil yang terpilih
    # mau sampai angka berapa
    # looping while sesuai angka berapa
# jika genap yang terpilih
    # mau sampai angka berapa
    # looping while sesuai angka berapa

jenis = input("Mau pilih 'ganjil' atau 'genap'? ").lower()

if jenis == "ganjil":
    batas = int(input("Mau sampai angka berapa? "))
    angka = 1  # ganjil terkecil
    while angka <= batas:
        print(angka)
        angka += 2  # operator assignment

elif jenis == "genap":
    batas = int(input("Mau sampai angka berapa? "))
    angka = 2  # genap terkecil
    while angka <= batas:
        print(angka)
        angka += 2  # operator assignment

else:
    print("Pilihan salah. Ketik 'ganjil' atau 'genap'.")

