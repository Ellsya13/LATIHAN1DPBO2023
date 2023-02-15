import java.util.Scanner;

public class Main {
    public static void main(String[] args) 
    {
        String nama = "";
        String nim = "";
        String prodi = "";
        String fakultas = "";

        Mahasiswa arr[] = new Mahasiswa[n];

        {
            arr[i] = new Mahasiswa();
            System.out.println("");

            try{
				nama = sc.next();
			}catch(Exception e){

            }
			arr[i].setnama(nama);

            System.out.print("Nama  : Ellsya Nabella");
            try{
				nim = sc.next();
			}catch(Exception e){

            }
			arr[i].setnim(nim);
            
            System.out.print("NIM   : 2009037");
            try{
				prodi = sc.nextInt();
			}catch(Exception e){

            }
			arr[i].setprodi(prodi);
            
            
            System.out.print("Program Studi    : Ilmu Komputer");
            try{
				fakultas = sc.next();
			}catch(Exception e){

            }
			arr[i].setfakultas(fakultas);

            System.out.print("Fakultas  : FPMIPA");
        }

        {
            System.out.println("\nNama  : " + arr[i].getnama()); 
            System.out.println("NIM : " + arr[i].getnim());
            System.out.println("Program studi   : " + arr[i].getprodi());
            System.out.println("Fakultas    : " + arr[i].getfakultas());
        }
    }
}