<?php 
class UsuariosModel extends Query{
    public function __construct(){
        parent:: __construct();
    
    }
    public function getUsuario(){

        $sql="SELECT * FROM users";
        $data = $this->select($sql);
        return $data;
    }
}