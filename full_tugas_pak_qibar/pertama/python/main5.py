# Story: Di rumah, malam-malam, sendirian.

print("Lu lagi sendiri di rumah, udah jam 2 pagi. Tiba-tiba DENGAR suara BUKA KUNCI pintu depan.")
print("1. Ambil pisau dapur, siap-siap ngumpet di balik sofa.")
print("2. Langsung lari ke kamar, kunci pintu, telpon polisi.")
choice = int(input("= "))

if choice == 1:
    print("Lu udah siap di balik sofa. Pintu kamar dibuka. Yang masuk BUKAN orang, tapi BONEKA annabelle GEDEE banget.")
    print("1. Pisau langsung lu lempar ke arahnya.")
    print("2. Pura-pura batuk keras, biar dia notice")
    choice = int(input("= "))

    if choice == 1:
        print("Pisau kena! Tapi boneka itu cuma diem, terus kepalanya miring. Dia senyum.")
        print("Boneka itu ngomong, 'Main yuk.'")
        print("TAMAT. Lu ditarik paksa ke kasur dan gak pernah bangun lagi.")

    elif choice == 2:
        print("Lu batuk. Boneka itu bingung, dia nengok ke sumber suara.")
        print("SELAMAT. Lu langsung lari ke pintu belakang, dia bengong. Lu berhasil kabur ke rumah tetangga.")

    else:
        print("Diam aja. Boneka itu ngedekat. Lu sadar, mata boneka itu KAKINYA TEMEN LU yang hilang bulan lalu.")
        print("TAMAT. Lu menjerit. Kepala lu diputar 180 derajat.")

elif choice == 2:
    print("Lu lari ke kamar, pintu udah dikunci. Lu telpon polisi, tapi yang angkat anak kecil, 'Polisinya lagi tidur.'")
    print("1. Pecahin jendela, lompat keluar.")
    print("2. Sembunyi di lemari baju, berdoa.")
    choice = int(input("= "))

    if choice == 1:
        print("Lu pecahin jendela, tapi di luar lu lihat RUMAH LU SENDIRI dari luar JAUH LEBIH TINGGI dari biasanya. Jauh banget dari tanah.")
        print("TAMAT. Lu lompat, tapi lu jatuh ke dasar sumur tua di samping rumah.")

    elif choice == 2:
        print("Lu masuk lemari. Udah aman. Tiba-tiba di kantong baju lu, lu nemu KUNCI LEMARI LU SENDIRI.")
        print("SELAMAT. Lu keluar dari lemari, dan ternyata semuanya cuma mimpi.")

    else:
        print("panik, teriak gak jelas. Suara anak kecil dari telepon bilang, 'Berisik.'")
        print("TAMAT. HP nya mati.")

else:
    print("Gak milih apa-apa. Lu diem kayak patung di ruang tengah.")
    print("TAMAT. Lu jadi patung selamanya.")