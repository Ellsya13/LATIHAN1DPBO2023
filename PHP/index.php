<?php include "mahasiswa.php";

	$elsa = new Mahasiswa();
    $putri = new Mahasiswa();
	$tika = new Mahasiswa();
    $dina = new Mahasiswa();
    
	$elsa->set_nama("Elsa Nabella");
    $elsa->set_nim("2009037");
    $elsa->set_prodi("Ilmu Komputer");
    $elsa->set_fakultas("FPMIPA");
    $elsa->set_fotoProfile("-");

	$putri->set_nama("Putri Amanda");
    $putri->set_nim("2000737");
    $putri->set_prodi("Ilmu Komputer");
    $putri->set_fakultas("FPMIPA");
    $putri->set_fotoProfile("-");
    
    $tika->set_nama("Tika Rania");
    $tika->set_nim("2005177");
    $tika->set_prodi("Ilmu Komputer");
    $tika->set_fakultas("FPMIPA");
    $tika->set_fotoProfile("-");

    $dina->set_nama("Dina Natalia");
    $dina->set_nim("2001527");
    $dina->set_prodi("Pendidikan Ilmu Komputer");
    $dina->set_fakultas("FPMIPA");
    $dina->set_fotoProfile("-");

	echo "Nama: " . $elsa->get_nama(); echo "<br>";
	echo "Nim: " . $elsa->get_nim(); echo "<br>";
    echo "Prodi: " . $elsa->get_prodi(); echo "<br>";
    echo "Fakultas: " . $elsa->get_fakultas(); echo "<br>";
    echo "Foto Profile: " . $elsa->get_fotoProfile(); echo "<br>";
    echo "<br>";

    echo "Nama: " . $putri->get_nama(); echo "<br>";
	echo "Nim: " . $putri->get_nim(); echo "<br>";
    echo "Prodi: " . $putri->get_prodi(); echo "<br>";
    echo "Fakultas: " . $putri->get_fakultas(); echo "<br>";
    echo "Foto Profile: " . $putri->get_fotoProfile(); echo "<br>";
    echo "<br>";
    
    echo "Nama: " . $tika->get_nama(); echo "<br>";
	echo "Nim: " . $tika->get_nim(); echo "<br>";
    echo "Prodi: " . $tika->get_prodi(); echo "<br>";
    echo "Fakultas: " . $tika->get_fakultas(); echo "<br>";
    echo "Foto Profile: " . $tika->get_fotoProfile(); echo "<br>";
    echo "<br>";

    echo "Nama: " . $dina->get_nama(); echo "<br>";
	echo "Nim: " . $dina->get_nim(); echo "<br>";
    echo "Prodi: " . $dina->get_prodi(); echo "<br>";
    echo "Fakultas: " . $dina->get_fakultas(); echo "<br>";
    echo "Foto Profile: " . $dina->get_fotoProfile(); echo "<br>";
    echo "<br>";
    
?>