<?php
//Clase abstracta que nos permitira conectarnos a MySQL
abstract class Model{
    //Atributos
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    protected $db_name;
    private static $db_charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();

    //Metodos
    //Metodos abstractos para CRUD de clases que hereden
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    //Metodo privado para conectarse a la base de datos
    private function db_open(){
        //http://php.net/manual/es/mysqli.construct.php
        //https://www.php.net/manual/es/mysqli.set-charset.php        
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
        $this->conn->set_charset(self::$db_charset);
    }

    //Metodo privado para desconectarse a la base de datos
    private function db_close(){
        //https://www.php.net/manual/es/mysqli.close.php
        $this->conn->close();
    }    

    //establecer un query que afecte datos (INSERT, DELETE, UPDATE)
    protected function set_query(){
        $this->db_open();
        //http://php.net/manual/es/mysqli.query.php
        $this->conn->query($this->query);
        $this->db_close();
    }

    //obtener datos de un query (SELECT)
    protected function get_query(){
        $this->db_open();
        //http://php.net/manual/es/mysqli.query.php
        $result = $this->conn->query($this->query);
        //https://www.php.net/manual/es/mysqli-result.fetch-assoc.php
        //https://www.php.net/manual/es/mysqli-result.fetch-row.php
        while($this->rows[] = $result->fetch_assoc());
        $result->close();

        $this->db_close();

        return array_pop($this->rows);
    }

}