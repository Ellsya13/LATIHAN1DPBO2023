class Mahasiswa():

    # atribut private
    __nama = "blank"
    __nim = "blank"
    __prodi = "blank"
    __fakultas = "blank"

    # konstruktor
    def __init__(self, nama="blank", nim="blank", prodi="blank", fakultas="blank"):
        self.__nama = nama
        self.__nim = nim
        self.__prodi = prodi
        self.__fakultas = fakultas

    # deklarasi methods
    def setnama(self, nama):
        self.__nama = nama
        
    def getnama(self):
        return self.__nama 

    def setnim(self, nim):
        self.__nim = nim
        
    def getnim(self):
        return self.__nim 

    def setprodi(self, prodi):
        self.__prodi = prodi
        
    def getprodi(self):
        return self.__prodi 

    def setfakultas(self, fakultas):
        self.__fakultas = fakultas
        
    def getfakultas(self):
        return self.__fakultas 

    # untuk menampilkan hasil inputan user
    def keluaran(self):
       
        print ("Nama       : %s" % (self.__nama)) 
        print ("Nim    : %s" % (self.__nim)) 
        print ("Program studi  : %s" % (self.__prodi)) 
        print ("Fakultas   : %s" % (self.__fakultas))
        