<?php 
    require_once(ROOT_PATH . '/Model/database.php');

    class model extends Database 
    {
        public function insertMahasiswa($values) {
            return $this->select("INSERT INTO mahasiswa(`nim`, `nama_mahasiswa`, `email`, `no_telepon`, `jurusan`, `tanggal_lahir`, `url_foto`, `url_cv`) VALUES (...$values)");
        }
    }
    

?>