<?php
    class Database {
        public function __construct($iniFileName){
            $this->dbSettings = parse_ini_file($iniFileName);
            $this->host = $this->dbSettings['HOST'];
            $this->db = $this->dbSettings['DB'];
            $this->user = $this->dbSettings['USER'];
            $this->passwd = $this->dbSettings['PASSWD'];
            $this->charset = $this->dbSettings['CHARSET'];
        }

        public function connect(){
            return new PDO(
                "mysql:host=$this->host;
                dbname=$this->db;
                charset=$this->charset;",
                $this->user,
                $this->passwd,
               [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]
            );
        }


    }

    function IsValid($array){
        foreach ($array as $field){
            if ($field==''){
                return false;
            }
        }
        return true;
    }

    function formatDate($date){
        $res = explode('.', $date);
      
        $array = [];
        $array[0] = $res[2];
        $array[1] = $res[1];
        $array[2] = $res[0];
      
        return implode('.', $array);
    }
    
    function upload_file($file, $folder) 
       { 
        $name = (string)uniqid() . $file['name']; 
        var_dump($name);
        copy($file['tmp_name'], "./$folder/$name"); 
        return $name; 
    }

    session_start();
    $user = null;
    $DB = new Database('Database.ini');
    $pdo =   $DB->connect();
    

    if (isset($_SESSION['user'])){
       $user = $_SESSION['user'];
    }


    


    