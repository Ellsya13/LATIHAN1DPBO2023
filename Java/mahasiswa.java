public class Mahasiswa
{
    private String nama;
    private String nim;
    private String prodi;
    private String fakultas;

    Mahasiswa() {
        this.nama = "";
        this.nim = "";
        this.prodi = "";
        this.fakultas = "";
    }

    public void setnama(String nama) {
        this.nama = nama;
    }
    public String getnama() {
        return this.nama;
    }

    public void setnim(String nim) {
        this.nim = nim;
    }
    public String getnim() {
        return this.nim;
    }

    public void setprodi(int prodi) {
        this.prodi = prodi;
    }
    public int getprodi() {
        return this.prodi;
    }

    public void setfakultas(String fakultas) {
        this.fakultas = fakultas;
    }
    public String getfakultas() {
        return this.fakultas;
    }
}