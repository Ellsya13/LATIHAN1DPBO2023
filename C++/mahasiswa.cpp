#include<iostream>
#include<string>

using namespace std;
 
class Mahasiswa
{
    private:
        string nama;
        string nim;
        string prodi;
        string fakultas;
        
    public:
		Mahasiswa(){

        }

        // method untuk nama
        void setnama(string nama){
            this->nama = nama;
        }
        string getnama(){
            return this->nama;
        }

        // method untuk nim
        void setnim(string nim){
            this->nim = nim;
        }
        string getnim(){
            return this->nim;
        }

        // method untuk prodi
        void setprodi(int prodi){
            this-> prodi = prodi;
        }
        int getprodi(){
            return this->prodi;
        }

        // method untuk fakultas
        void setfakultas(int i, string fakultas){
            this-> fakultas[i] = fakultas;
        }
        string getfakultas(int i){
            return this->fakultas[i];
        }

        void putdata();

        ~Mahasiswa(){

		}
};