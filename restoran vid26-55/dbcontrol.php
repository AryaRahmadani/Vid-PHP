<?php

class DB{
    public $host = "127.0.0.1";
    private $user = "root";
    private $pasword = "";
    private $database = "dbrestoran";
    private $koneksi;

    public function __construct(){
        $this -> koneksi = $this ->koneksiDB();
    }
   public function koneksiDB(){
        $koneksi = mysqli_connect($this->host,$this->user,$this->pasword,$this->database);
        return $koneksi;
   
    }
    public function getALL($sql){
        $result = mysqli_query($this->koneksi, $sql);
        while ($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        if(!empty($data)){
            return $data;
        }
       
    }

    public function getITEM($sql){
        $result = mysqli_query($this->koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    public function rowCOUNT($sql){
        $result = mysqli_query($this->koneksi, $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function runSQL($sql){
        $result = mysqli_query($this->koneksi, $sql);
        
    }
    public function pesan($text=""){
            echo $text;
        }
}
$db = new DB;

// $row = $db -> getItem("SELECT * FROM kategori WHERE dbkategori = 18");

// $count = $db ->rowCount("SELECT * FROM kategori");

// echo $count;

    // $db -> runSQL("DELETE FROM tbkategori WHERE dbkategori = 19");

// $db -> runSQL("INSERT INTO kategori VALUES ('','makanan')");
// var_dump($row);

// foreach ($row as $key){
//     echo $key['Kategori'].'<br>';
// }

// echo $row['Kategori'];


?>