<?php 

    class SQL 
    {
        protected $conn = null;

        public function __construct()
        {
            try {
                $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

                if (mysqli_connect_errno()) {
                    throw new Exception('Could not connect to database');
                }
            } catch (mysqli_sql_exception $e){
                throw new Exception($e->getMessage());   
            }
        }

        public function selectAll($table) 
        {
            return $this->conn->query("SELECT * FROM $table")->fetch_all(MYSQLI_ASSOC);
        }

        public function checkExistingAccount($email, $pswd)
        {
            return $this->conn->query("SELECT nim FROM `mahasiswa` WHERE email='$email' AND nim='$pswd'")->num_rows;
        }

        public function insertAccount($name, $email, $telepon, $jurusan, $nim)
        {
            try {
                 return $this->conn->query("INSERT INTO mahasiswa (`nama_mahasiswa`, `email`, `no_telepon`, `jurusan`, `nim`) 
                VALUES ('$name', '$email', '$telepon', '$jurusan', '$nim')");
            } catch (mysqli_sql_exception $e) {
                return 0;
            }
        }

        /**
         * Close connection to Sql server when pagi is closed
         * 
         */

        public function __destruct()
        {
            $this->conn->close();
        }
    }

?>