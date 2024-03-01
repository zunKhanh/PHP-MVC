<?php
class connect{
    // thuoc tinh
    var $db = null;
    //ham tao
    function __construct(){
        //databsae
        $dsn ='mysql:host=localhost;dbname=Shopcacanh';
        $user='root';
        $pass= '';
        //tao su ket noi bang pdo
        try {
            $this->db = new PDO($dsn, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // echo"Ket noi thanh cong";
        } catch (\Throwable $th) {
            //throw $th;
            echo"ket noi that bai";
            echo $th;
        }
    }
    function getlist($select){
        $result = $this ->db->query($select);
        return $result;
    }
    function getInstance($select){
        $result = $this -> db -> query($select);
        $result= $result -> fetch();
        return $result;
    }
    function exec($query) {
        $result = $this -> db -> exec($query);
        return $result;
    }
    function execP($query) {
        $statement = $this->db -> prepare($query);
        return $statement;
}
}
?>