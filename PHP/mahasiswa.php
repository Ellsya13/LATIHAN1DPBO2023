<?php
	class Mahasiswa 
    {
		private $nama = "";
        private $nim = "";
        private $prodi = "";
        private $fakultas = "";
        private $fotoProfil = "";

		public function __construct($nama = "", $nim = "", $prodi = "", $fakultas = "", $fotoProfil="")
		{
			$this->nama = $nama;
			$this->nim = $nim;
			$this->prodi = $prodi;
			$this->fakultas = $fakultas;			
			$this->fotoProfil = $fotoProfil;
		}
        // untuk nama
		public function set_nama($new_nama) { 
			$this->nama = $new_nama;  
 		}
 
   		public function get_nama() {
			return $this->nama;
		}

        // untuk nim
        public function set_nim($new_nim) { 
			$this->nim = $new_nim;  
 		}
 
   		public function get_nim() {
			return $this->nim;
		}

        // untuk prodi
        public function set_prodi($new_prodi) { 
			$this->prodi = $new_prodi;  
 		}
 
   		public function get_prodi() {
			return $this->prodi;
		}

        // untuk fakultas
        public function set_fakultas($new_fakultas) { 
			$this->fakultas = $new_fakultas;  
 		}
 
   		public function get_fakultas() {
			return $this->fakultas;
		}

        // untuk fotoProfil
        public function set_fotoProfil($new_fotoProfil) { 
			$this->fotoProfil = $new_fotoProfil;  
 		}
 
   		public function get_fotoProfil() {
			return $this->fotoProfil;
		}

		public function __destruct()
		{
			
		}
	} 
?>