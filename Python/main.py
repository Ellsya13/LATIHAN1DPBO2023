from Mahasiswa import Mahasiswa

# membuat array sepanjang n
arr = [Mahasiswa() for i in range(n)]

# memasukkan data dengan function set
for i in range(n):
    print("Nama    : ", end = ' ') 
    nama = input()
    arr[i].setnama(nama)
    
    print("NIM  : ", end = ' ') 
    nim = input()
    arr[i].setnim(nim)
    
    print("Program Studi    : ", end = ' ') 
    prodi = input()
    arr[i].setprodi(prodi)
    
    print("Masukan nama pelatih : ", end = ' ') 
    fakultas = input()
    arr[i].sefakultas(fakultas)
   
# menampilkan output array objek
for i in range(n):
    arr[i].keluaran()