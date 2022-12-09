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
    }

?>