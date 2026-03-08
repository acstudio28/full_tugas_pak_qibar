# tabek angka

# import random dan os dan time
# looping dimulai
#   buat variabel input integer tebak
#   jika tebak dibawah var random maka
#   outputnya tebakan terlalu rendah
#   jika tebak diatas var random maka
#   outputnya tebakan terlalau tinggi
#   jika tebak sama dengan var random
#   outputnya tertebak! angkanya var random

import random

angka_rahasia = random.randint(1, 10)

while True:
    try:
        tebak = int(input("Tebak angka (1-10): "))

        if tebak < angka_rahasia:
            print("Terlalu rendah!")
        elif tebak > angka_rahasia:
            print("Terlalu tinggi!")
        else:
            print(f"Tepat! Angkanya adalah {angka_rahasia}")
            break
    except ValueError:
        print("Seriusss? Yang bener aja!")

