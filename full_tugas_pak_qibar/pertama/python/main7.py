# os = ngaturin terminal
# time = ngaturin waktu untuk tampil

import time,os

angka = 0
while angka < 5:
    print("level",angka)
    time.sleep(2) #tambah delay
    os.system("clear") # menghilangkan tampilan ke atas
    angka = angka + 1
