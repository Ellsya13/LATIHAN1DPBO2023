#include "mahasiswa.cpp"

// Defining the function outside the class
// void untuk menampilkan inputan ke layar
void Mahasiswa::putdata()
{
    cout << nama<< " - ";
    cout << nim << " - ";
    cout << prodi << " - ";
    cout << fakultas << " - ";
}
 
int main()
{
    Mahasiswa arr[n];

    string nama;
    string nim;
    string prodi;
    string fakultas;

    int countnama[n];

        //untuk nama
        cout << "Nama   : ";
        cin >> nama;
        arr[i].setnama(nama);
    
        //untuk nim
        cout << "NIM    : ";
        cin >> nim;
        arr[i].setnim(nim);
    
        //untuk prodi
        cout << "Program Studi  : ";
        cin >> prodi;
        arr[i].setprodi(prodi);

        //untuk fakultas
        cout << "Fakultas   : ";
        cin >> fakultas;
        arr[i].setfakultas(fakultas);
    
    return 0;
}